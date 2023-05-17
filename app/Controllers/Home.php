<?php

namespace App\Controllers;

use App\Models\HomeModel;


class Home extends BaseController
{
    public function __construct()
    {
        $this->model = new HomeModel();
        include('simple_html_dom.php');
    }


    public function index()
    {
        $data = array();

        $post = $this->request->getPost();
        if (!empty($post)) {

            /**
             * link which need to scrape of stackoverflow
             * don't forget to add pagesize
             */
            $link = $post['link'];

            /**
             * call function
             */
            $status = $this->process($link, $post);
        }

        return view('index', $data);
    }




    /**
     * Method to execute of scrape process
     * @param link string
     * @param poatdata array
     * @return array
     */
    public function process(string $link, array $postdata)
    {
        ini_set('memory_limit', -1);
        $count = $this->get_content($link, true);
        $limit = 15;
        $pages = ceil((int) $count / $limit);
        $pages = 2; // as of now we set limit 4 pages to retrived
        $i = 1;
        $st = 0;

        /**
         * Here i am inserting the link name & count
         */
        $link_data = array(
            'link_name' => $postdata['link_name'],
            'link' => $postdata['link'],
            'total_questions' => @$count,
            'created_at' => date("Y-m-d H:i:s")
        );

        $save_link_data = $this->model->add_scrape($link_data, false);

        $scrape_data = array();

        for ($j = 1; $j < $pages; $j++) {

            $link_with_page = ($j == 1) ? $link : $link . "&page=$j";
            $html =  $this->get_content($link_with_page);

            if (!empty($html)) {
                // find all link
                foreach ($html->find('.s-post-summary.js-post-summary') as $e) {


                    /**
                     * insert scrape data
                     */
                    if (isset($save_link_data['id'])) {
                        $scrape_data = array(
                            'link_id' => $save_link_data['id'],
                            'title' => $e->find('.s-link', 0)->plaintext,
                            'votes' =>  $e->find('.s-post-summary--stats-item-number', 0),
                            'answer' => $e->find('.s-post-summary--stats-item-number', 1),
                            'accepted_ans' =>  empty($e->find('.svg-icon.iconCheckmarkSm', 0)) ? 0 : 1,
                            'views' => $e->find('.s-post-summary--stats-item-number', 2)
                        );

                        // echo '<pre>';print_r($scrape_data);exit;
                        $status =  $this->model->add_scrape($scrape_data);

                        if ($status['st'] == "success") {
                            $st++;
                        }
                    }


                    // echo  $i . ": " . $e->find('.s-link', 0)->plaintext . " | ";
                    // echo  $e->find('.s-post-summary--stats-item-unit', 0) . ": " . $e->find('.s-post-summary--stats-item-number', 0)   . " | ";
                    // echo  $e->find('.s-post-summary--stats-item-unit', 1) . ": " . $e->find('.s-post-summary--stats-item-number', 1)   . " | ";
                    // echo  "Accecpted: " . $e->find('.svg-icon.iconCheckmarkSm', 0)   . '|';
                    // echo  $e->find('.s-post-summary--stats-item-unit', 2) . ": " . $e->find('.s-post-summary--stats-item-number', 2)   . '<br>';
                    $i++;
                }

                if ($j == 5) {
                    break;
                }
            }
        }
        return $st;
    }



    /**
     * @param link string
     * @param get_count boolean 
     * @return mix
     * 
     * This is a reusable method to get html content as well as we can use to get count
     */
    public function get_content(string $link, bool $get_count = false)
    {
        $output = array();
        $html = file_get_html($link);

        if ($html !== "Invalid Request") {
            if ($get_count === true) {
                $raw = $html->find('.fs-body3', 0)->plaintext . "<br>";

                if (!empty($raw)) {
                    $count = explode("questions", $raw);
                    $count = trim($count[0]);
                    $count = str_replace(",", "", $count);
                }

                $output = (int) $count;
            } else {
                $output = $html;
            }
        }

        return $output;
    }
}

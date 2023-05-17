<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{

    /**
     * This method is used to save scrape data in database
     */
    public function add_scrape(array $post, bool $type = true)
    {
        $db = $this->db;

        if ($type === false) {

            $builder = $db->table('link_names');
            $builder->select('id, link_name');
            $builder->where(array("link_name" => $post['link_name']));
        } else {

            $builder = $db->table('link_data');
            $builder->select('id, title');
            $builder->where(array("title" => $post['title']));
        }

        $builder->limit(1);
        $builder->orderBy('id', 'DESC');
        $result = $builder->get();
        $result_data = $result->getRow();
        $msg = array();



        if (empty($result_data)) {
            $status =  $builder->insert($post);
            $id = @$db->insertID();

            if ($status) {
                $msg = array('st' => 'success', 'msg' => "Successfully saved", "id" => $id);
            } else {
                $msg = array('st' => 'failed', 'msg' => "something went wrong");
            }
        } else {
            /**
             * we can also here update query to update the latest data when user submit same url
             */
            $msg = array('st' => 'failed', 'msg' => "already exist in database", "id" => $result_data->id);
        }


        return $msg;
    }


    public function get_data()
    {
        $db = $this->db;
        /**
         * question & stats
         */
        $stat['data'] = $db->table('link_names')->select('link_name, link, total_questions')->get()->getResultArray();

        /**
         * top viewed questions
         */
        $stat['top_viewed'] = $db->table('link_data ld')->select('ld.views, ln.link_name, ld.title')->join('link_names ln', 'ln.id = ld.link_id')->orderBy('ld.views', "DESC")->limit(5)->get()->getResultArray();

        $stat['top_voted'] = $db->table('link_data ld')->select('ld.views, ln.link_name, ld.title')->join('link_names ln', 'ln.id = ld.link_id')->orderBy('ld.votes', "DESC")->limit(5)->get()->getResultArray();
      
        return $stat;
    }
}

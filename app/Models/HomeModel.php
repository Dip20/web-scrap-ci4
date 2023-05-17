<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\GeneralModel;

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
            $msg = array('st' => 'failed', 'msg' => "already exist in database", "id" => $result_data->id);
        }


        return $msg;
    }



    // private function active($page, $current_page)
    // {
    //     if ($page == $current_page) {
    //         return "page-link current";
    //     }
    // }
}

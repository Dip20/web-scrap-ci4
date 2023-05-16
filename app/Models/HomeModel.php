<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\GeneralModel;

class HomeModel extends Model
{

    /**
     * @param post array
     * @param file array
     * @return msg array
     * 
     * Details: This is a reusable method used to insert & update employee
     */
    public function insert_edit_employee($post, $files)
    {

        /**
         * Check weather user has entered employee di which is already exist db
         * 
         */
        $gmodel = new GeneralModel();
        $emp_id = $gmodel->get_array_table('employees', array('emp_id' => $post['emp_id'], 'id !=' => $post['id']));


        if (!empty($emp_id)) {
            $msg = array('st' => 'fail', 'msg' => "Employee Id Alredy Exist..!");
            return $msg;
        }


        /**
         * Image Upload process here
         */
        $imgs = array();
        foreach ($files as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $original_path = '/server/' . date('Ymd') . '/';

                if (!file_exists(getcwd() . $original_path)) {
                    mkdir(getcwd() . $original_path, 0777, true);
                }

                $newName = $file->getRandomName();
                $file->move(getcwd() . $original_path, $newName);

                $imgs[] = $original_path . $newName;
            }
        }

        $db = $this->db;
        $builder = $db->table('employees');
        $builder->select('*');
        $builder->where(array("id" => $post['id']));
        $builder->limit(1);
        $result = $builder->get();
        $result_array = $result->getRow();
        $msg = array();

        $data = array(
            'emp_id' => $post['emp_id'],
            'name' => $post['name'],
            'dob' => $post['dob'],
            'email' => $post['email'],
            'mobile_no' => $post['mobile_no'],
            'start_date' => $post['start_date'],
            'end_date' => $post['end_date'],
            'salary' => $post['salary'],
        );

        if (!empty($imgs)) {
            $data['imgs'] = json_encode($imgs);
        }

        if (!empty($result_array)) {
            /**
             * update data here
             */
            $data['updated_at'] = date('Y-m-d H:i:s');
            $data['updated_by'] = '1'; //later we can use session to access user logged id

            if (empty($msg)) {
                $builder->where(array("id" => $post['id']));
                $result = $builder->Update($data);
                if ($result) {
                    $msg = array('st' => 'success', 'msg' => "Your Details updated Successfully..!!");
                } else {
                    $msg = array('st' => 'fail', 'msg' => "Your Details Updated fail");
                }
            }
        } else {

            /**
             * Insert data here
             */

            $data['created_at'] = date('Y-m-d H:i:s');
            $data['created_by'] = '1'; //later we can use session to access user logged id

            if (empty($msg)) {
                $result = $builder->Insert($data);
                if ($result) {
                    $msg = array('st' => 'success', 'msg' => "Your Details Added Successfully..!!");
                } else {
                    $msg = array('st' => 'fail', 'msg' => "Something Went Wrong!!!");
                }
            }
        }

        return $msg;
    }



    /**
     * This method is used to save scrape data in database
     */
    public function add_scrape($post)
    {

    }




















    // private function active($page, $current_page)
    // {
    //     if ($page == $current_page) {
    //         return "page-link current";
    //     }
    // }
}

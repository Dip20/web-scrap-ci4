<?php

namespace App\Models;

use CodeIgniter\Model;

class GeneralModel extends Model
{
    /**
     * This is a reusable method is used to get data shortly
     */
    
    public function get_array_table($table = '', $where = array(), $select = '', $order_by = array())
    {

        $db = $this->db;
        $builder = $db->table($table);
        if ($select == '') {
            $select = '*';
        }
        $builder->select($select)->where($where);
        if (!empty($order_by)) {
            foreach ($order_by as $key => $value) {
                $builder->orderBy($key, $value);
            }
        }
        $query = $builder->get();
        $getdata = $query->getResultArray();

        $result = array();

        if (!empty($getdata)) {
            $result = $getdata;
        }

        return $result;
    }
}

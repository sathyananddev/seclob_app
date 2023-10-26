<?php

namespace App\Models;

use CodeIgniter\Model;

class PlanModel extends Model
{
    function add_plan($data)
    {
        $data = array(
            'name'=>$data['name'],
            'amount' => $data['name']
        );

        $this->db->insert('plan_tbl', $data);
    }
}
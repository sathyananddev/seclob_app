<?php

namespace App\Models;

use CodeIgniter\Model;

class PackageModel extends Model
{
    function add_plan($data)
    {
        $data = array(
            'name' => $data['name'],
            'amount' => $data['name']
        );

        //$this->db->insert('plan_tbl', $data);
    }

    function add($data)
    {
        return $this->db
            ->table('package_tbl')
            ->insert($data);
    }
}
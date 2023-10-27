<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['name', 'email'];
    public function getUsers($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }

    public function user($data)
    {

        //$result = $this->getWhere($data);
        $db = \Config\Database::connect();
        $builder = $db->table('user'); // 'user' is the name of your table
        $builder->select('*'); // names of your columns, single string, separated by a comma
        $builder->where('email', $data['email']); // where clause
        $query = $builder->get();
        return $query->getResult();
    }
}
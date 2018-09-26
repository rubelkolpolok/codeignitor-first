<?php
/**
 * Created by PhpStorm.
 * User: rubel.kolpolok
 * Date: 9/24/2018
 * Time: 3:35 PM
 */

class User_model extends CI_Model
{
    public function login_user($username, $password)
    {
        $this->db->where('user_name', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('users');
        if ($result->num_rows() == 1) {
            return $result->row(0)->id;
        } else {
            return false;
        }

    }
    public function get_users($user_id, $user_name)
    {
        //using where clause
        //Multiple condition using where clause
        $this->db->where([
            'id' => $user_id,
            'user_name' => $user_name
        ]);
        //$this->db->where('id', $user_id);
        $query = $this->db->get('users');
        return $query->result();
        //row query write
        //$query = $this->db->query('SELECT * FROM users');
        //$user_row_count = $query->num_rows();    //count the rows
        //$user_columns_count = $query->num_fields();  //count the total number of fields.
        //print_r($user_columns_count);

        /*$query = $this->db->get('users');
        return $query->result();*/

    }

    public function create_user($data)
    {
        $this->db->insert('users', $data);
    }

    public function update_user($data, $id)
    {
        $this->db->where(['id' => $id]);
        $this->db->update('users',$data);
    }

    public function delete_user($id)
    {
        $this->db->where(['id' => $id]);
        $this->db->delete('users');
    }

}
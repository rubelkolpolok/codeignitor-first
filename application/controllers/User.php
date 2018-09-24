<?php
/**
 * Created by PhpStorm.
 * User: rubel.kolpolok
 * Date: 9/24/2018
 * Time: 3:31 PM
 */

class User extends CI_Controller
{
    public function show($user_id)
    {
        $data['title'] = 'User list';
        $data['results'] = $this->user_model->get_users($user_id, 'peter');
        $this->load->view('user/user', $data);
    }

    public function insert()
    {
        $user_name = 'new user';
        $password = 'secrate';
        $this->user_model->create_user([
            'user_name' => $user_name,
            'password' => $password
        ]);
        echo 'data insert successfully';
    }

    public function update()
    {
        $id = 1;
        $user_name = 'peter';
        $password = 'no secrate password';

        $this->user_model->update_user([
            'user_name' => $user_name,
            'password' => $password
        ], $id);

        echo 'update successfully';
    }

    public function delete()
    {
        $id = 3;
        $this->user_model->delete_user($id);
        echo 'successfully deleted';
    }
}
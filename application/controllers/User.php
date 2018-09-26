<?php
/**
 * Created by PhpStorm.
 * User: rubel.kolpolok
 * Date: 9/24/2018
 * Time: 3:31 PM
 */

class User extends CI_Controller
{
    public function login()
    {
        $this->form_validation->set_rules('user_name', 'User name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');
        if ($this->form_validation->run() === false){
            $data = [
              'errors' => validation_errors()
            ];
            $this->session->set_flashdata($data);
            redirect('home');
        } else {
            $username = $this->input->post('user_name');
            $password = $this->input->post('password');

            $id = $this->user_model->login_user($username, $password);
            if ($id) {
                $user_data = [
                    'user_id' => $id,
                    'user_name' => $username,
                    'logged_id' =>true
                ];
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('login_success', 'You are successfully log in.');
                redirect('home');
            } else {
                $this->session->set_flashdata('login_fail', 'Sorry you are not log in');
                redirect('home');
            }
        }
    }

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
<?php

class userscontroller 
{
  public $user_model;

  public function __construct(){
    model('user');
    $this->user_model = new User();
  }
  public function index()
  {
    $users =  $this->user_model->select_data();
    view('users', compact('users'));
  }

  public function delete($id)
  {
    $data =  $this->user_model->delete_data($id);
  }
  public function edit($id)
  {
    $data =  $this->user_model->edit_data($id);
  }
}

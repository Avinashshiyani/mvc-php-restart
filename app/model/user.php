<?php

class User
{
  public function select_data(){
    $conn = connectToDatabase();
    $query = "SELECT * FROM `users`";
 
    $result = mysqli_query($conn,$query);

     $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
  
    return $users;
  }
  public function delete_data($id){
    $conn = connectToDatabase();
    $query = "DELETE FROM `users` WHERE id=$id";
    $result = mysqli_query($conn,$query);
    header("Location:?url=users/index");
    return 0;
  }
  // public function edit_data($id){
    
  //   if($_GET['url=users/edit/146'])
  //   {
  //       // require dirname(dirname(__FILE__));
  //       echo "Hello world";
  //   }
  // }
  
}
?>
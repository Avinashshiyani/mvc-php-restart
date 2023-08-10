<?php


function view($name = 'welcome', $data =null)
{
  // var_dump($data);
  extract($data);
  include_once sprintf('%s\app\views\%s.php', __DIR__, $name);
}

function model($model_name)
{

  include sprintf('%s\app\model\%s.php', __DIR__, $model_name);
  return new $model_name();
}

function connectToDatabase() {
  $host = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'mvcreset';

  $conn = mysqli_connect($host, $username, $password, $database);

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  return $conn;
}



function set_url($link)
{
  $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[SCRIPT_NAME]?url=" . $link;
  return $actual_link;
}

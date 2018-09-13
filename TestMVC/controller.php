<?php
require_once('model.class.php');

$model = new Model();

if(isset($_GET['name'])){
  $name = $_GET['name'];
  $model->saveName($name);
}

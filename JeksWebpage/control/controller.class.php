<?php
class Controller {

  private $data = array();

  // A C T I O N S
  public function home() {
    $this->data["message"] = "Hello World!";
  }

  // H E L P E R S
  public function &getData() {
    return $this->data;
  }
}

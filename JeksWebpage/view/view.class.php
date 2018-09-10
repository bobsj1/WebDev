<?php
class View {

  private $controller;

  public function __construct(Controller $controller) {
      $this->controller = $controller;
  }

  public function render($tpl) {
    $file = __DIR__ ."/templates/$tpl.php";
    if(!file_exists($file)) {
      throw new Exception("The template ’$tpl.php’ does not exist!");
    }

    foreach($this->controller->getData() as $key=>$value) {
      $$key = $value;
    }
    include $file;
  }
}

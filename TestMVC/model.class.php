<?php

class Model
{
  private $xmlFile = "data.xml";
  private $nameId = 0;

  public function saveName($name){
      if($name !== ""){
        $xml = new DOMDocument('1.0', 'utf-8');
        $xml->formatOutput=true;
        $xml->preserveWhiteSpace = false;

        if(!file_exists($this->xmlFile)){
          $xml_root = $xml->createElement('root');
          $xml->appendChild($xml_root);
          $xml_name = $xml->createElement('name', $name);
          $xml_name->setAttribute("id", $this->nameId);
          $xml_root->appendChild($xml_name);
        } else {
          $xml->load($this->xmlFile);
          $names = $xml->getElementsByTagName('name');
          foreach($names as $n){
            $this->nameId++;
          }
          $xml_name = $xml->createElement('name', $name);
          $xml_name->setAttribute("id", $this->nameId);
          $xml_root = $xml->documentElement;
          $xml_root->appendChild($xml_name);
        }
        $xml->save("$this->xmlFile");
      }
  }

  public function loadName(){
    $xml = new DOMDocument('1.0', 'utf-8');
    $xml->load($this->xmlFile);
    $id = $xml->getElementById('0');
    echo $id;
  }
}

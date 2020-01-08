<?php


namespace Source\App;


use League\Plates\Engine;
use coffecode\datalayer\datalayer;


class Web
{
    private $view;

 public function __construct()
 {
     $this->view = Engine::create(__DIR__ ."/../../theme","php");

 }
 public function home() :void
  {
     $users =(new User())->find()->fetch(true);

  }
  public function contact() :void
  {

  }
  public function error(array $data):void
  {

  }
}
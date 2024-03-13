<?php
include ("./services/Postservices.php");
class HomeController
{
  public function index()
  {
      include ("./views/layouts/header.php");
      $ps= new Postservices();
      $data = $ps ->getDepartmentLimit();
      include ("./views/layouts/section.php");

  }
}

?>
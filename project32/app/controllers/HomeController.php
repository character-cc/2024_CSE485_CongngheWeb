<?php
include ("./services/Postservices.php");
class HomeController
{
  public function index()
  {
      include ("./views/layouts/header.php");
      $ps= new Postservices();
      $department_data = $ps ->getDepartmentLimit();
      $news_data = $ps ->getNewsLimit();
      include ("./views/layouts/section.php");

  }
}

?>
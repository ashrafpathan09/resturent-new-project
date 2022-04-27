<?php

  if(isset($_GET["page"])){
	  $page=$_GET["page"];
	  $not_found=1;
	  if($page=="home"){
		  include("pages/dashboard.php");
		  $not_found=0;
	  }
	  if ($not_found==1) {
		  # code...
		  include("pages/error.php");
	  }
  }else {
	  # code...
	  include("pages/dashboard.php");
  }
?>
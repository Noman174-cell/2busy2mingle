<?php
 
ob_start();
require_once("../themes/config.php");


if(!isset($_SESSION['username_admin'])){
    redirect("../../login-admin");
}  
include(TEMPLATE_BACK. "/header.php"); 
include(TEMPLATE_BACK. "/left_bar.php");  // END Sidebar -->

include(TEMPLATE_BACK . "/right_bar.php");   //Sidebar -->
	
if($_SERVER['REQUEST_URI'] == "/admin/" || $_SERVER['REQUEST_URI'] == "/admin/index.php")  {
    include(TEMPLATE_BACK . "/admin_content.php"); 
}  			

//page extend session for all category and pages === //	
		
if(isset($_GET['admin_profile'])){
  include(TEMPLATE_BACK . "/admin_profile.php");
}	
if(isset($_GET['auth-register'])){
  include(TEMPLATE_BACK . "/auth-register.php");
}
if(isset($_GET['register-members'])){
  include(TEMPLATE_BACK . "/register-members.php");
}
if(isset($_GET['premium-price'])){
  include(TEMPLATE_BACK . "/premium-price.php");
} 
if(isset($_GET['admin-users-profile'])){
  include(TEMPLATE_BACK . "/admin-users-profile.php");
}
if(isset($_GET['all-feed-post'])){
  include(TEMPLATE_BACK . "/all-feed-post.php");
} 
if(isset($_GET['message'])){
  include(TEMPLATE_BACK . "/message.php");
}
if(isset($_GET['help-activities'])){
  include(TEMPLATE_BACK . "/help-activities.php");
}
if(isset($_GET['recent_payment'])){
  include(TEMPLATE_BACK . "/recent_payment.php");
}
if(isset($_GET['website-visitors'])){
  include(TEMPLATE_BACK . "/website-visitors.php");
}
if (isset($_GET['del_plans'])) {
	include(TEMPLATE_BACK . "/del_plans.php");
}
 
include(TEMPLATE_BACK. "/footer-admin.php");

ob_end_flush();

?>


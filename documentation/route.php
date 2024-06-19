<?php
$level = "admin";
$request = $_SERVER["REQUEST_URI"];
$link = explode("/", $request);
require "documentation/src/function/direktori.php";



// <!-- ANCHOR - Authority ================ -->
$admin = array("home", "user");
$guest = array("user");
$user = array("home");
// <!-- ========== End Authority ========== -->



// <!-- ANCHOR - Routing ================ -->
require dir_function("check_authority.php");
switch ($link[1]) {
  case "":
    header("location:home");
    break;
  case "home":
    if (check_authority("home")) {
      include dir_controller("home.php");
    }
    break;
  case "user":
    if (check_authority("user")) {
      include dir_controller("user.php");
    }
    break;
  default:
    http_response_code(404);
    require dir_views("404.php");
}
// <!-- ========== End Routing ========== -->

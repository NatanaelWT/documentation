<?php
session_start();
$request = $_SERVER['REQUEST_URI'];
$viewDir = '/views/';
$link = explode("/", $request);
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
  <title>myweb</title>
  <link href="css/base.css" rel="stylesheet">
  <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
  <link href="css/tailwind.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">
</head>

<body>
  <?php include 'route.php'; ?>
  <script src="js/jQuery.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
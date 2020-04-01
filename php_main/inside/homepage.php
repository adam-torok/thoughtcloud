<?php
require_once("../../configuration/config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mplace</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/output.css">
  </head>
  <body>
    <?php include_once("../../php_components/inside/header_inside.php");?>
    <?php include_once("../../php_components/inside/side_nav.php");?>
    <div class="flex justify-center flex-col items-center">
      <?php include_once("../../php_components/inside/post_writer_inside.php");?>
      <div class="w-2/3  md:px-12 lg:24 h-full m-10 antialiasedl">
      <?php include_once("../../php_components/inside/post_wall_inside.php");?>
      </div>
      <?php var_dump($_SESSION); ?>
    </div>
  </body>
</html>

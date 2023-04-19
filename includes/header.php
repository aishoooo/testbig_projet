<?php include_once "config/config.php";
    include_once "db/Database.php";
    include_once "classes/format.php"; ?>

    <?php
$db = new Database();
$format = new Format();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!--===== Meta Tag =====-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Runaway - Personal Portfolio HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
    content="business, agency, blog, cv, creative, html, one page,
    personal, portfolio, resume, responsive, bootstrap, photography, designer, developer">
    <meta name="author" content="root">

    <!--	Css Links
   ==================================================-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css" id="color-change">


</head>

<body id="top" class="page-load">
    <!--	Start Back to top
=================================================-->
    <a href="#" id="scroll" style="display: none;"><span></span></a>
    <!--    End Back to top
==================================================-->


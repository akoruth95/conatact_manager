<?php

   include 'database.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Manager</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!-- bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/GridLoadingEffects/css/component.css">
    <link rel="stylesheet" href="/GridLoadingEffects/css/default.css">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Contact Manager</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/index.php" id="contactsNav"><span class="glyphicon glyphicon-user"></span> Contacts</a></li>
          <li><a href="/new.php" id="addNav"><span class="glyphicon glyphicon-plus"></span> Add Contact</a></li>
          <li><a href="/style.php" id="addNav"><span class="glyphicon glyphicon-tag"></span> Style</a></li>
        </ul>
      </div>
     </div>
    </nav>
    <div class="container">



      <div class="row">
        <div class="col-md-8 col-md-offset-2">

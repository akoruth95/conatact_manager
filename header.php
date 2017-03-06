<?php

   include 'database.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Manager</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <div class="container">

      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Contact Manager</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/index.php"><span class="glyphicon glyphicon-user"></span> Contacts</a></li>
            <li><a href="/new.php"><span class="glyphicon glyphicon-plus"></span> Add Contact</a></li>
          </ul>
        </div>
       </div>
      </nav>

      <div class="row">
        <div class="col-md-8 col-md-offset-2">

<?php
include 'database.php';
$query = $db->prepare('UPDATE contacts SET fname = :fname, lname = :lname, title = :title, address = :address,
  city = :city, state = :state, zip = :zip, phone = :phone, notes = :notes WHERE id = :id');
//$stmt->bindParam
$query->execute(array(
  ':id' => $_POST['id'],
  ':fname' => $_POST['fname'],
  ':lname' => $_POST['lname'],
  ':title' => $_POST['title'],
  ':address' => $_POST['address'],
  ':city' => $_POST['city'],
  ':state' => $_POST['state'],
  ':zip' => $_POST['zip'],
  ':phone' => $_POST['phone'],
  ':notes' => $_POST['notes'],
  ':id' => $_POST['id']
));

header('Location: http://localhost:8080/edit.php?updated=true&id=' . $_POST['id']);

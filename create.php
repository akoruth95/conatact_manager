<?php

  include 'database.php';

  $query = $db->prepare("INSERT INTO contacts
    (fname, lname, title, address, city, state, zip, phone, notes)
    VALUES
    (:fname, :lname, :title, :address, :city, :state, :zip, :phone, :notes)
    ");


    $query->execute(array(
      ':fname' => $_POST['fname'],
      ':lname' => $_POST['lname'],
      ':title' => $_POST['title'],
      ':address' => $_POST['address'],
      ':city' => $_POST['city'],
      ':state' => $_POST['state'],
      ':zip' => $_POST['zip'],
      ':phone' => $_POST['phone'],
      ':notes' => $_POST['notes']
    ));

    $id = $db->lastInsertId();

    header('Location: http://localhost:8080/edit.php?id=' . $id . '&created=true');
?>

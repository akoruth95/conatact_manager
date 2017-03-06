<?php
  include 'database.php';

  $query = $db->prepare('DELETE from contacts WHERE id = :id');
  $query->execute(array(
    ':id' => $_GET['id']
  ));
  header('Location: http://localhost:8080/index.php?deleted=true');
?>

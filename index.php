<?php

   include 'header.php';
   $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);

?>

<?php if (array_key_exists('deleted', $_GET)) : ?>
<div class="alert alert-danger">
  <p><strong>Task Deleted!</strong> The task was removed.</p>
</div>
<?php endif; ?>

<?php foreach($contacts as $contact) : ?>
  <a href="/edit.php?id=<?= $contact['id']; ?>">
  <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><span class="badge"><?= $contact['id']; ?></span><?= $contact['fname'] . ' ' . $contact['lname']; ?></h3>
      </div>
    <div class="panel-body">
      <?= $contact['city'] . ', ' . $contact['state']; ?>
    </div>
  </div>
  </a>
<?php endforeach; ?>

<?php include 'footer.php'; ?>

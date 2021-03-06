<?php

   include 'header.php';
   $id = $_GET['id'];

   $query = $db->prepare('SELECT * from contacts WHERE id = :id LIMIT 1');
   $query->bindParam(':id', $id);
   $query->execute();

   $contact = $query->fetch(PDO::FETCH_ASSOC);

?>

<?php if (array_key_exists('updated', $_GET)) : ?> <!-- triggered when contact is updated and saved -->
<div class="alert alert-success">
  <p><strong>Update successful!</strong> Your Contact was updated.</p>
</div>
<?php endif; ?>

<?php if (array_key_exists('created', $_GET)) : ?>
<div class="alert alert-info">
  <p><strong>Contact created!</strong> Your Contact was successfully created.</p> <!-- triggered when contact has been created and saved -->
</div>
<?php endif; ?>


<h1> Edit Contact</h1>
<form method="POST" action="/update.php"> <!-- form fields to update contact info -->
  <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />

  <span>
  <div class="form-group">
    <label for="contact_fname">First Name</label>
    <input class="form-control" type="text" name="fname" id="contact_fname" value="<?= $contact['fname']; ?>" />
  </div>
  <div class="form-group">
    <label for="contact_lname">Last Name</label>
    <input class="form-control" type="text" name="lname" id="contact_lname" value="<?= $contact['lname']; ?>" />
  </div>
  </span>

  <div class="form-group">
    <label for="contact_title">Title</label>
    <input class="form-control" type="text" name="title" id="contact_title" value="<?= $contact['title']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_address">Address</label>
    <input class="form-control" type="text" name="address" id="contact_address" value="<?= $contact['address']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_city">City</label>
    <input class="form-control" type="text" name="city" id="contact_city" value="<?= $contact['city']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_state">State</label>
    <input class="form-control" type="text" name="state" id="contact_state" value="<?= $contact['state']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_zip">Zip Code</label>
    <input class="form-control" type="text" name="zip" id="contact_zip" value="<?= $contact['zip']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_phone">Phone Number</label>
    <input class="form-control" type="text" name="phone" id="contact_phone" value="<?= $contact['phone']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_description">Notes</label>
    <textarea class="form-control" name="notes" id="contact_notes"><?= $contact['notes']; ?></textarea>
  </div>

  <button class="btn btn-primary" type="submit">Save contact</button>
  <button class="btn btn-primary" type="reset">Reset contact</button>
  <a href="/delete.php?id=<?= $contact['id']; ?>" class="btn btn-danger btn-delete">Delete Contact</a>
</form>

<?php include 'footer.php'; ?>

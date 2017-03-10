<?php

   include 'header.php';

?>

<h1> New Contact</h1>
<form method="POST" action="/create.php"> <!-- form fields to create new contact with info -->

  <span>
  <div class="form-group">
    <label for="contact_fname">First Name</label>
    <input class="form-control" type="text" name="fname" id="contact_fname" placeholder="First Name" />
  </div>
  <div class="form-group">
    <label for="contact_lname">Last Name</label>
    <input class="form-control" type="text" name="lname" id="contact_lname" placeholder="Last Name" />
  </div>
  </span>

  <div class="form-group">
    <label for="contact_title">Title</label>
    <input class="form-control" type="text" name="title" id="contact_title" placeholder="Title" />
  </div>

  <div class="form-group">
    <label for="contact_address">Address</label>
    <input class="form-control" type="text" name="address" id="contact_address" placeholder="Address" />
  </div>

  <div class="form-group">
    <label for="contact_city">City</label>
    <input class="form-control" type="text" name="city" id="contact_city" placeholder="City" />
  </div>

  <div class="form-group">
    <label for="contact_state">State</label>
    <input class="form-control" type="text" name="state" id="contact_state" placeholder="State" />
  </div>

  <div class="form-group">
    <label for="contact_zip">Zip Code</label>
    <input class="form-control" type="text" name="zip" id="contact_zip" placeholder="Zip Code" />
  </div>

  <div class="form-group">
    <label for="contact_phone">Phone Number</label>
    <input class="form-control" type="text" name="phone" id="contact_phone" placeholder="Phone Number" />
  </div>

  <div class="form-group">
    <label for="contact_description">Notes</label>
    <textarea class="form-control" name="notes" id="contact_notes" placeholder="Contact Description"></textarea>
  </div>

  <button class="btn btn-primary" type="submit">Create contact</button>
</form>

<?php include 'footer.php'; ?>

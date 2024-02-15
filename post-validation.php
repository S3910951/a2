<?php
include('tools.php');
function validateBooking() {
  $errors = [];
  if ($_POST['customer']['name'] == '') {
    $errors['customer']['name'] == "Name can't be blank";
  } else {
  }
  if ($_POST['customer']['email'] == '') {
    $errors['customer']['email'] == "Email can't be blank";
  } else {
  }
}
?>
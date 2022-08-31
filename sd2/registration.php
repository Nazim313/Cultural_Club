<?php
require_once("header.php");

?>

<main class="wrapper">
  <h1>Register</h1>
  <p>Please fill in this form to create an account.</p>
  <hr>
<form action="register.php" method="POST">
  <div class="container" id="registration_form_container">


    <div class="left">
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>

      <label for="username"><b>Username<i class="fa fa-check validname" id="checkuser"></i></b></label>
      <input type="text" placeholder="Enter Username" name="username" id="username" required>

      <label for="studentid"><b>Student ID</b></label>
      <input type="text" placeholder="Enter Student ID" name="student_id" id="number" required>

      <label for="phone"><b>Phone</b></label>
      <input type="text" placeholder="+880...." name="phone" id="phone" required>

      <label for="department"><b>Department</b></label>
      <input type="text" placeholder="Department Name" name="department" id="department" required>


    </div>
    <div class="right">
      <label for="photo"><b>Attach Your Photo</b></label> <br>
      <br><input type="file" name="photo" id="photo" required>

      <br><br><label for="psw"><b>Password</b></label>
      <br><input type="password" placeholder="Enter Password" name="password" id="psw" required>

      <br><br><label for="psw-repeat"><b>Repeat Password</b></label>
      <br><input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
      <hr>

      <br><br><h2 class="interested_field_title">Interested Field <span class="interested_field_hint">(You can choose multiples)</span></h2>
      <br><div class="interest_field_choice">
        <input type="checkbox" id="music" name="music" value="music">
        <label for="music"> Music</label>
        <input type="checkbox" id="acting" name="acting" value="acting">
        <label for="acting">Acting</label>
        <input type="checkbox" id="anchoring" name="anchoring" value="anchoring">
        <label for="anchoring">Anchoring</label>
        <input type="checkbox" id="dance" name="dance" value="dance">
        <label for="dance">Dance</label>
        <input type="checkbox" id="recitation" name="recitation" value="recitation">
        <label for="recitation">Recitation</label>
      </div><br>

      
      <button type="submit" class="registerbtn" >Register</button>
    </div>
  </div>
</main>

</form>
<?php
require_once("footer.php");
?>
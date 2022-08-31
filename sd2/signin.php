<?php
require_once("header.php");
?>


<div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <input type="checkbox" id="remember" checked="checked" name="remember">
    <label for="remember">
       Remember me
    </label>

    <button class="btn btn_login" type="submit">Login</button>

  </div>

  <div class="container">
    <button type="button" class="cancelbtn btn">Cancel</button>
    <span class="psw"> <a href="#">Forgot password?</a></span>
  </div>
</form>

<?php
require_once("footer.php");
?>
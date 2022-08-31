<?php
require_once('db.php');
require_once("header.php");
?>
<div class="login-page">
  <div class="form">
    <form class="register-form" action="admin.php" method="post">
      <input type="text" placeholder="name" name="username" />
      <input type="password" placeholder="password" name="password" />
      <input type="text" placeholder="email address" name="email" />
      <input type="hidden" name="type" value="create">
      <button type="submit">Create</button>
    </form>
    <form class="login-form" method="post">
      <input type="text" placeholder="name" name="username" />
      <input type="password" placeholder="password" name="password" />
      <input type="hidden" name="type" value="login">
      <button type="submit">Login</button>
    </form>
  </div>
</div>
<?php
require_once("footer.php");
if(isset($_POST['type'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  if($_POST['type'] == 'create'){
    $email = $_POST['email'];
    $sql = "INSERT INTO admin (id,password,username) VALUES('{$username}', '{$password}', '{$email}')";
    $result = mysqli_query($conn, $sql);
    print_r($result);
  }else{
    $sql = "SELECT * FROM admin WHERE username='{$username}'";
    $result = mysqli_query($conn, $sql);
    while($row = $result->fetch_assoc()) {
      if($row['password'] == $password){
          $_SESSION['user'] = $username;
          redirect('index.php');
      }else{
        echo '<p style="color:red; text-align:center;">Your username or password is incorrect!</p>';
      }
    }
    print_r($result);
  }
}
?>
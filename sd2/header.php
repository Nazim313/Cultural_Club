<?php
session_start();
function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}
?>
<html>
    <head>
        <title>Cultural Club</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    </head>
<body>
    <header>
        <nav class="menu_bar">
            <ul>
                <li class="visited" id="home"><a href="/sd2"><i class="fa fa-home"></i></i><?php echo "Home"?></a></li>
                <li id="signup"><a href="registration.php"><i class="fa fa-sign-in"></i>SignUP/IN</a></li>
                <li id="showroom"><a href="showroom.php"><i class="fa fa-shopping-cart"></i>Shop</a></li>
                <li id="about"><a href="about.php"><i class="fa fa-user-circle-o"></i> About Us</a></li>
                <li id="contact"><a href="contact.php"><i class="fa fa-phone-square"></i>Contact</a></li>
                <li id="gallery"><a href="gallery.php"><i class="fa fa-picture-o"></i>Gallery</a>
                <div class="sub-menu-1">
                    <ul>
                        <li><a href="#">Photo</a></li>
                        <li><a href="#">Video</a></li>
                    </ul>
                </div>
                </li>
                <?php if(isset($_SESSION['user'])){
                    echo '<li id="admin"><a href="logout.php"><i class="fa fa-lock"></i>Logout</a></li>';
                }else{
                    echo '<li id="admin"><a href="admin.php"><i class="fa fa-lock"></i>Admin</a></li>';
                }
                ?>
                
            </ul>
        </nav>
    </header>
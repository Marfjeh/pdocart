<?php
include 'header.php';
include 'database.php';

  session_start();

  if(isset($_GET['pid']))
  {
    if(!isser($_SESSION['cart_content']))
    {
      $_SESSION['cart_content'] = $_GET['pid'];
    }
    else
    {
      $_SESSION['cart_content'] .= ',';
      $_SESSION['cart_content'] .= $_GET['pid'];
    }
  }


 ?>
<?php include 'footer.php'; ?>

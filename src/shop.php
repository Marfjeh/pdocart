<?php include 'header.php';
include ('database.php');
?>
<div class="container">
  <div class="row">
    <?php
    $query = "SELECT * FROM cart_producten";
    $query_result = $conn->query($query);
    $results_array = $query_result->fetchAll(PDO::FETCH_ASSOC);
     ?>
  </div></div>
<?php include 'footer.php'; ?>

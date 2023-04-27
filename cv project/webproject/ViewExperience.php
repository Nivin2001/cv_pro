<?php
include_once 'connect.php'; 
$result = mysqli_query($connect, "SELECT * FROM experiences ORDER BY id ASC");
?>
<head>
<?php include "head.php";?>
<title> View Experience </title>
</head>

<!DOCTYPE html>
<html>



<body>
  <?php
  $activePage = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
  ?>

<header>
<?php include "header.php";?>
  </header>


  <div class="container-body">
    <div class="body">
      <div class="title">
        <p>All Experiences Information</p>
      </div>
      <?php
      while ($experience = mysqli_fetch_array($result)) {
      ?>
        <div class="row">
          <h3><?php echo $experience['category'] ?> <sub><?php echo $experience['institution'] ?></sub></h3>
          <h5>from <?php echo $experience['startDate'] . ' to ' . $experience['startDate']; ?> </h5>
          <p><?php echo $experience['description'] ?></p>
        </div>
      <?php } ?>
    </div>
  </div>
</body>

</html>
<?php
 include_once 'connect.php'; 
 $result = mysqli_query($connect, "SELECT * FROM users ORDER BY id ASC");
?>


<head>
<?php include "head.php";?>
<title> Personal Informatio </title>
</head> 


<!DOCTYPE html>
<html>
<body>
<?php  
  $activePage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
?>

<header>
<?php include "header.php";?>
  </header>


  <div class="title">
    <p>Personal Information</p>
  </div>

  <?php
    while($user = mysqli_fetch_array($result)) {
  ?>
  <div class="container-body">
    <div class="left">
      <div class="detail">
        <p class="col-25">Full Name:</p>
        <p class="col-75"><?php echo $user['name']; ?></p>
      </div>

      <div class="detail">
        <p class="col-25">Gender:</p>
        <p class="col-75"><?php echo $user['gender'] == 0 ? 'Male' : 'Female'; ?></p>
      </div>

      <div class="detail">
        <p class="col-25">Birth Date:</p>
        <p class="col-75"><?php echo $user['bod']; ?></p>
      </div>

      <div class="detail">
        <p class="col-25">Nationality:</p>
        <p class="col-75"><?php echo $user['nationality']; ?></p>
      </div>

      <div class="detail">
        <p class="col-25">Place of Birth:</p>
        <p class="col-75"><?php echo $user['pob']; ?></p>
      </div>

      <div class="detail">
        <p class="col-25">Job title:</p>
        <p class="col-75"><?php echo $user['jobTitle']; ?></p>
      </div>

      <div class="detail">
        <p class="col-25">Year of Experience:</p>
        <p class="col-75"><?php echo $user['yearOfExperience']; ?> years</p>
      </div>

    </div>

    <img class="img-profile" src="./img/<?php echo $user['profile']; ?>" alt="my picture">
  </div>
  <?php } ?>
</body>

</html>
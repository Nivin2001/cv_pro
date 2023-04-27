<?php

require_once 'connect.php'; 
error_reporting(0);

$category = $title = $startDate = $endDate = $institution = $description = "";
$errors = array();

if(isset($_POST['submit'])) {


  if(empty(trim($_POST["category"]))) {
    $errors['category'] = "Your category is wanted";
  } else {
    $category = trim($_POST["category"]);
  }

 
  if(empty(trim($_POST["title"]))) {
    $errors['title'] = "Your title is wanted";
  } else {
    $title = trim($_POST["title"]);
  }

  if(empty(trim($_POST["startDate"]))) {
    $errors['startDate'] = "Your Start Date is wanted";
  } else {
    $startDate = trim($_POST["startDate"]);
  }


  if(empty(trim($_POST["endDate"]))) {
    $errors['endDate'] = "Your End Date is wanted";
  } else {
    if(trim($_POST["startDate"]) > trim($_POST["endDate"])) {
      $errors['endDate'] = trim($_POST["startDate"])." is latest than ".trim($_POST["endDate"]);
    } else {
      $endDate = trim($_POST["endDate"]);
    }
  }


  if(empty(trim($_POST["institution"]))) {
    $errors['institution'] = "Your institution is wanted";
  } else {
    $institution = trim($_POST["institution"]);
  }

  // because description accept empty value
  $description = trim($_POST["description"]);

  if(count($errors) == 0) {
    $insertData = "INSERT INTO experiences(category,title,startDate,endDate,institution,description) VALUES('$category','$title','$startDate','$endDate','$institution','$description')";
    $result = mysqli_query($connect, $insertData);
  }
}
?>

<!DOCTYPE html>
<html>

 
<head>
<?php include "head.php";?>
  <title>Add Experience Page</title>
  <style>
    span {
      color: red;
      font-size: 14px;
    }
  </style>

</head>


<body>
<?php  
  $activePage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
?>

<header>
<?php include "header.php";?>
  </header>


  <div class="form-exeprience">
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div>
        <label for="experience-category">Experiences Category:</label>
        <select id="experience-category" name="category">
          <option selected disabled>Select your category</option>
          <option value="Web Development">Web Development</option>
          <option value="Android Development">Android Development</option>
          <option value="IOS Development">IOS Development</option>
          <option value="Designer">Designer</option>
        </select><br>
        <span><?php echo $errors['category']; ?></span>
      </div>

      <div class="form-experience-item  ">
        <label for="experience-title">Experiences Title:</label>
        <input id="experience-title" type="text" name="title"><br>
        <span><?php echo $errors['title']; ?></span>
      </div>
      <div class="form-experience-item  ">
        <label for="start-date-experience">Start Date:</label>
        <input id="start-date-experience" type="date" name="startDate"><br>
        <span><?php echo $errors['startDate']; ?></span>
      </div>

      <div class="form-experience-item  ">
        <label for="end-date-experience">End Date:</label>
        <input id="end-date-experience" type="date" name="endDate"><br>
        <span><?php echo $errors['endDate']; ?></span>
      </div>

      <div class="form-experience-item  ">
        <label for="institution-experience">Institution:</label>
        <input id="institution-experience" type="text" name="institution"><br>
        <span><?php echo $errors['institution']; ?></span>
      </div>

      <div class="form-experience-item  ">
        <label class="description-experience" for="description-experience">Description:</label>
        <textarea class="textarea-experience" id="description-experience" name="description" cols="60" rows="7"></textarea><br>
      </div>

      <div class="form-experience-item-last">
        <input class="btn-save-experience" type="submit" value="Save" name="submit">
        <input class="btn-reset-experience" type="reset" value="Reset" name="reset">
      </div>
    </form>
  </div>
  <img class="experience-img" src="img/experience.jpg" width="400" height="556">
</body>

</html>
<?php
include_once 'connect.php'; 
$id = $_GET['id'];
$result = mysqli_query($connect, "SELECT * FROM courses WHERE id = $id");

?>

<head>
<?php include "head.php";?>
<title> View courses </title>
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


	<div class="certificate">
		<?php $j = 0;
		while ($course = mysqli_fetch_array($result)) {
			$image = empty($course['file']) ? $course['url'] : $course['file'];
		?>
			<div id="certification-title">
				<p>Course <q><?php echo $course['name']; ?></q></p>
			</div>

			<div id="certification-detail">
				<p>From <?php echo $course['startDate']; ?> to <?php echo $course['endDate']; ?>,totally <?php echo $course['numberOfHours']; ?> training hours</p><br>
				<p>Institution was <q><?php echo $course['institution']; ?></q></p>
			</div>

			<figure>
				<img class="certification-img" src="img/courses/<?php echo $image; ?>" title="<?php echo $image; ?>" alt="<?php echo $image; ?>">
				<figcaption class="figcaption-certification">Certificate File
					<p><a href="./Course_View.php">Go Back</a></p>
				</figcaption>
			</figure>
		<?php } ?>
	</div>
</body>

</html>
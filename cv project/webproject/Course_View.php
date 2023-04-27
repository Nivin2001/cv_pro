<?php
include_once 'connect.php'; 
$result = mysqli_query($connect, "SELECT * FROM courses ORDER BY id desc");
?>

<head>
<?php include "head.php";?>
<title> course view </title>
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


    <div class="body">
        <div class="title" style="margin-left: 26px;">
            <p>All Courses Information</p>
        </div>


        <table class="table-course-information" border="1" cellspacing="0" cellpadding="5" width=100%>

            <tr class="tr" bgcolor="gray">
                <th class="th" rowspan="2">#</th>
                <th class="th" rowspan="2">Course name</th>
                <th class="th" rowspan="2">Total hours</th>
                <th class="th" colspan="2">Date</th>
                <th class="th" rowspan="2">Institution</th>
                <th class="th" rowspan="2">Attachment</th>
                <th class="th" rowspan="2">Notes</th>
            </tr>

            <tr bgcolor="gray">
                <th>From</th>
                <th>To</th>
            </tr>

            <?php
                $j = 0;
                while($courses = mysqli_fetch_array($result)) {
                    $j++;
            ?>

               <tr class="td" bgcolor="#E1DEDD">
                <th><?php echo $j; ?></th>
                <td><?php echo $courses['name']; ?></td>
                <td><?php echo $courses['numberOfHours']; ?></td>
                <td style="white-space:nowrap;"><?php echo $courses['startDate']; ?></td>
                <td style="white-space:nowrap;"><?php echo $courses['endDate']; ?></td>
                <td><?php echo $courses['institution']; ?></td>
                <td><a href="./ViewCourses.php?id=<?php echo $courses['id']; ?>">View</a></td>
                <td><?php echo $courses['notes']; ?></td>
            </tr>
            <?php } ?>
        </table>
        
    </div>
</body>

</html>
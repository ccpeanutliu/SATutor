<?php

session_start();
include("connect.php");
$uid = $_SESSION['username'];
$sql = "SELECT SID FROM student_table WHERE UID='$uid'";
$result = $mysqli->query($sql);
$row = $result->fetch_row();

$_SESSION['studentname'] = $row[0];
$sid = $row[0];

$table1_text = "";
$table2_text = "";
$table3_text = "";

if ($_GET['query']) {
  $sql = "SELECT * FROM T_case_table WHERE Subject = '".$_GET['query']."'";
}
else {
  $sql = "SELECT * FROM T_case_table";
}
$result = $mysqli->query($sql);
if ($result = $mysqli -> query($sql)) {
  $count = 0;
  while ($row = $result -> fetch_row()) {
    $count += 1;
    $tmptid = $row[1];
    $tmpsql = "SELECT UID FROM teacher_table WHERE TID='$tmptid'";
    $tmpres = $mysqli -> query($tmpsql);
    $tmptuid = $tmpres -> fetch_row();
    $table3_text .= "<tr>";
    $table3_text .= "<td>$tmptuid[0]</td>"; // TID, region, subject, time
    $table3_text .= "<td>$row[2]</td>";
    $table3_text .= "<td>$row[3]</td>";
    $table3_text .= "<td>$row[4]</td>";
    // $table3_text .= "<td><form action='Scheck.php' method='post'><input style='color:white' type='submit' name='chk' value=$row[1]></form></td>";
    $table3_text .= "<td><input class='checkbox chk' type='checkbox' name='chk' value=$row[1]><form action='Scheck.php' method='post'><input class='d-none' type='text' name='chk' value=$row[1]></form></td>";
    // $table3_text .= "<td><form action='Saccept.php' method='post'><input style='color:white' type='submit' name='acp' value=$row[0]></form></td>";
    $table3_text .= "<td><input class='checkbox acp' type='checkbox' name='acp' value=$row[0]><form action='Saccept.php' method='post'><input class='d-none' type='text' name='acp' value=$row[0]></form></td>";
    $table3_text .= "</tr>";
  }
  $result -> free_result();
}

$sql = "SELECT * FROM case_table WHERE SID='$sid'"; // SID, TID, Time, Region, Subject
if ($result = $mysqli -> query($sql)) {
  $count = 0;
  while ($row = $result -> fetch_row()) {
    $count += 1;
    $tmptid = $row[1];
    $tmpsql = "SELECT UID FROM teacher_table WHERE TID='$tmptid'";
    $tmpres = $mysqli -> query($tmpsql);
    $tmptuid = $tmpres -> fetch_row();
    $table1_text .= "<tr>";
    $table1_text .= "<td>$tmptuid[0]</td>";
    $table1_text .= "<td>$row[2]</td>";
    $table1_text .= "<td>$row[3]</td>";
    $table1_text .= "<td>$row[4]</td>";
    $table1_text .= "</tr>";
  }
  $result -> free_result();
}

$sql = "SELECT * FROM click_table WHERE SID='$sid'"; // SID, TID, Date, Period
if ($result = $mysqli -> query($sql)){
  $count = 0;
  while ($row = $result -> fetch_row()) {
    $count += 1;
    $tmptid = $row[1];
    $tmpsql = "SELECT UID FROM teacher_table WHERE TID='$tmptid'";
    $tmpres = $mysqli -> query($tmpsql);
    $tmptuid = $tmpres -> fetch_row();
    $table2_text .= "<tr>";
    $table2_text .= "<td>$tmptuid[0]</td>";
    $table2_text .= "<td>$row[2]</td>";
    $table2_text .= "<td>$row[3]</td>";
    $table2_text .= "</tr>";
  }
  $result -> free_result();
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>DataBaseSfind</title>
  </head>
  <body id = "top" background="giraffe.jpg">
      	
  <div class="img-thumbnail">
      <div class="text-center">
        <h1>
          DBTutor<h5><kbd>team 8</kbd></h5>
        </h1>
      </div>
    </div>





    


	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>



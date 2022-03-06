<?php
session_start();
require '../includes/common.php';
$course = mysqli_real_escape_string($con, $_POST['course']);
$year = mysqli_real_escape_string($con, $_POST['year']);
$state = mysqli_real_escape_string($con, $_POST['state']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$tenth_school = mysqli_real_escape_string($con, $_POST['tenth_school']);
$tenth_result = mysqli_real_escape_string($con, $_POST['tenth_result']);
$twelfth_school = mysqli_real_escape_string($con, $_POST['twelfth_school']);
$twelfth_result = mysqli_real_escape_string($con, $_POST['twelfth_result']);
$insert = "INSERT INTO `details` (`id`, `reg_em`, `course`, `year`, `state`, `city`, `tenth_school`, `tenth_result`, `twelfth_school`, `twelfth_result`) VALUES (NULL, '{$_SESSION["email"]}','$course', '$year', '$state', '$city', '$tenth_school', '$tenth_result', '$twelfth_school', '$twelfth_result')";
$inser_res = mysqli_query($con, $insert) or die(mysqli_error($con));
echo ("<script>location.href='home.php'</script>");
?>

<?php  include('inc/header.php'); ?>
<?php
if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
    header('location: index.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$findId = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
if (!$findId){
    header('location: index.php');
}
$sql = "DELETE FROM users WHERE id='$id'";
$result = mysqli_query($conn,$sql);
?>
    <h1 class="text-center col-12 bg-danger py-3 text-white my-2">Delete User</h1>
  
   <?php header('refresh:3;url= index.php'); ?> 
<?php  include('inc/footer.php'); ?>

 
  
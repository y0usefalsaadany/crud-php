<?php  include('inc/header.php'); ?>

<?php

if (isset($_POST['submit'])){
    $name = sanitizeString($_POST['name']);
    $email = sanitizeEmail($_POST['email']);
    $id = $_POST['id'];
    if(!empty($name)&& !empty($email)){
        trim($name,$email);
        $sql = "UPDATE users SET name='$name', email='$email WHERE id='$id' ";
        $result = mysqli_query($conn,$sql);
        $success = "Successfully updated";
        header('refresh:3;url= index.php');
    }else{
        $error = "Make sure the data is correct";
        }
}


?>



<h1 class="text-center col-12 bg-info py-3 text-white my-2">Update Info About User</h1>
  
  <?php if($error): ?>
      <h5 class="alert alert-danger text-center"><?php echo $error; ?></h5>
      <a href="javascript:history.go(-1)" class="btn btn-primary"><< Go Back</a>
  <?php endif;  ?>

  <?php if($success): ?>
      <h5 class="alert alert-success text-center"><?php echo $success; ?></h5>
  <?php endif;  ?>

<?php  include('inc/footer.php'); ?>
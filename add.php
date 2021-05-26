<?php  include('inc/header.php'); ?>

<?php
if (isset($_POST['submit'])){
    $name = sanitizeString($_POST['name']);
    $email = sanitizeEmail($_POST['email']);
    required($name) && required($email) && required($password);
        $hashPassword = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name,email) VALUES ('$name','$email')";
        $result = mysqli_query($conn,$sql);
        
        if ($result){
            $success = "Successfully added";
        }else{
        $error = "Make sure the data is correct";
    }
}
?>
    <h1 class="text-center col-12 bg-info py-3 text-white my-2">Add New User</h1>
    <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <?php if($error): ?>
            <h5 class="alert alert-danger text-center"><?php echo $error; ?></h5>
        <?php endif; ?>

        <?php if($success): ?>
            <h5 class="alert alert-success text-center"><?php echo $success; ?></h5>
        <?php endif; ?>
            <div class="form-group">
                <label for="exampleInputName1">Full Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName1" >
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
         
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
   
<?php  include('inc/footer.php'); ?>

 
  
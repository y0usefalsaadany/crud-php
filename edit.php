<?php  include('inc/header.php'); 

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
?>

    <h1 class="text-center col-12 bg-primary py-3 text-white my-2">Edit Info About User</h1>
    <div class="col-md-6 offset-md-3">
        <form action="update.php" method="POST" class="my-2 p-3 border">
            <div class="form-group">
                <label for="exampleInputName1">Full Name</label>
                <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" id="exampleInputName1" >
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Email address</label>
                <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <input type="hidden" name="id" value="<?php echo $id; ?>">            
            </div>
         
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
   
<?php  include('inc/footer.php'); ?>

 
  
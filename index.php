<?php include('./partials/header.php'); 

if (isset($_POST['submit'])) {
  
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $hobbies = implode(", ", $_POST['hobbies']);    
  
  if (empty($fname) && empty($lname) && empty($gender) && empty($email) && empty($phone) && empty($address) && empty($hobbies) && empty($attendance)) {
    $_SESSION['msg'] =  "Please fill out all fields.";
    
  } else {
    $query = "INSERT INTO `persons`(`fname`, `lname`, `gender`, `email`, `phone`, `address`, `hobbies`) VALUES ('$fname','$lname','$gender','$email','$phone','$address','$hobbies')";
    $result = mysqli_query($conn, $query);

    if ($result) {
      header("Location:view.php");
      $_SESSION['msg'] = 'Record created successfully.';
    } else {
      $_SESSION['msg'] = 'Failed to create a record.' . mysqli_error($conn);
    }
  }
}
?>

<div class="container:fluid">
<h2 class="text:center text:uppercase pt:50">Create New Record</h2>
<div class="form_wrapper">
  <form action="index.php" method="POST" class="form ww:60 mx:auto" autocomplete="off">
    <div class="py:30">
      <a href="view.php" class="viewBtn text-decoration:none weight:bold text:uppercase text:white bg:blue-600 py:5 px:10 size:14">View All Records</a>
    </div>  
    <div class="mb-3">
      <label for="fname" class="form-label">Firstname</label>
      <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter firstname..." required><br>
      <label for="lname" class="form-label">Lastname</label>
      <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter lastname..." required>
    </div>
    <div class="mb-3">
      <label for="gender" class="mr:15">Select Gender:</label>
      <input type="radio" id="male" name="gender" value="Male" checked>
      <label for="male" class="mr:10">Male</label>
      <input type="radio" id="female" name="gender" value="Female">
      <label for="female">Female</label><br>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email..." required>
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Phone</label>
      <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter phone...">
    </div>
    <div class="mb-3">
      <label for="gender" class="mb-2">Address</label>
      <textarea name="address" id="address" cols="30" rows="6" placeholder="Enter address..." class="form-control outline:none"></textarea>
    </div>
    <div class="mb-3">
    <label for="gender" class="mb-2 mr:15">Select Hobbies:</label>
        <?php
          $hobbies = array("Drawing","Dancing","Reading","Watching TV","Swimming","Cooking");
          foreach($hobbies as $hobby){
        ?>
          <input type="checkbox" name="hobbies[]" id="hobbies1" value="<?php echo $hobby ?>" class="mr:5">
          <label for="hobbies1" class="mr:10 text:uppercase"><?php echo $hobby ?></label>
        <?php        
          }
        ?>
    </div> 
    <div class="mb-3">
      <input type="submit" value="Save" name="submit" class="saveBtn text-decoration:none display:inline-block weight:bold text:uppercase text:white border:none bg:blue-600 py:5 px:10 size:14">
    </div>
  </form>
</div>
</div>

<?php include('./partials/footer.php'); ?>

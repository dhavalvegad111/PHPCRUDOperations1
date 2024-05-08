<?php include('./partials/header.php');

// UPDATE QUERY
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $email= $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $hobbies = implode(", ", $_POST['hobbies']);

    $update_query = mysqli_query($conn, "UPDATE persons SET fname='$fname', lname='$lname', fname='$fname', gender='$gender', email='$email', phone='$phone', address='$address', hobbies='$hobbies' WHERE id='$id'");

    if ($update_query > 0) {
        header("Location:view.php");
        $_SESSION['msg'] = 'Record updated successfully.';
    } else {
        $_SESSION['msg'] = 'Error in update record.' . mysqli_error($conn);
    }
}

// SELECT QUERY
$id = $_GET['id'];
$select_query = mysqli_query($conn, "SELECT * from persons WHERE id = $id");
while ($row = mysqli_fetch_array($select_query)) {
?>
<div class="container:fluid">
<h2 class="text:center text:uppercase pt:50">Update Info of <?php echo "<span class='text:success'>". $row['fname'] ." ". $row['lname'] ."</span>"?></h2>
    <div class="form_wrapper">
    <form action="update.php" method="POST" class="form ww:60 mx:auto" autocomplete="off">
    <div class="mb-3">
      <label for="fname" class="form-label">Firstname</label>
      <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter firstname..." value="<?php echo $row['fname']; ?>"><br>
      <label for="lname" class="form-label">Lastname</label>
      <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter lastname..."  value="<?php echo $row['lname']; ?>">
    </div>
    <div class="mb-3">
      <label for="gender" class="mr:15">Select Gender:</label>
      <input type="radio" id="male" name="gender" value="Male"<?php if ($row['gender'] == 'Male') {echo "checked";} ?>>
      <label for="male" class="mr:10">Male</label>
      <input type="radio" id="female" name="gender" value="Female"<?php if ($row['gender'] == 'Female') {echo "checked";} ?>>
      <label for="female">Female</label><br>      
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email..." value="<?php echo $row['email']; ?>">
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Phone</label>
      <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter phone..." value="<?php echo $row['phone']; ?>">
    </div>
    <div class="mb-3">
      <label for="gender" class="mb-2">Address</label>
      <textarea name="address" id="address" cols="30" rows="6" placeholder="Enter address..." class="form-control outline:none" value=""><?php echo $row['address']; ?></textarea>
    </div>
    <div class="mb-3">
    <label for="gender" class="mb-2 mr:15">Select Hobbies:</label>
    <?php
        $save_hobbies = explode(", ", $row['hobbies']);
        $hobbies = array("Drawing", "Dancing", "Reading", "Watching TV", "Swimming", "Cooking");
        foreach ($hobbies as $hobby) {
            $checked = in_array($hobby, $save_hobbies) ? "checked" : "";
        ?>
        <input type="checkbox" name="hobbies[]" id="hobbies1" value="<?php echo $hobby ?>" <?php echo $checked ?> class="mr:5">
        <label for="hobbies1" class="mr:10 text:uppercase"><?php echo $hobby ?></label>
    <?php }?>
    </div> 
    <div class="mb-3">
        <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
        <input type="submit" value="Update" name="update" class="updateBtn display:inline-block text-decoration:none weight:bold text:uppercase text:white bg:success py:5 px:10 size:14 outline:none border:none">
        <a href="view.php" name="cancel" class="cancelBtn text-decoration:none display:inline-block weight:bold text:uppercase text:white bg:slate-600 py:5 px:10 size:14 outline:none border:none">Cancel</a>
    </div>
  </form>
<?php } ?>
    </div>
</div>

<?php include('./partials/footer.php'); ?>


<?php include('./partials/header.php'); 

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$result = mysqli_query($conn,"SELECT * FROM persons WHERE id = '$id'");
if (!$result) {
    $_SESSION['msg']= 'Could not run query: ' . mysqli_error($conn);
    exit;
}
$row = mysqli_fetch_assoc($result);
    ?>

<section class="read_single_record">
    <div class="container:fluid">      
    <h2 class="text:center text:uppercase pt:50">Info of <?php echo "<span class='text:slate-600 text:uppercase'>". $row['fname'] ." ". $row['lname'] ."</span>" ?></h2>
    <div class="py:20">
        <a href="view.php" class="createBtn text-decoration:none weight:bold text:uppercase text:white bg:blue-600 py:5 px:10 size:14">Back</a>
    </div> 
    <div class="table_wrapper display:flex justify-content:center py:40">
    <table class="ww:100" border="1" id="read_table">
        <thead>
            <tr class="bg:slate-300">
                <th class="p:15 text:uppercase">ID</th>
                <th class="p:15 text:uppercase">Firstname</th>
                <th class="p:15 text:uppercase">Lastname</th>
                <th class="p:15 text:uppercase">Gender</th>
                <th class="p:15 text:uppercase">Email</th>
                <th class="p:15 text:uppercase">Phone</th>
                <th class="p:15 text:uppercase">Address</th>
                <th class="p:15 text:uppercase">Hobbies</th>
                <th class="p:15 text:uppercase">Attendance</th>
                <th class="p:15 text:uppercase">Updated On</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr class="">
                <td class="p:15"><?php echo $row['id']; ?></td>
                <td class="p:15"><?php echo $row['fname']; ?></td>
                <td class="p:15"><?php echo $row['lname']; ?></td>
                <td class="p:15"><?php echo $row['gender']; ?></td>
                <td class="p:15"><?php echo $row['email']; ?></td>
                <td class="p:15"><?php echo $row['phone']; ?></td>
                <td class="p:15"><?php echo $row['address']; ?></td>
                <td class="p:15"><?php echo $row['hobbies']; ?></td>
                <td class="p:15"><?php echo $row['attendance']; ?></td>
                <td class="p:15">
                <?php
                $new_date = date('d-m-Y', strtotime($row['date']));
                echo $new_date;    
                ?>
                </td>
            </tr>        
        </tbody>
    </table>
    </div>        
    </div> 
</section>

<?php include('./partials/footer.php'); ?>
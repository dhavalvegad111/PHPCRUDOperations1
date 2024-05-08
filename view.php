<?php include('./partials/header.php'); ?>

<section class="view_table">
    <div class="container:fluid">               
    <h2 class="text:center text:uppercase pt:50">View All Records</h2>
        <div class="py:20">
            <a href="index.php" class="createBtn text-decoration:none weight:bold text:uppercase text:white bg:blue-600 py:5 px:10 size:14">Create</a>
        </div> 
        <div class="table_wrapper ww:100">         
            <?php
                if (isset($_SESSION['msg'])) {
                    echo "<p class='msg weight:semibold size:18 mb:20 alert alert-primary'>" . $_SESSION['msg'] . "</p>";
                    unset($_SESSION['msg']);
                }
            ?>
            <table id="crud_table" class="table table-striped table-bordered border-gray table-hover">
                <thead class="">
                    <tr class="vertical:middle">
                        <th class="text:center text:uppercase">ID</th>
                        <th class="text:center text:uppercase">Firstname</th>
                        <th class="text:center text:uppercase">Lastname</th>
                        <th class="text:center text:uppercase">Gender</th>
                        <th class="text:center text:uppercase">Email</th>
                        <th class="text:center text:uppercase">Phone</th>
                        <th class="text:center text:uppercase">Address</th>
                        <th class="text:center text:uppercase">Hobbies</th> 
                        <th class="text:center text:uppercase">Updated On</th> 
                        <th class="text:center text:uppercase">Attendance</th> 
                        <th class="text:center text:uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody>  
                    <?php
                    $query = "SELECT * FROM persons";
                    if ($result = mysqli_query($conn, $query)) {
                        while ($row = mysqli_fetch_assoc($result)) {  

                    ?>
                    <tr class="vertical:middle">
                        <td class=""><?php echo $row['id']; ?></td>
                        <td class=""><?php echo $row['fname']; ?></td>
                        <td class=""><?php echo $row['lname']; ?></td>
                        <td class=""><?php echo $row['gender']; ?></td>
                        <td class=""><?php echo $row['email']; ?></td>
                        <td class=""><?php echo $row['phone']; ?></td>
                        <td class=""><?php echo $row['address']; ?></td>
                        <td class=""><?php echo $row['hobbies']; ?></td>
                        <td class="">
                        <?php
                        $new_date = date('d-m-Y', strtotime($row['date']));
                        echo $new_date;    
                        ?>
                        </td>
                        <td class="text:center">                            
                            <a href="view.php?id=<?php echo $row['id']; ?>" class="absentBtn text-decoration:none display:inline-block weight:bold text:uppercase text:white text:red-600 border border-danger border-1 border-gray py:5 px:10 size:14">Absent</a>
                            <a href="view.php?id=<?php echo $row['id']; ?>" class="presentBtn text-decoration:none display:inline-block weight:bold text:uppercase text:white text:green-600 border border-success border-1 border-gray py:5 px:10 size:14">Present</a>
                            <?php ?>
                        </td>
                        <td>
                            <div class="display:flex gap:5">
                                <a href="read.php?id=<?php echo $row['id']; ?>" class="readBtn text-decoration:none display:inline-block weight:bold text:uppercase text:white bg:slate-600 py:5 px:10 size:14">Read</a>
                                <a href="update.php?id=<?php echo $row['id']; ?>" class="updateBtn text-decoration:none display:inline-block weight:bold text:uppercase text:white bg:success py:5 px:10 size:14">Update</a>
                                <form action="delete.php" method="post"><input type="hidden" name="id" value="<?php echo $row['id']; ?>"><input type="submit" value="Delete" 
                                onclick="return confirm('Are you sure want to delete the record of <?php echo $row['fname'] . ' ' . $row['lname']; ?>?')" class="deleteBtn text-decoration:none weight:bold text:uppercase text:white bg:danger py:5 px:10 size:14 border:none"></form>                            
                            </div>
                        </td>                        
                    </tr>
                    <?php } } ?>
                </tbody>               
            </table>    
        </div>
    </div> 
</section>

<?php include('./partials/footer.php'); ?>
    <?php include('./partials/header.php'); 

    $id = $_POST['id'];
    $query = "DELETE FROM `persons` WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if($result){ 
        $_SESSION['msg'] = 'Record deleted successfully.';
        header("Location:view.php");
    } else {
        $_SESSION['msg'] = 'Failed to delete a record.' . mysqli_error($conn);
    }

    include('./partials/footer.php'); ?>
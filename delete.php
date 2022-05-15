<?php
include "db.php";

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];
    $file = $_GET['file'];
    unlink("image/".$file);
    


    $sql = "DELETE FROM `registrations` WHERE `id`='$user_id'";



    $result = $connection->query($sql);


    if ($result == TRUE) {

        echo "Record deleted successfully.";
        echo "<script>document.location='view.php'</script>";
    } else {

        echo "Error:" . $sql . "<br>" . $connection->error;
    }
}
?>

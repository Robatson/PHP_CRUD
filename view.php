<?php
include "db.php";

$sql = "SELECT * from registrations";

$result = $connection->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>USER VIEW PAGE</title>
</head>
<body>
    
<h3 >User Table</h3>
<a href="form.php"><h4  style="padding-left: 80%;">Add New User</h4></a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Birthday</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>
      <th scope="col">Photo</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

  <!-- for displaying data -->
      <?php
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      ?>

    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['firstname']; ?></td>
      <td><?php echo $row['lastname']; ?></td>
      <td><?php echo $row['birthday']; ?></td>
      <td><?php echo $row['gender']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td><?php echo $row['password']; ?></td>

     <td> <img src="image/<?php echo $row['photo'];?>" alt=" " height="85" width="85"></td>


       <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
                    <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>&file=<?php echo $row['photo']; ?>">Delete</a></td>
    </tr>
    
    <?php
    }
}


?>
  </tbody>
</table>
</body>
</html>
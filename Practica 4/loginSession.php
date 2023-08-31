<?php
include 'db.php';
if($_SERVER ["REQUEST_METHOD"] == "POST"){
  $username = $_POST ['username'];
  $pwd = $_POST['pwd'];

  $sql = "SELECT * FROM tbl_usuarios WHERE username='$username' AND password ='$pwd'";
  $result = $conexion -> query  ($sql);
  if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_assoc($result)){
    echo "id: ". $row ["id_usuario"];
}
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Stacked form</h2>
  <form action="login.php" method="POST">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="user" placeholder="Enter email" name="username">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
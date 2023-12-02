<!doctype html>
<html lang="en">
  <head>
    <title>Register form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php
    include './connect.php';

      if(isset($_POST['submit'])){
        $user = $_POST['user'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $confirm = $_POST['confirm'];
        $sql = "INSERT INTO `register`(`username`, `email`, `password`, `confirm_password`) VALUES ('$user','$email','$pass','$confirm')";
        $conn->exec($sql);
        if(empty($user)){
          $errorUser = "Username không được để trống";
        }else{
          if(strlen($_POST['user']) < 7){
            $errorUser = "Username phải lớn hơn 6 ký tự";
          }
        }
        if(empty($email)){
          $errorEmail = "Email không được để trống";
        }else{
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorEmail = "Email không đúng định dạng";
          }
        }
        if(empty($pass)){
          $errorPass = "Password không được để trống";
        }else{
          if(strlen($_POST['pass']) < 7){
            $errorPass = "Password phải lớn hơn 6 ký tự";
          }
        }
        if(empty($confirm)){
          $errorConfirm = "Password không được để trống";
        }else{
          if ($confirm != $pass) {
            $errorConfirm = "Password chưa chính xác";
          }
        }
        echo "Đăng ký thành công";
      }
    ?>
    <div class="container">
      <h1>Register form</h1>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="exampleInputUser1" class="form-label">Username</label>
              <input type="text" name="user" class="form-control">
              <small class="text-danger"><?php echo (isset($errorUser)) ? $errorUser : "";?></small>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="text" name="email" class="form-control">
              <small class="text-danger"><?php echo (isset($errorEmail)) ? $errorEmail : "";?></small>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="pass" class="form-control">
              <small class="text-danger"><?php echo (isset($errorPass)) ? $errorPass : "";?></small>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
              <input type="password" name="confirm" class="form-control">
              <small class="text-danger"><?php echo (isset($errorConfirm)) ? $errorConfirm : "";?></small>
            </div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Register</button>
          </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
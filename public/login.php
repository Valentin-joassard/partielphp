<?php
require_once '../layout/header.php';
require_once '../functions/db.php';
require_once '../functions/redirection.php';
    
    $pdo = getPdo();
    $login = ""; 
    $error =false;
    
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
      session_start();
      $login = $_POST['login'];
      $password = $_POST['password'];
    
      $query = "SELECT * FROM users WHERE login = :login";
      $stmt = $pdo->prepare($query);
      $stmt->execute([
        'login' => $login
      ]);
    
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
      if ($row && password_verify($password, $row['password'])) {
        $_SESSION['state'] = 'connected';
        $_SESSION['user_id'] = $row['ID'];
        redirect('/public');
      } else {
        $error = true;
      }
    }
?>

<form mathode='POST'>
  <div class="form-group">
    <label for="exampleInputEmail1">Login</label>
    <input type="text" class="form-control" id="login" name="login" aria-describedby="emailHelp" placeholder="Enter login">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>


<?php require_once '../layout/footer.php';?>
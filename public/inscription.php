<?php
require_once '../layout/header.php';
require_once '../functions/inscription.php';
if(!empty($_POST['email']) && !empty($_POST['login']) && !empty($_POST['password']  )&& $_POST['password']==$_POST['password2']){
    $login=$_POST['login'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    
    $inscription=inscription($login,$password,$email);
}
 ?>

<form method="POST">
<div class="form-group">
    <label for="exampleInputPassword1">Login</label>
    <input type="text" class="form-control" id="login" name='login' placeholder="Login ....">
  </div>
<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" name='password' placeholder="Password ....">
  </div>
<div class="form-group">
 <label for="exampleInputPassword1"> retaper Password</label>
<input type="password" class="form-control" id="password2" name='password2' placeholder="Password ....">
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="email" name='email' aria-describedby="emailHelp" placeholder="email ....">
  </div>
  <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>

<?php require_once '../layout/footer.php';?>
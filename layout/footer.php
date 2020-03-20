<?php 
    require_once '../functions/db.php';
    require_once '../functions/newsletter.php';

    
    if(!empty($_POST['email'])){
        $email=$_POST['email'];
        $ajout=newsletter($email);
    }
?>

<form method="POST">
  <div class="form-group">
    <label for="Email">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email....">
    <small id="emailHelp" class="form-text text-muted">Entrer votre Email</small>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="newsletter" name="newsletter">
    <label class="form-check-label" for="exampleCheck1">S'abonner à la newsletter</label>
  </div>

  
  <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/Login_style.css">
</head>
<body>
    <div class="container">
       
        <form method="POST" action="{{ route('login') }}">
            <img class="logo" src="../img/sgex_logo.png" alt="Sgex">
          <div class="form-group">
            <input type="text" class="form-control" id="username" placeholder="Username" name="email">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="pwd" placeholder="Password" name="pswd">
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox"> Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-lg btn-primary">Entrar</button>
          <p class="mt-5 mb-3 text-muted text-center">© 2019-2020</p>
        </form>
      </div>
      
      </body>
      </html>
</body>
</html>
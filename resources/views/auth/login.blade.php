<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="ADBlogo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>AllDayBot login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

  </head>

  <body class="text-center">

    <form class="form-signin" action="/postlogin" method="POST">

        @csrf

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <img class="mb-4" src="ADBlogo.png" alt="" width="100" height="100">

        <h1 class="h3 mb-3 font-weight-normal text-white">Inloggen</h1>

        <label for="inputEmail" class="sr-only">Email adres</label>
        <input type="email" id="email_address" class="form-control" placeholder="Email addres" name="email" required autofocus>

        <label for="inputPassword" class="sr-only">Wachtwoord</label>
        <input type="password" id="password" class="form-control" placeholder="Wachtwoord" name="password" required>
        
        <br>
  
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <p class="mt-5 mb-3 text-white">&copy; <?php echo date("Y"); ?> - Een site van AllDayTechAndGaming - In development door KelvinCodes</p>
      
    </form>
  </body>


<style>
    html,
body {
  height: 100%;
  
}

body {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-align: center;
  -ms-flex-pack: center;
  -webkit-box-align: center;
  align-items: center;
  -webkit-box-pack: center;
  justify-content: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #343a40;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>
</html>


@include('layout.head')
<link rel="icon" href="ADBlogo.png">

<br>
<br>
<br>
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Wijzig je wachtwoord</div>
                  <div class="card-body">
  
                      <form action="/post-wachtwoord-wijzigen" method="POST">
                          @csrf

                          @if ($errors->any())
                          <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                          </div>
                          @endif

                          @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @elseif (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Wachtwoord</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif

                                  <input type="checkbox" onclick="first_password()">Laat het wachtwoord zien

                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password_second" class="col-md-4 col-form-label text-md-right">Wachtwoord opnieuw invoeren</label>
                              <div class="col-md-6">
                                  <input type="password" id="password_second" class="form-control" name="password_second" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password_second') }}</span>
                                  @endif

                              </div>

                          </div>

  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Wachtwoord wijzigen
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>


<script>
function first_password() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

</script>
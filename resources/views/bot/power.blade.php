<!doctype html>
<html>
<head>
</head>

<header>
    @include('layout.head')
</header>

<body>



<container>
<div class="mainContainer">

    <center><h1 class="text-white" id='status'>Status van de bot: <div id="result"></div></h1></center>

    <div class="container">

    <form action="/bot/post-power" method="POST">

        @csrf

        <button type="submit" class="btn btn-success">Starten</button>

        <button type="submit" class="btn btn-danger">Stoppen</button>

        <button type="submit" class="btn btn-warning">Herstarten</button>


        <br>
    </form>

    </div>

</div>
</container>

@include("layout.footer")

</body>
<style>
.mainContainer {
    position: absolute;
    top: 35%;
    left:50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    width: 70%;
    height: 50%;
    text-align: center;
}

h5 {
    color: white;
}
label {
    color: white;
}

/* Button style */
.card {
    background-color: transparent;
    background-color: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.2)) , url(EauDp1hUcAAE-bK.jpg);
}


.col-sm {
    padding-top: 20px;
}

.submitSwitch {
    position: absolute;
    left: 4%;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>
setInterval(function() {
  // Make an API call to the route `getpower`
  $.ajax({
    url: '/getpower',
    method: 'GET',
    success: function(data) {
      // Place the result of the API call in the div with id `result`
      $('#result').html(data);
    }
  });
}, 500);
</script>

</script>

</html>
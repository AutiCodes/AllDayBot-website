<!doctype html>
<html>
<head>
</head>

<header>
    @include('layout.head')
</header>

<body>



<container>
<div class="main_container">

    <center><h1 class="text-white">Wijzig de XP en loop lengte</h1></center>

    <div class="container">

        <form action="/post-instellingen-bot-xp-minute" method="POST">

            @csrf

            <div class="row">


                <div class="col-sm">
                One of three columns
                </div>


                <div class="col-sm">
                One of three columns
                </div>


            </div>

        </form>

    </div>

</div>
</container>

@include("layout.footer")

</body>
<style>
.main_container {
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

.submit_switch {
    position: absolute;
    left: 4%;
}
</style>
</html>
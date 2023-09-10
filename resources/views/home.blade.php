<!doctype html>
<html>
<head>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">

</head>

<header>
    @include('layout.head')
</header>

<body>

<container>

<div class="total align-items-center">
      <div class="container first_container align-items-center">
    
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

         <div class="row align-items-center">

            <div class="col-sm">
                <center>
                    <i class="fa-solid fa-globe" style="font-size: 400%; color: white;"></i>
                    <p>Totaal leden:</p>
                    <h1>{{ $data->total_members }}</h1>
                </center>
            </div>

            <div class="col-sm">
                <center>
                    <i class="fa-solid fa-globe" style="font-size: 400%; color: white;"></i>
                    <p>Leden online:</p>
                    <h1>{{ $data->total_members_online }}</h1>
                </center>
            </div>

            <div class="col-sm">
                <center>
                    <i class="fa-regular fa-message" style="font-size: 400%; color: white;"></i>
                    <p>Totaal berichten:</p>
                    <h1>{{ $data->total_messages }}</h1>
                </center>            
            </div>

         </div>
         
      </div>
      <div class="container second_container align-items-center">

         <div class="row align-items-center">

            <div class="col-sm">
                <center>
                    <i class="fa-solid fa-hashtag" style="font-size: 400%; color: white;"></i>
                    <p>Totaal kanalen:</p>
                    <h1>{{ $data->count_text_channels }}</h1>
                </center>      
            </div>

            <div class="col-sm">
                <center>
                    <i class="fa-solid fa-microphone" style="font-size: 400%; color: white;"></i>
                    <p>Totaal voicekanalen:</p>
                    <h1>{{ $data->count_voice_channels }}</h1>
                </center>      
            </div>

            <div class="col-sm">
                <center>
                    <i class="fa-solid fa-box" style="font-size: 400%; color: white;"></i>
                    <p>Totaal categorieen:</p>
                    <h1>{{ $data->count_categories }}</h1>
                </center>      
            </div>

            <div class="col-sm">
                <center>
                    <i class="fa-regular fa-calendar-days" style="font-size: 400%; color: white;"></i>
                    <p>Guild gemaakt op:</p>
                    <h3 class="text-white"><?php echo explode(" ", $data->count_created_at)[0]?></h3>
                </center>      
            </div>


         </div>
         
      </div>

   </div>


@include("layout.footer")

</body>
<style>
.total {
   text-align: center;
    position: absolute;
    top: 50%;
    left:50%;
    right: 50%;
    transform: translate(-50%, -50%);
    padding: 10px;
    width: 70%

}

.second_container {
   padding-top: 10%;
}

</style>


</container>


@include("layout.footer")

</body>
<style>
.body {
    background-color: blue;
}

.main_info {
    position: absolute;
    top: 50%;
    left:50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    width: 70%;
    height: 50%;

}


</style>
</html>
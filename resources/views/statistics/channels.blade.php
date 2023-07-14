<!doctype html>
<html>
<head>
   @include('layout.head')
</head>
<body>



   <div class="total align-items-center">
      <div class="container first_container align-items-center">

         <div class="row align-items-center">

            <div class="col-sm">
                <center>
                    <i class="fa-solid fa-hashtag" style="font-size: 400%; color: white;"></i>
                    <p>General</p>
                    <h1>{{ $channels->textchannel_general }}</h1>
                </center>      
            </div>

            <div class="col-sm">
                <center>
                    <i class="fa-solid fa-hashtag" style="font-size: 400%; color: white;"></i>
                    <p>Memes</p>
                    <h1>{{ $channels->textchannel_memes }}</h1>
                </center>      
            </div>

            <div class="col-sm">
                <center>
                    <i class="fa-solid fa-hashtag" style="font-size: 400%; color: white;"></i>
                    <p>NSFW</p>
                    <h1>{{ $channels->textchannel_nsfw }}</h1>
                </center>      
            </div>

            <div class="col-sm">
                <center>
                    <i class="fa-solid fa-hashtag" style="font-size: 400%; color: white;"></i>
                    <p>Tech-talk</p>
                    <h1>{{ $channels->textchannel_tech_talk }}</h1>
                </center>      
            </div>         
         </div>
      </div>


      <div class="container second_container align-items-center">

         <div class="row align-items-center">

            <div class="col-sm">
               <center>
                  <i class="fa-solid fa-hashtag" style="font-size: 400%; color: white;"></i>
                  <p>Development-coding</p>
                  <h1>{{ $channels->textchannel_development_coding }}</h1>
               </center>      
            </div>

            <div class="col-sm">
               <center>
                  <i class="fa-solid fa-hashtag" style="font-size: 400%; color: white;"></i>
                  <p>Games-talk</p>
                  <h1>{{ $channels->textchannel_games_talk }}</h1>
               </center>      
            </div>

            <div class="col-sm">
               <center>
                  <i class="fa-solid fa-hashtag" style="font-size: 400%; color: white;"></i>
                  <p>looing-for-party</p>
                  <h1>{{ $channels->textchannel_looking_for_party }}</h1>
               </center>      
            </div>

            <div class="col-sm">
               <center>
                  <i class="fa-solid fa-hashtag" style="font-size: 400%; color: white;"></i>
                  <p>Games-media</p>
                  <h1>{{ $channels->textchannel_games_media }}</h1>
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
    top: 40%;
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
</html>
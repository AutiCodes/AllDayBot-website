<!doctype html>
<html>
<head>
   @include('layout.head')
</head>
<body>



   <div class="main_info">
      <div class="container">

         <div class="row">

            <div class="col-sm">
               One of three columns
            </div>

            <div class="col-sm">
               One of three columns
            </div>

            <div class="col-sm">
               One of three columns
            </div>

         </div>
         
      </div>
   </div>


@include("layout.footer")

</body>
<style>
.main_info {
    position: absolute;
    top: 40%;
    left:50%;
    transform: translate(-50%, -50%);
    padding: 10px;

}
</style>
</html>
<!doctype html>
<html>
<head>
   @include('layout.head')
</head>
<body>


<container>
    <div class="main_info">

        <div class="row">

            <div class="col-sm">
                <center><i class="fa fa-line-chart" style="font-size: 400%;"></i></center>
                <center>
                    <p>Totaal leden</p>
                    <br>
                    <h1>491</h1>
                </center>
            </div>

            <div class="col-sm">
                <center>
                    <i class="fa fa-comments" style="font-size: 400%;"></i>
                    <p>Berichten deze maand</p>
                    <h1>19301</h1>
                </center>

            </div>

            <div class="col-sm">
              <center>
                <i class="fa fa-fire" style="font-size: 400%;"></i>
                <p>Populairste kanaal</p>
                <h1>#tech-talk</h1>
            </center>            </div>
          </div>
        </div>

    </div>
</container>

</body>
<style>
.main_info {
    border: 5px solid;
    position: absolute;
    top: 40%;
    left:50%;
    transform: translate(-50%, -50%);
    padding: 10px;

}
</style>
</html>
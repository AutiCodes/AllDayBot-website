<!doctype html>
<html>
<head>
   @include('layout.head')
</head>
<body>

<container>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif


    <div class="main_info">

        <div class="row">

            <div class="col-sm">
                <center><i class="fa fa-line-chart" style="font-size: 400%;"></i></center>
                <center>
                    <p>Totaal leden</p>
                    <br>
                    <h1> {{$data->total_members }} </h1>
                </center>
            </div>

            <div class="col-sm">
                <center>
                    <i class="fa fa-line-chart" style="font-size: 400%;"></i>
                    <p>Leden online</p>
                    <br>
                    <h1>{{ $data->total_members_online }}</h1>
                </center>
            </div>

            <div class="col-sm">
                <center>
                    <i class="fa fa-comments" style="font-size: 400%;"></i>
                    <p>Berichten totaal</p>
                    <h1>{{ $data->total_messages }}</h1>
                </center>
            </div>


          </div>
        </div>

    </div>
</container>


@include("layout.footer")

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
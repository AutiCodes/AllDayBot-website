sou<!doctype html>
<html>


@include('layout.head')
<link rel="icon" href="ADBlogo.png">


<body>



<container>
<div class="mainContainer">

    <center><h1 class="text-white" id='status'>Resources van de bot:</h1></center>

    <div class="container">

        <p> CPU: {{ $data->cpu_absolute }}</p>

        <p> RAM: {{ round($data->memory_bytes / 1048576, 2) }}MB </p>

        <p> Storage: {{ round($data->disk_bytes / 1048576, 2) }}MB </p>

        <p> Network in/out: {{ round($data->network_rx_bytes / 1048576, 2)}}MB - {{ round($data->network_tx_bytes / 1048576, 2)}}MB</p>

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

</html>
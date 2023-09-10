<!doctype html>
<html>


@include('layout.head')
<link rel="icon" href="ADBlogo.png">



<body>
<container>
<div class="mainContainer">
    

    <form action="/post-instellingen-bot-xp" method="POST">
        
        @csrf

        <center><h1 class="text-white">Wijzig de XP</h1></center>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <label for="xp_messages">Berichten XP per minuut (tussen de 1 en 100):</label>
        <input type="number" id="xp_messages" name="xp_messages" min="1" max="100" value={{ $data->xp_messages }}>

        <br>
        <br>

        <label for="xp_voicechat">Voicechat XP per minuut (tussen de 1 en 100):</label>
        <input type="number" id="xp_voicechat" name="xp_voicechat" min="1" max="100" value={{ $data->xp_voicechat }}>


        <div class="submitSwitch">
            <button type="submit" class="btn btn-primary">
                Sla de wijzigingen op
            </button>
        </div>

    </form>
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
    left: 50%;
}
</style>
</html>
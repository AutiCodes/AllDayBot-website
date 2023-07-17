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

    <center><h1 class="text-white">Wijzig wat er gelogd moet worden!</h1></center>

    <div class="container">

    <form action="/post-instellingen-bot-log" method="POST">

        @csrf


        <div class="row">

            <div class="col-sm">

                <div class="card">
                    <div class="card-header" >
                        <h5>Berichten logs</h5>
                    </div>
                    <div class="card-body" style="max-widht: 50%;">

                        <div class="custom-control custom-switch">
                            <input type="hidden" name="swMessageEdited" value=0>

                            @if ($settings->messageEdited == 1)
                                <input type="checkbox" class="custom-control-input" id="swMessageEdited" data-off="x" name="swMessageEdited" value=1 checked='checked'>
                            @else 
                                <input type="checkbox" class="custom-control-input" id="swMessageEdited" data-off="x" value=1 name="swMessageEdited">
                            @endif

                            <label class="custom-control-label" for="swMessageEdited" style="color: white;">Bewerkt</label>
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="hidden" name="swMessageDeleted" value=0>

                            @if ($settings->messageDeleted == 1)
                                <input type="checkbox" class="custom-control-input" value=1 id="swMessageDeleted" name="swMessageDeleted" checked='checked'>

                            @else
                                <input type="checkbox" class="custom-control-input" value=1 name="swMessageDeleted" id="swMessageDeleted">
                            @endif

                            <label class="custom-control-label" for="swMessageDeleted" style="color: white;">Verwijderd</label>
                        </div>
                        
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="swMessageReaction" value=0>

                            @if ($settings->messageReaction == 1)
                                <input type="checkbox" class="custom-control-input" value=1 name="swMessageReaction" id="swMessageReaction" checked='checked'>
                            @else
                                <input type="checkbox" class="custom-control-input" value=1 name="swMessageReaction" id="swMessageReaction">
                            @endif

                            <label class="custom-control-label" for="swMessageReaction" style="color: white;">Reacties</label>
                        </div>            

                    </div>
                </div>

            </div>


            <div class="col-sm">

            
                <div class="card">
                    <div class="card-header">
                        <h5>VC logs</h5>
                    </div>
                    <div class="card-body" style="max-widht: 50%;">

                        <div class="custom-control custom-switch">
                            <input type="hidden" name="swVcJoinLeave" value=0>

                            @if ($settings->voiceJoinLeave == 1)
                                <input type="checkbox" class="custom-control-input" name="swVcJoinLeave" value=1 id="swVcJoinLeave" checked='checked'>
                            @else
                                <input type="checkbox" class="custom-control-input" name="swVcJoinLeave" value=1 id="swVcJoinLeave">
                            @endif

                            <label class="custom-control-label" for="swVcJoinLeave" style="color: white;">Join/leave</label>
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="hidden" name="swVcChange" value=0>

                            @if ($settings->voiceChange == 1)
                                <input type="checkbox" class="custom-control-input" name="swVcChange" value=1 id="swVcChange" checked='checked'>
                            @else
                                <input type="checkbox" class="custom-control-input" name="swVcChange" value=1 id="swVcChange">                                
                            @endif

                            <label class="custom-control-label" for="swVcChange" style="color: white;">VC wijzig</label>
                        </div>
                        
                        <br>         

                    </div>
                </div>

            </div>


            <div class="col-sm">

            
                <div class="card">
                    <div class="card-header">
                        <h5>GUILD</h5>
                    </div>
                    <div class="card-body">

                        <div class="custom-control custom-switch">
                            <input type="hidden" name="sw_join_leave" value=0>

                            @if ($settings->memberJoinLeave == 1)
                                <input type="checkbox" class="custom-control-input" name="swJoinLeave" value=1 id="swJoinLeave" checked='checked'>
                            @else                                
                                <input type="checkbox" class="custom-control-input" name="swJoinLeave" value=1 id="swJoinLeave">
                            @endif

                            <label class="custom-control-label" for="swJoinLeave" style="color: white;">Join/leave</label>
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="hidden" name="sw_threads" value=0>

                            @if ($settings->threads == 1)
                                <input type="checkbox" class="custom-control-input" name="swThreads" value=1 id="swThreads" checked='checked'>
                            @else
                                <input type="checkbox" class="custom-control-input" name="swThreads" value=1 id="swThreads">
                            @endif

                            <label class="custom-control-label" for="swThreads" style="color: white;">Threads</label>
                        </div>
                        
                        <br>

                    </div>
                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-sm">


                <div class="card">
                    <div class="card-header" >
                        <h5>Moderatie</h5>
                    </div>
                    <div class="card-body" style="max-widht: 50%;">

                        <div class="custom-control custom-switch">
                            <input type="hidden" name="swBanUnban" value=0>

                            @if ($settings->modBanUnban == 1)
                                <input type="checkbox" class="custom-control-input" name="swBanUnban" value=1 id="swBanUnban" checked='checked'>
                            @else
                                <input type="checkbox" class="custom-control-input" name="swBanUnban" value=1 id="swBanUnban">
                            @endif

                            <label class="custom-control-label" for="swBanUnban" style="color: white;">Ban/unban</label>
                        </div>
                        
                        <br>
                        
                        <br>

                    </div>
                </div>

            </div>


            <div class="col-sm">

            
                <div class="card">
                    <div class="card-header">
                        <h5>Leden</h5>
                    </div>
                    <div class="card-body" style="max-widht: 50%;">

                        <div class="custom-control custom-switch">\
                            <input type="hidden" name="swNicknameChange" value=0>

                            @if ($settings->memberNickname == 1)
                                <input type="checkbox" class="custom-control-input" name="swNicknameChange" value=1 id="swNicknameChange" checked='checked'>
                            @else
                                <input type="checkbox" class="custom-control-input" name="swNicknameChange" value=1 id="swNicknameChange">
                            @endif

                            <label class="custom-control-label" for="swNicknameChange" style="color: white;">Nickname</label>
                        </div>

                        <br>
                        
                        <br>         

                    </div>
                </div>

            </div>

        </div>

        <br>

        <div class="submitSwitch">
            <button type="submit" class="btn btn-primary">
                Sla de wijzigingen op
            </button>
        </div>

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
</html>
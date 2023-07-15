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
                            <input type="hidden" name="sw_message_edited" value=0>

                            @if ($settings->message_edited == 1)
                                <input type="checkbox" class="custom-control-input" id="sw_message_edited" data-off="x" name="sw_message_edited" value=1 checked='checked'>
                            @else 
                                <input type="checkbox" class="custom-control-input" id="sw_message_edited" data-off="x" value=1 name="sw_message_edited">
                            @endif

                            <label class="custom-control-label" for="sw_message_edited" style="color: white;">Bewerkt</label>
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="hidden" name="sw_message_deleted" value=0>

                            @if ($settings->message_deleted == 1)
                                <input type="checkbox" class="custom-control-input" value=1 id="sw_message_deleted" name="sw_message_deleted" checked='checked'>

                            @else
                                <input type="checkbox" class="custom-control-input" value=1 name="sw_message_deleted" id="sw_message_deleted">
                            @endif

                            <label class="custom-control-label" for="sw_message_deleted" style="color: white;">Verwijderd</label>
                        </div>
                        
                        <div class="custom-control custom-switch">
                            <input type="hidden" name="sw_message_reaction" value=0>

                            @if ($settings->message_reaction == 1)
                                <input type="checkbox" class="custom-control-input" value=1 name="sw_message_reaction" id="sw_message_reaction" checked='checked'>
                            @else
                                <input type="checkbox" class="custom-control-input" value=1 name="sw_message_reaction" id="sw_message_reaction">
                            @endif

                            <label class="custom-control-label" for="sw_message_reaction" style="color: white;">Reacties</label>
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
                            <input type="hidden" name="sw_vc_join_leave" value=0>

                            @if ($settings->voice_join_leave == 1)
                                <input type="checkbox" class="custom-control-input" name="sw_vc_join_leave" value=1 id="sw_vc_join_leave" checked='checked'>
                            @else
                                <input type="checkbox" class="custom-control-input" name="sw_vc_join_leave" value=1 id="sw_vc_join_leave">
                            @endif

                            <label class="custom-control-label" for="sw_vc_join_leave" style="color: white;">Join/leave</label>
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="hidden" name="sw_vc_change" value=0>

                            @if ($settings->voice_change == 1)
                                <input type="checkbox" class="custom-control-input" name="sw_vc_change" value=1 id="sw_vc_change" checked='checked'>
                            @else
                                <input type="checkbox" class="custom-control-input" name="sw_vc_change" value=1 id="sw_vc_change">                                
                            @endif

                            <label class="custom-control-label" for="sw_vc_change" style="color: white;">VC wijzig</label>
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

                            @if ($settings->member_join_leave == 1)
                                <input type="checkbox" class="custom-control-input" name="sw_join_leave" value=1 id="sw_join_leave" checked='checked'>
                            @else                                
                                <input type="checkbox" class="custom-control-input" name="sw_join_leave" value=1 id="sw_join_leave">
                            @endif

                            <label class="custom-control-label" for="sw_join_leave" style="color: white;">Join/leave</label>
                        </div>

                        <div class="custom-control custom-switch">
                            <input type="hidden" name="sw_threads" value=0>

                            @if ($settings->threads == 1)
                                <input type="checkbox" class="custom-control-input" name="sw_threads" value=1 id="sw_threads" checked='checked'>
                            @else
                                <input type="checkbox" class="custom-control-input" name="sw_threads" value=1 id="sw_threads">
                            @endif

                            <label class="custom-control-label" for="sw_threads" style="color: white;">Threads</label>
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
                            <input type="hidden" name="sw_ban_unban" value=0>

                            @if ($settings->mod_ban_unban == 1)
                                <input type="checkbox" class="custom-control-input" name="sw_ban_unban" value=1 id="sw_ban_unban" checked='checked'>
                            @else
                                <input type="checkbox" class="custom-control-input" name="sw_ban_unban" value=1 id="sw_ban_unban">
                            @endif

                            <label class="custom-control-label" for="sw_ban_unban" style="color: white;">Ban/unban</label>
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
                            <input type="hidden" name="sw_nickname_change" value=0>

                            @if ($settings->member_nickname == 1)
                                <input type="checkbox" class="custom-control-input" name="sw_nickname_change" value=1 id="sw_nickname_change" checked='checked'>
                            @else
                                <input type="checkbox" class="custom-control-input" name="sw_nickname_change" value=1 id="sw_nickname_change">
                            @endif

                            <label class="custom-control-label" for="sw_nickname_change" style="color: white;">Nickname</label>
                        </div>

                        <br>
                        
                        <br>         

                    </div>
                </div>

            </div>

        </div>

        <br>

        <div class="submit_switch">
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
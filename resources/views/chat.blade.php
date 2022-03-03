@extends('layout/master')
@section('title','Live chat')
    <link type="text/css" rel="stylesheet" href="{{URL::asset('resources/css/chat_box.css')}}" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>

    <script >
        $(document).ready(function(){
            // Bắt sự kiện nút button bằng enter của input
            // Get the input field
            var input = document.getElementById("usermsg");
            // Execute a function when the user releases a key on the keyboard
            input.addEventListener("keyup", function(event) {
            // Number 13 is the "Enter" key on the keyboard
            if (event.keyCode === 13) {
                // Cancel the default action, if needed
                event.preventDefault();
                // Trigger the button element with a click
                document.getElementById("submitmsg").click();
            }
            });
            const messages = document.getElementById('chatbox');
            var intervalId = window.setInterval(function(){
                autoLoad();
            }, 5000);
            function scrollToBottom() {
                messages.scrollTop = messages.scrollHeight;
            }
            scrollToBottom();
            // Xử lý khi khách hàng nhập xong và ấn gửi
            $("#submitmsg").click(function(){
                var clientmsg = $("#usermsg").val();
                // $("#chatbox").html(time+' '+"<b>Bạn: </b>"+clientmsg+"<br>");
                $("#usermsg").attr("value", "");
                $.ajax({
                    url: "{{url('customer-post-chat-box')}}",
                    type: "POST",
                    cache:false,
                    data: {text: clientmsg,_token: "{{csrf_token()}}"},
                    success:function(data){
                        let string = "";
                        // var getData = JSON.parse(data);
                        // const getData = JSON.stringify(data);
                        data.forEach(function(item, index) {
                            if(item.statut==1){
                                string = string + item.time +' '+"<b>Bạn: </b>"+item.content+"<br>";
                            }
                            else string =string+'<i style="color:red;">'+ item.time +' '+"<b>H-Tech Shop: </b>"+item.content +"</i><br>";
                        });
                        document.getElementById("chatbox").innerHTML = string;
                        scrollToBottom();
                    }
                });
            });
            function autoLoad(){
                var time = "<?php echo '('.date('Y-m-d H:i:s').')'; ?>";
                $.ajax({
                    url: "{{url('customer-post-chat-box')}}",
                    type: "POST",
                    cache:false,
                    data: {load_data: 1,_token: "{{csrf_token()}}"},
                    success:function(data){
                        let string = "";

                        // var getData = JSON.parse(data);
                        // const getData = JSON.stringify(data);
                        data.forEach(function(item, index) {
                            if(item.statut==1){
                                string = string + item.time +' '+"<b>Bạn: </b>"+item.content+"<br>";
                            }
                            else string =string+'<i style="color:red;">'+ item.time +' '+"<b>H-Tech Shop: </b>"+item.content +"</i><br>";
                        });
                        document.getElementById("chatbox").innerHTML = string;
                        scrollToBottom();
                    }
                });
            }
        });
    </script>

@section('content')
<div id="wrapper" style="margin-top:100px;">
    <div id="menu">
        <p class="welcome">Welcome, <b>{{Auth::user()->last_name}}</b></p>
        {{-- <p class="logout"><a id="exit" href="#">Close</a></p> --}}
        <div style="clear:both"></div>
    </div>
        @if(isset($chat_history))
        <div id="chatbox">
            @foreach($chat_history as $chat)
                @if($chat->statut==1)
                    {{$chat->time}}<b> Bạn: </b>{{$chat->content}}<br>
                @else
                    <i style="color:red;">
                        {{ $chat->time }}<b> H-Tech Shop: </b>{{$chat->content }}
                    </i><br>
                @endif
            @endforeach
        </div>
        @else
        <div id="chatbox"></div>
        @endif
        <input name="usermsg" type="text" id="usermsg" size="63" />
        <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
</div>
@endsection

<style>
    /* CSS Document */
    body {
        font:12px arial;
        color: #222;
        text-align:center;
        padding:35px; }

    form, p, span {
        margin:0;
        padding:0; }

    input { font:15px arial; }

    a {
        color:#0000FF;
        text-decoration:none; }

        a:hover { text-decoration:underline; }

    #wrapper, #loginform {
        margin:0 auto;
        padding-bottom:25px;
        background:#c5c8ca;
        width:504px;
        border:1px solid #acacac; }

    #loginform { padding-top:18px; }

        #loginform p { margin: 5px; }

    #chatbox {
        text-align:left;
        margin:0 auto;
        margin-bottom:25px;
        padding:10px;
        background:#fff;
        height:270px;
        width:430px;
        border:1px solid #acacac;
        overflow:auto; }

    #usermsg {
        width:395px;
        border:1px solid #acacac; }

    #submit { width: 60px; }

    .error { color: #ff0000; }

    #menu { padding:12.5px 25px 12.5px 25px; }

    .welcome { float:left; }

    .logout { float:right; }

    .msgln { margin:0 0 2px 0; }

</style>

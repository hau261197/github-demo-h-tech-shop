@extends('pages/admin/layout/master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"></h2>
            </div>
        </div>
    @if(count($errors)>0)
        @foreach ($errors->all() as $er)
        <div class="alert alert-danger col-lg-12" role="alert">
            {{$er}}
        </div>
        @endforeach
    @endif
    @if(session('success'))
        <div class="alert alert-block alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{session('success')}}
        </div>
    @endif
    @if(session('fail'))
        <div class="alert alert-block alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{session('fail')}}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-5">
            <div class="table-responsive">
                <table class="table">
                    <tr><h3><b>Thông tin khách hàng<b><h3></tr>
                    <tr>
                        <td><b>Tên:</b></td>
                        <td>{{ $user->first_name.' '.$user->last_name }}</td>
                    </tr>
                    <tr>
                        <td><b>Mã KH:</b></td>
                        <td>{{ $user->id }}</td>
                    </tr>
                    <tr>
                        <td><b>Hạng:</b></td>
                        <td>{{ $user->member }}</td>
                    </tr>
                    <tr>
                        <td><b>Điện thoại:</b></td>
                        <td>{{ $user->phone }}</td>
                    </tr>
                    <tr>
                        <td><b>Email:</b></td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <td><b>Địa chỉ:</b></td>
                        <td colspan="5">
                            Số: {{ $user->address1 }},
                            Xã/Phường: {{ $user->address2 }},
                            Quận/huyện: {{ $user->address3 }},
                            Tỉnh/TP: {{ $user->address4 }}.
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-lg-7">
            <div id="wrapper123" >
                <div id="menu">
                    <p class="welcome">Welcome, <b>{{Auth::user()->last_name}}</b></p>
                    <div style="clear:both"></div>
                </div>
                @if(isset($chat_history))
                <div id="chatbox">
                    @foreach($chat_history as $chat)
                        @if($chat->statut==1)
                        <i style="color:red;">
                            {{$chat->time}}<b> {{$user->first_name.' '.$user->last_name}}: </b>{{$chat->content}}
                        </i><br>
                        @else
                            {{ $chat->time }}<b> H-Tech Shop: </b>{{$chat->content }}<br>
                        @endif
                    @endforeach
                </div>
                @else
                <div id="chatbox"></div>
                @endif
                <input name="usermsg" type="text" id="usermsg" size="63" />
                <input name="user_id" type="hidden" id="user_id" value="{{$user->id}}" />
                <input name="user_full_name" type="hidden" id="user_full_name" value="{{$user->first_name.' '.$user->last_name}}" />
                <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
<style>
    #wrapper123>body {
        font:12px arial;
        color: #222;
        text-align:center;
        padding:35px; }

        #wrapper123>form, p, span {
        margin:0;
        padding:0; }

        input { font:12px arial;}

        #wrapper123>a {
        color:#0000FF;
        text-decoration:none; }

        #wrapper123>a:hover { text-decoration:underline; }

    #wrapper123{
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
        width:385px;
        margin-left:35px;
        border:1px solid #acacac; }

    #submit { width: 60px; }

    .error { color: #ff0000; }

    #menu { padding:12.5px 25px 12.5px 25px; }

    .welcome { float:left; }

    .logout { float:right; }

    .msgln { margin:0 0 2px 0; }

</style>
@section('script')
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
        var user_fullname = $("#user_full_name").val();
        var intervalId = window.setInterval(function(){
                autoLoad();
            }, 5000);
        function scrollToBottom() {
            messages.scrollTop = messages.scrollHeight;
        }
        scrollToBottom();
        $("#submitmsg").click(function(){
            var clientmsg = $("#usermsg").val();
            var id_user = $("#user_id").val();
            var time = "<?php echo '('.date('Y-m-d H:i:s').')'; ?>";
            // $("#chatbox").html(time+' '+"<b>Bạn: </b>"+clientmsg+"<br>");
            $("#usermsg").attr("value", "");
            // $('input[name="usermsg"]').val("");
            $.ajax({
                url: "{{url('rep-tin-nhan')}}",
                type: "POST",
                cache:false,
                data: {text: clientmsg,id_user: id_user,time: time,_token: "{{csrf_token()}}"},
                success:function(data){
                        let string = "";
                        var getData = JSON.parse(data);
                        // const getData = JSON.stringify(data);
                        getData.forEach(function(item, index) {
                            if(item.statut==1){
                                string = string +'<i style="color:red;">'+  item.time +' '+"<b>"+user_fullname+": </b>"+item.content+"</i><br>";
                            }
                            else string =string+item.time +' '+"<b>H-Tech Shop: </b>"+item.content +"<br>";
                        });
                        document.getElementById("chatbox").innerHTML = string;
                        scrollToBottom();
                    }
            });
        });
        function autoLoad(){
                var time = "<?php echo '('.date('Y-m-d H:i:s').')'; ?>";
                var id_user = $("#user_id").val();
                $.ajax({
                    url: "{{url('rep-tin-nhan')}}",
                    type: "POST",
                    cache:false,
                    data: {load_data: 1,id_user: id_user,_token: "{{csrf_token()}}"},
                    success:function(data){
                        let string = "";
                        var getData = JSON.parse(data);
                        // const getData = JSON.stringify(data);
                        getData.forEach(function(item, index) {
                            if(item.statut==1){
                                string = string +'<i style="color:red;">'+  item.time +' '+"<b>"+user_fullname+": </b>"+item.content+"</i><br>";
                            }
                            else string =string+item.time +' '+"<b>H-Tech Shop: </b>"+item.content +"<br>";
                        });
                        document.getElementById("chatbox").innerHTML = string;
                        scrollToBottom();
                    }
                });
            }
    });
</script>
@endsection

@extends('pages/admin/layout/master')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    }
    .pagination a.active {
    background-color: dodgerblue;
    color: white;
    }
    .pagination a:hover:not(.active) {
        background-color: #ddd;
    }
    tr:hover{
        cursor: pointer;
    }
</style>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tin nhắn mới</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
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
                        <div class="table-responsive">
                            {{-- Danh mục tìm kiếm --}}
                            <table class="table">
                                <form enctype="multipart/form-data" method="post" action="{{url('admin/tim-kiem-tin-nhan')}}">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <tr>
                                        <td>
                                            <input type="text"  class="form-control" name="th_id_user" placeholder="Mã khách hàng..." >
                                        </td>
                                        <td>
                                            <input type="text"  class="form-control" name="th_email" placeholder="Email khách hàng..." >
                                        </td>
                                        <td>
                                            <input type="text"  class="form-control" name="th_phone" placeholder="Sđt khách hàng..." >
                                        </td>
                                        <td>
                                            <select name="th_member" class="form-control" style="width: 150px; text-align: center;">
                                                <option value="-1">--Member--</option>
                                                @foreach ($ds_member as $member)
                                                    <option value="{{$member->member}}">{{$member->member}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-outline btn-primary">
                                                Tìm kiếm
                                            </button>
                                        </td>
                                    </tr>
                                </form>
                            </table>
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th><b>#</b></th>
                                        <th><b>Mã KH</b></th>
                                        <th><b>Tên Kh</b></th>
                                        <th><b>Thành viên</b></th>
                                        <th><b>Email</b></th>
                                        <th><b>Điện thoại</b></th>
                                        <th><b>Nội dung</b></th>
                                        <th><b>Thời gian</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    @foreach ($new_chat_list as $new)
                                    <tr onclick="window.location='<?php echo url('admin/chi-tiet-tin-nhan/'.$new->id_user)?>'">
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{ $new->id_user}}</td>
                                        <td>{{ $new->first_name.' '.$new->last_name}}</td>
                                        <td >{{ $new->member}}</td>
                                        <td >{{ $new->email}}</td>
                                        <td>{{ $new->phone}}</td>
                                        <td>{{ $new->content}}</td>
                                        <td>{{ $new->time_lastest}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-5"></div>
                                <?php if($new_chat_list->count()>0)	{ ?>
                                  <div class="pagination" >
                                    <li style="align-content: center;">
                                      <a class="<?php echo $new_chat_list->currentPage()==1?"disabled":"" ?>" href="{{$new_chat_list->url(1)}}">&laquo;</a>
                                      <?php
                                      $start = $new_chat_list->currentPage()-1;
                                      $end =$new_chat_list->currentPage()+2;
                                      if($new_chat_list->lastPage()<=$end) $end = $new_chat_list->lastPage();
                                      if(1>=$start) $start = 1;
                                        for($i=$start;$i<=$end;$i++){ ?>
                                         <a class="<?php echo $new_chat_list->currentPage()==$i?"disabled":"" ?>" href="{{$new_chat_list->url($i)}}">{{$i}}</a>
                                    <?php
                                        }
                                      ?>
                                        <a class="<?php echo $new_chat_list->currentPage()==$new_chat_list->lastPage()?"disabled":"" ?>" href="{{$new_chat_list->url($new_chat_list->lastPage())}}">&raquo;</a>
                                    </li>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<style>
	a.one:visited {color:#323233;}
	a.one:hover {color:#0000ff;}
	</style>
@endsection

@extends('layouts.app')
@section('title')
{{$title}}
@endsection
@section('content')
@if ( !$posts->count() )
Không có gì!!!!
@else

    <h3 class="text-center" style="color:red">NĂM HỌC 2020 - 2021</h3>
   @if (!Auth::guest() && Auth::user()->can_post())
    <h2 class="text-center"><a href="{{ url('/new-post') }}"><button class="btn btn-success">Đăng ký lịch dạy</button></a>&emsp;<a href="{{ url('/user/'.Auth::id().'/posts') }}"><button class="btn btn-success">Tiết dạy của tôi</button></a></h2>
   @endif

    <div class="table-responsive">
                <table class="table table-striped table-bordered text-center table-sm">
                    <thead class="table-warning">
                        <tr>
                            <th style="width: 3%">TT</th>
                            <th style="width: 8%">Ngày dạy</th>
                            <th style="width: 3%">Thứ</th>
                            <th style="width: 5%">Buổi</th>
                            <th style="width: 3%">Tiết</th>
                            <th style="width: 4%">Lớp</th>
                            <th style="width: 10%">Phòng</th>
                            <th style="width: 7%">Môn</th>
                            <th style="width: 35%">Tên bài dạy</th>
                            <th style="width: 17%">Giáo viên dạy</th>
                            <th style="width: 5%">Chọn</th>
                        </tr>
                    </thead>
                    <tbody>
    @foreach( $posts as $post )
    <?php $ngayday=strtotime($post->ngayday); $today=strtotime(date('Y-m-d')); $dangky=strtotime($post->created_at); ?>
    @if ($ngayday < $today)
    <tr style="color:#888888">
        <td>{{ $index++ }}</td>
        <td><?php $ngayday=strtotime($post->ngayday); $ngaymoi=date('d-m-Y',$ngayday); echo $ngaymoi; ?></td>
        <td>{{ $post->thu}}</td>
        <td>{{ $post->buoi}}</td>
        <td>{{ $post->tiet}}</td>
        <td>{{ $post->lop}}</td>
        <td>{{ $post->phong}}</td>
        <td>{{ $post->mon}}</td>
        <td>{{ $post->tenbai}}</td>
        <td>{{ $post->tengv}}</td>
        <td>@if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin()))
        @if($post->active == '1')
        <a href="{{ url('edit/'.$post->slug)}}"><button class="btn-success">Sửa</button></a>
        @else
        <a href="{{ url('edit/'.$post->slug)}}"><button class="btn btn-success">Edit Draft</button></a>
        @endif
        @endif
      </td>
    </tr>
    @endif

    @if ($dangky > $today)
    <tr style="color:red">
        <td>{{ $index++ }}</td>
        <td><?php $ngayday=strtotime($post->ngayday); $ngaymoi=date('d-m-Y',$ngayday); echo $ngaymoi; ?></td>
        <td>{{ $post->thu}}</td>
        <td>{{ $post->buoi}}</td>
        <td>{{ $post->tiet}}</td>
        <td>{{ $post->lop}}</td>
        <td>{{ $post->phong}}</td>
        <td>{{ $post->mon}}</td>
        <td>{{ $post->tenbai}}</td>
        <td>{{ $post->tengv}}</td>
         <td>@if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin()))
        @if($post->active == '1')
        <a href="{{ url('edit/'.$post->slug)}}"><button class="btn-success">Sửa</button></a>
        @else
        <a href="{{ url('edit/'.$post->slug)}}"><button class="btn btn-success">Edit Draft</button></a>
        @endif
        @endif
      </td>
    </tr>
    @elseif ($ngayday >= $today)
     <tr style="color:blue">
        <td>{{ $index++ }}</td>
        <td><?php $ngayday=strtotime($post->ngayday); $ngaymoi=date('d-m-Y',$ngayday); echo $ngaymoi; ?></td>
        <td>{{ $post->thu}}</td>
        <td>{{ $post->buoi}}</td>
        <td>{{ $post->tiet}}</td>
        <td>{{ $post->lop}}</td>
        <td>{{ $post->phong}}</td>
        <td>{{ $post->mon}}</td>
        <td>{{ $post->tenbai}}</td>
        <td>{{ $post->tengv}}</td>
         <td>@if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin()))
        @if($post->active == '1')
        <a href="{{ url('edit/'.$post->slug)}}"><button class="btn-success">Sửa</button></a>
        @else
        <a href="{{ url('edit/'.$post->slug)}}"><button class="btn btn-success">Edit Draft</button></a>
        @endif
        @endif
      </td>
    </tr>
    @endif
    @endforeach
                   
                    </tbody>
                </table>
                </div>


  
  {!! $posts->render() !!}

@endif
@endsection

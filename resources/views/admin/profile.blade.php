@extends('layouts.app')
@section('title')
Thông tin của {{ $user->name }}
@endsection
@section('content')
<div>
  <ul class="list-group">
    <li class="list-group-item">
      Joined on {{$user->created_at->format('M d,Y \a\t h:i a') }}
    </li>
    <li class="list-group-item panel-body">
      <table class="table-padding">
        <style>
          .table-padding td {
            padding: 3px 8px;
          }
        </style>
        <tr>
          <td>Tổng số tiết đã đăng ký</td>
          <td> {{$posts_count}}</td>
          @if($author && $posts_count)
          <td><a href="{{ url('/my-all-posts')}}">Xem tất cả</a></td>
          @endif
        </tr>
        <tr>
          <td>Tổng số tiết đã thực hiện</td>
          <td>{{$posts_active_count}}</td>
          @if($posts_active_count)
          <td><a href="{{ url('/user/'.$user->id.'/posts')}}">Xem tất cả</a></td>
          @endif
        </tr>
        <tr>
          <td>Lưu nháp </td>
          <td>{{$posts_draft_count}}</td>
          @if($author && $posts_draft_count)
          <td><a href="{{ url('my-drafts')}}">Xem tất cả</a></td>
          @endif
        </tr>
      </table>
    </li>
  </ul>
</div>


@endsection
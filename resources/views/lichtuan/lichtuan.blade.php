@extends('layouts.app')
@section('title')
{{$title}}
@endsection
@section('content')
@if ( !$lichtuans->count() )
Không có gì!!!!
@else

    <h3 class="text-center" style="color:red">NĂM HỌC 2021 - 2022</h3>
   @if (!Auth::guest() && Auth::user()->can_post())
    <h2 class="text-center"><a href="{{ url('/new-lichtuan') }}"><button class="btn btn-success">Thêm lịch tuần mới</button></a>&emsp;<a href="{{ url('/user/'.Auth::id().'/lichtuans') }}"><button class="btn btn-success">Sửa lịch tuần</button></a></h2>
   @endif

    <div class="table-responsive">
                <table class="table table-striped table-bordered text-center table-sm">
                    <thead class="table-warning">
                        <tr>
                            <th style="width: 80%">Tuần</th>
                            <th style="width: 20%">Chọn</th>
                        </tr>
                    </thead>
                    <tbody>
    @foreach( $lichtuans as $lichtuan )

    <tr style="color:#888888">
        <td><a href="lichtuan/{{$lichtuan->slug}}">{{ $lichtuan->tuan}}&nbsp; (Từ ngày: {{ $lichtuan->tungay}} - Đến ngày: {{ $lichtuan->denngay}})</a></td>
        <td>@if(!Auth::guest() && ($lichtuan->author_id == Auth::user()->id || Auth::user()->is_admin()))
        @if($lichtuan->active == '1')
        <a href="{{ url('edit/'.$lichtuan->slug)}}"><button class="btn-success">Sửa</button></a>
        @else
        <a href="{{ url('edit/'.$lichtuan->slug)}}"><button class="btn btn-success">Edit Draft</button></a>
        @endif
        @endif
        </td>
    </tr>

    @endforeach
                   
                    </tbody>
                </table>
    </div>


  
  {!! $lichtuans->render() !!}

@endif
@endsection

   
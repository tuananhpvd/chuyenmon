@extends('layouts.app')
@section('title')
@if($lichtuan)
{{ $lichtuan->title }}
@if(!Auth::guest() && ($lichtuan->author_id == Auth::user()->id || Auth::user()->is_admin()))
<button class="btn" style="float: right"><a href="{{ url('edit/'.$lichtuan->slug)}}">Edit Post</a></button>
@endif
@else
Page does not exist
@endif
@endsection
@section('title-meta')
<p>{{ $lichtuan->created_at}} By <a href="{{ url('/user/'.$lichtuan->author_id)}}">{{ $lichtuan->author->name }}</a></p>
@endsection
@section('content')
@if($lichtuan)
<div class="table-responsive">
                <table class="table table-striped table-bordered text-center table-sm">
                    <thead class="table-warning">
                        <tr>
                            <th style="width: 10%">Ngày</th>
                            <th style="width: 10%">Thứ</th>
                            <th style="width: 60%">Nội dung</th>
                            <th style="width: 20%">Thực hiện</th>
                        </tr>
                    </thead>
                    <tbody>
    

    <tr style="color:#888888">
        <td>2021-08-09</td>
        <td>Hai</td>
        <td>{!! $lichtuan->ndhai !!}</td>
        <td>{!! $lichtuan->thhai !!}</td>
    </tr>
    <tr style="color:#888888">
        <td>2021-08-10</td>
        <td>Ba</td>
        <td>{!! $lichtuan->ndba !!}</td>
        <td>{!! $lichtuan->thba !!}</td>
    </tr>
    <tr style="color:#888888">
        <td>2021-08-11</td>
        <td>Tư</td>
        <td>{!! $lichtuan->ndtu !!}</td>
        <td>{!! $lichtuan->thtu !!}</td>
    </tr>
    <tr style="color:#888888">
        <td>2021-08-12</td>
        <td>Năm</td>
        <td>{!! $lichtuan->ndnam !!}</td>
        <td>{!! $lichtuan->thnam !!}</td>
    </tr>
    <tr style="color:#888888">
        <td>2021-08-13</td>
        <td>Sáu</td>
        <td>{!! $lichtuan->ndsau !!}</td>
        <td>{!! $lichtuan->thsau !!}</td>
    </tr>
    <tr style="color:#888888">
        <td>2021-08-14</td>
        <td>Bảy</td>
        <td>{!! $lichtuan->ndbay !!}</td>
        <td>{!! $lichtuan->thbay !!}</td>
    </tr>
    <tr style="color:#888888">
        <td>2021-08-15</td>
        <td>Chủ nhật</td>
        <td>{!! $lichtuan->ndcn !!}</td>
        <td>{!! $lichtuan->thcn !!}</td>
    </tr>

    
                   
                    </tbody>
                </table>
</div>


@else
404 error
@endif
@endsection
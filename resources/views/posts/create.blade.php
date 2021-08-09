@extends('layouts.app')
@section('title')
Đăng ký tiết dạy
@endsection
@section('content')

<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
      <div class="card w-50">
        <div class="card-body">
          <form data-toggle="validator" role="form" action='{{ url("/new-post") }}' method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{csrf_field()}}
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input required="true" type="date" class="form-control" placeholder="Ngày dạy" id="ngayday" name="ngayday">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
                    </div>
                    <select required="true" class="form-control" name="thu">
                        <option value="">--Chọn thứ--</option>
                        <option value="Hai">Hai</option>
                        <option value="Ba">Ba</option>
                        <option value="Tư">Tư</option>
                        <option value="Năm">Năm</option>
                        <option value="Sáu">Sáu</option>
                        <option value="Bảy">Bảy</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-cloud-sun"></i></span>
                    </div>
                    <select required="true" class="form-control" name="buoi">
                        <option value="">--Chọn buổi dạy--</option>
                        <option value="Sáng">Sáng</option>
                        <option value="Chiều">Chiều</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <select required="true" class="form-control" name="tiet">
                        <option value="">--Chọn tiết dạy--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-users"></i></span>
                    </div>
                    <select required="true" class="form-control" name="lop">
                        <option value="">--Chọn lớp dạy--</option>
                        <option value="10A1">10A1</option>
                        <option value="10A2">10A2</option>
                        <option value="10A3">10A3</option>
                        <option value="10A4">10A4</option>
                        <option value="10A5">10A5</option>
                        <option value="10A6">10A6</option>
                        <option value="10A7">10A7</option>
                        <option value="10A8">10A8</option>
                        <option value="10A9">10A9</option>
                        <option value="11B1">11B1</option>
                        <option value="11B2">11B2</option>
                        <option value="11B3">11B3</option>
                        <option value="11B4">11B4</option>
                        <option value="11B5">11B5</option>
                        <option value="11B6">11B6</option>
                        <option value="11B7">11B7</option>
                        <option value="11B8">11B8</option>
                        <option value="11B9">11B9</option>
                        <option value="11B10">11B10</option>
                        <option value="12C1">12C1</option>
                        <option value="12C2">12C2</option>
                        <option value="12C3">12C3</option>
                        <option value="12C4">12C4</option>
                        <option value="12C5">12C5</option>
                        <option value="12C6">12C6</option>
                        <option value="12C7">12C7</option>
                        <option value="12C8">12C8</option>
                        <option value="12C9">12C9</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-home"></i></span>
                    </div>
                    <select required="true" class="form-control" name="phong">
                        <option value="">--Chọn phòng dạy--</option>
                        <option value="301">301</option>
                        <option value="302">302</option>
                        <option value="303">303</option>
                        <option value="304">304</option>
                        <option value="305">305</option>
                        <option value="306">306</option>
                        <option value="201">201</option>
                        <option value="202">202</option>
                        <option value="203">203</option>
                        <option value="204">204</option>
                        <option value="205">205</option>
                        <option value="206">206</option>
                        <option value="101">101</option>
                        <option value="102">102</option>
                        <option value="103">103</option>
                        <option value="104">104</option>
                        <option value="105">105</option>
                        <option value="106">106</option>
                        <option value="Tin học">Tin học</option>
                        <option value="Ngoại ngữ">Ngoại ngữ</option>
                        <option value="Sân vận động">Sân vận động</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-book"></i></span>
                    </div>
                    <select required="true" class="form-control" name="mon">
                        <option value="">--Chọn môn dạy--</option>
                        <option value="Toán">Toán</option>
                        <option value="Vật lý">Vật lý</option>
                        <option value="Hóa học">Hóa học</option>
                        <option value="Sinh học">Sinh học</option>
                        <option value="Tin học">Tin học</option>
                        <option value="Ngữ văn">Ngữ văn</option>
                        <option value="Lịch sử">Lịch sử</option>
                        <option value="Địa lý">Địa lý</option>
                        <option value="GDCD">GDCD</option>
                        <option value="Tiếng Anh">Tiếng Anh</option>
                        <option value="Công nghệ">Công nghệ</option>
                        <option value="Thể dục">Thể dục</option>
                        <option value="QPAN">QPAN</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-edit"></i></span>
                    </div>
                    <input required="true" type="text" class="form-control" placeholder="Tên bài dạy" id="tenbai" name="tenbai">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input class="form-control" id="disabledInput" type="text" placeholder="{{ Auth::user()->name }} " disabled>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <input type="hidden" name="redirect" value="">
                <input type="submit" class="btn btn-success btn-lg btn-block" value="Lưu" name="publish">
              </div>
            </div>


          <div class="clear"></div>

          </form>

        </div>
      </div>
    </div>
  </div>

@endsection
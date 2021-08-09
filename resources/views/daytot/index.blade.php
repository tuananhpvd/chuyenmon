@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="text-center" style="color:red"></h3>
                <h3 class="text-center" style="color:blue"><b>LỊCH ĐĂNG KÝ DẠY TỐT, THAO GIẢNG</b></h3>
                <h4 class="text-center" style="color:red">NĂM HỌC 2020 - 2021</h4>
            </div>
            <div class="panel-body">
                <h2 class="text-center"><a href="#myModal" data-toggle="modal"><button class="btn btn-success"><b>Đăng ký lịch dạy</b></button></a>&emsp;<a href="#myModal" data-toggle="modal"><button class="btn btn-success"><b>Tiết dạy của tôi</b></button></a></h2>
            <h5 class="text-center" style="color:blue">Các tiết dạy được tự động xếp theo thứ tự tăng dần (tiết nào dạy trước xếp trên) và tiết nào đã qua thời gian dạy thì bị mờ đi.</h5>    
<!-- Modal HTML -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">              
                <h3 class="modal-title">ĐĂNG KÝ DẠY TỐT</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('post_add_daytot')}}">
                    <div class="form-group">
                        {{csrf_field()}}
                      <i class="far fa-calendar-alt"></i>
                      <input required="true" type="date" class="form-control" placeholder="Ngày dạy" id="ngayday" name="ngayday">
                    </div>
                      <div class="form-group">
                      <i class="far fa-clock"></i>
                      <select required="true" class="form-control" name="thu">
                        <option value="">--Chọn thứ--</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <i class="fas fa-cloud-sun"></i>
                        <select required="true" class="form-control" name="buoi">
                        <option value="">--Chọn buổi dạy--</option>
                        <option value="Sáng">Sáng</option>
                        <option value="Chiều">Chiều</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <i class="far fa-clock"></i>
                      <select required="true" class="form-control" name="tiet">
                        <option value="">--Chọn tiết dạy--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <i class="fas fa-users"></i>
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
                    <div class="form-group">
                      <i class="fas fa-home"></i>
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
                    <div class="form-group">
                      <i class="fas fa-book"></i>
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
                    <div class="form-group">
                      <i class="fas fa-edit"></i>
                      <input required="true" type="text" class="form-control" placeholder="Tên bài dạy" id="tenbai" name="tenbai">
                    </div>
                    <div class="form-group">
                      <i class="fa fa-user"></i>
                      <select required="true" class="form-control" name="tengv">
                        <option value="">--Họ và tên giáo viên--</option>
                      <option value="Phan Thị Li Li A">Phan Thị Li Li A</option>
<option value="Võ Thị Mỹ Anh">Võ Thị Mỹ Anh</option>
<option value="Lê Thị Phương Ánh">Lê Thị Phương Ánh</option>
<option value="Võ Thị Ngọc Bích">Võ Thị Ngọc Bích</option>
<option value="Đinh Hữu Công">Đinh Hữu Công</option>
<option value="Đỗ Ngọc Cư">Đỗ Ngọc Cư</option>
<option value="Nguyễn Thị Đà">Nguyễn Thị Đà</option>
<option value="Nguyễn Ngọc Đồng">Nguyễn Ngọc Đồng</option>
<option value="Nguyễn Thị Thu Duyên">Nguyễn Thị Thu Duyên</option>
<option value="Lê Thị Hạnh Duyên">Lê Thị Hạnh Duyên</option>
<option value="Biện Thị Thu Hà">Biện Thị Thu Hà</option>
<option value="Nguyễn Thị Thu Hà">Nguyễn Thị Thu Hà</option>
<option value="Nguyễn Thị Xuân Hằng">Nguyễn Thị Xuân Hằng</option>
<option value="Trần Thị Thu Hằng">Trần Thị Thu Hằng</option>
<option value="Lê Thị Thu Hằng">Lê Thị Thu Hằng</option>
<option value="Nguyễn Thị Hiệp">Nguyễn Thị Hiệp</option>
<option value="Lê Thị Hoa">Lê Thị Hoa</option>
<option value="Nguyễn Thị Quỳnh Hoa">Nguyễn Thị Quỳnh Hoa</option>
<option value="Nguyễn Thị  Thanh Huệ">Nguyễn Thị  Thanh Huệ</option>
<option value="Nguyễn Vũ Hùng">Nguyễn Vũ Hùng</option>
<option value="Hồ Thị Hưởng">Hồ Thị Hưởng</option>
<option value="Trần Thị Mỹ Khang">Trần Thị Mỹ Khang</option>
<option value="Mai Duy Khương">Mai Duy Khương</option>
<option value="Nguyễn Thị Diễm Kiều">Nguyễn Thị Diễm Kiều</option>
<option value="Nguyễn Thị Bích Kiều">Nguyễn Thị Bích Kiều</option>
<option value="Diệp Thị Linh">Diệp Thị Linh</option>
<option value="Phan Thị Mỹ Linh">Phan Thị Mỹ Linh</option>
<option value="Cao Thị Loan">Cao Thị Loan</option>
<option value="Nguyễn Xuân Long">Nguyễn Xuân Long</option>
<option value="Lương Thị Mỹ Lý">Lương Thị Mỹ Lý</option>
<option value="Nguyễn Ái Nam">Nguyễn Ái Nam</option>
<option value="Phạm Thị Nghĩa">Phạm Thị Nghĩa</option>
<option value="Nguyễn Thị Thái Ngộ">Nguyễn Thị Thái Ngộ</option>
<option value="Văn Kim Ngọc">Văn Kim Ngọc</option>
<option value="Phan Lê Ái Ngọc">Phan Lê Ái Ngọc</option>
<option value="Nguyễn Văn Nhiên">Nguyễn Văn Nhiên</option>
<option value="Dương Thành Phú">Dương Thành Phú</option>
<option value="Tống Ngọc Phúc">Tống Ngọc Phúc</option>
<option value="Huỳnh Thị Lệ Quân">Huỳnh Thị Lệ Quân</option>
<option value="Ngô Minh Quyền">Ngô Minh Quyền</option>
<option value="Dương Bình Thái">Dương Bình Thái</option>
<option value="Trần Phước Thái">Trần Phước Thái</option>
<option value="Cao Thị Thu Thanh">Cao Thị Thu Thanh</option>
<option value="Phạm Văn Thịnh">Phạm Văn Thịnh</option>
<option value="Nguyễn Thị Kim Thu">Nguyễn Thị Kim Thu</option>
<option value="NguyễnThị Mộng Thường">NguyễnThị Mộng Thường</option>
<option value="Trần Thị Bích Tiền">Trần Thị Bích Tiền</option>
<option value="Nguyễn Thế Toàn">Nguyễn Thế Toàn</option>
<option value="Lê Thị Như Trang">Lê Thị Như Trang</option>
<option value="Nguyễn Thị Vũ Trinh">Nguyễn Thị Vũ Trinh</option>
<option value="Nguyễn Trần Trọng">Nguyễn Trần Trọng</option>
<option value="Tăng Thị Tuyền">Tăng Thị Tuyền</option>
<option value="Nguyễn Tấn Vịnh">Nguyễn Tấn Vịnh</option>
<option value="Trần Võ Vũ">Trần Võ Vũ</option>
<option value="Võ Thị Huyền Vy">Võ Thị Huyền Vy</option>
<option value="Phạm Thị Minh Huệ">Phạm Bá Luân</option>
<option value="Trương Thị Luận">Trương Thị Luận</option>
<option value="Võ Thị Huyền Vy">Huỳnh Bảo Đăng</option>
<option value="Phạm Thị Minh Huệ">Đặng Thị Phương Hằng</option>
<option value="Trương Thị Luận">Phạm Hoàng Linh</option>
</select>

                    </div>
                    <h2 class="text-center"><button class="btn btn-success">Lưu</button></h2>
                </form>             
                
            </div>

        </div>
    </div>
</div>     

                <div class="table-responsive">
                <table class="table table-striped table-bordered text-center table-sm" style="margin-top:10px">
                    <thead class="table-warning">
                        <tr>
                            <th style="width: 4%">TT</th>
                            <th style="width: 10%">Ngày dạy</th>
                            <th style="width: 3%">Thứ</th>
                            <th style="width: 5%">Buổi</th>
                            <th style="width: 4%">Tiết</th>
                            <th style="width: 5%">Lớp</th>
                            <th style="width: 10%">Phòng</th>
                            <th style="width: 9%">Môn</th>
                            <th style="width: 33%">Tên bài dạy</th>
                            <th style="width: 17%">Giáo viên dạy</th>
                        </tr>
                    </thead>
                    <tbody>

@foreach ($daytotList as $daytot)
    <?php $ngayday=strtotime($daytot->ngayday); $today=strtotime(date('Y-m-d')); $dangky=strtotime($daytot->created_at); ?>
    @if ($ngayday < $today)
    <tr style="color:#808080">
        <td>{{ $index++ }}</td>
        <td><?php $ngayday=strtotime($daytot->ngayday); $ngaymoi=date('d-m-Y',$ngayday); echo $ngaymoi; ?></td>
        <td>{{ $daytot->thu}}</td>
        <td>{{ $daytot->buoi}}</td>
        <td>{{ $daytot->tiet}}</td>
        <td>{{ $daytot->lop}}</td>
        <td>{{ $daytot->phong}}</td>
        <td>{{ $daytot->mon}}</td>
        <td>{{ $daytot->tenbai}}</td>
        <td>{{ $daytot->tengv}}</td>
    </tr>
    @endif

    @if ($dangky > $today)
    <tr style="color:red">
        <td>{{ $index++ }}</td>
        <td><?php $ngayday=strtotime($daytot->ngayday); $ngaymoi=date('d-m-Y',$ngayday); echo $ngaymoi; ?></td>
        <td>{{ $daytot->thu}}</td>
        <td>{{ $daytot->buoi}}</td>
        <td>{{ $daytot->tiet}}</td>
        <td>{{ $daytot->lop}}</td>
        <td>{{ $daytot->phong}}</td>
        <td>{{ $daytot->mon}}</td>
        <td>{{ $daytot->tenbai}}</td>
        <td>{{ $daytot->tengv}}</td>
    </tr>
    @elseif ($ngayday >= $today)
     <tr style="color:blue">
        <td>{{ $index++ }}</td>
        <td><?php $ngayday=strtotime($daytot->ngayday); $ngaymoi=date('d-m-Y',$ngayday); echo $ngaymoi; ?></td>
        <td>{{ $daytot->thu}}</td>
        <td>{{ $daytot->buoi}}</td>
        <td>{{ $daytot->tiet}}</td>
        <td>{{ $daytot->lop}}</td>
        <td>{{ $daytot->phong}}</td>
        <td>{{ $daytot->mon}}</td>
        <td>{{ $daytot->tenbai}}</td>
        <td>{{ $daytot->tengv}}</td>
    </tr>
    @endif

@endforeach
                   
                    </tbody>
                </table>
                </div>
                
                <h2 class="text-center"><a href="#myModal" data-toggle="modal"><button class="btn btn-success"><b>Đăng ký lịch dạy</b></button></a>&emsp;<a href="#myModal" data-toggle="modal"><button class="btn btn-success"><b>Tiết dạy của tôi</b></button></a></h2>
            </div>
        </div>
    </div>
@endsection


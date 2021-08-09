<h1 style="color:red;">Thông báo!</h1>
@foreach ($tengv as $ten)
<p style="color:blue; font-size: 20px;">Đây là email gửi tự động từ Hệ thống quản lý chuyên môn để thông báo rằng Thầy/Cô:<p>
<h2 style="color:red;"><center>{{ $ten->tengv}}</center></h2>
<p style="color:blue; font-size: 20px;"> vừa mới đăng ký dạy tốt trên hệ thống.</p>
@endforeach
<p style="color:blue; font-size: 20px;">Để xem thông tin cụ thể, thầy cô bấm vào link: <a href="/chuyenmon/public/daytot/" target="_blank">Trang đăng ký dạy tốt</a></p>
<p style="color:blue; font-size: 20px;">Thầy cô thông cảm nếu email này đã làm phiền!</p>
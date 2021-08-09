<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   /* public function basic_email() {
      $data = array('name'=>"Virat Gandhi");
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('tuananh.tpt@gmail.com', 'Thử nghiệm')->subject('Laravel Basic Testing Mail');
         $message->to('ttanh.thpt.pvd@phuyen.edu.vn', 'Thử nghiệm')->subject('Laravel Basic Testing Mail');
         $message->from('thpt.pvd.py@gmail.com','Virat Gandhi');
      });
      echo "Basic Email Sent. Check your inbox.";
   } */
   public function html_email(Request $request) {
   	$magv=DB::table('daytot')->max('magv');
   	$tengv=DB::table('daytot')->select('tengv')->where('magv','=',$magv)->get();

      $data = array('name'=>"Ban chuyên môn", 'tengv'=>$tengv);

      Mail::send('mail', $data, function($message) {
        $message->to('tuananh.tpt@gmail.com', '')->subject('Thông báo: Có giáo viên vừa đăng ký dạy tốt!');
		

        $message->from('ttanh.thpt.pvd@phuyen.edu.vn','Ban chuyên môn');
      });

      //echo "HTML Email Sent. Check your inbox.";
      return redirect()->route('view_daytot_list');
   }
   /* public function attachment_email() {
      $data = array('name'=>"Virat Gandhi");
      Mail::send('mail', $data, function($message) {
         $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('path/to/attachment.txt');
         $message->attach('path/to/image.png');
         $message->from('xyz@gmail.com','Virat Gandhi');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }*/
}

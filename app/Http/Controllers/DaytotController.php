<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DaytotController extends Controller
{
    public function index(Request $request) {
    	$daytotList = DB::table('daytot')
    	//moi
    	//	->leftJoin('giaovien', 'giaovien.magv', '=', 'daytot.magv')
    	//	->select('daytot.*', 'giaovien.tengv')
    	//het
    		->orderBy('ngayday', 'asc')
    		->orderBy('buoi', 'desc')
    		->orderBy('tiet', 'asc')
    		->paginate(200);
    	//$authorList = Author::orderBy('created_at', 'desc')->paginate(20);

    	return view('daytot.index')->with([
    		'index'=>1,
    		'daytotList' => $daytotList
    	]);
    }
    public function viewAdd(Request $request) {
    	return view('daytot.add');
    }
    public function postAddDaytot(Request $request){
    	$magv = $request->magv;
        
    	$daytotList = DB::table('daytot')
    		->where('magv', $magv)
    		->get();
    	if($daytotList != null && count($daytotList) > 0){
    		return 'Đã có lỗi!!!';
    	}	

    	DB::table('daytot')->insert([
				'magv'     => $request->magv,
            	'tengv' 	=> $request->tengv,
            	'ngayday' 	=> $request->ngayday,
                'thu' => $request->thu,
	           	'buoi' => $request->buoi,
	            'tiet' => $request->tiet, 
	            'lop' => $request->lop, 
	            'phong' => $request->phong, 
	            'mon' => $request->mon,
	            'tenbai' => $request->tenbai,
				'created_at'   => date('Y-m-d H:i:s'),
				'updated_at'   => date('Y-m-d H:i:s')
			]);
    	//return redirect()->route('view_daytot_list');
        //return redirect('sendhtmlemail')
        //        ->with('message', 'Send email success!');

        return redirect('sendhtmlemail');
    }

}


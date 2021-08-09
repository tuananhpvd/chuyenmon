<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lichtuans;
use App\Http\Controllers\Controller;

class LichtuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lichtuans = Lichtuans::where('active', '1')->orderBy('created_at', 'asc')->paginate(200);
        $title = 'LỊCH CÔNG TÁC TUẦN';
        
        //return view('lichtuan.lichtuan');
        return view('lichtuan.lichtuan')->with([
            //'index'=>1,
            'lichtuans'=> $lichtuans,
            'title'=> $title
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if ($request->user()->can_post()) {
          return view('lichtuan.lichtuan');
        } else {
          return redirect('/')->withErrors('Bạn chưa được cấp quyền thực hiện chức năng này!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $lichtuan = Lichtuans::where('slug', $slug)->first();

    if ($lichtuan) {
      if ($lichtuan->active == false)
        return redirect('/')->withErrors('không tìm thấy gì');
      $comments = $lichtuan->comments;
    } else {
      return redirect('/')->withErrors('không tìm thấy đâu');
    }
    return view('lichtuan.show')->withLichtuan($lichtuan)->withComments($comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Posts;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;

// note: use true and false for active posts in postgresql database
// here '0' and '1' are used for active posts because of mysql database

class PostController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $posts = Posts::where('active', '1')->orderBy('created_at', 'asc')->paginate(200);
    $title = 'LỊCH ĐĂNG KÝ DẠY TỐT, THAO GIẢNG';
   

    //return view('home')->withPosts($posts)->withTitle($title);
    return view('home')->with([
        'index'=>1,
        'posts'=> $posts,
        'title'=> $title
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create(Request $request)
  {
    // 
    if ($request->user()->can_post()) {
      return view('posts.create');
    } else {
      return redirect('/')->withErrors('Bạn chưa được cấp quyền thực hiện chức năng này!');
    }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $post = new Posts();
    //dạy tốt
    $post->ngayday = $request->get('ngayday');
    $post->thu = $request->get('thu');
    $post->buoi = $request->get('buoi');
    $post->tiet = $request->get('tiet');
    $post->lop = $request->get('lop');
    $post->phong = $request->get('phong');
    $post->mon = $request->get('mon');
    $post->tenbai = $request->get('tenbai');
    //$post->tengv = $request->get('tengv');
    $post->tengv = $request->user()->name;
    //
    //$post->title = $request->get('title');
    //$post->body = $request->get('body');
    $post->slug = Str::slug($post->tenbai);

    //$duplicate = Posts::where('slug', $post->slug)->first();
    //if ($duplicate) {
    //  return redirect('new-post')->withErrors('Title already exists.')->withInput();
    //}

    $post->author_id = $request->user()->id;
    if ($request->has('save')) {
      $post->active = 0;
      $message = 'Đã lưu thành công!';
    } else {
      $post->active = 1;
      $message = 'Đã lưu thành công!';
    }
    $post->save();
    //return redirect('edit/' . $post->slug)->withMessage($message);
    return redirect('/')->withMessage($message);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($slug)
  {
    $post = Posts::where('slug', $slug)->first();

    if ($post) {
      if ($post->active == false)
        return redirect('/')->withErrors('không tìm thấy mà');
      $comments = $post->comments;
    } else {
      return redirect('/')->withErrors('không tìm thấy sao anh');
    }
    return view('posts.show')->withPost($post)->withComments($comments);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit(Request $request, $slug)
  {
    $post = Posts::where('slug', $slug)->first();
    if ($post && ($request->user()->id == $post->author_id || $request->user()->is_admin()))
      return view('posts.edit')->with('post', $post);
    else {
      return redirect('/')->withErrors('Bạn chưa được cấp quyền!');
    }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request)
  {
    //
    $post_id = $request->input('post_id');
    $post = Posts::find($post_id);
    if ($post && ($post->author_id == $request->user()->id || $request->user()->is_admin())) {
      //$title = $request->input('title');
      //$slug = Str::slug($title);
      //$duplicate = Posts::where('slug', $slug)->first();
      //if ($duplicate) {
      //  if ($duplicate->id != $post_id) {
      //    return redirect('edit/' . $post->slug)->withErrors('Title already exists.')->withInput();
      //  } else {
      //    $post->slug = $slug;
      //  }
      //}

    $post->ngayday = $request->get('ngayday');
    $post->thu = $request->get('thu');
    $post->buoi = $request->get('buoi');
    $post->tiet = $request->get('tiet');
    $post->lop = $request->get('lop');
    $post->phong = $request->get('phong');
    $post->mon = $request->get('mon');
    $post->tenbai = $request->get('tenbai');
    //$post->tengv = $request->get('tengv');
    $post->tengv = $request->user()->name;
    //
    //$post->title = $request->get('title');
    //$post->body = $request->get('body');
    $post->slug = Str::slug($post->tenbai);

      if ($request->has('save')) {
        $post->active = 0;
        $message = 'Đã lưu thành công!';
        $landing = '/';
        //$landing = 'edit/' . $post->slug;
      } else {
        $post->active = 1;
        $message = 'Đã lưu thành công!';
        $landing = $post->slug;
      }
      $post->save();
      //return redirect($landing)->withMessage($message);
      return redirect('/')->withMessage($message);
    } else {
      return redirect('/')->withErrors('Bạn chưa được cấp quyền!');
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request, $id)
  {
    //
    $post = Posts::find($id);
    if ($post && ($post->author_id == $request->user()->id || $request->user()->is_admin())) {
      $post->delete();
      $data['message'] = 'Đã xóa thành công!';
    } else {
      $data['errors'] = 'Không thành Công!';
    }

    return redirect('/')->with($data);
  }
}

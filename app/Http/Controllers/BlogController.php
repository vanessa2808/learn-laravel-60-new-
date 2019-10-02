<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
 
    public function get_addBlog()
    {
        return view('admin/blog/add_blog');
    }
     public function post_addBlog(Request $request)
    {
        $title = $request->title;
        
        $author = $request->author;
        $created_at = date('Y-m-d h:i:s');
        $image = 'default.png';
        $detail = $request->detail;
        if ($request->hasfile('image')){
          $file = $request->image; 
          $image = $file->getClientOriginalName();
          $file->move('admin/uploads/blog', $image);
        }

        DB::insert('INSERT INTO blog (title, image, detail, author, created_at) VALUES (?, ?, ?, ?, ?)', [$title, $image,$detail, $author, $created_at]);
        return redirect('admin/blog/list_blog');
    }
   
 

   
    public function list_blog()
    {
        $blog = DB::table('blog')->get();
      return view('admin/blog/list_blog', ['blog'=>$blog]);
    }

    public function get_editBlog($id)
    {
        //
    }

   
    
    public function post_editBlog(Request $request, $id)
    {
        //
    }

  
    public function delete_blog($id)
    {
        DB::table('blog')->where('id', $id)->delete();
     return redirect()->route('list_blog');
    }
}

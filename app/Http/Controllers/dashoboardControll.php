<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashoboardControll extends Controller
{
    public  function  index()
    {
        return view('pages.dashboard_home');
    }

    public  function  login_ui()
    {
        return view('dashboard_pages.login_ui');
    }

    public  function create_new_post_ui()
    {
        return view('dashboard_pages.create_new_post');
    }

    public function  all_user()
    {
        return view('dashboard_pages.user');
    }

    public function all_blog()
    {
        return view('dashboard_pages.post_pages.post_table');
    }


    public function view_published_post()
    {
        return view('dashboard_pages.post_pages.published_post');
    }

    public function view_draft_post()
    {
        return view('dashboard_pages.post_pages.draft_post');
    }

    public function view_deleted_post()
    {
        return view('dashboard_pages.post_pages.deleted_post');
    }

    public function category()
    {
        return view('dashboard_pages.category');
    }



    public  function  add_new_post(Request $request)
    {
       $title = $request->title;
       $slug = $request->slug;
       $body = $request->body;
       $publish_date = $request->publish_date;
       $category = $request->category;
       $image = $request->image;
        $post_id = rand(9999,1111);
       if(!empty($title) &&!empty($slug) &&!empty($body) &&!empty($publish_date) &&!empty($category) &&!empty($image)){

           $data = [
             'post_id' => $post_id,
             'author' => 'Ariyat sinha',
             'title' => $title,
             'slug' => $slug,
             'body' => $body,
             'publish_date' =>$publish_date,
             'category' => $category,
             'image' => $image,
             'publish_status' => 1
           ];
           $post_data_insert = DB::table('post')->insert($data);

           if ($post_data_insert){
               return back()->with('success','Your Post Creation Success!');
           }
       }else{
           return back()->with('title','Title field is Required*')
                ->with('slug','Slug field is Required*')
                ->with('body','Body field is Required*')
                ->with('publish_date','Publish Date field is Required*')
                ->with('category','Category field is Required*')
                ->with('image','Image field is Required*');
       }
    }

    public  function create_category(Request $request)
    {
        $category = [
          'category_name' => $request->category_name,
        ];
        if (!empty($request->category_name)) {
            $insert_category = DB::table('category')->insert($category);
            if ($insert_category){
                return back();
            }
        }else{
            return back();
        }

    }



    public  function  delete_post($id)
    {

        $select_post = DB::table('post')->where('id',$id)->get();
        foreach ($select_post as $post){
            $delete_post = [
                'post_id' => $post->post_id,
                'author' => 'Ariyat sinha',
                'title' => $post->title,
                'slug' => $post->slug,
                'body' => $post->body,
                'publish_date' => $post->publish_date,
                'category' => $post->category,
                'image' => $post->image,
                'publish_status' => 0,
            ];
        $insert_delete_post = DB::table('deleted_post')->insert($delete_post);
        if ($insert_delete_post){
            $delete = DB::table('post')->where('id',$id)->delete();
            if ($delete){
                return back()->with('post_deleted','Post deleted success!');
            }

            }

        }
    }



    public  function  edit_post($id)
    {
        $select_edit_data = DB::table('post')->where('id',$id)->get();
        return view('dashboard_pages.post_pages.update_post',compact('select_edit_data'));
    }


    public   function  update_post(Request $request)
    {
        $author = $request->author;
        $title = $request->title;
        $slug = $request->slug;
        $body = $request->body;
        $publish_date = $request->publish_date;
        $category = $request->category;
        $image = $request->image;
        $post_id = $request->post_id;

        if(!empty($title && $slug && $body&&$publish_date&&$category&&$image)){

            $data = [
                'author' => $author,
                'post_id' => $post_id,
                'title' => $title,
                'slug' => $slug,
                'body' => $body,
                'publish_date' =>$publish_date,
                'category' => $category,
                'image' => $image,
                'publish_status' => 1
            ];

          $post_data_insert = DB::table('post')->where('post_id',$post_id)->update($data);
          if ($post_data_insert){
              return redirect('/blogs');
          }
       }else{
            return back()
                ->with('category','Category field is Required*')
                ->with('image','Image field is Required*');
       }
    }


    public function edit_published_status($id)
    {
        $select_publish_id = DB::table('post')->where('post_id',$id)->update(['publish_status'=>0]);
        if ($select_publish_id){
            return back();
        }
    }

    public function edit_unpublished_status($id)
    {
        $select_publish_id = DB::table('post')->where('post_id',$id)->update(['publish_status'=>1]);
        if ($select_publish_id){
            return back();
        }
    }

    public  function  permanent_delete($id)
    {
        $permanent_delete= DB::table('deleted_post')->where('post_id',$id)->delete();
        if ($permanent_delete){
            $row_count = DB::table('deleted_post')->count();
            if ($row_count == 0){
                return redirect('/blogs');
            }else{
                return back()->with('post_delete','Post deleted success!');
            }
        }

    }

    public  function  undo_post($id)
    {
        $select_undo_post= DB::table('deleted_post')->where('post_id',$id)->get();

        foreach ($select_undo_post as $post){
            $delete_post = [
                'post_id' => $post->post_id,
                'author' => 'Ariyat sinha',
                'title' => $post->title,
                'slug' => $post->slug,
                'body' => $post->body,
                'publish_date' => $post->publish_date,
                'category' => $post->category,
                'image' => $post->image,
                'publish_status' => 1,
            ];

            $insert_undo_post = DB::table('post')->insert($delete_post);
            if ($insert_undo_post){
                $delete = DB::table('deleted_post')->where('post_id',$id)->delete();
                if ($delete){
                    $row_count = DB::table('deleted_post')->count();
                    if ($row_count == 0){
                        return redirect('/blogs')->with('post_undo','Post Undo success!');
                    }else{
                        return back()->with('post_undo','Post Undo success!');
                    }

                }

            }

        }

    }

    //category

    public function category_edit($id)
    {
        return $id;
    }
    public function category_delete($id)
    {
        $delete_data = DB::table('category')->where('id',$id)->delete();
        if($delete_data){
            return redirect('/category')->with('deleted','Category delete success');
        }
    }

    public  function active_category($id)
    {
        $unactivate = DB::table('category')->where('id',$id)->update(['publication_status' => 0]);
        return back();
    }

    public  function unactivated_category($id)
    {
        $activate = DB::table('category')->where('id',$id)->update(['publication_status' => 1]);
        return back();
    }








}

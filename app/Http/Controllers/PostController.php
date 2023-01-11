<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PostController extends Controller
{

    public function posts()
    {
        $posts = Post::all();
        return view("admin.posts",["posts"=>$posts]);
    }
    public function editPostForm($id){
        $post = Post::where('id',$id)->first();
        if($post){
            return view("admin.editPost",["post"=>$post]);
        }else{
            return abort(404);
        }
    }
    public function newPostForm()
    {

        return view("admin.newPost");
    }
    public function newPost(Request $request)
    {
        $validateData = $request->validate([
            'title' => ['required', 'string','max:128'],
            'content' => ['required', 'string','max:1000'],
            'thumbnail' => [ 'nullable','image','mimes:jpeg,jpg', 'max:200'],
            'enable' => ['string',"max:3"],
        ]);
        try{

            $pic = null;
            if(request()->hasfile('thumbnail')){
                $img = request()->thumbnail;
                $pic = 'postThumbnail_'.time().'.'.request()->thumbnail->getClientOriginalExtension();
                $imgFile = Image::make($img->getRealPath());
                $imgFile->resize(400, 400, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('thumbnails').'/'.$pic);

            }
            $user = Auth::guard("admin")->user();
            Post::create([
                "title"=>$request->post("title"),
                "content"=>$request->post("content"),
                "thumbnail"=>$request->has("thumbnail")?$pic:"noThumbnail.jpg",
                "enable"=>$request->has("enable")?$request->post("enable"):"off",
                "userId"=>$user->id
            ]);


            return redirect("/admin/posts");
        }
        catch (\Exception $e){
            return back()->with("error",$e->getMessage());
        }
    }
    public function editPost(Request $request)
    {
        $validateData = $request->validate([
            'id' => ['required', 'integer'],
            'content' => ['required', 'string','max:1000'],
            'thumbnail' => [ 'nullable','image','mimes:jpeg,jpg', 'max:200'],
            'enable' => [ 'string','max:3'],
        ]);
        try{
            $post = Post::find($request->post('id'));
            $pic = $post->thumnail;
            if(request()->hasfile('thumbnail')){
                $img = request()->thumbnail;
                $pic = 'postThumbnail_'.time().'.'.request()->thumbnail->getClientOriginalExtension();
                $imgFile = Image::make($img->getRealPath());
                $imgFile->resize(400, 400, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('thumbnails').'/'.$pic);
                if($post->thumbnail!=null){
                    File::delete(public_path("thumbnails/".$post->thumnail));
                }
            }

            if($post){
                $post->update([
                    "title"=>$request->post("title"),
                    "content"=>$request->post("content"),
                    "thumbnail"=>$pic,
                    "enable"=>$request->has("enable")?$request->post("enable"):"off",

                ]);
                return back()
                    ->with('success', 'اطلاعات بروزرسانی شد!');
            }else{
                return back()->with("error","خطایی رخ داده!");
            }
        }
        catch (\Exception $e){
            return back()->with("error",$e->getMessage());
        }
    }


}

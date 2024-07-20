<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function allBlog()
    {
        $blogs = Blog::orderBy('id', 'desc')->paginate(9);
        return view('admin.all-blog', [
            'blogs' => $blogs,
        ]);
    }
    public function newBlog()
    {
        $blogs = Blog::paginate(5)->sortByDesc("created_at");
        return view('admin.new-blog', [
            "articles" => $blogs]);
    }
    public function newarticle(Request $request)
    {
        try {
            $request->validate([
                "title" => "required",
                "category" => "required",
                "html" => "required",
                "description" => "required",
                "status" => "required",
                "tags" => "required",
                "file" => "required|image|mimes:jpeg,png,jpg,gif,svg",
            ]);

            $file = $request->file("file");
            $image = $this->manager->read($file);
            $image->cover(900, 600);
            $fileName = time() . '.webp';
            $image->save(public_path("custom/blog/" . $fileName), 80, 'webp');
            $filepath = "custom/blog/" . $fileName;

            $checkSlug = Blog::where("slug", Str::slug($request->get("title")))->first();

            if ($checkSlug && $checkSlug->count() > 0) {
                $newSlug = Str::slug($request->get("title")) . "-" . rand(1, 100);
            }

            //New Blog
            $article = new Blog();
            $article->title = $request->get("title");
            $article->slug = isset($newSlug) ? $newSlug : Str::slug($request->get("title"));
            $article->content = $request->html;
            $article->image = $filepath ?? "custom/placeholder.png";
            $article->category = $request->get("category");
            $article->tags = $request->get("tags");
            $article->status = $request->get("status") == "active" ? true : false;
            $article->meta_title = $request->get("title");
            $article->meta_description = $request->get("description");
            $article->meta_keywords = $request->get("tags");
            $article->meta_image = $filepath ?? "custom/placeholder.png";

            
            $article->user_id = auth()->user()->id;




            if ($article->save()) {
                return redirect()->back()->with("success", "Article Created Successfully");
            } else {
                Log::error("An Error Occurred");
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with("error", "An Error Occurred");
        }
    }


}

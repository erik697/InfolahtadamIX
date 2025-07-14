<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Feedback;
use App\Models\GalleryImage;
use App\Models\GalleryVideo;
use App\Models\PersitImage;
use App\Models\PersitPost;
use App\Models\Personel;
use App\Models\Post;
use App\Models\Slug;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    
    public function index(){
        
        $postsPersits = PersitPost::where('status', 'published')->get();
        $posts = Post::where('status', 'published')->get();

        return view('blogs.dashboard.index', [
            'postsPersits' => $postsPersits,
            'posts' => $posts
        ]);
    }
    public function article(Request $request){
        $catFilter = "";
        $slugsFilter = "";
        $selectedCategories = $request->categories? $request->categories : [];
        $selectedSlugs = $request->slugs? $request->slugs : [];
        $data =  Post::where('status', 'published');
        if($request->categories){
            $catFilter = Post::where('status', 'published')->join('post_categories', 'post_categories.post_id', '=','posts.id')->whereIn('category_id',$request->categories)->pluck('post_id');
            $data = $data->whereIn('id', $catFilter);
        }

        if($request->slugs){
            $slugsFilter = Post::where('status', 'published')->join('post_slugs', 'post_slugs.post_id', '=','posts.id')->whereIn('slug_id',$request->slugs)->pluck('post_id');
                $data = $data->WhereIn('id', $slugsFilter);

        }
        

        $posts = $data->paginate(10);
        $postsHot = Post::where('status', 'published')->orderBy('view','DESC')->paginate(7);

        $categories = Category::get();
        $slugs = Slug::get();
        return view('blogs.article.index', [
            'posts' => $posts,
            'categories' => $categories,
            'slugs' => $slugs,
            'selectedCategories' => $selectedCategories,
            'selectedSlugs' => $selectedSlugs,
            'postsHot' => $postsHot
        ]);
    }
    public function articlePersit(Request $request){     

        $postsPersits = PersitPost::where('status', 'published')->paginate(10);
        $postsPersitsHot = PersitPost::where('status', 'published')->orderBy('view','DESC')->paginate(7);

        return view('blogs.articlePersit.index', [
            'postsPersits' => $postsPersits,
            'postsPersitsHot' => $postsPersitsHot
        ]);
    }
    public function articleShow($id){
        
        $posts = Post::where('status', 'published')->get();
        $categories = Category::get();
        $slugs = Slug::get();
        $post = Post::where('id',$id)->first();
        Post::where('id',$id)->update(['view'=>($post->view + 1)]);
        if(!$post){
            abort(404);
        }
        return view('blogs.article.show', [
            'post' => $post,
            'posts' => $posts,
            'categories' => $categories,
            'slugs' => $slugs
        ]);
    }

    public function articlePersitShow($id){
        
        $postsPersits = PersitPost::where('status', 'published')->get();
        $postsPersit = PersitPost::where('id',$id)->first();
        PersitPost::where('id',$id)->update(['view'=>($postsPersit->view + 1)]);
        if(!$postsPersit){
            abort(404);
        }
        return view('blogs.articlePersit.show', [
            'postsPersit' => $postsPersit,
            'postsPersits' => $postsPersits
        ]);
    }
    public function vision(){
        return view('blogs.profiles.vision.index');
    }
    public function organitation(){
        
        $pejabats = Personel::where('status','Active')->get();
        return view('blogs.profiles.organitation.index',['pejabats' => $pejabats]);
    }
    public function contact(){
        return view('blogs.contact.index');
    }
    public function feedback(Request $request){
        // dd($request->all());
         $validated = $request->validate([
        'name' => 'required|min:4',
        'email' => 'required',
        'message' => 'required|min:5',
    ]);

        Feedback::create($validated);
        return redirect()->route('contacts')->with(['success' => 'Pesan Berhasil']);
    }
    public function images(){
        $galleryImages = GalleryImage::select('gallery_images.*', 'posts.id as post_id')->leftJoin('posts', 'gallery_images.url', '=','posts.img_url')->paginate(10);
        return view('blogs.gallery.pictures.index',['galleryImages' => $galleryImages]);
    }
    public function imagesPersit(){
        $persitImages = PersitImage::paginate(10);
        return view('blogs.articlePersit.image',['persitImages' => $persitImages]);
    }
    
    public function videos(){
        $galleryVideos = GalleryVideo::paginate(10);
        return view('blogs.gallery.videos.index', ['galleryVideos' => $galleryVideos]);
    }

    public function pejabat(){
        $pejabats = Personel::where('position_id', 1)->get();
        return view('blogs.pejabat.index',['pejabats' => $pejabats]);
    }
}

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
use Illuminate\Support\Facades\DB;

class BlogsController extends Controller
{
    
    public function index(){
        $visitor = DB::table('visitor_count')->first();
        $visitor = DB::table('visitor_count')->where('id',1)->update(['count' => $visitor->count+1]);
        $postsPersits = PersitPost::where('status', 'published')->orderBy('id','DESC')->limit(4)->get();
        $posts = Post::where('status', 'published')->orderBy('id','DESC')->limit(6)->get();

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
        

        $posts = $data->orderBy('id','DESC')->paginate(9);
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

        $postsPersits = PersitPost::where('status', 'published')->orderBy('view','DESC')->paginate(9);
        $postsPersitsHot = PersitPost::where('status', 'published')->orderBy('view','DESC')->paginate(7);

        return view('blogs.articlePersit.index', [
            'postsPersits' => $postsPersits,
            'postsPersitsHot' => $postsPersitsHot
        ]);
    }
    public function articleShow($id){
        
        $posts = Post::where('status', 'published')->orderBy('id','DESC')->paginate(5);
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
        
        $postsPersits = PersitPost::where('status', 'published')->orderBy('id','DESC')->paginate(5);
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
        
        $pejabats = Personel::where('status','Active')->orderBy('position_id','ASC')->get();
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
        'captcha' => 'required|captcha'
    ]);

        Feedback::create($validated);
        return redirect()->route('contacts')->with(['success' => 'Pesan Berhasil']);
    }
    public function images(){
        $galleryImages = GalleryImage::select('gallery_images.*', 'posts.id as post_id')->leftJoin('posts', 'gallery_images.url', '=','posts.img_url')->orderBy('id','DESC')->paginate(10);
        return view('blogs.gallery.pictures.index',['galleryImages' => $galleryImages]);
    }
    public function imagesPersit(){
        $persitImages = PersitImage::orderBy('id','DESC')->paginate(9);
        return view('blogs.articlePersit.image',['persitImages' => $persitImages]);
    }
    
    public function videos(){
        $galleryVideos = GalleryVideo::orderBy('id','DESC')->paginate(9);
        return view('blogs.gallery.videos.index', ['galleryVideos' => $galleryVideos]);
    }

    public function pejabat(){
        $pejabats = Personel::where('position_id', 1)->orderBy('period_start','ASC')->get();
        return view('blogs.pejabat.index',['pejabats' => $pejabats]);
    }
    
    
       public function sejarah(){
        return view('blogs.sejarah.index');
    }
       public function kantor(){
        return view('blogs.kantor.index');
    }
       public function kainfolahta(){
        return view('blogs.kainfolahta.index');
    }
       public function pengaduan(){
        return view('blogs.pengaduan.index');
    }

    // PPID
       public function ppid(){
        return view('blogs.ppid.index');
    }
           public function maklumat(){
        return view('blogs.ppid.maklumat');
    }
       public function hakKewajiban(){
        return view('blogs.ppid.hakkewajiban');
    }
       public function simpulLayanan(){
        return view('blogs.ppid.simpulLayanan');
    }
       public function sopPelayanan(){
        return view('blogs.ppid.sopPelayanan');
    }
       public function struktur(){
        return view('blogs.ppid.struktur');
    }
       public function visiM(){
        return view('blogs.ppid.visiM');
    }
       public function formInformasi(){
        return view('blogs.ppid.formInformasi');
    }
       public function klaimKeberatan(){
        return view('blogs.ppid.klaimKeberatan');
    }
       public function biayaSalinan(){
        return view('blogs.ppid.biayaSalinan');
    }
    public function dasarHukum(){
        return view('blogs.ppid.dasarHukum');
    }
    public function sangketaInformasi(){
        return view('blogs.ppid.sangketaInformasi');
    }
    public function kosong(){
        return view('blogs.ppid.kosong');
    }
    public function operasionalPelayanan(){
        return view('blogs.ppid.operasionalPelayanan');
    }
    public function alurProses(){
        return view('blogs.ppid.alurProses');
    }
    public function informasiBerkala(){
        return view('blogs.ppid.informasiBerkala');
    }
    public function informasiSertamerta(){
        return view('blogs.ppid.informasiSertamerta');
    }
    public function informasiSetiaphari(){
        return view('blogs.ppid.informasiSetiaphari');
    }
}

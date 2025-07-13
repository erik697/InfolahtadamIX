<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use App\Models\GalleryVideo;
use App\Models\PersitImage;
use App\Models\PersitPost;
use App\Models\Post;
use App\Models\Product;
use App\Models\Report;
use App\Models\Schedule;
use App\Models\User;
use App\Models\Wherehouse;

class DashboardController extends Controller
{
    public function index(){
        $cPost = Post::count();
        $cImage = GalleryImage::count();
        $cVideo = GalleryVideo::count();
        $cPersitPost = PersitPost::count();
        $cPersitImage = PersitImage::count();
        $cProduct = Product::count();
        $cReport = Report::count();
        $cSchedule = Schedule::count();
        $cUser = User::count();
        $cWherehouse = Wherehouse::count();

        $cReportP = Report::where('status', 'Pending')->count();
        $cReportD = Report::where('status', 'Done')->count();
        return view('dashboard.index', [
            'cPost' => $cPost,
            'cImage'=>$cImage,
            'cVideo'=>$cVideo,
            'cPersitPost'=>$cPersitPost,
            'cPersitImage'=>$cPersitImage,
            'cProduct'=>$cProduct,
            'cReport'=>$cReport,
            'cSchedule'=>$cSchedule,
            'cUser'=>$cUser,
            'cWherehouse'=>$cWherehouse,
            'cReportP' => $cReportP,
            'cReportD' => $cReportD
        ]);
    }
}

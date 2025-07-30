<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PersitImageController;
use App\Http\Controllers\PersitPostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[BlogsController::class, 'index'])->name('dashboards');
Route::get('/articles',[BlogsController::class, 'article'])->name('articles');
Route::get('/articles/{id}',[BlogsController::class, 'articleShow'])->name('articles.show');
Route::get('/vision',[BlogsController::class, 'vision'])->name('profiles.vision');
Route::get('/organitation',[BlogsController::class, 'organitation'])->name('profiles.organitation');
Route::get('/contacts',[BlogsController::class, 'contact'])->name('contacts');
Route::post('/feedbackCustomer',[BlogsController::class, 'feedback'])->name('feedbackCustomer');
Route::get('/gallery/video',[BlogsController::class, 'videos'])->name('gallery.videos');
Route::get('/gallery/image',[BlogsController::class, 'images'])->name('gallery.images');
Route::get('/persit-articles',[BlogsController::class, 'articlePersit'])->name('persitArticle.article');
Route::get('/persit-article/images',[BlogsController::class, 'imagesPersit'])->name('persitArticle.images');
Route::get('/persit-article/{id}',[BlogsController::class, 'articlePersitShow'])->name('persitArticle.show');
Route::get('/pejabat',[BlogsController::class, 'pejabat'])->name('pejabat');


Route::get('/kainfolahta',[BlogsController::class, 'kainfolahta'])->name('kainfolahta');
Route::get('/kantor',[BlogsController::class, 'kantor'])->name('kantor');
Route::get('/sejarah',[BlogsController::class, 'sejarah'])->name('sejarah');
Route::get('/pengaduan',[BlogsController::class, 'pengaduan'])->name('pengaduan');

Route::get('/ppid',[BlogsController::class, 'ppid'])->name('ppid.index');
Route::get('/ppid/maklumat',[BlogsController::class, 'maklumat'])->name('ppid.maklumat');
Route::get('/ppid/hak-kewajiban',[BlogsController::class, 'hakKewajiban'])->name('ppid.hak-kewajiban');
Route::get('/ppid/simpul-layanan',[BlogsController::class, 'simpulLayanan'])->name('ppid.simpul-layanan');
Route::get('/ppid/sop-pelayanan',[BlogsController::class, 'sopPelayanan'])->name('ppid.sop-pelayanan');
Route::get('/ppid/struktur',[BlogsController::class, 'struktur'])->name('ppid.struktur');
Route::get('/ppid/visiM',[BlogsController::class, 'visiM'])->name('ppid.visiM');
Route::get('/ppid/form-informasi',[BlogsController::class, 'formInformasi'])->name('ppid.form-informasi');
Route::get('/ppid/klaim-keberatan',[BlogsController::class, 'klaimKeberatan'])->name('ppid.klaim-keberatan');
Route::get('/ppid/biaya-salinan',[BlogsController::class, 'biayaSalinan'])->name('ppid.biaya-salinan');
Route::get('/ppid/dasar-hukum',[BlogsController::class, 'dasarHukum'])->name('ppid.dasar-hukum');
Route::get('/ppid/sangketa-informasi',[BlogsController::class, 'sangketaInformasi'])->name('ppid.sangketa-informasi');

Route::get('/ppid/informasi-berkala',[BlogsController::class, 'informasiBerkala'])->name('ppid.informasi-berkala');
Route::get('/ppid/informasi-sertamerta',[BlogsController::class, 'informasiSertamerta'])->name('ppid.informasi-sertamerta');
Route::get('/ppid/informasi-setiaphari',[BlogsController::class, 'informasiSetiaphari'])->name('ppid.informasi-setiaphari');
Route::get('/ppid/alur-proses',[BlogsController::class, 'alurProses'])->name('ppid.alur-proses');
Route::get('/ppid/operasional-pelayanan',[BlogsController::class, 'operasionalPelayanan'])->name('ppid.operasional-pelayanan');


Route::get('/reload-captcha', [LoginController::class,'reloadChaptcha']);
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login/authenticate', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::post('/login/logout', [LoginController::class, 'logout'])->name('login.logout');


Route::middleware(['auth'])->group(function(){
Route::get('/dashboards', [DashboardController::class, 'index'])->name('dashboards.index');

// tambahan di produk start
Route::get('/products/importExcel',[ProductController::class, 'importExcel'])->name('products.importExcel');
Route::post('/products/importExcelProcess',[ProductController::class, 'importExcelProcess'])->name('products.importExcelProcess');
Route::get('/products/exportExcelProcess',[ProductController::class, 'exportExcelProcess'])->name('products.exportExcelProcess');
// tambahan di produk end

Route::resource('personels', App\Http\Controllers\PersonelController::class);

Route::resource('schedules', App\Http\Controllers\scheduleController::class);

Route::resource('gallery-images', App\Http\Controllers\GalleryImageController::class);

Route::resource('gallery-videos', App\Http\Controllers\GalleryVideoController::class);

Route::resource('posts', App\Http\Controllers\PostController::class);

Route::resource('categories', App\Http\Controllers\CategoryController::class);

Route::resource('slugs', App\Http\Controllers\SlugController::class);

Route::resource('category-products', App\Http\Controllers\CategoryProductController::class);

Route::resource('wherehouses', App\Http\Controllers\WherehouseController::class);

Route::resource('products', App\Http\Controllers\ProductController::class);

Route::resource('feedback', App\Http\Controllers\FeedbackController::class);

Route::resource('roles', App\Http\Controllers\RoleController::class);

Route::resource('permissions', App\Http\Controllers\PermissionController::class);

Route::resource('personels', App\Http\Controllers\PersonelController::class);

Route::resource('schedules', App\Http\Controllers\scheduleController::class);

Route::resource('gallery-images', App\Http\Controllers\GalleryImageController::class);

Route::resource('gallery-videos', App\Http\Controllers\GalleryVideoController::class);

Route::resource('posts', App\Http\Controllers\PostController::class);

Route::resource('categories', App\Http\Controllers\CategoryController::class);

Route::resource('slugs', App\Http\Controllers\SlugController::class);

Route::resource('category-products', App\Http\Controllers\CategoryProductController::class);

Route::resource('wherehouses', App\Http\Controllers\WherehouseController::class);

Route::resource('products', App\Http\Controllers\ProductController::class);

Route::resource('feedback', App\Http\Controllers\FeedbackController::class);

Route::resource('roles', App\Http\Controllers\RoleController::class);

Route::resource('permissions', App\Http\Controllers\PermissionController::class);

Route::resource('users', UserController::class);


Route::resource('reports', ReportController::class);
Route::resource('persit-images', PersitImageController::class);
Route::resource('persit-posts', PersitPostController::class);
});
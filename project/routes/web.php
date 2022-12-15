<?php

use App\Http\Controllers\AddskillController;
use App\Http\Controllers\Admin\AdminmissionController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CmsController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MissionskillController;
use App\Http\Controllers\Admin\MissionthemeController;
use App\Http\Controllers\Admin\StoryController;
use App\Http\Controllers\Admin\TimesheetController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\ChangepassController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\deviceController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LostController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\navbarController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\ShareController;
use App\Http\Controllers\SharestoryController;
use App\Http\Controllers\StoriesdetailsController;
use App\Http\Controllers\StorieslistingController;
use App\Http\Controllers\UsereditController;
use App\Http\Controllers\VolunteeringController;
use App\Http\Middleware\Authenticate;
use App\Mail\ContactEmail;
use App\Mail\TestEmail;
use App\Models\Mission;
use App\Models\User;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Auth;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Loader\Configurator\Traits\RouteTrait;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */


Route::get('list',[HomeController::class,'list']);
Route::get('grid',[HomeController::class,'grid']);
Route::post('lost',[LostController::class,'lost']);




Route::get('favourite/{id}',[FavouriteController::class,'favourite']);
Route::get('lost',[LostController::class,'lost']);
Route::post('send-email',[LostController::class,'sendResetLink'])->name('send-email');


   Route::get('home',[MissionController::class,'home'])->name('home');
   Route::get('sort',[MissionController::class,'sort'])->name('sort');
   
//    Route::post('home',[MissionController::class,'home']);
Route::get('get-country', [MissionController::class, 'getMoreValue']);



Route::get('search/{id}',[searchController::class,'view']);
Route::get('theme/{id}',[searchController::class,'theme']);


// Route::get('search',[searchController::class,'search_drop'])->name('search');
Route::get('reset/{token}',[LostController::class,'reset'])->name('reset');
Route::post('reset-password',[LostController::class,'resetPassword']);
Route::view('lost','lost');

Route::get('logout',[LogoutController::class,'destroy'])->name('logout');




Route::get('mission_listing',[HomeController::class,'mission_listing']);
Route::get('volunteering/{id}',[ VolunteeringController::class, 'vol']);
Route::get('register',[RegisterController::class,'register']);
Route::get('stories_listing',[StorieslistingController::class,'stories_listing']);
Route::get('share',[SharestoryController::class,'share']);
Route::post('add-story', [SharestoryController::class, 'add_story']);
Route::get('stories_detail/{id}',[StoriesdetailsController::class,'stories_detail']);
Route::get('edit_profile',[UsereditController::class,'view_profile']);
Route::put('edit-profile',[UsereditController::class,'edit_profile']);

Route::get('change_pass',[ChangepassController::class,'change_pass']);
Route::get('contact',[ContactController::class,'contact']);
Route::get('add_skill',[AddskillController::class,'add_skill']);
Route::get('policy_page',[PolicyController::class,'policy_page']);

Route::post('add-user',[RegisterController::class,'create']);
Route::post('update',[ResetController::class,'update']);
Auth::routes();
Route::get('contactUs',function(Request $request){
    try{
        $data=[
            'name'=>$request->name,
            'subject'=>$request->subject,
            'message'=>$request->message
        ];
        $email=$request->input('email');
        Mail::to($email)->send(new ContactEmail($data));
        dd('mail sent successfully');
    }
    catch(Throwable $e){
        report($e);
        dd('error');
    }
});
Route::post('get-cities-by-country',[AdminmissionController::class,'getCity']);

Route::get('add-app/{id}',[AdminmissionController::class,'add_app']);

Route::post('add-rating/{id}',[RatingController::class,'rating']);
//admin panel

Route::prefix('admin')->middleware('auth','user')->group(function(){
    Route::get('dashboard',[DashboardController::class,'index']);

    Route::get('user',[UserController::class,'user']);
    Route::get('admin-profile',[UserController::class,'edit_admin']);
    Route::put('update-profile',[UserController::class,'update_admin']);

    
    Route::get('add-user',[UserController::class,'create']);
    Route::post('add-user',[UserController::class,'add_user']);
    Route::put('update-user/{user_id}',[UserController::class,'update']);
    Route::post('delete-user',[UserController::class,'delete']);

    Route::get('timesheet',[TimesheetController::class,'timesheet']);
    Route::post('add-time',[TimesheetController::class,'add']);
    Route::post('add-goal',[TimesheetController::class,'add_goal']);
    Route::get('edit-goal',[TimesheetController::class,'edit_goal']);

    Route::get('add-cms',[CmsController::class,'add']);
   Route::post('add-cms',[CmsController::class,'cms_add']);
    Route::get('cms-edit/{id}',[CmsController::class,'edit']);
   Route::put('update-cms/{id}',[CmsController::class,'update']);
   Route::post('delete-cms',[CmsController::class,'delete']);

    Route::get('cms',[CmsController::class,'index']);
    Route::post('cms',[CmsController::class,'index']);
   Route::get('mission',[AdminmissionController::class,'index']);
   Route::post('mission',[AdminmissionController::class,'index']);
   Route::get('edit-mission/{id}',[AdminmissionController::class,'edit']);
   Route::put('update-mission/{id}',[AdminmissionController::class,'update']);
   
   Route::get('mission-add',[AdminmissionController::class,'create']);
   Route::post('add-mission',[AdminmissionController::class,'add_mission']);
   Route::get('application',[AdminmissionController::class,'application']);
   Route::post('application',[AdminmissionController::class,'application']);
   Route::get('add-application',[AdminmissionController::class,'create_app']);

   Route::get('story',[StoryController::class,'story']);
   Route::post('story',[StoryController::class,'story']);

   Route::get('published/{id}',[StoryController::class,'published']);
   Route::get('add-story',[StoryController::class,'create_story']);
   Route::post('add-story',[StoryController::class,'add_story']);

   Route::get('decline-story/{id}',[StoryController::class,'decline']);
   Route::get('edit-user/{user_id}',[UserController::class,'edit']);

   Route::get('add-theme',[MissionthemeController::class,'create']);
   Route::post('add-theme',[MissionthemeController::class,'add_theme']);
   Route::get('theme',[MissionthemeController::class,'index']);
   Route::post('theme',[MissionthemeController::class,'index']);
   Route::get('edit-theme/{id}',[MissionthemeController::class,'edit']);
   Route::put('update-theme/{id}',[MissionthemeController::class,'update']);
   Route::post('delete-theme',[MissionthemeController::class,'delete']);
   Route::post('delete-mission',[AdminmissionController::class,'delete']);



   Route::get('skill',[MissionskillController::class,'index']);
   Route::post('skill',[MissionskillController::class,'index']);
   Route::get('add-skill',[MissionskillController::class,'create']);
   Route::post('add-skill',[MissionskillController::class,'add_skill']);
   Route::get('edit-skill/{id}',[MissionskillController::class,'edit']);
   Route::put('update-skill/{id}',[MissionskillController::class,'update']);
   Route::post('delete-skill',[MissionskillController::class,'delete']);
   Route::get('approve/{id}',[AdminmissionController::class,'approve']);
   Route::get('decline/{id}',[AdminmissionController::class,'decline']);

   Route::get('banner',[BannerController::class,'index']);
   Route::post('banner',[BannerController::class,'index']);
   Route::get('add-banner',[BannerController::class,'create']);
   Route::post('add',[BannerController::class,'add_banner']);
   Route::get('banner-edit/{id}',[BannerController::class,'edit']);
   Route::put('update-banner/{id}',[BannerController::class,'update']);
   Route::post('delete-banner',[BannerController::class,'delete']);

});

// Route::get('top-nav',[navbarController::class,'view']);





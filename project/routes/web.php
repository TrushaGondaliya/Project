<?php

use App\Http\Controllers\AddskillController;
use App\Http\Controllers\Admin\CmsController;

use App\Http\Controllers\Admin\DashboardController;
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
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\ShareController;
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




Route::get('favourite',[FavouriteController::class,'favourite']);
Route::get('lost',[LostController::class,'lost']);
Route::post('send-email',[LostController::class,'sendResetLink'])->name('send-email');
// Route::get('home',[MissionController::class,'home']);


   Route::get('home',[MissionController::class,'home']);



Route::post('search',[searchController::class,'view']);
Route::view('search','search');
Route::get('reset/{token}',[LostController::class,'reset'])->name('reset');
Route::post('reset-password',[LostController::class,'resetPassword']);
Route::view('lost','lost');

Route::get('logout',[LogoutController::class,'destroy'])->name('logout');




Route::get('mission_listing',[HomeController::class,'mission_listing']);
Route::get('volunteering',[VolunteeringController::class,'volunteering']);
Route::get('register',[RegisterController::class,'register']);
Route::get('stories_listing',[StorieslistingController::class,'stories_listing']);
Route::get('share',[ShareController::class,'share']);
Route::get('stories_detail',[StoriesdetailsController::class,'stories_detail']);
Route::get('edit_profile',[UsereditController::class,'edit_profile']);
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


//admin panel

// Route::prefix('admin')->middleware('auth','user')->group(function(){
//     Route::get('dashboard',[DashboardController::class,'index']);

//     Route::get('user',[UserController::class,'user']);
//     Route::get('timesheet',[TimesheetController::class,'timesheet']);
//     Route::get('edit-time',[TimesheetController::class,'edit']);
   
// });

Route::prefix('admin')->group(function(){
    Route::get('dashboard',[DashboardController::class,'index']);

    Route::get('user',[UserController::class,'user']);
    Route::get('timesheet',[TimesheetController::class,'timesheet']);
    Route::get('edit-time',[TimesheetController::class,'edit']);

    Route::get('cms-add',[CmsController::class,'add']);
    Route::get('cms',[CmsController::class,'index']);
   
});



<?php

use App\Http\Controllers\deviceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LostController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\VolunteeringController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StorieslistingController;
use App\Http\Controllers\ShareController;
use App\Http\Controllers\StoriesdetailsController;
use App\Http\Controllers\UsereditController;
use App\Http\Controllers\ChangepassController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AddskillController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\RatingController;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;
use App\Models\User;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Auth\Access\Gate;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('list',[HomeController::class,'list']);
Route::get('home',[HomeController::class,'grid']);
Route::post('login',[LoginController::class,'login']);
Route::view('login','login');
Route::get('lost',[LostController::class,'lost']);

Route::get('home',[MissionController::class,'home']);
Route::post('search',[searchController::class,'view']);
Route::view('search','search');
Route::get('reset',[ResetController::class,'reset']);
Route::view('lost','lost');
Route::get('logout',[LogoutController::class,'destroy'])->name('logout');

Route::get('send-email',function(Request $request){
    try{
    $mailData=["name"=>"Test"];

    $email_input=User::where('email',$request->input('email'))->first();
    Mail::to($email_input->email)->send(new TestEmail($mailData));
    dd('done');}catch(Throwable $e){
        report($e);
        dd('Email not found in database');
    }
});

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
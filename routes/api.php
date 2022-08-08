<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\authcontroller;
use  App\Http\Controllers\MianController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/store', [MianController::class,'store']);

Route::post('/uploadTest', [MianController::class,'uploadTest']) ;

Route::middleware('auth:sanctum')->group( function () {

    Route::get('/user', [authcontroller::class,'user']) ;
    Route::post('/logout', [authcontroller::class,'logout']) ;
});

Route::post('/register', [authcontroller::class,'register']);
Route::post('/login', [authcontroller::class,'login']);
Route::put('/udateuser/{id}', [authcontroller::class,'udateuser']);

//table category
Route::get('/Getcategory/{id?}', [MianController::class,'Getcategory']) ;
Route::post('/addcategory', [MianController::class,'addcategory']) ;
Route::delete('/Deletecatt/{id}', [MianController::class,'Deletecatt']) ;
Route::put('/updatacategory/{id}', [MianController::class,'updatacategory']) ;
Route::get('/Getnamecat/{id?}', [MianController::class,'Getnamecat']) ;


//table type categor

Route::get('/Gettypecatt/{id?}', [MianController::class,'Gettypecatt']) ;
Route::post('/addtype', [MianController::class,'addtype']) ;
Route::delete('/Deletetype/{id}', [MianController::class,'Deletetype']) ;
Route::put('/updatatype/{id}', [MianController::class,'updatatype']) ;
Route::get('/Gettype_catt/{name}', [MianController::class,'Gettype_catt']) ;



//table information_magzian

Route::get('/Getinformation/{id?}', [MianController::class,'Getinformation']) ;
Route::put('/updateinformation/{id}', [MianController::class,'updateinformation']) ;



//table user

Route::get('/Getuser', [MianController::class,'Getuser']) ;
Route::post('/adduser', [MianController::class,'adduser']) ;
Route::put('/updateuser/{id}', [MianController::class,'updateuser']) ;
Route::put('/activeuser/{id}', [MianController::class,'activeuser']) ;//a




//table Ads
Route::get('/GetAds', [MianController::class,'GetAds']) ;
Route::get('/showloopsads', [MianController::class,'showloopsads']) ;
Route::get('/showstaticads', [MianController::class,'showstaticads']) ;

Route::put('/updataAds/{id}', [MianController::class,'updataAds']) ;
Route::post('/addAds', [MianController::class,'addAds']) ;
Route::delete('/Deleteads/{id}', [MianController::class,'Deleteads']) ;


//table bags
Route::get('/Getbags', [MianController::class,'Getbags']) ;
Route::post('/addbags', [MianController::class,'addbags']) ;
Route::put('/updatbags/{id}', [MianController::class,'updatbags']) ;
Route::delete('/Deletebags/{id}', [MianController::class,'Deletebags']) ;
Route::get('/Gettypebags/{name}', [MianController::class,'Gettypebags']) ;




//table durar
Route::get('/Getdurar/{id?}', [MianController::class,'Getdurar']) ;
Route::post('/adddurar', [MianController::class,'adddurar']) ;
Route::put('/updatedurar/{id}', [MianController::class,'updatedurar']) ;
Route::delete('/Deletedurar/{id}', [MianController::class,'Deletedurar']) ;
Route::get('/Getlastdurar', [MianController::class,'Getlastdurar']) ;




//table tb_subscribers
Route::get('/Getsubscribers/{id?}', [MianController::class,'Getsubscribers']) ;
Route::post('/addsubscribers', [MianController::class,'addsubscribers']) ;
Route::delete('/Deletesubscribers/{id}', [MianController::class,'Deletesubscribers']) ;


//table tb_tageinfo
Route::get('/Gettageinfo', [MianController::class,'Gettageinfo']) ;
Route::post('/addtageinfo', [MianController::class,'addtageinfo']);
Route::delete('/Deletetaginf/{id}', [MianController::class,'Deletetaginf']) ;
Route::put('/updatetaginf/{id}', [MianController::class,'updatetaginf']) ;
Route::get('/Gettypetage/{name}', [MianController::class,'Gettypetage']) ;


//table tb_tags
Route::get('/Gettag/{id?}', [MianController::class,'Gettag']) ;
Route::post('/addtag', [MianController::class,'addtag']);
Route::delete('/Deletetag/{id}', [MianController::class,'Deletetag']) ;
Route::put('/updatetag/{id}', [MianController::class,'updatetag']) ;

//table tb_eventads

Route::get('/Gatevent', [MianController::class,'Gatevent']) ;
Route::post('/addevent', [MianController::class,'addevent']);
Route::put('/updateevent/{id}', [MianController::class,'updateevent']) ;
Route::delete('/Deleteevent/{id}', [MianController::class,'Deleteevent']) ;
Route::get('/Gatevent_show', [MianController::class,'Gatevent_show']) ;
Route::get('/Gatevent_type/{nametype}', [MianController::class,'Gatevent_type']) ;

//table tb_news
Route::get('/Getnewsa', [MianController::class,'Getnewsa']) ;

Route::delete('/Deletenews/{id}', [MianController::class,'Deletenews']) ;
Route::get('/getallnews', [MianController::class,'getallnews']) ;
Route::put('/updatenews/{id}', [MianController::class,'updatenews']) ;



//news
Route::get('/Getnewsaid/{id}', [MianController::class,'Getnewsaid']) ;
Route::get('/Getnews_type/{namet}', [MianController::class,'Getnews_type']) ;
Route::get('/shownew', [MianController::class,'shownew']) ;
Route::post('/addnews2', [MianController::class,'addnews2']);
Route::get('/Getimgnews/{id}', [MianController::class,'Getimgnews']) ;



//dashhh
Route::get('/Getnumbernew', [MianController::class,'Getnumbernew']) ;
Route::get('/Getnumberuser', [MianController::class,'Getnumberuser']) ;
Route::get('/Getnumbercatt', [MianController::class,'Getnumbercatt']) ;
Route::get('/Getnumbertype', [MianController::class,'Getnumbertype']) ;
Route::get('/Getnumbersub', [MianController::class,'Getnumbersub']) ;


//newsvistor
Route::get('/Getnewsvistor', [MianController::class,'Getnewsvistor']) ;
Route::post('/addnewsvistor', [MianController::class,'addnewsvistor']);
Route::put('/updatenewsvistor/{id}', [MianController::class,'updatenewsvistor']) ;
Route::delete('/deletenewsvistor/{id}', [MianController::class,'deletenewsvistor']) ;
Route::get('/Getimgnewsvistor/{id}', [MianController::class,'Getimgnewsvistor']) ;


//Email Route
Route::get('send/email', [MianController::class, 'mail'])->name('email');
Route::post('contactemail', [MianController::class, 'contactemail']);
Route::post('shacawaemail', [MianController::class, 'shacawaemail']);
Route::post('SendRequsestBags', [MianController::class, 'SendRequsestBags']);
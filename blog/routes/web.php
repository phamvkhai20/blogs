<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\UserController;
use App\Http\FollowController;
use App\Http\Homecontroller;
use App\Http\CategoryController;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Aler;

//Home admin
Route::get('/k2k-admin','Homecontroller@index')->name('home');
Route::group([
    'prefix'=>'k2k-admin/',
    'middleware'=>'CheckAuth',
    
],function(){
//user
    Route::group(['middleware'=>'Checkrole','middleware'=>'CheckActive',],function(){
    Route::group(['prefix'=>'users',],function(){
        Route::get('create','UserController@create')->name('k2k-admin.users.create');
        Route::post('store','UserController@store')->name('k2k-admin.users.store');
        Route::get('/','UserController@index')->name('k2k-admin.users.show');
        Route::post('destroy/{user}','UserController@destroy')->name('k2k-admin.users.destroy');
        Route::get('edit/{id}','UserController@edit')->name('k2k-admin.users.edit');
        Route::post('update/{id}','UserController@update')->name('k2k-admin.users.update');
    });
    
    //category
    Route::group(['prefix'=>'categories',],function(){
        Route::get('/','CategoryController@show')->name('k2k-admin.categories.show');
        Route::post('destroy/{category}','CategoryController@destroy')->name('k2k-admin.categories.destroy');
        Route::get('create','CategoryController@create')->name('k2k-admin.categories.create');
        Route::Post('store','CategoryController@store')->name('k2k-admin.categories.store');
        Route::get('edit/{id}','CategoryController@edit')->name('k2k-admin.categories.edit');
        Route::post('update/{id}','CategoryController@update')->name('k2k-admin.categories.update');
    });
    Route::group(['prefix'=>'posts',],function(){
        Route::get('/','BlogController@show')->name('k2k-admin.posts.show');
        Route::post('destroy/{post}','BlogController@destroy')->name('k2k-admin.posts.destroy');
        Route::get('create','BlogController@create')->name('k2k-admin.posts.create');
        Route::Post('store','BlogController@store')->name('k2k-admin.posts.store');
        Route::get('edit/{id}','BlogController@edit')->name('k2k-admin.posts.edit');
        Route::post('update/{id}','BlogController@update')->name('k2k-admin.posts.update');
    });
    //Post
    Route::group(['prefix'=>'comments',],function(){
        Route::get('/','CommentController@show')->name('k2k-admin.comments.show');
        Route::get('report','CommentController@report')->name('k2k-admin.comments.report');
    });
    //comments
   
});


});


//website

Route::group(['middleware'=>'CheckActive'], function(){

    Route::get('/','WebController@index')->name('website.index');
    Route::get('/single/{id}','WebController@single')->name('website.single');
    Route::get('/danhmuc/{id}','WebController@danhmuc')->name('website.danhmuc');
    //comment
    Route::post('/single/comment','CommentController@comment')->name('website.comment');


    Route::post('/single/isComment/{id}','WebController@isComment')->name('website.isComment');

    Route::post('/single/comment/{comment}','WebController@deleteComment')->name('website.deleteComment');
    //Login
    Route::get('/NotificationActive','AuthController@NotificationActive')->name('NotificationActive');
    Route::post('/login','AuthController@login')->name('login');
    Route::post('/website/signup','AuthController@store')->name('website.signup');
    Route::get('/logout','AuthController@logout')->name('logout');
    Route::get('/formlogin','AuthController@formlogin')->name('formlogin');
    //register
    Route::get('/fromRegister','AuthController@fromRegister')->name('fromRegister');


    //follow
    Route::post('/follows','FollowController@follows')->name('website.followAuthor');
    Route::post('profile/follows','FollowController@profilefollows')->name('website.profile.followAuthor');
    Route::get('/follow','FollowController@showfollow')->name('website.follows');
    //Profile
    Route::get('/{id}','ProfileController@home')->name('website.profile.home');
    Route::Post('website/addpost','WebController@addpost')->name('website.posts.addpost');
    Route::get('/profile/writepost','WebController@vietbai')->name('website.profile.vietbai');
    Route::get('/profile/editProfile','ProfileController@editProfile')->name('website.profile.editProfile');
    Route::Post('website/profile/saverInfo','ProfileController@saverInfo')->name('website.profile.saverInfo');
    //Notification
    Route::get('/notification/{id}','WebController@notification')->name('website.profile.notification');
});
//write Post
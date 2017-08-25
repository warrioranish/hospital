<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Frontend Routes
Route::get('/', 'Frontend\HomeController@index');

Route::get('/home', 'Frontend\HomeController@index');

Route::get('/contactus', 'Frontend\ContactusController@contacts');

Route::post('/contactus', 'Frontend\ContactusController@store');

Route::get('/departments', 'Frontend\DepartmentController@index');

Route::get('/departments/members', 'Frontend\DepartmentController@member');

Route::get('/departments/members/profile', 'Frontend\DepartmentController@profile');

Route::get('/faq', 'Frontend\FaqController@index');

Route::get('/gallery', 'Frontend\GalleryController@index');

Route::get('/gallery/{gallery_slugs}', 'Frontend\GalleryController@gallerylist');

Route::get('/gallery/single/{slug}', 'Frontend\GalleryController@single');




//Backend Routes


Route::get('/admin', 'Backend\AdminController@index')->name('admin');

Route::post('/login', 'Backend\AdminController@login')->name('login');

Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function(){

    Route::get('dashboard', 'Backend\AdminController@dashboard')->name('dashboard');

    Route::get('logout', 'Backend\AdminController@destroy')->name('logout');

    //Settings routes
    Route::get('settings', 'Backend\SettingController@index')->name('settings');

    //contacts routes
    Route::get('contacts', 'Backend\ContactController@index')->name('contacts');

    //testimonial routes
    Route::get('testimonial', 'Backend\TestimonialController@index')->name('testimonials');

    Route::post('testimonial/action', 'Backend\TestimonialController@action')->name('actiontestimonials');

    Route::get('testimonials/add', 'Backend\TestimonialController@add')->name('createtestimonials');

    Route::post('testimonials/add', 'Backend\TestimonialController@store')->name('storetestimonials');

    Route::get('testimonials/edit/{id}', 'Backend\TestimonialController@edit')->name('edittestimonials');

    Route::patch('testimonials/update/{id}', 'Backend\TestimonialController@update')->name('updatetestimonials');

    Route::delete('testimonial/delete/{id}', 'Backend\TestimonialController@destroy')->name('deletetestimonials');

    //Slider routes
    Route::get('sliders', 'Backend\SliderController@index')->name('sliders');

    Route::post('sliders/action', 'Backend\SliderController@action')->name('actionsliders');

    Route::get('sliders/create', 'Backend\SliderController@create')->name('createsliders');

    Route::post('sliders/create', 'Backend\SliderController@store')->name('storesliders');

    Route::get('sliders/edit/{id}', 'Backend\SliderController@edit')->name('editsliders');

    Route::patch('sliders/update/{id}', 'Backend\SliderController@update')->name('updatesliders');

    Route::delete('sliders/delete/{id}', 'Backend\SliderController@destroy')->name('deleteslider');

    //Partner routes
    Route::get('partners', 'Backend\PartnerController@index')->name('partners');

    Route::post('partners/action', 'Backend\PartnerController@action')->name('actionpartners');

    Route::get('partners/create', 'Backend\PartnerController@create')->name('createpartners');

    Route::post('partners/store', 'Backend\PartnerController@store')->name('storepartners');

    Route::get('partners/edit/{id}', 'Backend\PartnerController@edit')->name('editpartners');

    Route::patch('partners/update/{id}', 'Backend\PartnerController@update')->name('updatepartners');

    Route::delete('partners/delete/{id}', 'Backend\PartnerController@destroy')->name('deletepartners');

    //faq
    Route::get('faq', 'Backend\FaqController@index')->name('faq');

    Route::post('faq/action', 'Backend\FaqController@action')->name('actionfaqs');

    Route::get('faq/create', 'Backend\FaqController@create')->name('createfaqs');

    Route::post('faq/store', 'Backend\FaqController@store')->name('storefaqs');

    Route::get('faq/edit/{id}', 'Backend\FaqController@edit')->name('editfaqs');

    Route::patch('faq/update/{id}', 'Backend\FaqController@update')->name('updatefaqs');

    Route::delete('faq/delete/{id}', 'Backend\FaqController@destroy')->name('deletefaqs');


    //Gallery
    Route::get('gallery', 'Backend\GalleryController@index')->name('gallery');

    Route::post('gallery/action', 'Backend\GalleryController@action')->name('actiongallery');

    Route::get('gallery/create', 'Backend\GalleryController@create')->name('creategallery');

    Route::post('gallery/store', 'Backend\GalleryController@store')->name('storegallery');

    Route::get('gallery/edit/{id}', 'Backend\GalleryController@edit')->name('editgallery');

    Route::patch('gallery/update/{id}', 'Backend\GalleryController@update')->name('updategallery');

    Route::delete('gallery/delete/{id}', 'Backend\GalleryController@destroy')->name('deletegallery');

    //images
    Route::get('gallery/images/{id}', 'Backend\ImageController@index')->name('images');

    Route::post('gallery/action/{id}', 'Backend\ImageController@action')->name('actionimages');

    Route::get('gallery/images/add/{id}', 'Backend\ImageController@create')->name('createimages');

    Route::post('gallery/images/add/{id}', 'Backend\ImageController@store')->name('storeimages');

    Route::get('gallery/images/edit/{id}', 'Backend\ImageController@edit')->name('editimages');

    Route::patch('gallery/images/update/{id}', 'Backend\ImageController@update')->name('updateimages');

    Route::delete('gallery/images/delete/{id}', 'Backend\ImageController@destroy')->name('deleteimages');

    //services
    Route::get('services', 'Backend\ServiceController@index')->name('services');

    Route::get('services/create', 'Backend\ServiceController@create')->name('createservices');

    Route::post('services/store', 'Backend\ServiceController@store')->name('storeservices');

    //departments
    Route::get('departments', 'Backend\Department@index')->name('departments');



});






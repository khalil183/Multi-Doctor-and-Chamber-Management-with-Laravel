<?php


Route::get('/', 'Frontend\FrontendController@index');
Route::get('/registration-form', 'Frontend\FrontendController@registrationForm');
Route::post('/doctor-registration', 'Frontend\FrontendController@doctorRegistration');
Route::get('/doctor-details/{id}', 'Frontend\FrontendController@doctorDetails');
Route::get('/chambers', 'Frontend\FrontendController@chambers');
Route::get('/chamber/{id}', 'Frontend\FrontendController@chamberDetails');
Route::post('/create-appoinment', 'Frontend\FrontendController@createAppoinment');


// Admin section
Auth::routes();
Route::get('admin-logout','Auth\LoginController@adminLogout')->name('admin.logout');
Route::get('/admin/dashboard', 'HomeController@index');
Route::group(['as'=> 'admin.', 'namespace' => 'Admin', 'prefix' => 'admin'],function (){
    Route::resource('category','CategoryController');
    Route::resource('doctor', 'DoctorController');
    Route::get('inactive-doctor/{id}', 'DoctorController@inactive')->name('doctor.inactive');
    Route::get('active-doctor/{id}', 'DoctorController@active')->name('doctor.active');

    Route::resource('division','DivisionController');
    Route::resource('district','DistrictController');
});




// Doctor section
Route::group(['as'=> 'doctor.', 'namespace' => 'doctor', 'prefix' => 'doctor'],function (){
    Route::get('test','DoctorController@test');
    Route::get('/login','Auth\LoginController@showDoctorLoginForm')->name('login');
    Route::post('/login','Auth\LoginController@doctorLogin')->name('login');
    Route::get('/logout','Auth\LoginController@doctorLogout')->name('logout');
    Route::get('/dashboard','DoctorController@index')->name('dashboard');
    Route::resource('chamber', 'ChamberController');
    Route::get('active-chamber/{id}','ChamberController@activeChamber')->name('active.chamber');
    Route::get('inactive-chamber/{id}','ChamberController@inActiveChamber')->name('inactive.chamber');

    Route::resource('assistant','AssistantController');
    Route::get('active-assistant/{id}','AssistantController@activeAssistant')->name('active.assistant');
    Route::get('inactive-assistant/{id}','AssistantController@inActiveAssistant')->name('inactive.assistant');

    Route::get('/appoinment','ApoinmentController@index')->name('appoinment');
    Route::get('/appoinment-history','ApoinmentController@allAppoinment')->name('all.appoinment');

});


// Assistant section
Route::group(['as'=> 'assistant.', 'namespace' => 'Assistant', 'prefix' => 'assistant'],function (){
    Route::get('/login','Auth\LoginController@showAssistantLoginForm')->name('login');
    Route::post('/login','Auth\LoginController@assistantLogin')->name('login');
    Route::get('/logout','Auth\LoginController@assistantLogout')->name('logout');
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    Route::get('/appoinment','ApoinmentController@index')->name('appoinment');
    Route::get('/appoinment-history','ApoinmentController@allAppoinment')->name('all.appoinment');
    Route::get('/appoinment-approve/{id}','ApoinmentController@approvedAppoinment')->name('approve.appoinment');


    // Route::resource('chamber', 'ChamberController');
    // Route::get('active-chamber/{id}','ChamberController@activeChamber')->name('active.chamber');
    // Route::get('inactive-chamber/{id}','ChamberController@inActiveChamber')->name('inactive.chamber');

    // Route::resource('assistant','AssistantController');
    // Route::get('active-assistant/{id}','AssistantController@activeAssistant')->name('active.assistant');
    // Route::get('inactive-assistant/{id}','AssistantController@inActiveAssistant')->name('inactive.assistant');

});




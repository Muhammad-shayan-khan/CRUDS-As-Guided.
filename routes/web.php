<?php
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\carRegistration_controller;
use App\Http\Controllers\compo_form_Controller;
//use App\Http\Controllers\custom_form_controller;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\form_twoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\validationController;
use App\Models\laptop_brand;
use App\Models\phoneBrand;
use App\Http\Controllers\customerform_controller;
use App\Http\Controllers\stdForm_controller;
use App\Http\Controllers\carInfo_controller;
use App\Http\Controllers\addmissionForm_controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customer_controller;
use App\Http\Controllers\hotel_booking_controller;

// use App\Models\customer_model;



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

// Route::get('/home',function(){
//     return view('layouts.home');
// });

// Route::get('/about',function(){
//     return view('layouts.about');
// });
// Route::get('/courses',function(){
//     return view('layouts.courses');
// });

Route::get('/', [DemoController::class, 'index']);
Route::get('/about', 'App\Http\Controllers\DemoController@about');
Route::get('/courses', SingleActionController::class);
Route::resource('photo', PhotoController::class);

// form
Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register']);

//form validationController
Route::get('/validation', [validationController::class, 'index']);
Route::post('/validation', [validationController::class, 'validation']);

// custom form
//Route::get('/custom_form',[custom_form_controller::class,'index']);
//Route::post('/custom_form',[custom_form_controller::class,'custom_form']);

// form_two
Route::get('/form_two', [form_twoController::class, 'index']);
Route::post('/form_two', [form_twoController::class, 'form_two']);

//compo form
Route::get('/compo_form', [compo_form_Controller::class, 'index']);
Route::post('/compo_form', [compo_form_Controller::class, 'compo_form']);

// phone Brand
Route::get('/phoneBrand', function () {
    $phoneBrand = phoneBrand::all();
    echo "<pre>";
    print_r($phoneBrand->toArray());
    echo "</pre>";
});

//laptop_brand
Route::get('/laptop', function () {
    $laptop_brand = laptop_brand::all();
    echo "<pre>";
    print_r($laptop_brand->toArray());
    echo "</pre>";
});

// //carinfo
// Route::get('/car', function () {
//     $car_info = car_info::all();
//     echo "<pre>";
//     print_r($car_info->toArray());
//     echo "</pre>";
// });

//customerForm
Route::get('/customerform', [customerform_controller::class, 'index']);
Route::post('/customerform', [customerform_controller::class, 'customerform']);

//stdForm
Route::get('/stdForm', [stdForm_controller::class, 'index']);
Route::get('/stdForm/view', [stdForm_controller::class, 'view']);
Route::post('/stdForm', [stdForm_controller::class, 'stdForm']);

//carInfo
Route::get('/carInfo', [carInfo_controller::class, 'index']);
Route::get('/carInfoThankyou', [carInfo_controller::class, 'thankyou']);
Route::get('/carInfo/view', [carInfo_controller::class, 'view']);
Route::post('/carInfo', [carInfo_controller::class, 'carInfo']);

// addmission form
Route::get('/addmissionForm', [addmissionForm_controller::class, 'index']);
Route::get('/addmissionForm/view', [addmissionForm_controller::class, 'view']);
Route::post('/addmissionForm', [addmissionForm_controller::class, 'addmissionForm']);
Route::get('/addmissionFormThankyou', [addmissionForm_controller::class, 'thankyou']);
// Route::get('/addmissionFormThankyou', [addmissionForm_controller::class, 'thankyou']);

// customer
Route::get('/customer', [customer_controller::class, 'index']);
Route::get('/customer/view', [customer_controller::class, 'view']);
Route::post('/customer', [customer_controller::class, 'customer']);

//carRegistration
Route::get('/carRegistration', [carRegistration_controller::class, 'index']);
Route::get('/carRegistration/view', [carRegistration_controller::class, 'view']);
Route::get('/carRegistration/delete/{id}', [carRegistration_controller::class, 'delete'])->name('carRegistration.delete');
Route::get('/carRegistrationHome', [carRegistration_controller::class, 'carRegistrationHome']);
Route::post('/carRegistration', [carRegistration_controller::class, 'carRegistration']);

// hotel booking
Route::get('/hotel_booking_form', [hotel_booking_controller::class, 'index']);
Route::post('/hotel_booking_form', [hotel_booking_controller::class, 'hotel_booking']);
Route::get('/hotel_booking/view', [hotel_booking_controller::class, 'view']);
Route::get('/hotel_booking', [hotel_booking_controller::class, 'hotel_booking_home']);
Route::get('/hotel_booking_form/delete/{id}', [hotel_booking_controller::class, 'delete'])->name('hotel_booking.delete');
Route::get('/hotel_booking_form/edit/{id}', [hotel_booking_controller::class, 'edit'])->name('hotel_booking.edit');
Route::post('/hotel_booking_form/update/{id}', [hotel_booking_controller::class, 'update'])->name('hotel_booking.update');

// country
Route::controller(CountryController::class)
    ->prefix('country')
    ->name('admin.country.')
    ->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{country}', 'edit')->name('edit');
        Route::post('update/{country}', 'update')->name('update');
        Route::get('delete/{country}', 'destroy')->name('delete');
    });

// state
Route::controller(stateController::class)
    ->prefix('state')
    ->name('admin.state.')
    ->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{state}', 'edit')->name('edit');
        Route::post('update/{state}', 'update')->name('update');
        Route::get('delete/{state}', 'destroy')->name('delete');
    });

//city
Route::controller(CityController::class)
    ->prefix('city')
    ->name('admin.city.')
    ->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{city}', 'edit')->name('edit');
        Route::post('update/{city}', 'update')->name('update');
        Route::get('delete/{city}', 'destroy')->name('delete');
    });

//TICKET
Route::controller(TicketController::class)
    ->prefix('ticket')
    ->name('admin.ticket.')
    ->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{ticket}', 'edit')->name('edit');
        Route::post('update/{ticket}', 'update')->name('update');
        Route::get('delete/{ticket}', 'destroy')->name('delete');
    });

//DEPARTMENT
Route::controller(DepartmentController::class)
    ->prefix('department')
    ->name('admin.department.')
    ->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{department}', 'edit')->name('edit');
        Route::post('update/{department}', 'update')->name('update');
        Route::get('delete/{department}', 'destroy')->name('delete');
    });

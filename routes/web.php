<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CrimeController;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WantedController;
use App\Http\Controllers\LostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\AccidentController;
use App\Http\Controllers\SuspectController;
use App\Http\Controllers\WantedCarsController;
use App\Http\Controllers\StolenCarsController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/register', [AuthController::class, 'Register'])->name('register');
Route::get('/login', [AuthController::class, 'Login'])->name('login');
Route::get('verify/{token}', [AuthController::class, 'verify'])->name('verify');

Route::post('register_post', [AuthController::class, 'register_post']);
Route::post('login_post', [AuthController::class, 'login_post']);



Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'Dashboard']);

    // crimes
    Route::get('admin/crimes', [CrimeController::class, 'crimes']);
    Route::get('admin/crimes/add', [CrimeController::class, 'add_crimes']);
    Route::post('admin/crimes/add', [CrimeController::class, 'insert_add_crimes']);
    Route::get('/admin/crimes/edit/{id}', [CrimeController::class, 'Editcrimes']);
    Route::post('/admin/crimes/update/{id}', [CrimeController::class, 'Updatecrimes']);
    Route::get('/admin/crimes/delete/{id}', [CrimeController::class, 'Deletecrimes']);

    // Cases
    Route::get('admin/cases', [CaseController::class, 'cases']);
    Route::get('admin/cases/add', [CaseController::class, 'add_cases']);
    Route::post('admin/cases/add', [CaseController::class, 'insert_add_cases']);
    Route::get('/admin/cases/edit/{id}', [CaseController::class, 'Editcases']);
    Route::post('/admin/cases/update/{id}', [CaseController::class, 'Updatecases']);
    Route::get('/admin/cases/delete/{id}', [CaseController::class, 'Deletecases']);

    //sliders
    Route::get('admin/sliders', [HomeController::class, 'HomeSlider']);
    Route::get('admin/sliders/add', [HomeController::class, 'AddSlider']);
    Route::post('admin/sliders/add', [HomeController::class, 'StoreSlider']);
    Route::get('/admin/sliders/edit/{id}', [HomeController::class, 'EditSlider']);
    Route::post('/admin/sliders/update/{id}', [HomeController::class, 'UpdateSlider']);
    Route::get('/admin/sliders/delete/{id}', [HomeController::class, 'Deletesliders']);

    //welcome
    Route::get('admin/welcome', [WelcomeController::class, 'Homewelcome']);
    Route::get('admin/welcome/add', [WelcomeController::class, 'Addwelcome']);
    Route::post('admin/welcome/add', [WelcomeController::class, 'Storewelcome']);
    Route::get('/admin/welcome/edit/{id}', [WelcomeController::class, 'Editwelcome']);
    Route::post('/admin/welcome/update/{id}', [WelcomeController::class, 'Updatewelcome']);
    Route::get('/admin/welcome/delete/{id}', [WelcomeController::class, 'Deletewelcome']);

    //success
    Route::get('admin/success', [SuccessController::class, 'Homesuccess']);
    Route::get('admin/success/add', [SuccessController::class, 'Addsuccess']);
    Route::post('admin/success/add', [SuccessController::class, 'Storesuccess']);
    Route::get('/admin/success/edit/{id}', [SuccessController::class, 'Editsuccess']);
    Route::post('/admin/success/update/{id}', [SuccessController::class, 'Updatesuccess']);
    Route::get('/admin/success/delete/{id}', [SuccessController::class, 'Deletesuccess']);

    //news
    Route::get('admin/news', [NewsController::class, 'Homenews']);
    Route::get('admin/news/add', [NewsController::class, 'Addnews']);
    Route::post('admin/news/add', [NewsController::class, 'Storenews']);
    Route::get('/admin/news/edit/{id}', [NewsController::class, 'Editnews']);
    Route::post('/admin/news/update/{id}', [NewsController::class, 'Updatenews']);
    Route::get('/admin/news/delete/{id}', [NewsController::class, 'Deletenews']);

    //Wanted
    Route::get('admin/wanted', [WantedController::class, 'HomeWanted']);
    Route::get('admin/wanted/add', [WantedController::class, 'AddWanted']);
    Route::post('admin/wanted/add', [WantedController::class, 'StoreWanted']);
    Route::get('/admin/wanted/edit/{id}', [WantedController::class, 'EditWanted']);
    Route::post('/admin/wanted/update/{id}', [WantedController::class, 'UpdateWanted']);
    Route::get('/admin/wanted/delete/{id}', [WantedController::class, 'DeleteWanted']);

    //Losts
    Route::get('admin/lost', [LostController::class, 'HomeLost']);
    Route::get('admin/lost/add', [LostController::class, 'AddLost']);
    Route::post('admin/lost/add', [LostController::class, 'StoreLost']);
    Route::get('/admin/lost/edit/{id}', [LostController::class, 'EditLost']);
    Route::post('/admin/lost/update/{id}', [LostController::class, 'UpdateLost']);
    Route::get('/admin/lost/delete/{id}', [LostController::class, 'DeleteLost']);

    //Accidents
    Route::get('admin/accidents', [AccidentController::class, 'Homeaccidents']);
    Route::get('admin/accidents/add', [AccidentController::class, 'Addaccidents']);
    Route::post('admin/accidents/add', [AccidentController::class, 'Storeaccidents']);
    Route::get('/admin/accidents/edit/{id}', [AccidentController::class, 'Editaccidents']);
    Route::post('/admin/accidents/update/{id}', [AccidentController::class, 'Updateaccidents']);
    Route::get('/admin/accidents/delete/{id}', [AccidentController::class, 'Deleteaccidents']);


    // users
    Route::get('admin/user', [UserController::class, 'users']);
    Route::get('admin/user/add', [UserController::class, 'add_user']);
    Route::post('admin/user/add', [UserController::class, 'insert_add_user']);
    Route::get('/admin/user/delete/{id}', [UserController::class, 'DeleteUser']);

    //Suspects
    Route::get('admin/suspects', [SuspectController::class, 'HomeSuspects']);
    Route::get('admin/suspects/add', [SuspectController::class, 'AddSuspects']);
    Route::post('admin/suspects/add', [SuspectController::class, 'StoreSuspects']);
    Route::get('/admin/suspects/edit/{id}', [SuspectController::class, 'EditSuspects']);
    Route::post('/admin/suspects/update/{id}', [SuspectController::class, 'UpdateSuspects']);
    Route::get('/admin/suspects/delete/{id}', [SuspectController::class, 'DeleteSuspects']);

    // wanted_cars
    Route::get('admin/wanted_cars', [WantedCarsController::class, 'wanted_cars']);
    Route::get('admin/wanted_cars/add', [WantedCarsController::class, 'add_wanted_cars']);
    Route::post('admin/wanted_cars/add', [WantedCarsController::class, 'insert_add_wanted_cars']);
    Route::get('/admin/wanted_cars/edit/{id}', [WantedCarsController::class, 'Editwanted_cars']);
    Route::post('/admin/wanted_cars/update/{id}', [WantedCarsController::class, 'Updatewanted_cars']);
    Route::get('/admin/wanted_cars/delete/{id}', [WantedCarsController::class, 'Deletewanted_cars']);

    // stolen_cars
    Route::get('admin/stolen_cars', [StolenCarsController::class, 'stolen_cars']);
    Route::get('admin/stolen_cars/add', [StolenCarsController::class, 'add_stolen_cars']);
    Route::post('admin/stolen_cars/add', [StolenCarsController::class, 'insert_stolen_cars']);
    Route::get('/admin/stolen_cars/edit/{id}', [StolenCarsController::class, 'Editstolen_cars']);
    Route::post('/admin/stolen_cars/update/{id}', [StolenCarsController::class, 'Updatestolen_cars']);
    Route::get('/admin/stolen_cars/delete/{id}', [StolenCarsController::class, 'Deletestolen_cars']);


});

Route::group(['middleware' => 'citizen'], function () {
    Route::get('citizen/dashboard', [DashboardController::class, 'CitizenDashboard']);

    //Cases
    Route::get('citizen/cases/add', [CaseController::class, 'citizen_add_cases']);
    Route::post('citizen/cases/add', [CaseController::class, 'citizen_insert_add_cases']);

    //Letter
    Route::get('citizen/letter', [LetterController::class, 'Homeletter']);
    Route::get('citizen/letter/add', [LetterController::class, 'citizen_add_letter']);
    Route::post('citizen/letter/add', [LetterController::class, 'citizen_insert_add_letter']);

    //Report
    Route::get('generate-pdf', [PdfController::class, 'generatepdf']);

    //Lost
    Route::get('citizen/lost', [LostController::class, 'citizenLost']);
    Route::get('citizen/lost/add', [LostController::class, 'citizenAddLost']);
    Route::post('citizen/lost/add', [LostController::class, 'citizenStoreLost']);

    //Accidents
    Route::get('citizen/accidents', [AccidentController::class, 'citizen_accidents']);
    Route::get('citizen/accidents/add', [AccidentController::class, 'citizen_add_accidents']);
    Route::post('citizen/accidents/add', [AccidentController::class, 'citizen_insert_accidents']);




});

Route::group(['middleware' => 'police'], function () {
    Route::get('police/dashboard', [DashboardController::class, 'policeDashboard']);

    // Cases
    Route::get('police/cases', [CaseController::class, 'police_case']);
    Route::get('police/cases/add', [CaseController::class, 'add_police']);
    Route::post('police/cases/add', [CaseController::class, 'insert_add_police']);
    Route::get('/police/cases/edit/{id}', [CaseController::class, 'Editpolice']);
    Route::post('/police/cases/update/{id}', [CaseController::class, 'Updatepolice']);
    Route::get('/police/cases/delete/{id}', [CaseController::class, 'Deletepolice']);



    //Report
    Route::get('generate-pdf', [PdfController::class, 'generatepdf']);

    //Losts
    Route::get('police/lost', [LostController::class, 'policeLost']);
    Route::get('police/lost/add', [LostController::class, 'AddpoliceLost']);
    Route::post('police/lost/add', [LostController::class, 'StorepoliceLost']);
    Route::get('/police/lost/edit/{id}', [LostController::class, 'EditpoliceLost']);
    Route::post('/police/lost/update/{id}', [LostController::class, 'UpdatepoliceLost']);

    //Accidents
    Route::get('police/accidents', [AccidentController::class, 'policeaccidents']);
    Route::get('police/accidents/add', [AccidentController::class, 'policeAddaccidents']);
    Route::post('police/accidents/add', [AccidentController::class, 'policeStoreaccidents']);
    Route::get('/police/accidents/edit/{id}', [AccidentController::class, 'policeEditaccidents']);
    Route::post('/police/accidents/update/{id}', [AccidentController::class, 'policeUpdateaccidents']);

    //Wanted
    Route::get('police/wanted', [WantedController::class, 'policeWanted']);
    Route::get('police/wanted/add', [WantedController::class, 'police_AddWanted']);
    Route::post('police/wanted/add', [WantedController::class, 'police_StoreWanted']);

    //Suspects
    Route::get('police/suspects', [SuspectController::class, 'Home_police_Suspects']);
    Route::get('police/suspects/add', [SuspectController::class, 'Add_police_Suspects']);
    Route::post('police/suspects/add', [SuspectController::class, 'Store_police_Suspects']);

    // wanted_cars
    Route::get('police/wanted_cars', [WantedCarsController::class, 'police_wanted_cars']);
    Route::get('police/wanted_cars/add', [WantedCarsController::class, 'police_add_wanted_cars']);
    Route::post('police/wanted_cars/add', [WantedCarsController::class, 'police_insert_wanted_cars']);

    // stolen_cars
    Route::get('police/stolen_cars', [StolenCarsController::class, 'police_stolen_cars']);
    Route::get('police/stolen_cars/add', [StolenCarsController::class, 'police_add_stolen_cars']);
    Route::post('police/stolen_cars/add', [StolenCarsController::class, 'police_insert_stolen_cars']);


});

Route::get('logout', [AuthController::class, 'logout']);

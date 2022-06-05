<?php

use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BundleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FollowUpController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AppAspectController;
use App\Http\Controllers\AppEventController;
use App\Http\Controllers\KeyresultController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ObjectiveAspectController;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

//all
Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

//resource route
Route::resources([
    'customer' => CustomerController::class,
    'invoice' => InvoiceController::class,
    'followUp' => FollowUpController::class,
    'contact' => ContactController::class,
]);


//opm
Route::resources([
    'bundle' => BundleController::class,
    'project' => ProjectController::class,
    'task' => TaskController::class,
]);


//crm
// Route::get('/listcustomer', function () {
//     return view('customer/index');
// });
Route::get('/data/pending', [CustomerController::class, 'pending']);
Route::get('/data/declined', [CustomerController::class, 'declined']);

//okr_login
Route::get('/login',[UserController::class, 'index']);
Route::post('/login',[UserController::class, 'authenticate'])->name('login');
Route::get('/register',[UserController::class, 'register']);
Route::get('actionlogout', [UserController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/todo', function () {
    return view('todo');
});
Route::get('/invoice', function () {
    return view('customer/invoice');
});
Route::get('/service', function () {
    return view('service');
});

//okr
Route::get('/okrdashboard', function ()
{
    return view('okrdashboard.index',
        ["title" => "Dashboard"]
    );
})->middleware('auth');

Route::get('/okrsetup', function ()
{
    return view('okrsetup.index',
        ["title" => "OKRSetUp"]
    );
});

Route::get('/okrappevent', function ()
{
    return view('okrappevent.index',
        ["title" => "Appraisal Event"]
    );
});

Route::get('/okrschmonitor', function ()
{
    return view('okrschmonitor.index',
        ["title" => "Schedule Monitor"]
    );
});

Route::get('/okrcrew', function ()
{
    return view('okrcrew.index',
        ["title" => "Crew"]
    );
});

//Route::get('/okrcrew',[EmployeeController,'index']);
Route::get('/okrcrew', [EmployeeController::class, 'index']);
Route::get('/okrsetup', [AppAspectController::class, 'index']);
Route::get('/okrappevent', [AppEventController::class, 'index']);
Route::get('/search', [AppEventController::class, 'search'])->name('search');


Route::GET('jenisposisi', 'App\Http\Controllers\EmployeeController@jenisposisi')->name('jenisposisi');
Route::POST('simpancrew', 'App\Http\Controllers\EmployeeController@simpancrew')->name('simpancrew');
//ROUTE OBJECTIVE
Route::POST('simpanobjective', 'App\Http\Controllers\ObjectiveAspectController@simpanobjective')->name('simpanobjective');
Route::get('/okrsetup/editobjective/{id}', 'App\Http\Controllers\ObjectiveAspectController@editobjective')->name('editobjective');
Route::post('/okrsetup/updateobjective/{id}', 'App\Http\Controllers\ObjectiveAspectController@updateobjective')->name('updateobjective');
Route::get('/okrsetup/hapusobjective/{id}', 'App\Http\Controllers\ObjectiveAspectController@hapusobjective')->name('hapusobjective');

//ROUTE KEY RESULT
Route::POST('simpankeyresult', 'App\Http\Controllers\KeyresultController@simpankeyresult')->name('simpankeyresult');
Route::get('/okrsetup/editkeyresult/{id}', 'App\Http\Controllers\KeyresultController@editkeyresult')->name('editkeyresult');
Route::post('/okrsetup/updatekeyresult/{id}', 'App\Http\Controllers\KeyresultController@updatekeyresult')->name('updatekeyresult');
Route::get('/okrsetup/hapuskeyresult/{id}', 'App\Http\Controllers\KeyresultController@hapuskeyresult')->name('hapuskeyresult');

//ROUTE OKR
Route::POST('simpanokr', 'App\Http\Controllers\AppAspectController@simpanokr')->name('simpanokr');
Route::POST('detailokr', 'App\Http\Controllers\AppAspectController@detailokr')->name('detailokr');
Route::get('/okrsetup/edit/{id}', 'App\Http\Controllers\AppAspectController@editokr')->name('editokr');
Route::post('/okrsetup/update/{id}', 'App\Http\Controllers\AppAspectController@updateokr')->name('updateokr');
Route::get('/okrsetup/hapus/{id}', 'App\Http\Controllers\AppAspectController@hapusokr')->name('hapusokr');

Route::POST('simpanjenisposisi', 'App\Http\Controllers\PositionController@simpanjenisposisi')->name('simpanjenisposisi');
Route::POST('simpanappeventdetail', 'App\Http\Controllers\AppEventController@simpanappeventdetail')->name('simpanappeventdetail');

//auth
Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['cekLevel:manager']], function(){
        Route::get('manager','App\Http\Controllers\ManagerController@index')->name('manager');
    });
    Route::group(['middleware' => ['cekLevel:pegawai']], function(){
        Route::get('pegawai','App\Http\Controllers\PegawaiController@index')->name('pegawai');
    });
});

Route::post('simpanappeventdetail', 'App\Http\Controllers\AppEventController@simpanappeventdetail')->name('simpanappeventdetail');
Route::post('okr/search/crew','App\Http\Controllers\AppEventController@searchcrew')->name('searchcrew');


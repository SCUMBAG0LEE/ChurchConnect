<?php

use App\Http\Controllers\WorshipController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\Setting;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\AccountsController;

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

/** for side bar menu active */
function set_active($route) {
    if (is_array($route)) {
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}

// Redirect root URL to the home page inside the landingpage folder
// Group routes for the landing page
Route::prefix('/')->group(function () {
    Route::view('/', 'landingpage.home');
    Route::view('about', 'landingpage.about');
    Route::view('blog', 'landingpage.blog');
    Route::view('sermon', 'landingpage.sermon');
    Route::view('contact', 'landingpage.contact');
});

Route::post('send-mail', function (\Illuminate\Http\Request $request) {
    $details = [
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'phone' => $request->input('phone'),
        'message' => $request->input('message'),
    ];

    try {
        \Mail::to('milson0403@gmail.com')->send(new \App\Mail\SendMail($details));
        return redirect()->back()->with('status', 'success')->with('message', 'Email sent successfully.');
    } catch (\Exception $e) {
        return redirect()->back()->with('status', 'error')->with('message', 'Failed to send email. Please try again later.');
    }
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('home', function() {
        return view('home');
    });
});

Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers\Auth'], function() {
    // ----------------------------login ------------------------------//
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authenticate');
        Route::get('/logout', 'logout')->name('logout');
        Route::post('change/password', 'changePassword')->name('change/password');
    });

    // ----------------------------- register -------------------------//
    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register', 'register')->name('register');
        Route::post('/register', 'storeUser')->name('register');    
    });
});


    // -------------------------- main dashboard ----------------------//
    Route::group(['namespace' => 'App\Http\Controllers'], function() {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/home', 'index')->middleware('auth')->name('home');
        Route::get('user/profile/page', 'userProfile')->middleware('auth')->name('user/profile/page');
        Route::get('teacher/dashboard', 'teacherDashboardIndex')->middleware('auth')->name('teacher/dashboard');
        Route::get('member/dashboard', 'memberDashboardIndex')->middleware('auth')->name('member/dashboard');
    });

    // ----------------------------- user controller ---------------------//
    Route::controller(UserManagementController::class)->group(function () {
        Route::get('list/users', 'index')->middleware('auth')->name('list/users');
        Route::post('change/password', 'changePassword')->name('change/password');
        Route::get('view/user/edit/{id}', 'userView')->middleware('auth');
        Route::post('user/update', 'userUpdate')->name('user/update');
        Route::post('user/delete', 'userDelete')->name('user/delete');
        Route::get('get-users-data', 'getUsersData')->name('get-users-data'); /** get all data users */
    });

    // ------------------------ setting -------------------------------//
    Route::controller(Setting::class)->group(function () {
        Route::get('setting/page', 'index')->middleware('auth')->name('setting/page');
    });

    // ------------------------ member -------------------------------//
    Route::controller(MemberController::class)->group(function () {
        Route::get('member/list', 'member')->middleware('auth')->name('member/list'); // list member
        Route::get('member/grid', 'memberGrid')->middleware('auth')->name('member/grid'); // grid member
        Route::get('member/add/page', 'memberAdd')->middleware('auth')->name('member/add/page'); // page member
        Route::post('member/add/save', 'memberSave')->name('member/add/save'); // save record member
        Route::get('member/edit/{id}', 'memberEdit'); // view for edit
        Route::post('member/update', 'memberUpdate')->name('member/update'); // update record member
        Route::post('member/delete', 'memberDelete')->name('member/delete'); // delete record member
        Route::get('member/profile/{id}', 'memberProfile')->middleware('auth')->name('member/profile'); // profile member
        Route::get('member/search', 'search')->name('member/search');
    });


    // ----------------------- branch -----------------------------//
    Route::controller(BranchController::class)->group(function () {
        Route::get('branch/list/page', 'branchList')->middleware('auth')->name('branch/list/page'); // branch/list/page
        Route::get('branch/add/page', 'indexBranch')->middleware('auth')->name('branch/add/page'); // page add branch
        Route::get('branch/edit/{branch_id}', 'editBranch'); // page add branch
        Route::post('branch/save', 'saveRecord')->middleware('auth')->name('branch/save'); // branch/save
        Route::post('branch/update', 'updateRecord')->middleware('auth')->name('branch/update'); // branch/update
        Route::post('branch/delete', 'deleteRecord')->middleware('auth')->name('branch/delete'); // branch/delete
        Route::get('get-data-list', 'getDataList')->name('get-data-list'); // get data list
    });


    // ----------------------- invoice -----------------------------//
    Route::controller(InvoiceController::class)->group(function () {
        Route::get('invoice/list/page', 'invoiceList')->middleware('auth')->name('invoice/list/page'); // subjeinvoicect/list/page
        Route::get('invoice/paid/page', 'invoicePaid')->middleware('auth')->name('invoice/paid/page'); // invoice/paid/page
        Route::get('invoice/overdue/page', 'invoiceOverdue')->middleware('auth')->name('invoice/overdue/page'); // invoice/overdue/page
        Route::get('invoice/draft/page', 'invoiceDraft')->middleware('auth')->name('invoice/draft/page'); // invoice/draft/page
        Route::get('invoice/recurring/page', 'invoiceRecurring')->middleware('auth')->name('invoice/recurring/page'); // invoice/recurring/page
        Route::get('invoice/cancelled/page', 'invoiceCancelled')->middleware('auth')->name('invoice/cancelled/page'); // invoice/cancelled/page
        Route::get('invoice/grid/page', 'invoiceGrid')->middleware('auth')->name('invoice/grid/page'); // invoice/grid/page
        Route::get('invoice/add/page', 'invoiceAdd')->middleware('auth')->name('invoice/add/page'); // invoice/add/page
        Route::post('invoice/add/save', 'saveRecord')->name('invoice/add/save'); // invoice/add/save
        Route::post('invoice/update/save', 'updateRecord')->name('invoice/update/save'); // invoice/update/save
        Route::post('invoice/delete', 'deleteRecord')->name('invoice/delete'); // invoice/delete
        Route::get('invoice/edit/{invoice_id}', 'invoiceEdit')->middleware('auth')->name('invoice/edit/page'); // invoice/edit/page
        Route::get('invoice/view/{invoice_id}', 'invoiceView')->middleware('auth')->name('invoice/view/page'); // invoice/view/page
        Route::get('invoice/settings/page', 'invoiceSettings')->middleware('auth')->name('invoice/settings/page'); // invoice/settings/page
        Route::get('invoice/settings/tax/page', 'invoiceSettingsTax')->middleware('auth')->name('invoice/settings/tax/page'); // invoice/settings/tax/page
        Route::get('invoice/settings/bank/page', 'invoiceSettingsBank')->middleware('auth')->name('invoice/settings/bank/page'); // invoice/settings/bank/page
    });

    // ----------------------- accounts ----------------------------//
    Route::controller(AccountsController::class)->group(function () {
        Route::get('account/fees/collections/page', 'index')->middleware('auth')->name('account/fees/collections/page'); // account/fees/collections/page
        Route::get('add/fees/collection/page', 'addFeesCollection')->middleware('auth')->name('add/fees/collection/page'); // add/fees/collection
        Route::post('fees/collection/save', 'saveRecord')->middleware('auth')->name('fees/collection/save'); // fees/collection/save
    });

    // ----------------------- worship ----------------------------//
Route::controller(WorshipController::class)->group(function () {
    Route::get('worship/add', 'create')->middleware('auth')->name('worship/add/page'); 
    Route::post('worship/store', 'store')->middleware('auth')->name('worship/store'); 
    Route::get('/worship/details/{id}', 'getDetails');
    Route::get('/worship/list', 'listPage')->name('worship/list');
    Route::get('/worship/edit/{id}', 'edit')->name('worship/edit')->middleware('auth');
    Route::put('/worship/update/{id}', 'update')->name('worship/update')->middleware('auth');
    Route::delete('/worship/delete/{id}', 'destroy')->name('worship/delete')->middleware('auth');
});

// ----------------------- Worship or Sermon Summary ----------------------------//
Route::resource('worshipSummary', WorshipSummaryController::class);



});


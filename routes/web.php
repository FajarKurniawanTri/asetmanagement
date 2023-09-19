<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UgroupController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\NVRcontroller;
use App\Http\Controllers\DVRcontroller;
use App\Http\Controllers\Servicecontroller;
use App\Http\Controllers\DataController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\AdataController;
use App\Http\Controllers\AdvrController;
use App\Http\Controllers\AgroupController;
use App\Http\Controllers\AunitController;
use App\Http\Controllers\AlocationController;
use App\Http\Controllers\AnvrController;
use App\Http\Controllers\AserviceController;
use App\Http\Controllers\AlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CctvController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UDashboardController;
use App\Http\Controllers\FaceRecognitionController;
use App\Http\Controllers\AfserviceController;
use App\Http\Controllers\FServicecontroller;
use App\Http\Controllers\UcctvController;
use App\Http\Controllers\UFaceController;
use App\Http\Controllers\UfserviceController;
use App\Http\Controllers\VrController;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

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
    return view('welcome');
});


Route::get('A-SERVICE/export/excel', [AserviceController::class, 'export_excel']);
Route::get('A-FSERVICE/export/excel', [AfserviceController::class, 'export_excel']);
Route::get('A-CCTV/export/excel', [CctvController::class, 'export_excel']);
Route::get('A-GROUP/export/excel', [AgroupController::class, 'export_excel']);
Route::get('A-UNIT/export/excel', [AunitController::class, 'export_excel']);
Route::get('A-LOCATION/export/excel', [AlocationController::class, 'export_excel']);
Route::get('A-FACE/export/excel', [FaceRecognitionController::class, 'export_excel']);





Route::controller(UserController::class)->prefix('A-DATA')->group(function () {
    Route::get('', 'adata')->name('A-DATA');
    Route::get('create', 'create')->name('A-DATA.create');
    Route::post('store', 'store')->name('A-DATA.store');
    Route::get('show/{id}', 'show')->name('A-DATA.show');
    Route::get('edit/{id}', 'edit')->name('A-DATA.edit');
    Route::put('edit/{id}', 'update')->name('A-DATA.update');
    Route::delete('destroy/{id}', 'destroy')->name('A-DATA.destroy');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');

});
Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard'); // Rute DashboardController

});

Route::middleware('auth')->group(function () {
    Route::get('u_dashboard', [UDashboardController::class, 'index'])->name('u_dashboard'); // Rute DashboardController

});


Route::middleware('auth')->group(function () {
    //Route::get('dashboard', function () {
        //return view('dashboard');
    //})->name('dashboard');

    //Route::get('u_dashboard', function () {
       //return view('u_dashboard'); // Ganti 'user_dashboard' dengan nama view yang sesuai
   // })->name('u_dashboard');
    


    Route::controller(AgroupController::class)->prefix('A-GROUP')->group(function () {
        Route::get('', 'agroup')->name('A-GROUP');
        Route::get('create', 'create')->name('A-GROUP.create');
        Route::post('store', 'store')->name('A-GROUP.store');
        Route::get('show/{id}', 'show')->name('A-GROUP.show');
        Route::get('edit/{id}', 'edit')->name('A-GROUP.edit');
        Route::put('edit/{id}', 'update')->name('A-GROUP.update');
        Route::delete('destroy/{id}', 'destroy')->name('A-GROUP.destroy');
    });
    Route::controller(UgroupController::class)->prefix('U-group')->group(function () {
        Route::get('', 'ugroup')->name('U-group');
        //Route::get('create', 'create')->name('A-GROUP.create');
        //Route::post('store', 'store')->name('A-GROUP.store');
        Route::get('show/{id}', 'show')->name('U-group.show');
        //Route::get('edit/{id}', 'edit')->name('A-GROUP.edit');
        //Route::put('edit/{id}', 'update')->name('A-GROUP.update');
        //Route::delete('destroy/{id}', 'destroy')->name('A-GROUP.destroy');
    });

    Route::controller(AunitController::class)->prefix('A-UNIT')->group(function () {
        Route::get('', 'aunit')->name('A-UNIT');
        Route::get('create', 'create')->name('A-UNIT.create');
        Route::post('store', 'store')->name('A-UNIT.store');
        Route::get('show/{id}', 'show')->name('A-UNIT.show');
        Route::get('edit/{id}', 'edit')->name('A-UNIT.edit');
        Route::put('edit/{id}', 'update')->name('A-UNIT.update');
        Route::delete('destroy/{id}', 'destroy')->name('A-UNIT.destroy');
    });

    
    Route::controller(UnitController::class)->prefix('unit')->group(function () {
        Route::get('', 'uunit')->name('unit');
        //Route::get('create', 'create')->name('products.create');
        //Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('unit.show');
        //Route::get('edit/{id}', 'edit')->name('products.edit');
        //Route::put('edit/{id}', 'update')->name('products.update');
        //Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });


    Route::controller(AlocationController::class)->prefix('A-LOCATION')->group(function () {
        Route::get('', 'alocation')->name('A-LOCATION');
        Route::get('create', 'create')->name('A-LOCATION.create');
        Route::post('store', 'store')->name('A-LOCATION.store');
        Route::get('show/{id}', 'show')->name('A-LOCATION.show');
        Route::get('edit/{id}', 'edit')->name('A-LOCATION.edit');
        Route::put('edit/{id}', 'update')->name('A-LOCATION.update');
        Route::delete('destroy/{name}', 'destroy')->name('A-LOCATION.destroy');
    });
    Route::controller(LocationController::class)->prefix('location')->group(function () {
        Route::get('', 'ulocation')->name('location');
        //Route::get('create', 'create')->name('products.create');
        //Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('location.show');
        //Route::get('edit/{id}', 'edit')->name('products.edit');
        //Route::put('edit/{id}', 'update')->name('products.update');
        //Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });


    Route::controller(AnvrController::class)->prefix('A-NVR')->group(function () {
        Route::get('', 'anvr')->name('A-NVR');
        Route::post('A-NVR/cctv/store', [AnvrController::class, 'storeCctv'])->name('cctv.store');
        Route::put('A-NVR/cctv/update/{id}', [AnvrController::class, 'updateCctv'])->name('cctv.update');
        Route::get('create', 'create')->name('A-NVR.create');
        Route::post('store', 'store')->name('A-NVR.store');
        Route::get('show/{id}', 'show')->name('A-NVR.show');
        Route::get('edit/{id}', 'edit')->name('A-NVR.edit');
        Route::put('edit/{id}', 'update')->name('A-NVR.update');
        Route::delete('destroy/{id}', 'destroy')->name('A-NVR.destroy');
    });
    Route::controller(NVRcontroller::class)->prefix('NVR')->group(function () {
        Route::get('', 'unvr')->name('NVR');
        //Route::get('create', 'create')->name('products.create');
        //Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('NVR.show');
        //Route::get('edit/{id}', 'edit')->name('products.edit');
        //Route::put('edit/{id}', 'update')->name('products.update');
        //Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });


    Route::controller(AdvrController::class)->prefix('A-DVR')->group(function () {
        Route::get('', 'advr')->name('A-DVR');
        Route::get('create', 'create')->name('A-DVR.create');
        Route::post('store', 'store')->name('A-DVR.store');
        Route::get('show/{id}', 'show')->name('A-DVR.show');
        Route::get('edit/{id}', 'edit')->name('A-DVR.edit');
        Route::put('edit/{id}', 'update')->name('A-DVR.update');
        Route::delete('destroy/{id}', 'destroy')->name('A-DVR.destroy');
        Route::post('A-DVR/cctv/store', [AdvrController::class, 'storeCctv'])->name('cctv.store');
        Route::put('A-DVR/cctv/update/{id}', [AdvrController::class, 'updateCctv'])->name('cctv.update');
    });
    Route::controller(DVRcontroller::class)->prefix('DVR')->group(function () {
        Route::get('', 'udvr')->name('DVR');
        //Route::get('create', 'create')->name('products.create');
        //Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('DVR.show');
        //Route::get('edit/{id}', 'edit')->name('products.edit');
        //Route::put('edit/{id}', 'update')->name('products.update');
        //Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

    Route::controller(VrController::class)->prefix('A-VR')->group(function () {
        Route::get('', 'avr')->name('A-VR');
        Route::get('create', 'create')->name('A-VR.create');
        Route::post('store', 'store')->name('A-VR.store');
        Route::get('show/{id}', 'show')->name('A-VR.show');
        Route::get('edit/{id}', 'edit')->name('A-VR.edit');
        Route::put('edit/{id}', 'update')->name('A-VR.update');
        Route::delete('destroy/{id}', 'destroy')->name('A-VR.destroy');
    });


    Route::controller(AserviceController::class)->prefix('A-SERVICE')->group(function () {
        Route::get('', 'aservice')->name('A-SERVICE');
        Route::get('create', 'create')->name('A-SERVICE.create');
        Route::post('store', 'store')->name('A-SERVICE.store');
        Route::get('show/{id}', 'show')->name('A-SERVICE.show');
        Route::get('edit/{id}', 'edit')->name('A-SERVICE.edit');
        Route::put('edit/{id}', 'update')->name('A-SERVICE.update');
        Route::delete('destroy/{id}', 'destroy')->name('A-SERVICE.destroy');
    });
    Route::controller(Servicecontroller::class)->prefix('service')->group(function () {
        Route::get('', 'uservice')->name('service');
        //Route::get('create', 'create')->name('products.create');
        //Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('service.show');
        //Route::get('edit/{id}', 'edit')->name('products.edit');
        //Route::put('edit/{id}', 'update')->name('products.update');
        //Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });


    Route::controller(AdataController::class)->prefix('A-DATA')->group(function () {
        Route::get('', 'adata')->name('A-DATA');
        Route::get('create', 'create')->name('A-DATA.create');
        Route::post('store', 'store')->name('A-DATA.store');
        Route::get('show/{id}', 'show')->name('A-DATA.show');
        Route::get('edit/{id}', 'edit')->name('A-DATA.edit');
        Route::put('edit/{id}', 'update')->name('A-DATA.update');
        Route::delete('destroy/{id}', 'destroy')->name('A-DATA.destroy');
    });
    
    Route::controller(AlogController::class)->prefix('A-LOG')->group(function () {
        Route::get('', 'alog')->name('A-LOG');
        Route::get('create', 'create')->name('A-LOG.create');
        Route::post('store', 'store')->name('A-LOG.store');
        Route::get('show/{id}', 'show')->name('A-LOG.show');
        Route::get('edit/{id}', 'edit')->name('A-LOG.edit');
        Route::put('edit/{id}', 'update')->name('A-LOG.update');
        Route::delete('destroy/{id}', 'destroy')->name('A-LOG.destroy');
    });

    Route::controller(FaceRecognitionController::class)->prefix('A-FACE')->group(function () {
        Route::get('', 'aface')->name('A-FACE');
        Route::get('create', 'create')->name('A-FACE.create');
        Route::post('store', 'store')->name('A-FACE.store');
        Route::get('show/{id}', 'show')->name('A-FACE.show');
        Route::get('edit/{id}', 'edit')->name('A-FACE.edit');
        Route::put('edit/{id}', 'update')->name('A-FACE.update');
        Route::delete('destroy/{id}', 'destroy')->name('A-FACE.destroy');
    });

    Route::controller(UFaceController::class)->prefix('FACE')->group(function () {
        Route::get('', 'uface')->name('FACE');
        Route::get('create', 'create')->name('FACE.create');
        Route::post('store', 'store')->name('FACE.store');
        Route::get('show/{id}', 'show')->name('FACE.show');
        Route::get('edit/{id}', 'edit')->name('FACE.edit');
        Route::put('edit/{id}', 'update')->name('FACE.update');
        Route::delete('destroy/{id}', 'destroy')->name('FACE.destroy');
    });

    Route::controller(AfserviceController::class)->prefix('A-FSERVICE')->group(function () {
        Route::get('', 'afservice')->name('A-FSERVICE');
        Route::get('create', 'create')->name('A-FSERVICE.create');
        Route::post('store', 'store')->name('A-FSERVICE.store');
        Route::get('show/{id}', 'show')->name('A-FSERVICE.show');
        Route::get('edit/{id}', 'edit')->name('A-FSERVICE.edit');
        Route::put('edit/{id}', 'update')->name('A-FSERVICE.update');
        Route::delete('destroy/{id}', 'destroy')->name('A-FSERVICE.destroy');
    });

    Route::controller(UfserviceController::class)->prefix('U-FSERVICE')->group(function () {
        Route::get('', 'ufservice')->name('U-FSERVICE');
        Route::get('create', 'create')->name('U-FSERVICE.create');
        Route::post('store', 'store')->name('U-FSERVICE.store');
        Route::get('show/{id}', 'show')->name('U-FSERVICE.show');
        Route::get('edit/{id}', 'edit')->name('U-FSERVICE.edit');
        Route::put('edit/{id}', 'update')->name('U-FSERVICE.update');
        Route::delete('destroy/{id}', 'destroy')->name('U-FSERVICE.destroy');
    });

    Route::controller(FServicecontroller::class)->prefix('service')->group(function () {
        //Route::get('', 'uservice')->name('service');
        //Route::get('create', 'create')->name('products.create');
        //Route::post('store', 'store')->name('products.store');
        //Route::get('show/{id}', 'show')->name('service.show');
        //Route::get('edit/{id}', 'edit')->name('products.edit');
        //Route::put('edit/{id}', 'update')->name('products.update');
        //Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

    Route::controller(CctvController::class)->prefix('A-CCTV')->group(function () {
        Route::get('', 'acctv')->name('A-CCTV');
        Route::get('create', 'create')->name('A-CCTV.create');
        Route::post('store', 'store')->name('A-CCTV.store');
        Route::get('show/{id}', 'show')->name('A-CCTV.show');
        Route::get('edit/{id}', 'edit')->name('A-CCTV.edit');
        Route::put('edit/{id}', 'update')->name('A-CCTV.update');
        Route::delete('destroy/{id}', 'destroy')->name('A-CCTV.destroy');
    });

    Route::controller(UcctvController::class)->prefix('CCTV')->group(function () {
        Route::get('', 'ucctv')->name('CCTV');
        Route::get('create', 'create')->name('CCTV.create');
        Route::post('store', 'store')->name('CCTV.store');
        Route::get('show/{id}', 'show')->name('CCTV.show');
        Route::get('edit/{id}', 'edit')->name('CCTV.edit');
        Route::put('edit/{id}', 'update')->name('CCTV.update');
        Route::delete('destroy/{id}', 'destroy')->name('CCTV.destroy');
    });





    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});


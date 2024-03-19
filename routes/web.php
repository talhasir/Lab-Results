<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConcreteCompressController;
use App\Http\Controllers\BrickTestingController;
use App\Http\Controllers\CaliforniaController;
use App\Http\Controllers\WorkSheetController;
use App\Http\Controllers\FieldDensityController;
use App\Http\Controllers\CLAY_LUMPS_IN_AGGREGATE;
use App\Http\Controllers\MOISTURE_DENSITY_RELATIONS;
use App\Http\Controllers\SOUNDNESS_OF_AGGREGATE_BY_USE_OF_SODIUM_SULPHATE_Controller;
use App\Http\Controllers\UNIT_WEIGHT_OF_AGGREGATE;
use App\Http\Controllers\PENETRATION_OF_BITUMINOUS_MATERIAL;

/*
|--------------------------------------------------------------------------
    // For CONTRETE COMPRESSIVE STRENGTH (ASTM C39) //
|--------------------------------------------------------------------------
*/

Route::get('/get_84_CONCRETE_COMPRESS', [ConcreteCompressController::class, 'getpage']);
Route::post('/post_84_CONCRETE_COMPRESS', [ConcreteCompressController::class, 'postpage'])->name('post_84_CONCRETE_COMPRESS');


/*
|--------------------------------------------------------------------------
| Routes For BRICK TESTING
|--------------------------------------------------------------------------
*/
Route::get('/get_82_Brick_Testing', [BrickTestingController::class, 'getPage']);
Route::post('/post_82_Brick_Testing', [BrickTestingController::class, 'postPage'])->name('post_82_Brick_Testing');


/*
|--------------------------------------------------------------------------
| Routes For CALIFORNIA
|--------------------------------------------------------------------------
*/
Route::get('/get_40_CALIFORNIA_BEARING_RATIO', [CaliforniaController::class, 'getPage']);
Route::post('/post_40_CALIFORNIA_BEARING_RATIO', [CaliforniaController::class, 'postPage'])->name('post_view_40_CALIFORNIA_BEARING_RATIO');


/*
|--------------------------------------------------------------------------
| Routes For WORK SHEET
|--------------------------------------------------------------------------
*/
Route::get('/get_89_WORK_SHEET', [WorkSheetController::class, 'getPage']);
Route::post('/post_89_WORK_SHEET', [WorkSheetController::class, 'postPage'])->name('post_89_WORK_SHEET');


/*
|--------------------------------------------------------------------------
| Routes For FIELD DENSITY
|--------------------------------------------------------------------------
*/
Route::get('/get_42_field_density', [FieldDensityController::class, 'getPage']);;
Route::post('/post_42_field_density', [FieldDensityController::class, 'postPage'])->name('post_42_field_density');

/*
|--------------------------------------------------------------------------
| Routes For 51-SOUNDNESS OF AGGREGATE BY USE OF SODIUM SULPHATE
|--------------------------------------------------------------------------
*/
Route::get('/51_SOUNDNESS_OF_AGGREGATE_BY_USE_OF_SODIUM_SULPHATE', [SOUNDNESS_OF_AGGREGATE_BY_USE_OF_SODIUM_SULPHATE_Controller::class, 'getPage']);;
Route::post('/VIEW_51_SOUNDNESS_OF_AGGREGATE_BY_USE_OF_SODIUM_SULPHATE', [SOUNDNESS_OF_AGGREGATE_BY_USE_OF_SODIUM_SULPHATE_Controller::class, 'postPage'])->name('VIEW_51_SOUNDNESS_OF_AGGREGATE_BY_USE_OF_SODIUM_SULPHATE');


/*
|--------------------------------------------------------------------------
| Routes For 54_UNIT_WEIGHT_OF_AGGREGATE
|--------------------------------------------------------------------------
*/
Route::get('/54_UNIT_WEIGHT_OF_AGGREGATE', [UNIT_WEIGHT_OF_AGGREGATE::class, 'getPage']);
Route::post('/VIEW_54_UNIT_WEIGHT_OF_AGGREGATE', [UNIT_WEIGHT_OF_AGGREGATE::class, 'postPage'])->name('VIEW_54_UNIT_WEIGHT_OF_AGGREGATE');

/*
|--------------------------------------------------------------------------
| Routes For 55-CLAY LUMPS IN AGGREGATE
|--------------------------------------------------------------------------
*/
Route::get('/55-CLAY LUMPS IN AGGREGATE', [CLAY_LUMPS_IN_AGGREGATE::class, 'getPage']);;
Route::post('/VIEW 55-CLAY LUMPS IN AGGREGATE', [CLAY_LUMPS_IN_AGGREGATE::class, 'postPage'])->name('VIEW 55-CLAY LUMPS IN AGGREGATE');


/*
|--------------------------------------------------------------------------
| Routes For 69_PENETRATION_OF_BITUMINOUS_MATERIAL
|--------------------------------------------------------------------------
*/
Route::get('/69_PENETRATION_OF_BITUMINOUS_MATERIAL', [PENETRATION_OF_BITUMINOUS_MATERIAL::class, 'getPage']);;
Route::post('/VIEW_69_PENETRATION_OF_BITUMINOUS_MATERIAL', [PENETRATION_OF_BITUMINOUS_MATERIAL::class, 'postPage'])->name('VIEW_69_PENETRATION_OF_BITUMINOUS_MATERIAL');


/*
|--------------------------------------------------------------------------
| Routes For 69_PENETRATION_OF_BITUMINOUS_MATERIAL
|--------------------------------------------------------------------------
*/
Route::get('/106_MOISTURE_DENSITY_RELATIONS', [MOISTURE_DENSITY_RELATIONS::class, 'getPage']);;
Route::post('/VIEW_106_MOISTURE_DENSITY_RELATIONS', [MOISTURE_DENSITY_RELATIONS::class, 'postPage'])->name('VIEW_106_MOISTURE_DENSITY_RELATIONS');



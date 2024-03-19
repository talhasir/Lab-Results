<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConcreteCompressController;
use App\Http\Controllers\BrickTestingController;
use App\Http\Controllers\CaliforniaController;
use App\Http\Controllers\WorkSheetController;
use App\Http\Controllers\FieldDensityController;
use App\Http\Controllers\CLAY_LUMPS_IN_AGGREGATE;
use App\Http\Controllers\SOUNDNESS_OF_AGGREGATE_BY_USE_OF_SODIUM_SULPHATE_Controller;
use App\Http\Controllers\UNIT_WEIGHT_OF_AGGREGATE;
use App\Http\Controllers\PENETRATION_OF_BITUMINOUS_MATERIAL;
use App\Http\Controllers\BITUMEN_EXTRACTION_GRADATION;
use App\Http\Controllers\BLENDING_OF_AGGREGATES;
use App\Http\Controllers\CONCRETE_COMPRESSIVE_STRENGTH;
use App\Http\Controllers\CONCRETE_MIX_DESIGN;

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
Route::post('/post_42_field_density', [FieldDensityController::class, 'postPage'])->name('post_42_field_density');


/*
|--------------------------------------------------------------------------
| Routes For 54_UNIT_WEIGHT_OF_AGGREGATE
|--------------------------------------------------------------------------
*/
Route::get('/54_UNIT_WEIGHT_OF_AGGREGATE', [UNIT_WEIGHT_OF_AGGREGATE::class, 'getPage']);;
Route::post('/post_42_field_density', [UNIT_WEIGHT_OF_AGGREGATE::class, 'postPage'])->name('post_42_field_density');

/*
|--------------------------------------------------------------------------
| Routes For 55-CLAY LUMPS IN AGGREGATE
|--------------------------------------------------------------------------
*/
Route::get('/55-CLAY LUMPS IN AGGREGATE', [CLAY_LUMPS_IN_AGGREGATE::class, 'getPage']);;
Route::post('/post_42_field_density', [CLAY_LUMPS_IN_AGGREGATE::class, 'postPage'])->name('post_42_field_density');


/*
|--------------------------------------------------------------------------
| Routes For 69_PENETRATION_OF_BITUMINOUS_MATERIAL
|--------------------------------------------------------------------------
*/
Route::get('/69_PENETRATION_OF_BITUMINOUS_MATERIAL', [PENETRATION_OF_BITUMINOUS_MATERIAL::class, 'getPage']);;
Route::post('/post_42_field_density', [PENETRATION_OF_BITUMINOUS_MATERIAL::class, 'postPage'])->name('post_42_field_density');


/*
|--------------------------------------------------------------------------
| Routes For 73_BITUMEN_EXTRACTION_GRADATION
|--------------------------------------------------------------------------
*/
Route::get('/73_BITUMEN_EXTRACTION_GRADATION', [BITUMEN_EXTRACTION_GRADATION::class, 'getPage']);;
Route::post('/post_42_field_density', [BITUMEN_EXTRACTION_GRADATION::class, 'postPage'])->name('post_42_field_density');



/*
|--------------------------------------------------------------------------
| Routes For 81_BLENDING_OF_AGGREGATES
|--------------------------------------------------------------------------
*/
Route::get('/81_BLENDING_OF_AGGREGATES', [BLENDING_OF_AGGREGATES::class, 'getPage']);;
Route::post('/post_42_field_density', [BLENDING_OF_AGGREGATES::class, 'postPage'])->name('post_42_field_density');


/*
|--------------------------------------------------------------------------
| Routes For 85_CONCRETE_COMPRESSIVE_STRENGTH_(28 DAYS)_(EZYPRO)
|--------------------------------------------------------------------------
*/
Route::get('/85_CONCRETE_COMPRESSIVE_STRENGTH_(28 DAYS)_(EZYPRO)', [CONCRETE_COMPRESSIVE_STRENGTH::class, 'getPage']);;
Route::post('/post_42_field_density', [CONCRETE_COMPRESSIVE_STRENGTH::class, 'postPage'])->name('post_42_field_density');


/*
|--------------------------------------------------------------------------
| Routes For 105_CONCRETE_MIX_DESIGN
|--------------------------------------------------------------------------
*/
Route::get('/105_CONCRETE_MIX_DESIGN', [CONCRETE_MIX_DESIGN::class, 'getPage']);;
Route::post('/post_42_field_density', [CONCRETE_MIX_DESIGN::class, 'postPage'])->name('post_42_field_density');



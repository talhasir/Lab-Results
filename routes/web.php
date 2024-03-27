<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BitumenExtractionGradation;
use App\Http\Controllers\BlendingOfAggregates;
use App\Http\Controllers\ConcreteCompressController;
use App\Http\Controllers\BrickTestingController;
use App\Http\Controllers\CaliforniaController;
use App\Http\Controllers\WorkSheetController;
use App\Http\Controllers\FieldDensityController;
use App\Http\Controllers\ClayLumpsInAggregate;
use App\Http\Controllers\CONCRETE_MIX_DESIGN;
use App\Http\Controllers\ConcreteCompressiveStrength;
use App\Http\Controllers\ConcreteMixDesign;
use App\Http\Controllers\PenetrationOfBituminousMaterial;
use App\Http\Controllers\SoundnessOfAggregateByUseOfSodiumSulphateController;
use App\Http\Controllers\UnitWeightOfAggregate;

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
Route::get('/51_SOUNDNESS_OF_AGGREGATE_BY_USE_OF_SODIUM_SULPHATE', [SoundnessOfAggregateByUseOfSodiumSulphateController::class, 'getPage']);;
Route::post('/VIEW_51_SOUNDNESS_OF_AGGREGATE_BY_USE_OF_SODIUM_SULPHATE', [SoundnessOfAggregateByUseOfSodiumSulphateController::class, 'postPage'])->name('VIEW_51_SOUNDNESS_OF_AGGREGATE_BY_USE_OF_SODIUM_SULPHATE');


/*
|--------------------------------------------------------------------------
| Routes For 54_UNIT_WEIGHT_OF_AGGREGATE
|--------------------------------------------------------------------------
*/
Route::get('/54_UNIT_WEIGHT_OF_AGGREGATE', [UnitWeightOfAggregate::class, 'getPage']);
Route::post('/VIEW_54_UNIT_WEIGHT_OF_AGGREGATE', [UnitWeightOfAggregate::class, 'postPage'])->name('VIEW_54_UNIT_WEIGHT_OF_AGGREGATE');

/*
|--------------------------------------------------------------------------
| Routes For 55-CLAY LUMPS IN AGGREGATE
|--------------------------------------------------------------------------
*/
Route::get('/55-CLAY LUMPS IN AGGREGATE', [ClayLumpsInAggregate::class, 'getPage']);;
Route::post('/VIEW 55-CLAY LUMPS IN AGGREGATE', [ClayLumpsInAggregate::class, 'postPage'])->name('VIEW 55-CLAY LUMPS IN AGGREGATE');


/*
|--------------------------------------------------------------------------
| Routes For 69_PENETRATION_OF_BITUMINOUS_MATERIAL
|--------------------------------------------------------------------------
*/
Route::get('/69_PENETRATION_OF_BITUMINOUS_MATERIAL', [PenetrationOfBituminousMaterial::class, 'getPage']);;
Route::post('/VIEW_69_PENETRATION_OF_BITUMINOUS_MATERIAL', [PenetrationOfBituminousMaterial::class, 'postPage'])->name('VIEW_69_PENETRATION_OF_BITUMINOUS_MATERIAL');


/*
|--------------------------------------------------------------------------
| Routes For 73_BITUMEN_EXTRACTION_GRADATION
|--------------------------------------------------------------------------
*/
Route::get('/73_BITUMEN_EXTRACTION_GRADATION', [BitumenExtractionGradation::class, 'getPage']);;
Route::post('/VIEW_73_BITUMEN_EXTRACTION_GRADATION', [BitumenExtractionGradation::class, 'postPage'])->name('VIEW_73_BITUMEN_EXTRACTION_GRADATION');


/*
|--------------------------------------------------------------------------
| Routes For 81_BLENDING_OF_AGGREGATES
|--------------------------------------------------------------------------
*/
Route::get('/81_BLENDING_OF_AGGREGATES', [BlendingOfAggregates::class, 'getPage']);;
Route::post('/VIEW_81_BLENDING_OF_AGGREGATES', [BlendingOfAggregates::class, 'postPage'])->name('VIEW_81_BLENDING_OF_AGGREGATES');


/*
|--------------------------------------------------------------------------
| Routes For 81_BLENDING_OF_AGGREGATES
|--------------------------------------------------------------------------
*/
Route::get('/85_CONCRETE_COMPRESSIVE_STRENGTH_28_DAYS_EZYPRO', [ConcreteCompressiveStrength::class, 'getPage']);;
Route::post('/VIEW_85_CONCRETE_COMPRESSIVE_STRENGTH_28_DAYS_EZYPRO', [ConcreteCompressiveStrength::class, 'postPage'])->name('VIEW_85_CONCRETE_COMPRESSIVE_STRENGTH_28_DAYS_EZYPRO');


/*
|--------------------------------------------------------------------------
| Routes For 105_CONCRETE_MIX_DESIGN
|--------------------------------------------------------------------------
*/
Route::get('/105_CONCRETE_MIX_DESIGN', [ConcreteMixDesign::class, 'getPage']);;
Route::post('/VIEW_105_CONCRETE_MIX_DESIGN', [ConcreteMixDesign::class, 'postPage'])->name('VIEW_105_CONCRETE_MIX_DESIGN');



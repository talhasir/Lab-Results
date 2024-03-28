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

Route::get('/get_84_concrete_compress', [ConcreteCompressController::class, 'getpage']);
Route::post('/post_84_concrete_compress', [ConcreteCompressController::class, 'postpage'])->name('post_84_concrete_compress');


/*
|--------------------------------------------------------------------------
| Routes For BRICK TESTING
|--------------------------------------------------------------------------
*/
Route::get('/get_82bricktesting', [BrickTestingController::class, 'getPage']);
Route::post('/post_82bricktesting', [BrickTestingController::class, 'postPage'])->name('post_82bricktesting');


/*
|--------------------------------------------------------------------------
| Routes For CALIFORNIA
|--------------------------------------------------------------------------
*/
Route::get('/get_40_california_bearing_ratio', [CaliforniaController::class, 'getPage']);
Route::post('/post_40_california_bearing_ratio', [CaliforniaController::class, 'postPage'])->name('post_view_40_california_bearing_ratio');


/*
|--------------------------------------------------------------------------
| Routes For WORK SHEET
|--------------------------------------------------------------------------
*/
Route::get('/get_89_worksheet_for_bituminous', [WorkSheetController::class, 'getPage']);
Route::post('/post_89_worksheet_for_bituminous', [WorkSheetController::class, 'postPage'])->name('post_89_worksheet_for_bituminous');


/*
|--------------------------------------------------------------------------
| Routes For FIELD DENSITY
|--------------------------------------------------------------------------
*/
Route::get('/get_42_field_density_test', [FieldDensityController::class, 'getPage']);
Route::post('/post_42_field_density_test', [FieldDensityController::class, 'postPage'])->name('post_42_field_density_test');

/*
|--------------------------------------------------------------------------
| Routes For 51-SOUNDNESS OF AGGREGATE BY USE OF SODIUM SULPHATE
|--------------------------------------------------------------------------
*/
Route::get('/51_soundness_of_aggregate_by_use_of_sodium_sulphate', [SoundnessOfAggregateByUseOfSodiumSulphateController::class, 'getPage']);
Route::post('/view_51_soundness_of_aggregate_by_use_of_sodium_sulphate', [SoundnessOfAggregateByUseOfSodiumSulphateController::class, 'postPage'])->name('view_51_soundness_of_aggregate_by_use_of_sodium_sulphate');


/*
|--------------------------------------------------------------------------
| Routes For 54_UNIT_WEIGHT_OF_AGGREGATE
|--------------------------------------------------------------------------
*/
Route::get('/54_unit_weight_of_aggregate', [UnitWeightOfAggregate::class, 'getPage']);
Route::post('/view_54_unit_weight_of_aggregate', [UnitWeightOfAggregate::class, 'postPage'])->name('view_54_unit_weight_of_aggregate');

/*
|--------------------------------------------------------------------------
| Routes For 55-CLAY LUMPS IN AGGREGATE
|--------------------------------------------------------------------------
*/
Route::get('/55_clay_lumps_in_aggregate', [ClayLumpsInAggregate::class, 'getPage']);
Route::post('/view_55_clay_lumps_in_aggregate', [ClayLumpsInAggregate::class, 'postPage'])->name('view_55_clay_lumps_in_aggregate');


/*
|--------------------------------------------------------------------------
| Routes For 69_PENETRATION_OF_BITUMINOUS_MATERIAL
|--------------------------------------------------------------------------
*/
Route::get('/69_penetration_of_bituminous_material', [PenetrationOfBituminousMaterial::class, 'getPage']);
Route::post('/view_69_penetration_of_bituminous_material', [PenetrationOfBituminousMaterial::class, 'postPage'])->name('view_69_penetration_of_bituminous_material');


/*
|--------------------------------------------------------------------------
| Routes For 73_BITUMEN_EXTRACTION_GRADATION
|--------------------------------------------------------------------------
*/
Route::get('/73_bitumen_extraction_gradation', [BitumenExtractionGradation::class, 'getPage']);
Route::post('/view_73_bitumen_extraction_gradation', [BitumenExtractionGradation::class, 'postPage'])->name('view_73_bitumen_extraction_gradation');


/*
|--------------------------------------------------------------------------
| Routes For 81_BLENDING_OF_AGGREGATES
|--------------------------------------------------------------------------
*/
Route::get('/81_blending_of_aggregates', [BlendingOfAggregates::class, 'getPage']);
Route::post('/view_81_blending_of_aggregates', [BlendingOfAggregates::class, 'postPage'])->name('view_81_blending_of_aggregates');


/*
|--------------------------------------------------------------------------
| Routes For 81_BLENDING_OF_AGGREGATES
|--------------------------------------------------------------------------
*/
Route::get('/85_concrete_compressive_strength_28_days_ezypro', [ConcreteCompressiveStrength::class, 'getPage']);
Route::post('/view_85_concrete_compressive_strength_28_days_ezypro', [ConcreteCompressiveStrength::class, 'postPage'])->name('view_85_concrete_compressive_strength_28_days_ezypro');


/*
|--------------------------------------------------------------------------
| Routes For 105_CONCRETE_MIX_DESIGN
|--------------------------------------------------------------------------
*/
Route::get('/105_concrete_mix_design', [ConcreteMixDesign::class, 'getPage']);
Route::post('/view_105_concrete_mix_design', [ConcreteMixDesign::class, 'postPage'])->name('view_105_concrete_mix_design');

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnitWeightOfAggregateModel;

class UnitWeightOfAggregate
 extends Controller
{
    public function getPage()
    {
        return view('54_UNIT_WEIGHT_OF_AGGREGATE/54_UNIT_WEIGHT_OF_AGGREGATE');
    }

    public function postPage(Request $request)
    {
        $requestData = $request->all();
        $requestData = json_encode($requestData);
        $dataStoring = UnitWeightOfAggregateModel::create([
            'data' => $requestData,
        ]);

        $dataRetrieving = UnitWeightOfAggregateModel::where('id', $dataStoring->id)->first();
        $data = json_decode($dataRetrieving->data);

        // A-  LOOSE WETGHT DETERMTNATTON //
        $H11 = $data->H9 - $data->H10;
        $J11 = $data->J9 - $data->J10;
        $L11 = $data->L9 - $data->L10;
        // C-  VOLUME OF MEASURE//
        $H26 = $data->H25 - $data->L25;
        $H12 = $H11 / $H26;
        $J12 = $J11 / $H26;
        $L12 = $L11 / $H26;
        // AVERAGE //
        $H13 = ($H12+$J12+$L12)/3;


        // B-  RODDED WETGHT DETERMTNATTON //
        $H17 = $data->H15 - $data->L16;
        $J17 = $data->J15 - $data->L16;
        $L17 = $data->L15 - $data->L16;
        $H18 = $H17 / $H26;
        $J18 = $J17 / $H26;
        $L18 = $L17 / $H26;
        // AVERAGE //
        $H19 = ($H18+$J18+$L18)/3;

        return view('54_UNIT_WEIGHT_OF_AGGREGATE/VIEW_54_UNIT_WEIGHT_OF_AGGREGATE')->with(
            compact(
                'data', 'H11', 'J11', 'L11', 'H26', 'H12', 'J12', 'L12', 'H13', 'H17', 'J17', 'L17', 'H18', 'J18', 'L18', 'H19',
            ),
        );
    }
}

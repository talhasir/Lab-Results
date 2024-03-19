<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkSheetModel;

class WorkSheetController extends Controller
{
    public function getPage()
    {
        return view('WORK_SHEET/89_WORKSHEET_FOR_BITUMINOUS');
    }

    public function postPage(Request $request)
    {
        $requestData = $request->all();
        $requestData = json_encode($requestData);
        $dataStoring = WorkSheetModel::create([
            'data' => $requestData,
        ]);

        $dataRetrieving = WorkSheetModel::where('id', $dataStoring->id)->first();
        $data = json_decode($dataRetrieving->data);

        // RESULTS Weight of Bituminous Material  //
        $F17 = ($data->F16 - $data->F15) * 100;
        $I17 = ($data->I16 - $data->I15) * 100;
        $L17 = ($data->L16 / $data->L15) * 100;

        // RESULTS  Rate of Spray //
        $F20 = ($F17 / $data->F18) / $data->F19;
        $I20 = ($I17 / $data->I18) / $data->I19;
        $L20 = ($L17 / $data->L18) / $data->L19;

        // RESULTS Average Rate of Spray //
        $F21 = ( $F20 + $I20 + $L20 ) / 3;

        // RESULTS Required Rate of Application //
        $F22 = "0.65~1.75";

        return view('WORK SHEET/view_89_WORKSHEET_FOR_BITUMINOUS')
        ->with(compact('data', 'F17', 'I17', 'L17', 'F20', 'I20', 'L20', 'F21', 'F22'));

    }
}

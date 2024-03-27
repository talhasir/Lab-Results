<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenetrationOfBituminousMaterialModel;

class PenetrationOfBituminousMaterial
 extends Controller
{
    public function getPage()
    {
        return view('69_PENETRATION_OF_BITUMINOUS_MATERIAL/69_PENETRATION_OF_BITUMINOUS_MATERIAL');
    }

    public function postPage(Request $request)
    {
        $requestData = $request->all();
        $requestData = json_encode($requestData);
        $dataStoring = PenetrationOfBituminousMaterialModel::createp([
            'data' => $requestData,
        ]);

        $dataRetrieving = PenetrationOfBituminousMaterialModel::where('id', $dataStoring->id)->first();
        $data = json_decode($dataRetrieving->data);


        return view('69_PENETRATION_OF_BITUMINOUS_MATERIAL/VIEW_69_PENETRATION_OF_BITUMINOUS_MATERIAL')->with(
            compact(
                'data',
            ),
        );
    }
}

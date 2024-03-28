<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenetrationOfBituminousMaterialModel;

class PenetrationOfBituminousMaterial
 extends Controller
{
    public function getPage()
    {
        return view('lab/postviews/post_69_penetration_of_bituminous_material');
    }

    public function postPage(Request $request)
    {
        $requestData = $request->all();
        $requestData = json_encode($requestData);
        $dataStoring = PenetrationOfBituminousMaterialModel::create([
            'data' => $requestData,
        ]);

        $dataRetrieving = PenetrationOfBituminousMaterialModel::where('id', $dataStoring->id)->first();
        $data = json_decode($dataRetrieving->data);


        return view('lab/getviews/get_69_penetration_of_bituminous_material')->with(
            compact(
                'data',
            ),
        );
    }
}

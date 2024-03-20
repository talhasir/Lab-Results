<?php

namespace App\Http\Controllers;

use App\Models\CONCRETE_COMPRESSIVE_STRENGTH as ModelsCONCRETE_COMPRESSIVE_STRENGTH;
use Illuminate\Http\Request;

class CONCRETE_COMPRESSIVE_STRENGTH extends Controller
{
    public function getPage()
    {
        return view('85_CONCRETE_COMPRESSIVE_STRENGTH_28_DAYS_EZYPRO/85_CONCRETE_COMPRESSIVE_STRENGTH_28_DAYS_EZYPRO');
    }

    public function postPage(Request $request)
    {
        $requestData = $request->all();
        $requestData = json_encode($requestData);
        $dataStoring = ModelsCONCRETE_COMPRESSIVE_STRENGTH::create([
            'data' => $requestData,
        ]);

        $dataRetrieving = ModelsCONCRETE_COMPRESSIVE_STRENGTH::where('id', $dataStoring->id)->first();
        $data = json_decode($dataRetrieving->data);

        return view('85_CONCRETE_COMPRESSIVE_STRENGTH_28_DAYS_EZYPRO/VIEW_85_CONCRETE_COMPRESSIVE_STRENGTH_28_DAYS_EZYPRO')->with(
            compact(
                'data',
            ),
        );
    }
}

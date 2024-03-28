<?php

namespace App\Http\Controllers;

use App\Models\ConcreteCompressiveStrength as ModelsConcreteCompressiveStrength;
use Illuminate\Http\Request;

class ConcreteCompressiveStrength extends Controller
{
    public function getPage()
    {
        return view('/get_85_concrete_compressive_strength_28_days_ezypro');
    }

    public function postPage(Request $request)
    {
        $requestData = $request->all();
        $requestData = json_encode($requestData);
        $dataStoring = ModelsConcreteCompressiveStrength::create([
            'data' => $requestData,
        ]);

        $dataRetrieving = ModelsConcreteCompressiveStrength::where('id', $dataStoring->id)->first();
        $data = json_decode($dataRetrieving->data);

        return view('85_CONCRETE_COMPRESSIVE_STRENGTH_28_DAYS_EZYPRO/VIEW_85_CONCRETE_COMPRESSIVE_STRENGTH_28_DAYS_EZYPRO')->with(
            compact(
                'data',
            ),
        );
    }
}

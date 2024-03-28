<?php

namespace App\Http\Controllers;

use App\Models\ConcreteCompressiveStrength as ModelsConcreteCompressiveStrength;
use Illuminate\Http\Request;

class ConcreteCompressiveStrength extends Controller
{
    public function getPage()
    {
        return view('lab/postviews/post_85_concrete_compressive_strength_28_days_ezypro');
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

        return view('lab/getviews/get_85_concrete_compressive_strength_28_days_ezypro')->with(
            compact(
                'data',
            ),
        );
    }
}

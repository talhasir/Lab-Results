<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrickTestingModel;

class BrickTestingController extends Controller
{
    public function getPage()
    {
        return view('lab/postviews/post_82bricktesting');
    }

    public function postPage(Request $request)
    {
        $requestData = $request->all();
        $requestData = json_encode($requestData);
        $dataStoring = BrickTestingModel::create([
            'data' => $requestData,
        ]);

        $dataRetrieving = BrickTestingModel::where('id', $dataStoring->id)->first();
        $data = json_decode($dataRetrieving->data);
        // RESULTS Absorption //
        $G8 = ($data->E8 / $data->B8) * 100;
        $G9 = ($data->E9 / $data->B9) * 100;
        $G10 = ($data->E10 / $data->B10) * 100;
        $G11 = ($data->E11 / $data->B11) * 100;
        $G12 = ($data->E12 / $data->B12) * 100;
        $G13 = ($data->E13 / $data->B13) * 100;

        // RESULTS Average Absorption //
        $H8 = ($G8 + $G9 + $G10 + $G11 + $G12 + $G13) / 6;

        // RESULTS Compressive Strength //
        $N8 = ($data->M8 / $data->K8) * 14.223;
        $N9 = ($data->M9 / $data->K9) * 14.223;
        $N10 = ($data->M9 / $data->K9) * 14.223;
        $N11 = ($data->M10 / $data->K10) * 14.223;
        $N12 = ($data->M12 / $data->K12) * 14.223;

        // RESULTS AVERAGE
        $Q8 = ($N8 + $N9 + $N10 + $N11 + $N12) / 5;

        return view('lab/getviews/get_82bricktesting')
        ->with(compact('data', 'G8', 'G9', 'G10', 'G11', 'G12', 'G13', 'H8', 'N8', 'N9', 'N10', 'N11', 'N12', 'Q8'));

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\MOISTURE_DENSITY_RELATIONS_MODEL;
use Illuminate\Http\Request;

class MoistureDensityRelations extends Controller
{
    public function getPage()
    {
        return view('106_MOISTURE_DENSITY_RELATIONS/106_MOISTURE_DENSITY_RELATIONS');
    }

    public function postPage(Request $request)
    {
        $requestData = $request->all();
        $requestData = json_encode($requestData);
        $dataStoring = MOISTURE_DENSITY_RELATIONS_MODEL::create([
            'data' => $requestData,
        ]);

        $dataRetrieving = MOISTURE_DENSITY_RELATIONS_MODEL::where('id', $dataStoring->id)->first();
        $data = json_decode($dataRetrieving->data);

        ############################################
        // RESULTSWeight of Wet Compacted Material (g)
        ############################################
        $D10 = $data->D9 - $data->G7;
        $G10 = $data->G9 - $data->G7;
        $H10 = $data->H9 - $data->G7;
        $J10 = $data->J9 - $data->G7;
        $wightOfwetCompactedMat = compact('D10', 'G10', 'H10', 'J10', );

        ############################################
        // RESULTS Wet Density //
        ############################################
        $D11 = $D10 / $data->M7;
        $G11 = $G10 / $data->M7;
        $H11 = $H10 / $data->M7;
        $J11 = $J10 / $data->M7;
        $wetDensity = compact('D11', 'G11', 'H11', 'J11', );

        ############################################
        // RESULTS Weight of Water (G) //
        ############################################
        $D15 = $data->D13 - $data->D14;
        $G15 = $data->G13 - $data->G14;
        $H15 = $data->H13 - $data->H14;
        $J15 = $data->J13 - $data->J14;
        $WeightOfWater = compact('D15', 'G15', 'H15', 'J15', );

        ############################################
        // RESULTS Weight of Dry Material                             (g)
        ############################################
        $D17 = $data->D14 - $data->D16;
        $G17 = $data->G14 - $data->G16;
        $H17 = $data->H14 - $data->H16;
        $J17 = $data->J14 - $data->J16;
        $wightOfDryMat = compact('D17', 'G17', 'H17', 'J17', );

        // ############################################
        // // RESULTS Moisture Content                                      (%)
        // ############################################
        // $D18 = $data->D13 - $data->D14;
        // $G18 = $data->G13 - $data->G14;
        // $H18 = $data->H13 - $data->H14;
        // $J18 = $data->J13 - $data->J14;
        // $ResultsOfWeightAvrg = compact('D15', 'G15', 'H15', 'J15', );

        // ############################################
        // // RESULTS Dry Density                                           (g/cc)
        // ############################################
        // $D15 = $data->D13 - $data->D14;
        // $G15 = $data->G13 - $data->G14;
        // $H15 = $data->H13 - $data->H14;
        // $J15 = $data->J13 - $data->J14;
        // $ResultsOfWeightAvrg = compact('D15', 'G15', 'H15', 'J15', );

        return view('106_MOISTURE_DENSITY_RELATIONS/106_MOISTURE_DENSITY_RELATIONS')->with(
            compact(
                'data',
                'wightOfwetCompactedMat',
                'wetDensity',
                'WeightOfWater',
                'wightOfDryMat',
            ),
        );
    }
}

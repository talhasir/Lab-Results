<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaliforniaModel;

class CaliforniaController extends Controller
{
    public function getPage()
    {
        return view('CALI FORNIA/40_CALIFORNIA_BEARING_RATIO');
    }

    public function postPage(Request $request)
    {
        $requestData = $request->all();
        $requestData = json_encode($requestData);
        $dataStoring = CaliforniaModel::create([
            'data' => $requestData,
        ]);

        $dataRetrieving = CaliforniaModel::where('id', $dataStoring->id)->first();
        $data = json_decode($dataRetrieving->data);

        // RESULTS MOISTURE OF CONTENT //
        $C13 = $data->C10 - $data->C11;
        $C14 = $data->C11 - $data->C12;

        // // RESULTS DRY DENSITY //
        $I13 = $data-> I11 - $data->I12;
        $I15 = $I13 / $data->I14;
        $I16 = $I15/($data->C15+100)*100+0.001;

        // // RESULTS MOISTURE CONTENT AFTER SOAKING //
        $I20 = $data->C21 - $data->I19;
        $C22 = $data->C20 - $data->C21;

        // RESULTS CBR TESTS //

          # LOAD #
        // $M21 = $data->M20 * $data->L7;
        // $N21 = $data->N20 * $data->L7;
        // $P21 = $data->P20 * $data->L7;
        // $Q21 = $data->Q20 * $data->L7;
        // $S21 = $data->S20 * $data->L7;
        // $U21 = $data->U20 * $data->L7;
        // $W21 = $data->W20 * $data->L7;
        // $AA21 = $data->A20 * $data->L7;
        // $AB21 = $data->B20 * $data->L7;

          # Unit Load #
        // $M21 = $data->M20 * $data->L7;
        // $N21 = $data->N20 * $data->L7;
        // $P21 = $data->P20 * $data->L7;
        // $Q21 = $data->Q20 * $data->L7;
        // $S21 = $data->S20 * $data->L7;
        // $U21 = $data->U20 * $data->L7;
        // $W21 = $data->W20 * $data->L7;
        // $AA21 = A$data->A20 * $data->L7;
        // $AB21 = A$data->B20 * $data->L7;

        # STANDRAD LOAD #
        $StandardLoad = "(0.1' 70.3) (0.2' 105.5)";

        return view('CALI FORNIA/view_40_CALIFORNIA_BEARING_RATIO')
        ->with(compact(
            'data', 'C13', 'C14', 'I13', 'I15', 'I16', 'I20', 'C22',
            // 'M21', 'N21', 'P21', 'Q21', 'S21', 'U21', 'W21', 'AA21', 'AB21',
             'StandardLoad'));
    }
}

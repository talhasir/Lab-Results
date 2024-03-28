<?php

namespace App\Http\Controllers;

use App\Models\BitumenExtractionGradation as BitumenExtractionGradationModel;
use Illuminate\Http\Request;

class BitumenExtractionGradation extends Controller
{
    public function getPage()
    {
        return view('post_42_field_density_test');
    }

    public function postPage(Request $request)
    {
        $requestData = $request->all();
        $requestData = json_encode($requestData);
        $dataStoring = BitumenExtractionGradationModel::create([
            'data' => $requestData,
        ]);

        $dataRetrieving = BitumenExtractionGradationModel::where('id', $dataStoring->id)->first();
        $data = json_decode($dataRetrieving->data);

        ###########################################
        // RESULTS Weight Of Filter After Test //
        ###########################################
        $L12 = $data->J12 / $data->J22 * 100;
        $L13 = $data->J13 / $data->J22 * 100;
        $N12 = 100 - $L12;
        $N13 = 100 - $L13;
        $RsOfWeightOfFilterAftTest = compact('L12', 'L13', 'N12', 'N13');


        ###########################################
        // RESULTS Weight Of Agg. after Test //
        ###########################################
        $L14 = $data->J14 / $data->J22 * 100;
        $L15 = $data->J15 / $data->J22 * 100;
        $N14 = 100 - $L14;
        $N15 = 100 - $L15;
        $RsOfWeightOfAggAftTest = compact('L14', 'L15', 'N14', 'N15');


        ###########################################
        // RESULTS Total Weight Of Aggregate //
        ###########################################
        $C16 = $data->C14 + ($data->C12 - $data->C11);
        $E16 = $data->E14 + ($data->E12 - $data->E11);
        $G16 = $data->G14 + ($data->G12 - $data->G11);
        $L16 = $data->J16 / $data->J22 * 100;
        $N16 = 100 - $L16;
        $RsOfTotalWeightOfAgg = compact('C16', 'E16', 'G16');


        ###########################################
        // RESULTS Loss of Weight //
        ###########################################
        $C18 = $data->C10 - $C16;
        $E18 = $data->E10 - $E16;
        $G18 = $data->G10 - $G16;
        $RsOFLossOfWt = compact('C18', 'E18', 'G18');


        ###########################################
        // RESULTS Bitumen By Weight of Mix //
        ###########################################
        $C19 = $C18 / $data->C10 * 100;
        $E19 = $E18 / $data->E10 * 100;
        $G19 = $G18 / $data->G10 * 100;
        $L19 = $data->J19 / $data->J22 * 100;
        $N19 = 100 -$L19;
        $RsBitumenByWeight = compact('C19', 'E19', 'G19', 'L19', 'N19');


        ###########################################
        // RESULTS Avg. Bit. By Wt. of Agg. //
        ###########################################
        $C20 = $C19 + $E19 + $G19 / 3;    // AVERAGE(C19:H19) //
        $L20 = $data->J20 / $data->J22 * 100;
        $N20 = 100 - $L20;
        $RsAvgBitByWtOfAgg = compact('C20', 'L20', 'N20');

        return view('73_BITUMEN_EXTRACTION_GRADATION/VIEW_73_BITUMEN_EXTRACTION_GRADATION')->with(
            compact(
                'data',
                'RsOfWeightOfFilterAftTest',
                'RsOfWeightOfAggAftTest',
                'RsOFLossOfWt',
                'RsOfTotalWeightOfAgg',
                'RsBitumenByWeight',
                'RsAvgBitByWtOfAgg',
            ),
        );
    }
}
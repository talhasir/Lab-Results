<?php

namespace App\Http\Controllers;

use App\Models\ClayLumpsInAggregateModel;
use Illuminate\Http\Request;

class ClayLumpsInAggregate extends Controller
{
    public function getPage()
    {
        return view('55_CLAY_LUMPS_IN_AGGREGATE/55_CLAY_LUMPS_IN_AGGREGATE');
    }

    public function postPage(Request $request)
    {
        $requestData = $request->all();
        $requestData = json_encode($requestData);
        $dataStoring = ClayLumpsInAggregateModel::create([
            'data' => $requestData,
        ]);

        $dataRetrieving = ClayLumpsInAggregateModel::where('id', $dataStoring->id)->first();
        $data = json_decode($dataRetrieving->data);

        ############################################
        // RESULTS Actual Loss After Test (Grams) //
        ############################################
        $H9 = $data->F9 - $data->G9;
        $H10 = $data->F10 - $data->G10;
        $H11 = $data->F11 - $data->G11;
        $H12 = $data->F12 - $data->G12;
        $ResultsOfActualLoosAftTestGrams = compact('H9', 'H10', 'H11', 'H12', );

        ############################################
        // RESULTS Actual Loss After Test ( %) //
        ############################################
        $I9 = $H9 / $data->G9 * 100;
        $I10 = $H10 / $data->G10 * 100;
        $I11 = $H11 / $data->G11 * 100;
        $I12 = $H12 / $data->G12 * 100;
        $ResultsOfActualLoosAftTestPerc = compact('I9', 'I10', 'I11', 'I12', );

        ############################################
        // RESULTS Weigthed Average ( % ) //
        ############################################
        $K9 = $I9 * $data->E9 / 100;
        $K10 = $I10 * $data->E10 / 100;
        $K11 = $I11 * $data->E11 / 100;
        $K12 = $I12 * $data->E12 / 100;
        $ResultsOfWeightAvrg = compact('K9', 'K10', 'K11', 'K12', );

        return view("55_CLAY_LUMPS_IN_AGGREGATE/VIEW_55-CLAY LUMPS IN AGGREGATE")->with(
            compact(
                'data',
                'ResultsOfActualLoosAftTestGrams',
                'ResultsOfActualLoosAftTestPerc',
                'ResultsOfWeightAvrg',
            )
        );
    }
}

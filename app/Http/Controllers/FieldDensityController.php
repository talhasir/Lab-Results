<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FieldDensityModel;

class FieldDensityController extends Controller
{
    public function getPage()
    {
        return view('FIELD DENSITY/42_FIELD_DENSITY_TEST');
    }

    public function postPage(Request $request)
    {
        $requestData = $request->all();
        $requestData = json_encode($requestData);
        $dataStoring = FieldDensityModel::create([
            'data' => $requestData,
        ]);

        $dataRetrieving = FieldDensityModel::where('id', $dataStoring->id)->first();
        $data = json_decode($dataRetrieving->data);

        // RESULTS Wt. of Used Sand (Hole + Cone)  //
        $G18 = $data->G16 - $data->G17;
        $I18 = $data->I16 - $data->I17;
        $K18 = $data->K16 - $data->K17;
        $M18 = $data->M16 - $data->M17;
        $ResultsForUsedSand = compact('G18', 'I18', 'K18', 'M18');

        // RESULTS Wt. of Sand in Hole  //
        $G20 = $G18 - $data->G19;
        $I20 = $I18 - $data->I19;
        $K20 = $K18 - $data->K19;
        $M20 = $M18 - $data->M19;
        $ResultsForSandInHole = compact('G20', 'I20', 'K20', 'M20');

        // RESULTS  Volume of Material from Hole  //
        $G22 = $G20 / $data->G21;
        $I22 = $I20 / $data->I21;
        $K22 = $K20 / $data->K21;
        $M22 = $M20 / $data->M21;
        $ResultsForVolumnOfMaterial = compact('G22', 'I22','K22','M22',);

        // RESULTS  Wet Density of Material from Hole  //
        $G23 = $data->G14 / $G22;
        $I23 = $data->I14 / $I22;
        $K23 = $data->K14 / $K22;
        $M23 = $data->M14 / $M22;
        $ResultsForWetDensity = compact('G23', 'I23', 'K23', 'M23', );

        // RESULTS  Dry Density of Material from Hole  //
        $O = 100;
        $P = 100;
        $Q = 100;
        $R = 100;
        
        // $G29 = ($G23 / $O28) * 100;
        // $I29 = ($I23 / $P28) * 100;
        // $K29 = ($K23 / $Q28) * 100;
        // $M29 = ($M23 / $R28) * 100;
        // $ResultsForDryDensity = compact('G29', 'I29', 'K29', 'M29', );

        // RESULTS  Compaction Obtained  //
        $G36 = ($G29 / $data->G33) * 100;
        $I36 = ($I29 / $data->I33) * 100;
        $K36 = ($K29 / $data->K33) * 100;
        $M36 = ($M29 / $data->M33) * 100;
        $ResultsForCompaction = compact('G36', 'I36', 'K36', 'M36', );

        // RESULTS  Compaction Reported  //
        $G37 = $G36;
        $I37 = $I36;
        $K37 = ($K29 / $data->K33) * 100;
        $M37 = $M36;
        $ResultsForCompactionReport = compact('G37', 'I37', 'K37', 'M37', );

        // RESULTS Pass/Fail //
        $G40 = $G37 < $G38 ? 'FAIL' : 'PASS';
        $I40 = $I37 < $I38 ? 'FAIL' : 'PASS';
        $K40 = $K37 < $K38 ? 'FAIL' : 'PASS';
        $M40 = $M37 < $M38 ? 'FAIL' : 'PASS';
        $finalResults = compact('G40', 'I40', 'K40', 'M40', );

        return view('FIELD DENSITY/view_42_FIELD_DENSITY_TEST')->with(
            compact(
                'data',
                'ResultsForUsedSand',
                'ResultsForSandInHole',
                'ResultsForVolumnOfMaterial',
                'ResultsForWetDensity',
                // 'ResultsForDryDensity',
                'ResultsForCompaction',
                'ResultsForCompactionReport',
                'finalResults',
            ),
        );
    }
}

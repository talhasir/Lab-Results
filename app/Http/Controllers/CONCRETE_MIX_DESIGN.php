<?php

namespace App\Http\Controllers;

use App\Models\CONCRETE_MIX_DESIGN as ModelsCONCRETE_MIX_DESIGN;
use Illuminate\Http\Request;

class CONCRETE_MIX_DESIGN extends Controller
{
    public function getPage()
    {
        return view('105_CONCRETE_MIX_DESIGN/105_CONCRETE_MIX_DESIGN');
    }

    public function postPage(Request $request)
    {
        $requestData = $request->all();
        $requestData = json_encode($requestData);
        $dataStoring = ModelsCONCRETE_MIX_DESIGN::create([
            'data' => $requestData,
        ]);

        $dataRetrieving = ModelsCONCRETE_MIX_DESIGN::where('id', $dataStoring->id)->first();
        $data = json_decode($dataRetrieving->data);

        // RESULTS Unit Weight of Aggregate (Kg/m3)  //
        // $H16 = ($data->D16 * $data-> D12%)+(F16*F12%); hwo to get percentage of D12
        // $H16 = ($data->D16 * $data-> D12%)+(F16*F12%);
        // $ResultsLoosWeightAfterTest = compact('J9', 'J10', 'J11', 'J12', 'J13', 'J14', 'J16', 'J17', 'J18', 'J19', );

        // Result Cement  //
        $L18=$data->K18*$data->E25/$data->H13/1000;
        $L19=$data->E24-$data->L18;
        $E18=($data->N11 * $data->L11)/$data->H7/1000;
        $E20=$data->D8*$data->N11/1000;
        $E21=$data->L14*$data->N11/100/1000;
        $E22=$data->L17/100;
        $E23=$E18+$data->E19+$E20+$E21+$E22;
        $E24=1-$E23;
        // $E25=$H16; 
        $M20=$L19;
        $M22=$L18*$data->D12/100;
        $M24=$L18*$data->F12/100;


        // Results Original weights per m3 // 
        
        // $ResultsLoosAfterTest = compact('L9', 'L10', 'L11', 'L12', 'L13', 'L14', 'L16', 'L17', 'L18', 'L19', );

        // // RESULTS Weighted Average (%)(F)  //
        // $N9 = ($L9 * $data->D9) / 100;
        // $N10 = ($L10 * $data->D10) / 100;
        // $N11 = ($L11 * $data->D11) / 100;
        // $N12 = ($L12 * $data->D12) / 100;
        // $N13 = ($L13 * $data->D13) / 100;
        // $N14 = ($L14 * $data->D14) / 100;
        // $M15 = $N9+$N10+$N11+$N12+$N13+$N14;
        // // $N15 = ($L15 * $data->D15) / 100;
        // $N16 = ($L16 * $data->D16) / 100;
        // $N17 = ($L17 * $data->D17) / 100;
        // $N18 = ($L18 * $data->D18) / 100;
        // $N19 = ($L19 * $data->D19) / 100;
        // $M20 = $N16+$N17+$N18;
        // $M21 = $M20+$M15;


        // $ResultsWeightedAverage = compact('N9', 'N10', 'N11', 'N12', 'N13', 'N14', 'M15', 'N16', 'N17', 'N18', 'N19', 'M20', 'M21', );

        // // // RESULTS  Wet Density of Material from Hole  //
        // // $G23 = $data->G   14 / $G22;
        // // $I23 = $data->I14 / $I22;
        // // $K23 = $data->K14 / $K22;
        // // $M23 = $data->M14 / $M22;
        // // $ResultsForWetDensity = compact('G23', 'I23', 'K23', 'M23', );

        // // // RESULTS  Dry Density of Material from Hole  //
        // // $O = 100;
        // // $P = 100;
        // // $Q = 100;
        // // $R = 100;

        // // // $G29 = ($G23 / $O28) * 100;
        // // // $I29 = ($I23 / $P28) * 100;
        // // // $K29 = ($K23 / $Q28) * 100;
        // // // $M29 = ($M23 / $R28) * 100;
        // // // $ResultsForDryDensity = compact('G29', 'I29', 'K29', 'M29', );

        // // // RESULTS  Compaction Obtained  //
        // // $G36 = ($G29 / $data->G33) * 100;
        // // $I36 = ($I29 / $data->I33) * 100;
        // // $K36 = ($K29 / $data->K33) * 100;
        // // $M36 = ($M29 / $data->M33) * 100;
        // // $ResultsForCompaction = compact('G36', 'I36', 'K36', 'M36', );

        // // // RESULTS  Compaction Reported  //
        // // $G37 = $G36;
        // // $I37 = $I36;
        // // $K37 = ($K29 / $data->K33) * 100;
        // // $M37 = $M36;
        // // $ResultsForCompactionReport = compact('G37', 'I37', 'K37', 'M37', );

        // // // RESULTS Pass/Fail //
        // // $G40 = $G37 < $G38 ? 'FAIL' : 'PASS';
        // // $I40 = $I37 < $I38 ? 'FAIL' : 'PASS';
        // // $K40 = $K37 < $K38 ? 'FAIL' : 'PASS';
        // // $M40 = $M37 < $M38 ? 'FAIL' : 'PASS';
        // $finalResults = compact('G40', 'I40', 'K40', 'M40', );

        return view('105_CONCRETE_MIX_DESIGN/VIEW_105_CONCRETE_MIX_DESIGN')->with(
            compact(
                'data',
                // 'ResultsLoosWeightAfterTest',
                // 'ResultsLoosAfterTest',
                // 'ResultsWeightedAverage',
                // // 'ResultsForWetDensity',
                // // 'ResultsForDryDensity',
                // 'ResultsForCompaction',
                // 'ResultsForCompactionReport',
                // 'finalResults',
            ),
        );
    }
}

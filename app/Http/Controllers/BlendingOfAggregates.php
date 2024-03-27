<?php

namespace App\Http\Controllers;

use App\Models\BLENDING_OF_AGGREGATES as ModelsBLENDING_OF_AGGREGATES;
use App\Models\BlendingOfAggregates as ModelsBlendingOfAggregates;
use Illuminate\Http\Request;
use App\Models\Soundness_of_aggregate_by_use_of_sodium_sulphate;

class BlendingOfAggregates extends Controller
{
    public function getPage()
    {
        return view('81_BLENDING_OF_AGGREGATES/81_BLENDING_OF_AGGREGATES');
    }

    public function postPage(Request $request)
    {
        $requestData = $request->all();
        $requestData = json_encode($requestData);
        $dataStoring = ModelsBlendingOfAggregates::create([
            'data' => $requestData,
        ]);

        $dataRetrieving = ModelsBlendingOfAggregates::where('id', $dataStoring->id)->first();
        $data = json_decode($dataRetrieving->data);

        ##################################
        // RESULTS Combined Gradation 1 //
        ##################################
        $F15 = $data->F11 / 100 * $data->B15;
        $G15 = $data->G11 / 100 * $data->B15;
        $I15 = ($data->I11 * $data->B15) / 100;
        $J15 = ($data->B15 * $data->J11) / 100;
        $K15 = ($data->K11 * $data->B15) / 100;
        $M15 = ($data->B15 * $data->M11) / 100;
        $N15 = ($data->B15 * $data->N11) / 100;
        $O15 = ($data->O11 * $data->B15) / 100;
        $Q15 = ($data->B15 * $data->Q11) / 100;
        $R15 = ($data->B15 * $data->R11) / 100;
        $S15 = ($data->B15 * $data->S11) / 100;
        $T15 = ($data->B15 * $data->T11) / 100;
        $U15 = ($data->B15 * $data->U11) / 100;
        $V15 = ($data->B15 * $data->V11) / 100;
        $W15 = ($data->B15 * $data->W11) / 100;
        $X15 = ($data->B15 * $data->X11) / 100;
        $RsCombinedGradation1 = compact('F15', 'G15', 'I15', 'J15', 'K15', 'M15', 'N15', 'O15', 'Q15', 'R15', 'S15', 'T15', 'U15', 'V15', 'W15', 'X15');
        
        ##################################
        // RESULTS Combined Gradation 2 //
        ##################################
        $F16 = $data->F12 / 100 * $data->B16;
        $G16 = $data->G12 / 100 * $data->B16;
        $I16 = ($data->I12 * $data->B16) / 100;
        $J16 = ($data->B16 * $data->J12) / 100;
        $K16 = ($data->K12 * $data->B16) / 100;
        $M16 = ($data->B16 * $data->M12) / 100;
        $N16 = ($data->B16 * $data->N12) / 100;
        $O16 = ($data->O12 * $data->B16) / 100;
        $Q16 = ($data->B16 * $data->Q12) / 100;
        $R16 = ($data->B16 * $data->R12) / 100;
        $S16 = ($data->B16 * $data->S12) / 100;
        $T16 = ($data->B16 * $data->T12) / 100;
        $U16 = ($data->B16 * $data->U12) / 100;
        $V16 = ($data->B16 * $data->V12) / 100;
        $W16 = ($data->B16 * $data->W12) / 100;
        $X16 = ($data->B16 * $data->X12) / 100;
        $RsCombinedGradation2 = compact(
            'F16', 'G16', 'I16', 'J16', 'K16', 'M16', 'N16',
            'O16', 'Q16', 'R16', 'S16', 'T16', 'U16', 'V16', 'W16', 'X16'
        );
        
        ##################################
        // RESULTS Combined Gradation 3 //
        ##################################
        $F17 = $data->F11 / 100 * $data->B17;
        $G17 = $data->G11 / 100 * $data->B17;
        $I17 = ($data->I13 * $data->B17) / 100;
        $J17 = ($data->B17 * $data->J13) / 100;
        $K17 = ($data->K13 * $data->B17) / 100;
        $M17 = ($data->B17 * $data->M13) / 100;
        $N17 = ($data->B17 * $data->N13) / 100;
        $O17 = ($data->O13 * $data->B17) / 100;
        $Q17 = ($data->B17 * $data->Q13) / 100;
        $R17 = ($data->B17 * $data->R13) / 100;
        $S17 = ($data->B17 * $data->S13) / 100;
        $T17 = ($data->B17 * $data->T13) / 100;
        $U17 = ($data->B17 * $data->U13) / 100;
        $V17 = ($data->B17 * $data->V13) / 100;
        $W17 = ($data->B17 * $data->W13) / 100;
        $X17 = ($data->B17 * $data->X13) / 100;
        $RsCombinedGradation3 = compact(
            'F17', 'G17', 'I17', 'J17', 'K17', 'M17', 'N17',
            'O17', 'Q17', 'R17', 'S17', 'T17', 'U17', 'V17', 'W17', 'X17'
        );
        
        ##################################
        // RESULTS Specification 100% //
        ##################################
        $F18 = $F15 + $F16 + $F17;
        $G18 = $G15 + $G16 + $G17;
        $I18 = $I15 + $I16 + $I17;
        $J18 = $J15 + $J16 + $J17;
        $K18 = $K15 + $K16 + $K17;
        $M18 = $M15 + $M16 + $M17;
        $N18 = $N15 + $N16 + $N17;
        $O18 = $O15 + $O16 + $O17;
        $Q18 = $Q15 + $Q16 + $Q17;
        $R18 = $R15 + $R16 + $R17;
        $S18 = $S15 + $S16 + $S17;
        $T18 = $T15 + $T16 + $T17;
        $U18 = $U15 + $U16 + $U17;
        $V18 = $V15 + $V16 + $V17;
        $W18 = $W15 + $W16 + $W17;
        $X18 = $X15 + $X16 + $X17;
        $RsSpecificationPerc = compact(
            'F18', 'G18', 'I18', 'J18', 'K18', 'M18', 'N18',
            'O18', 'Q18', 'R18', 'S18', 'T18', 'U18', 'V18', 'W18', 'X18'
        );
        
        
        ##################################
        // RESULTS Specification Mid Point //
        ##################################
        $F19 = $F18 / 2;
        $G19 = $G18 / 2;
        $I19 = $I17 / 2;
        $J19 = $J18 / 2;
        $K19 = $K18 / 2;
        $M19 = $M18 / 2;
        $N19 = $N18 / 2;
        $O19 = $O18 / 2;
        $Q19 = $Q17 / 2;
        $R19 = $R18 / 2;
        $S19 = $S18 / 2;
        $T19 = $T18 / 2;
        $U19 = $U18 / 2;
        $V19 = $V18 / 2;
        $W19 = $W18 / 2;
        $X19 = $X18 / 2;
        $RsSpecificationMidPoint = compact(
            'F19', 'G19', 'I19', 'J19', 'K19', 'M19', 'N19',
            'O19', 'Q19', 'R19', 'S19', 'T19', 'U19', 'V19', 'W19', 'X19'
        );

        return view('81_BLENDING_OF_AGGREGATES/VIEW_81_BLENDING_OF_AGGREGATES')->with(
            compact(
                'data',
                'RsCombinedGradation1',
                'RsCombinedGradation2',
                'RsCombinedGradation3',
                'RsSpecificationPerc',
                'RsSpecificationMidPoint',
            ),
        );
    }
}

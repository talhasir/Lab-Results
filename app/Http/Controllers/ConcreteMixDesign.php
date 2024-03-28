<?php

namespace App\Http\Controllers;

use App\Models\CONCRETE_MIX_DESIGN as ModelsCONCRETE_MIX_DESIGN;
use App\Models\ConcreteMixDesign as ModelsConcreteMixDesign;
use Illuminate\Http\Request;

class ConcreteMixDesign extends Controller
{
    public function getPage()
    {
        return view('post_105_concrete_mix_design');
    }

    public function postPage(Request $request)
    {
        $requestData = $request->all();
        $requestData = json_encode($requestData);
        $dataStoring = ModelsConcreteMixDesign::create([
            'data' => $requestData,
        ]);

        $dataRetrieving = ModelsConcreteMixDesign::where('id', $dataStoring->id)->first();
        $data = json_decode($dataRetrieving->data);

        // RESULTS Unit Weight of Aggregate (Kg/m3)  //
        $H16 = ($data->D16 * $data->D12) + ($data->F16 * $data->F12);
        $N16 = $data->L16 * 1.2;
        
        // Result Cement  //
        $E25 = $H16;
        if ($data->H13 != 0) {
            $L18 = $data->K18 * $E25 / $data->H13 / 1000;
        } else {
            $L18 = 0;
        }
        // Calculate E23
        if ($data->H7 != 0) {
            $E18 = ($data->N11 * $data->L11) / $data->H7 / 1000;
        }else {
            $E18 = 0;
        }
        $E20 = $data->D8 * $data->N11 / 1000;
        $E21 = $data->L14 * $data->N11 / 100 / 1000;
        $E22 = $data->L17 / 100;
        $E23 = $E18 + $data->E19 + $E20 + $E21 + $E22;
        
        // Calculate E24
        $E24 = 1 - $E23;
        
        // Calculate L19
        $L19 = $E24 - $L18;
        
        $M20 = $L19;
        $M22 = $L18 * $data->D12 / 100;
        $M24 = $L18 * $data->F12 / 100;
        
        // Compact variables
        $compactVariables = compact('N16', 'E20', 'E21', 'E22', 'H16', 'E25', 'L18', 'E18', 'E23', 'E24', 'L19', 'M20', 'M22', 'M24');
        
        

        // Resluts of Original weights per m3 //
        $E27=round($E18*$data->H7*1000,0);
        $E28=$E20*1*1000;
        $E29=$E21*$data->M7*1000;
        $E30=$L19*$data->I13*1000;
        $E31=round($M22*$data->D13*1000,0);
        $E32=round($M24*$data->F13*1000,0);
        $E33=$E31+$E32;
        $E34=$E27+$E28+$E29+$E30+$E31+$E32;
        $RsOfOriginWeightPerm3 = compact(
            'E27', 'E28', 'E29', 'E30', 'E31', 'E32', 'E33', 'E34'
        );
        

        //Corrected Weights per m3 //
        $I27=$E27;
        $I29=$E29;
        $I30=$E30+($data->I15-$data->I14)*$E30/100;
        $I31=($data->D15-$data->D14)*$E31/100+$E31;
        $I32=($data->F15-$data->F14)*$E32/100+$E32;
        $I33=$I31+$I32;
        $I28=$E34-($I27+$I29+$I30+$I32+$I31);
        $I34=$I27+$I28+$I29+$I30+$I31+$I32;
        $RsCorrectWeightPerm3 = compact(
            'I27', 'I28', 'I29', 'I30', 'I31', 'I32', 'I33', 'I34'
        );

        // Trial wts. (m3) //
        $L27=$I27*$data->N26;
        $L28=$I28*$data->N26;
        $L29=$I29*$data->N26;
        $L30=$I30*$data->N26;
        $L31=$I31*$data->N26;
        $L32=$I32*$data->N26;
        $L33=$I33*$data->N26;
        $L34=$L27+$L28+$L29+$L30+$L31+$L32;
        $RsTrialWts = compact(
            'L27', 'L28', 'L29', 'L30', 'L31', 'L32', 'L33', 'L34'
        );

        // // Comp. strength (PSI) //
        // $E40=$data->E39*7.95;
        // $H40=$data->H39*7.95;
        // $K40=$data->K39*7.95;
        // $L40=$data->L39*7.95;


        // Avg. comp. strength (PSI) //
        $E41=$data->E40+$data->H40+$data->J40;
        $K41=$data->K40+$data->L40+$data->J40;
        $RsAvgComStrength = compact('E41', 'K41');
       
        return view('105_CONCRETE_MIX_DESIGN/VIEW_105_CONCRETE_MIX_DESIGN')->with(
            compact(
                'data',
                'compactVariables',
                'RsOfOriginWeightPerm3',
                'RsCorrectWeightPerm3',
                'RsTrialWts',
                'RsAvgComStrength'
            ),
        );
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConcreteCompressModel;

class ConcreteCompressController extends Controller
{
    public function getPage()
    {
        return view('lab/postviews/post_84_concrete_compres');
    }
    
    public function postPage(Request $request)
    {
    $requestData = $request->all();
    $requestData=json_encode($requestData);
    $aaa= ConcreteCompressModel::create([
        'data' => $requestData,
    ]);

 
    $a = ConcreteCompressModel::where('id',$aaa->id)->first();
    $data=json_decode( $a->data);

    // ### RESULTS ### //
    $S11 = $data->Q11/182.4*14.223;
    $S12 = $data->Q12/182.4*14.223;
    $S13 = $data->Q13/182.4*14.223;
    
    return view('lab/getviews/get_84_concrete_compres')->with(compact('S11','S12', 'S13', 'data' ));
    }
}

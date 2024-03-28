<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta value="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/app.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<style>
    span,
    input,
    span,
    textarea,
    label,
    header div {
        border: 1px solid gray;
    }

    div {
        width: 100%;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
    }

    th,
    td {
        border: 1px solid #dddddd;
    }

    td input {
        width: 100%;
        padding: 0.2vw;
    }

    table thead th {
        padding: 8px;
        background-color: #f2f2f2;
        text-align: center;
    }

    table tbody td {
        text-align: center;
    }

    ul li {
        text-align: center;
    }

    table td input {
        background: #ffffcc;
    }

    table #result {
        border: 1px solid gray;
        background: rgb(222, 221, 221);
        font-weight: bold;
    }

    table input,
    table,
    span,
    td {
        text-align: center;
    }

    @media only screen and (max-width: 600px) {
        table {
            border: 0;
        }

        table thead {
            display: none;
        }

        table,
        table tbody,
        table tr,
        table td {
            display: block;
            width: 100%;
        }

        table tr {
            margin-bottom: 15px;
        }

        table td {
            padding: 10px;
            position: relative;
        }

        table td::before {
            content: attr(data-label);
            position: absolute;
            left: 0;
            width: 50%;
            padding-left: 15px;
            font-weight: bold;
        }

    }
</style>

<body>
    <div class="flex justify-center align-center">
        <div class="w-[95%] p-[3%]">
            <header class="grid grid-cols-4">
                <div class=" grid grid-cols-2">
                    <div class="flex justify-center items-center">
                        <h1 class="text-[1.5rem] font-bold">Tk</h1>
                    </div>
                    <div class="flex justify-center items-center">
                        <h1 class="text-[1.5rem] font-bold">TS</h1>
                    </div>
                </div>
                <div class="col-span-2 flex justify-center items-center" style="border: 1px solid gray;">
                    <h1 class="lg:text-xl text-center md:text-base sm:text-sm font-bold">CONCRETE MIX DESIGN (ACI 211)
                    </h1>
                </div>
                <div class="flex flex-col">
                    <input disabled type="text" placeholder="Doc#">
                    <input disabled type="text" placeholder="Rev" />
                    <input disabled type="date" placeholder="Date" />
                    <input disabled type="text" placeholder="Page" />
                </div>
            </header>

            <body class="flex flex-col">
                <div>
                    {{-- ######// Header Start//####### --}}
                    <div class="w-full my-5">
                        <div class="grid grid-cols-4 gap-2 mb-2 w-full">
                            <input disabled value="{{ $data->A5 ?? '' }}" disabled name='A5' type="text"
                                placeholder="Contract No." class="p-2 rounded-sm" />
                            <input disabled value="{{ $data->D5 ?? '' }}" disabled name='D5' type="text"
                                placeholder="Contract No. :" class="p-2 rounded-sm" />
                            <input disabled value="{{ $data->I5 ?? '' }}" disabled name='I5' type="text"
                                placeholder="Location" class="p-2 rounded-sm" />
                            <input disabled value="{{ $data->Q5 ?? '' }}" disabled name='Q5' type="text"
                                placeholder="Lab No:" class="p-2 rounded-sm" />
                        </div>
                        <div class="grid grid-cols-4 gap-2 mb-2 w-full">
                            <input disabled value="{{ $data->A5 ?? '' }}" disabled name='A5' type="text"
                                placeholder="Cement:" class="p-2 rounded-sm" />
                            <input disabled value="{{ $data->D5 ?? '' }}" disabled name='D5' type="text"
                                placeholder="Cement Brand:" class="p-2 rounded-sm" />
                            <input disabled value="{{ $data->I5 ?? '' }}" disabled name='I5' type="text"
                                placeholder="Concrete Class:" class="p-2 rounded-sm" />
                            <input disabled value="{{ $data->Q5 ?? '' }}" disabled name='Q5' type="date"
                                placeholder="Date:" class="p-2 rounded-sm" />
                        </div>
                        <div class="grid grid-cols-5 gap-2 mb-2 w-full">
                            <input disabled value="{{ $data->A6 ?? '' }}" disabled name='A6' type="text"
                                placeholder="Admixture:" class="p-2 rounded-sm" />
                            <input disabled value="{{ $data->A6 ?? '' }}" disabled name='A6' type="text"
                                placeholder="Cement Specific Gravity:" class="p-2 rounded-sm" />
                            <input disabled value="{{ $data->A6 ?? '' }}" disabled name='A6' type="text"
                                placeholder="Admixture Specific Gravity:" class="p-2 rounded-sm" />
                            <input disabled value="{{ $data->A6 ?? '' }}" disabled name='A6' type="text"
                                placeholder="Water Cement Ratio" class="p-2 rounded-sm" />
                            <input disabled value="{{ $data->I6 ?? '' }}" disabled name='I6' type="text"
                                placeholder="Water Specific Gravity:" class="p-2 rounded-sm flex-2" />
                        </div>
                    </div>

                    {{-- ###### Table Start ######## --}}
                    <table>
                        <thead>
                            <tr>
                                <th rowspan="2">Description</th>
                                <th colspan="3">Coarse Aggregate (NMSA)</th>
                                <th>Fine Aggregate</th>
                                <th colspan="5">Design's Constraints</th>
                            </tr>
                            <tr>
                                <th></th>
                                <th>19mm</th>
                                <th>10mm</th>
                                <th>Blend</th>
                                <th>Sand</th>
                                <th>Cementations Material</th>
                                <th colspan="2">Cement</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td><input type="number" value="{{ $data->C11 ?? '' }}" disabled name="C11"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->D11 ?? '' }}" disabled name="D11"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->F11 ?? '' }}" disabled name="F11"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->H11 ?? '' }}" disabled name="H11"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->I11 ?? '' }}" disabled name="I11"
                                        id=""></td>
                                <td>Blending %</td>
                                <td colspan="2"><input type="number" value="{{ $data->L11 ?? '' }}" disabled
                                        name="L11" id=""></td>
                                <td><input type="number" value="{{ $data->N11 ?? '' }}" disabled name="N11"
                                        id=""></td>
                            </tr>
                            <tr>
                                <td>Blending %</td>
                                <td><input type="number" value="{{ $data->C12 ?? '' }}" disabled name="C12"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->D12 ?? '' }}" disabled name="D12"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->F12 ?? '' }}" disabled name="F12"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->H12 ?? '' }}" disabled name="H12"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->I12 ?? '' }}" disabled name="I12"
                                        id=""></td>
                                <td>Water</td>
                                <td colspan="3"><input type="number" value="{{ $data->L12 ?? '' }}" disabled
                                        name="L12" id=""></td>
                            </tr>
                            <tr>
                                <td>Sp. Gr. (S.S.D)</td>
                                <td><input type="number" value="{{ $data->C13 ?? '' }}" disabled name="C13"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->D13 ?? '' }}" disabled name="D13"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->F13 ?? '' }}" disabled name="F13"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->H13 ?? '' }}" disabled name="H13"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->I13 ?? '' }}" disabled name="I13"
                                        id=""></td>
                                <td>NMSA</td>
                                <td colspan="3"><input type="number" value="{{ $data->L13 ?? '' }}" disabled
                                        name="L13" id=""></td>
                            </tr>
                            <tr>
                                <td>Absorption %</td>
                                <td><input type="number" value="{{ $data->C14 ?? '' }}" disabled name="C14"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->D14 ?? '' }}" disabled name="D14"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->F14 ?? '' }}" disabled name="F14"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->H14 ?? '' }}" disabled name="H14"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->I14 ?? '' }}" disabled name="I14"
                                        id=""></td>
                                <td>Admixture%</td>
                                <td colspan="3"><input type="number" value="{{ $data->L14 ?? '' }}" disabled
                                        name="L14" id=""></td>
                            </tr>
                            <tr>
                                <td>Moisture Content %</td>
                                <td><input type="number" value="{{ $data->C15 ?? '' }}" disabled name="C15"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->D15 ?? '' }}" disabled name="D15"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->F15 ?? '' }}" disabled name="F15"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->H15 ?? '' }}" disabled name="H15"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->I15 ?? '' }}" disabled name="I15"
                                        id=""></td>
                                <td>Slump</td>
                                <td colspan="3"><input type="number" value="{{ $data->L15 ?? '' }}" disabled
                                        name="L15" id=""></td>
                            </tr>
                            <tr>
                                <td>Unit Weight of Aggregate (Kg/m3)</td>
                                <td><input type="number" value="{{ $data->C15 ?? '' }}" disabled name="C16"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->D15 ?? '' }}" disabled name="D16"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->F15 ?? '' }}" disabled name="F16"
                                        id=""></td>
                                <td id="result">{{ $compactVariables['H16'] }}</td>
                                <td><input type="number" value="{{ $data->I15 ?? '' }}" disabled name="I16"
                                        id=""></td>
                                <td>Strength "PSI"</td>
                                <td><input type="number" value="{{ $data->L15 ?? '' }}" disabled name="L16"
                                        id=""></td>
                                <td>Target</td>
                                <td id="result">{{ $compactVariables['N16'] }}</td>
                            </tr>
                            <tr>
                                <td>Finess Modulus</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><input type="number" value="{{ $data->I17 ?? '' }}" disabled name="I17"
                                        id=""></td>
                                <td>Entrapped Air</td>
                                <td colspan="3"><input type="number" value="{{ $data->I17 ?? '' }}" disabled
                                        name="I17" id=""></td>
                            </tr>
                            <tr>
                                <td colspan="2">Cement</td>
                                <td colspan="3" id="result">{{ $compactVariables['E18'] }}</td>
                                <td>Tot. vol. of C. Agg.</td>
                                <td><input type="number" value="{{ $data->K18 ?? '' }}" disabled name="K18"
                                        id=""></td>
                                <td colspan="3" id="result">{{ $compactVariables['L18'] }}</td>
                            </tr>

                            <tr>
                                <td colspan="2">Fly Ash</td>
                                <td colspan="3"><input type="number" value="{{ $data->E19 ?? '' }}" disabled
                                        name="E19" id=""></td>
                                <td>Tot. vol. of F. Agg.</td>
                                <td><input type="number" value="{{ $data->K19 ?? '' }}" disabled name="K19"
                                        id=""></td>
                                <td colspan="3" id="result">{{ $compactVariables['L19'] }}</td>
                            </tr>

                            <tr>
                                <td colspan="2">Water </td>
                                <td colspan="3" id="result">{{ $compactVariables['E20'] }}</td>
                                <td rowspan="2" colspan="3"><input type="number"
                                        value="{{ $data->I20 ?? '' }}" disabled name="I20" id=""
                                        placeholder="Volume of Fine Aggregate"></td>
                                <td rowspan="2" colspan="2" id="result">{{ $compactVariables['M20'] }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Admixture </td>
                                <td colspan="3" id="result">{{ $compactVariables['E21'] }}</td>
                            </tr>

                            <tr>
                                <td colspan="2">Entrapped Air </td>
                                <td colspan="3" id="result">{{ $compactVariables['E22'] }}</td>
                                <td rowspan="2" colspan="3"><input type="number"
                                        value="{{ $data->I20 ?? '' }}" disabled name="I20" id=""
                                        placeholder="Volume of Coarse Agg.- 19 mm"></td>
                                <td rowspan="2" colspan="2" id="result">{{ $compactVariables['M22'] }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Total Paste </td>
                                <td colspan="3" id="result">{{ $compactVariables['E23'] }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Total Volume of Aggregates </td>
                                <td colspan="3" id="result">{{ $compactVariables['E24'] }}</td>
                                <td rowspan="2" colspan="3"><input type="number"
                                        value="{{ $data->I20 ?? '' }}" disabled name="I20" id=""
                                        placeholder="Volume of Coarse Agg.- 10 mm"></td>
                                <td rowspan="2" colspan="2" id="result">{{ $compactVariables['M24'] }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Unit Weight of Blended Agg. (Kg/m3)</td>
                                <td colspan="3" id="result">{{ $compactVariables['E25'] }}</td>
                            </tr>

                        </tbody>
                    </table>
                    {{-- ###### Table end ######## --}}

                    {{-- ###### Table start ######## --}}
                    <table>
                        <thead>
                            <tr>
                                <th colspan="2"> Original weights per m3</th>
                                <th> Corrected Weights per m3</th>
                                <th> Trial wts. (m3)</th>
                                <th><input type="number" value="{{ $data->N26 ?? '' }}" name="N26"
                                        id=""></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-[20%]">Cement (Kg)</td>
                                <td id="result">{{ $RsOfOriginWeightPerm3['E27'] }}</td>
                                <td id="result">{{ $RsCorrectWeightPerm3['I27'] }}</td>
                                <td colspan="2" id="result">{{ $RsTrialWts['L27'] }}</td>
                            </tr>
                            <tr>
                                <td>Water (Kg)</td>
                                <td id="result">{{ $RsOfOriginWeightPerm3['E28'] }}</td>
                                <td id="result">{{ $RsCorrectWeightPerm3['I28'] }}</td>
                                <td colspan="2" id="result">{{ $RsTrialWts['L28'] }}</td>
                            </tr>
                            <tr>
                                <td>Admixture (Kg)</td>
                                <td id="result">{{ $RsOfOriginWeightPerm3['E29'] }}</td>
                                <td id="result">{{ $RsCorrectWeightPerm3['I29'] }}</td>
                                <td colspan="2" id="result">{{ $RsTrialWts['L29'] }}</td>
                            </tr>
                            <tr>
                                <td>Fine Aggregate (Kg)</td>
                                <td id="result">{{ $RsOfOriginWeightPerm3['E30'] }}</td>
                                <td id="result">{{ $RsCorrectWeightPerm3['I30'] }}</td>
                                <td colspan="2" id="result">{{ $RsTrialWts['L30'] }}</td>
                            </tr>
                            <tr>
                                <td>Coarse Aggregate 1 (Kg)</td>
                                <td id="result">{{ $RsOfOriginWeightPerm3['E31'] }}</td>
                                <td id="result">{{ $RsCorrectWeightPerm3['I31'] }}</td>
                                <td colspan="2" id="result">{{ $RsTrialWts['L31'] }}</td>
                            </tr>
                            <tr>
                                <td>Coarse Aggregate 2 (Kg)</td>
                                <td id="result">{{ $RsOfOriginWeightPerm3['E32'] }}</td>
                                <td id="result">{{ $RsCorrectWeightPerm3['I32'] }}</td>
                                <td colspan="2" id="result">{{ $RsTrialWts['L32'] }}</td>
                            </tr>
                            <tr>
                                <td>Combined Coarse Aggregate (Kg)</td>
                                <td id="result">{{ $RsOfOriginWeightPerm3['E33'] }}</td>
                                <td id="result">{{ $RsCorrectWeightPerm3['I33'] }}</td>
                                <td colspan="2" id="result">{{ $RsTrialWts['L33'] }}</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td id="result">{{ $RsOfOriginWeightPerm3['E34'] }}</td>
                                <td id="result">{{ $RsCorrectWeightPerm3['I34'] }}</td>
                                <td colspan="2" id="result">{{ $RsTrialWts['L34'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- ###### Table end ######## --}}

                    {{-- ###### Table start ######## --}}
                    <table>
                        <thead>
                            <tr>
                                <th rowspan="2" colspan="4">Trial Observation</th>
                                <th>Temp.°C</th>
                                <th>Initial Slump (mm)</th>
                                <th>Slump after 30 mints (mm)</th>
                            </tr>
                            <tr>
                                <th><input type="number" value="{{ $data->K36 ?? '' }}" disabled name="K36"
                                        id=""></th>
                                <th><input type="number" value="{{ $data->L36 ?? '' }}" disabled name="L36"
                                        id=""></th>
                                <th><input type="number" value="{{ $data->N36 ?? '' }}" disabled name="N36"
                                        id=""></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2">Crushing Date</td>
                                <td colspan="2"><input type="number" value="{{ $data->E37 ?? '' }}" disabled
                                        name="E37" id=""></td>
                                <td colspan="3"><input type="number" value="{{ $data->k37 ?? '' }}" disabled
                                        name="k37" id=""></td>
                            </tr>
                            <tr>
                                <td colspan="2">Age (Days)</td>
                                <td colspan="2">7 DAYS</td>
                                <td colspan="3">28 DAYS</td>
                            </tr>
                            <tr>
                                <td>Load (KN)</td>
                                <td><input type="number" value="{{ $data->E39 ?? '' }}" disabled name="E39"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->H39 ?? '' }}" disabled name="H39"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->J39 ?? '' }}" disabled name="J39"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->K39 ?? '' }}" disabled name="K39"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->L39 ?? '' }}" disabled name="L39"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->N39 ?? '' }}" disabled name="N39"
                                        id=""></td>
                            </tr>
                            <tr>
                                <td>Comp. strength (PSI)</td>
                                <td><input type="number" value="{{ $data->E40 ?? '' }}" disabled name="E40"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->H40 ?? '' }}" disabled name="H40"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->J40 ?? '' }}" disabled name="J40"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->K40 ?? '' }}" disabled name="K40"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->L40 ?? '' }}" disabled name="L40"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->N40 ?? '' }}" disabled name="N40"
                                        id=""></td>
                            </tr>
                            <tr>
                                <td>Avg. comp. strength (PSI)</td>
                                <td id="result" colspan="3">{{ $RsAvgComStrength['E41'] }}</td>
                                <td id="result" colspan="3">{{ $RsAvgComStrength['K41'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="grid grid-cols-6 gap-2 w-full">
                        <input disabled value="{{ $data->A15 ?? '' }}" disabled name='A15' type="text"
                            placeholder="Sampled by" class="p-3 rounded-sm" />
                        <input disabled value="{{ $data->E15 ?? '' }}" disabled name='E15' type="date"
                            placeholder="Date" class="p-3 rounded-sm" />
                        <input disabled value="{{ $data->F15 ?? '' }}" disabled name='F15' type="text"
                            placeholder="Tested by" class="p-3 rounded-sm" />
                        <input disabled value="{{ $data->K15 ?? '' }}" disabled name='K15' type="date"
                            placeholder="Date" class="p-3 rounded-sm" />
                        <input disabled value="{{ $data->L15 ?? '' }}" disabled name='L15' type="text"
                            placeholder="Checked by" class="p-3 rounded-sm" />
                        <input disabled value="{{ $data->Q15 ?? '' }}" disabled name='Q15' type="date"
                            placeholder="Date" class="p-3 rounded-sm" />
                    </div>
                </div>
                <button type="submit">Submit</button>
                {{ Form::close() }}
            </body>
        </div>
    </div>
</body>
</body>

</html>

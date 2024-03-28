<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta value="viewport" disabled name="viewport" content="width=device-width, initial-scale=1.0">
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

    table #sizeOfAggCol {
        width: 20%;
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
                    <h1 class="lg:text-xl text-center md:text-base sm:text-sm font-bold">BLENDING OF AGGREGATES (ASTM
                        C136)</h1>
                </div>
                <div class="flex flex-col">
                    <input required type="text" placeholder="Doc#">
                    <input required type="text" placeholder="Rev" />
                    <input required type="date" placeholder="Date" />
                    <input required type="text" placeholder="Page" />
                </div>
            </header>

            <body class="flex flex-col">
                <div>
                    {{-- ######// Header Start//####### --}}
                    <div class="w-full my-5">
                        <div class="grid grid-cols-4 gap-2 mb-2 w-full">
                            <input required value="{{ $data->A5 ?? '' }}" disabled name='A5' type="text"
                                placeholder="Contract No." class="p-2 rounded-sm" />
                            <input required value="{{ $data->D5 ?? '' }}" disabled name='D5' type="text"
                                placeholder="Contract No. :" class="p-2 rounded-sm" />
                            <input required value="{{ $data->I5 ?? '' }}" disabled name='I5' type="text"
                                placeholder="Location" class="p-2 rounded-sm" />
                            <input required value="{{ $data->Q5 ?? '' }}" disabled name='Q5' type="text"
                                placeholder="Lab No:" class="p-2 rounded-sm" />
                        </div>
                        <div class="grid grid-cols-3 gap-2 mb-2 w-full">
                            <input required value="{{ $data->A6 ?? '' }}" disabled name='A6' type="text"
                                placeholder="Sample Number.:" class="p-2 rounded-sm" />
                            <input required value="{{ $data->A6 ?? '' }}" disabled name='A6' type="text"
                                placeholder="Source" class="p-2 rounded-sm" />
                            <input required value="{{ $data->I6 ?? '' }}" disabled name='I6' type="text"
                                placeholder="Discription" class="p-2 rounded-sm flex-2" />
                        </div>
                    </div>

                    {{-- ###### Table Start ######## --}}
                    <table>
                        <thead>
                            <tr>
                                <th rowspan="3">Sr. #</th>
                                <th rowspan="3" colspan="3" class="sizeOfAggCol">Size of Aggregate (mm)</th>
                            </tr>
                            <tr>
                                <th>50</th>
                                <th>38</th>
                                <th>25</th>
                                <th>19</th>
                                <th>12.5</th>
                                <th>9.5</th>
                                <th>4.75</th>
                                <th>2.36</th>
                                <th>2.0</th>
                                <th>1.18</th>
                                <th>0.6</th>
                                <th>0.425</th>
                                <th>0.3</th>
                                <th>0.180</th>
                                <th>0.150</th>
                                <th>0.075</th>
                            </tr>
                            <tr>
                                <th>2``</th>
                                <th>1½</th>
                                <th>1``</th>
                                <th>¾</th>
                                <th>½</th>
                                <th></th>
                                <th># 4</th>
                                <th># 8</th>
                                <th># 10</th>
                                <th># 16</th>
                                <th># 30</th>
                                <th># 40</th>
                                <th># 50</th>
                                <th># 80</th>
                                <th># 100</th>
                                <th># 200</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td colspan="2" id="sizeOfAggCol">Size of Aggregate 1</td>
                                <td>%</td>
                                <td><input type="number" value="{{ $data->F11 ?? '' }}" disabled name="F11"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->G11 ?? '' }}" disabled name="G11"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->I11 ?? '' }}" disabled name="I11"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->J11 ?? '' }}" disabled name="J11"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->K11 ?? '' }}" disabled name="K11"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->M11 ?? '' }}" disabled name="M11"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->N11 ?? '' }}" disabled name="N11"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->O11 ?? '' }}" disabled name="O11"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->Q11 ?? '' }}" disabled name="Q11"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->R11 ?? '' }}" disabled name="R11"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->S11 ?? '' }}" disabled name="S11"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->T11 ?? '' }}" disabled name="T11"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->U11 ?? '' }}" disabled name="U11"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->V11 ?? '' }}" disabled name="V11"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->W11 ?? '' }}" disabled name="W11"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->X11 ?? '' }}" disabled name="X11"
                                        id=""></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td colspan="2" id="sizeOfAggCol">Size of Aggregate 2</td>
                                <td>%</td>
                                <td><input type="number" value="{{ $data->F12 ?? '' }}" disabled name="F12"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->G12 ?? '' }}" disabled name="G12"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->I12 ?? '' }}" disabled name="I12"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->J12 ?? '' }}" disabled name="J12"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->K12 ?? '' }}" disabled name="K12"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->M12 ?? '' }}" disabled name="M12"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->N12 ?? '' }}" disabled name="N12"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->O12 ?? '' }}" disabled name="O12"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->Q12 ?? '' }}" disabled name="Q12"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->R12 ?? '' }}" disabled name="R12"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->S12 ?? '' }}" disabled name="S12"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->T12 ?? '' }}" disabled name="T12"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->U12 ?? '' }}" disabled name="U12"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->V12 ?? '' }}" disabled name="V12"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->W12 ?? '' }}" disabled name="W12"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->X12 ?? '' }}" disabled name="X12"
                                        id=""></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td colspan="2" id="sizeOfAggCol">Size of Aggregate 3</td>
                                <td>%</td>
                                <td><input type="number" value="{{ $data->F13 ?? '' }}" disabled name="F13"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->G13 ?? '' }}" disabled name="G13"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->I13 ?? '' }}" disabled name="I13"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->J13 ?? '' }}" disabled name="J13"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->K13 ?? '' }}" disabled name="K13"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->M13 ?? '' }}" disabled name="M13"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->N13 ?? '' }}" disabled name="N13"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->O13 ?? '' }}" disabled name="O13"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->Q13 ?? '' }}" disabled name="Q13"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->R13 ?? '' }}" disabled name="R13"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->S13 ?? '' }}" disabled name="S13"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->T13 ?? '' }}" disabled name="T13"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->U13 ?? '' }}" disabled name="U13"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->V13 ?? '' }}" disabled name="V13"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->W13 ?? '' }}" disabled name="W13"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->X13 ?? '' }}" disabled name="X13"
                                        id=""></td>
                            </tr>
                            <tr>
                                <td colspan="2">Combined Gradation</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td colspan="2" id="sizeOfAggCol"><input type="number"
                                        value="{{ $data->B15 }}" name="B15" id="">
                                </td>
                                <td>%</td>
                                <td id="result">{{ $RsCombinedGradation1['F15'] }}</td>
                                <td id="result">{{ $RsCombinedGradation1['G15'] }}</td>
                                <td id="result">{{ $RsCombinedGradation1['I15'] }}</td>
                                <td id="result">{{ $RsCombinedGradation1['J15'] }}</td>
                                <td id="result">{{ $RsCombinedGradation1['K15'] }}</td>
                                <td id="result">{{ $RsCombinedGradation1['M15'] }}</td>
                                <td id="result">{{ $RsCombinedGradation1['N15'] }}</td>
                                <td id="result">{{ $RsCombinedGradation1['O15'] }}</td>
                                <td id="result">{{ $RsCombinedGradation1['Q15'] }}</td>
                                <td id="result">{{ $RsCombinedGradation1['R15'] }}</td>
                                <td id="result">{{ $RsCombinedGradation1['S15'] }}</td>
                                <td id="result">{{ $RsCombinedGradation1['T15'] }}</td>
                                <td id="result">{{ $RsCombinedGradation1['U15'] }}</td>
                                <td id="result">{{ $RsCombinedGradation1['V15'] }}</td>
                                <td id="result">{{ $RsCombinedGradation1['W15'] }}</td>
                                <td id="result">{{ $RsCombinedGradation1['X15'] }}</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td colspan="2" id="sizeOfAggCol"><input type="number"
                                        value="{{ $data->B16 }}" name="B16" id="">
                                </td>
                                <td>%</td>
                                <td id="result">{{ $RsCombinedGradation2['F16'] }}</td>
                                <td id="result">{{ $RsCombinedGradation2['G16'] }}</td>
                                <td id="result">{{ $RsCombinedGradation2['I16'] }}</td>
                                <td id="result">{{ $RsCombinedGradation2['J16'] }}</td>
                                <td id="result">{{ $RsCombinedGradation2['K16'] }}</td>
                                <td id="result">{{ $RsCombinedGradation2['M16'] }}</td>
                                <td id="result">{{ $RsCombinedGradation2['N16'] }}</td>
                                <td id="result">{{ $RsCombinedGradation2['O16'] }}</td>
                                <td id="result">{{ $RsCombinedGradation2['Q16'] }}</td>
                                <td id="result">{{ $RsCombinedGradation2['R16'] }}</td>
                                <td id="result">{{ $RsCombinedGradation2['S16'] }}</td>
                                <td id="result">{{ $RsCombinedGradation2['T16'] }}</td>
                                <td id="result">{{ $RsCombinedGradation2['U16'] }}</td>
                                <td id="result">{{ $RsCombinedGradation2['V16'] }}</td>
                                <td id="result">{{ $RsCombinedGradation2['W16'] }}</td>
                                <td id="result">{{ $RsCombinedGradation2['X16'] }}</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td colspan="2" id="sizeOfAggCol"><input type="number"
                                        value="{{ $data->B17 }}" name="B17" id="">
                                </td>
                                <td>%</td>
                                <td id="result">{{ $RsCombinedGradation3['F17'] }}</td>
                                <td id="result">{{ $RsCombinedGradation3['G17'] }}</td>
                                <td id="result">{{ $RsCombinedGradation3['I17'] }}</td>
                                <td id="result">{{ $RsCombinedGradation3['J17'] }}</td>
                                <td id="result">{{ $RsCombinedGradation3['K17'] }}</td>
                                <td id="result">{{ $RsCombinedGradation3['M17'] }}</td>
                                <td id="result">{{ $RsCombinedGradation3['N17'] }}</td>
                                <td id="result">{{ $RsCombinedGradation3['O17'] }}</td>
                                <td id="result">{{ $RsCombinedGradation3['Q17'] }}</td>
                                <td id="result">{{ $RsCombinedGradation3['R17'] }}</td>
                                <td id="result">{{ $RsCombinedGradation3['S17'] }}</td>
                                <td id="result">{{ $RsCombinedGradation3['T17'] }}</td>
                                <td id="result">{{ $RsCombinedGradation3['U17'] }}</td>
                                <td id="result">{{ $RsCombinedGradation3['V17'] }}</td>
                                <td id="result">{{ $RsCombinedGradation3['W17'] }}</td>
                                <td id="result">{{ $RsCombinedGradation3['X17'] }}</td>
                            </tr>
                            <tr>
                                <td rowspan="3" colspan="3">Specification</td>
                                <td>100%</td>
                                <td id="result">{{ $RsSpecificationPerc['F18'] }}</td>
                                <td id="result">{{ $RsSpecificationPerc['G18'] }}</td>
                                <td id="result">{{ $RsSpecificationPerc['I18'] }}</td>
                                <td id="result">{{ $RsSpecificationPerc['J18'] }}</td>
                                <td id="result">{{ $RsSpecificationPerc['K18'] }}</td>
                                <td id="result">{{ $RsSpecificationPerc['M18'] }}</td>
                                <td id="result">{{ $RsSpecificationPerc['N18'] }}</td>
                                <td id="result">{{ $RsSpecificationPerc['O18'] }}</td>
                                <td id="result">{{ $RsSpecificationPerc['Q18'] }}</td>
                                <td id="result">{{ $RsSpecificationPerc['R18'] }}</td>
                                <td id="result">{{ $RsSpecificationPerc['S18'] }}</td>
                                <td id="result">{{ $RsSpecificationPerc['T18'] }}</td>
                                <td id="result">{{ $RsSpecificationPerc['U18'] }}</td>
                                <td id="result">{{ $RsSpecificationPerc['V18'] }}</td>
                                <td id="result">{{ $RsSpecificationPerc['W18'] }}</td>
                                <td id="result">{{ $RsSpecificationPerc['X18'] }}</td>
                            </tr>
                            <tr>
                                <td>Mid Point</td>
                                <td id="result">{{ $RsSpecificationMidPoint['F19'] }}</td>
                                <td id="result">{{ $RsSpecificationMidPoint['G19'] }}</td>
                                <td id="result">{{ $RsSpecificationMidPoint['I19'] }}</td>
                                <td id="result">{{ $RsSpecificationMidPoint['J19'] }}</td>
                                <td id="result">{{ $RsSpecificationMidPoint['K19'] }}</td>
                                <td id="result">{{ $RsSpecificationMidPoint['M19'] }}</td>
                                <td id="result">{{ $RsSpecificationMidPoint['N19'] }}</td>
                                <td id="result">{{ $RsSpecificationMidPoint['O19'] }}</td>
                                <td id="result">{{ $RsSpecificationMidPoint['Q19'] }}</td>
                                <td id="result">{{ $RsSpecificationMidPoint['R19'] }}</td>
                                <td id="result">{{ $RsSpecificationMidPoint['S19'] }}</td>
                                <td id="result">{{ $RsSpecificationMidPoint['T19'] }}</td>
                                <td id="result">{{ $RsSpecificationMidPoint['U19'] }}</td>
                                <td id="result">{{ $RsSpecificationMidPoint['V19'] }}</td>
                                <td id="result">{{ $RsSpecificationMidPoint['W19'] }}</td>
                                <td id="result">{{ $RsSpecificationMidPoint['X19'] }}</td>
                            </tr>
                            <tr>
                                <td>Limits</td>
                                <td><input type="number" value="{{ $data->F20 ?? '' }}" disabled name="F20"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->G20 ?? '' }}" disabled name="G20"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->I20 ?? '' }}" disabled name="I20"
                                        id=""></td>
                                <td id="result">100</td>
                                <td id="result">75~90</td>
                                <td id="result">'60~80</td>
                                <td id="result">40~60</td>
                                <td id="result">20~40</td>
                                <td><input type="number" value="{{ $data->Q20 ?? '' }}" disabled name="Q20"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->R20 ?? '' }}" disabled name="R20"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->S20 ?? '' }}" disabled name="S20"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->T20 ?? '' }}" disabled name="T20"
                                        id=""></td>
                                <td id="result">5~15</td>
                                <td><input type="number" value="{{ $data->V20 ?? '' }}" disabled name="V20"
                                        id=""></td>
                                <td><input type="number" value="{{ $data->W20 ?? '' }}" disabled name="W20"
                                        id=""></td>
                                <td id="result">3~8</td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- ###### Table end ######## --}}
                    <div class="grid grid-cols-1 w-full my-5">
                        <textarea value="{{ $data->A14 ?? '' }}" disabled name="A14" id="" cols="30" rows="10"
                            placeholder="Remarks" class="p-2"></textarea>
                    </div>
                    <div class="grid grid-cols-6 gap-2 w-full">
                        <input required value="{{ $data->A15 ?? '' }}" disabled name='A15' type="text"
                            placeholder="Sampled by" class="p-3 rounded-sm" />
                        <input required value="{{ $data->E15 ?? '' }}" disabled name='E15' type="date"
                            placeholder="Date" class="p-3 rounded-sm" />
                        <input required value="{{ $data->F15 ?? '' }}" disabled name='F15' type="text"
                            placeholder="Tested by" class="p-3 rounded-sm" />
                        <input required value="{{ $data->K15 ?? '' }}" disabled name='K15' type="date"
                            placeholder="Date" class="p-3 rounded-sm" />
                        <input required value="{{ $data->L15 ?? '' }}" disabled name='L15' type="text"
                            placeholder="Checked by" class="p-3 rounded-sm" />
                        <input required value="{{ $data->Q15 ?? '' }}" disabled name='Q15' type="date"
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/app.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<style>
    span,
    input ,
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

    td input, td span {
        width: 100%;
        padding: 0.2vw;
        text-align: center;
    }

    table thead th {
        padding: 8px;
        background-color: #f2f2f2;
        text-align: center;
    }
    table tbody td {
        text-align: center;
    }

    ul li{
        text-align: center;
    }

    table td input{
        background: #ffffcc;
    }

    table #result{
        border: 1px solid gray;
        background: rgb(222, 221, 221);
        font-weight: bold;
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
                    <h1 class="lg:text-xl text-center md:text-base sm:text-sm font-bold">CLAY LUMPS TN AGGREGATE (ASTM C-142)</h1>
                </div>
                <div class="flex flex-col">
                    <input disabled value="" required type="text" placeholder="Doc#">
                    <input disabled value="" required type="text" placeholder="Rev" />
                    <input disabled value="" required type="date" placeholder="Date" />
                    <input disabled value="" required type="text" placeholder="Page" />
                </div>
            </header>

            <body class="flex flex-col">
                <div>

                    <div>
                        {{-- ######// Header Start//####### --}}
                        <div class="w-full my-5">
                            <div class="grid grid-cols-4 gap-2 mb-2 w-full">
                                <input disabled value="" required name='A5' type="text" placeholder="Contract No."
                                    class="p-2 rounded-sm" />
                                <input disabled value="" required name='D5' type="text" placeholder="Contract No. :"
                                    class="p-2 rounded-sm" />
                                <input disabled value="" required name='I5' type="text" placeholder="Location"
                                    class="p-2 rounded-sm" />
                                <input disabled value="" required name='Q5' type="text" placeholder="Lab No:"
                                    class="p-2 rounded-sm" />
                            </div>
                            <div class="grid grid-cols-3 gap-2 mb-2 w-full">
                                <input disabled value="" required name='A6' type="text" placeholder="Sample Number.:"
                                    class="p-2 rounded-sm" />
                                <input disabled value="" required name='I6' type="text" placeholder="Discription"
                                    class="p-2 rounded-sm flex-2" />
                                <input disabled value="" required name='I6' type="text" placeholder="Test No."
                                    class="p-2 rounded-sm flex-2" />
                            </div>
                        </div>

                        {{-- ###### Table Start ######## --}}
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="2">Slieve</th>
                                    <th>A</th>
                                    <th>B</th>
                                    <th>C</th>
                                    <th>D</th>
                                    <th>E</th>
                                    <th>F</th>
                                </tr>
                                <tr>
                                    <th>Passing (mm)</th>
                                    <th>Retained (mm)</th>
                                    <th>Grading of Original Sample</th>
                                    <th>Fraction Before Test ( Grams)</th>
                                    <th>Fraction After Test ( Grams)</th>
                                    <th>Actual Loss After Test (Grams)</th>
                                    <th>Actual Loss After Test ( %)</th>
                                    <th>Weigthed Average ( % )</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input disabled value="{{$data->A9}}" type="text" name="A9" id=""></td>
                                    <td><input disabled value="{{$data->B9}}" type="text" name="B9" id=""></td>
                                    <td><input disabled value="{{$data->E9}}" type="text" name="E9" id=""></td>
                                    <td><input disabled value="{{$data->F9}}" type="text" name="F9" id=""></td>
                                    <td><input disabled value="{{$data->G9}}" type="text" name="G9" id=""></td>
                                    <td id="result">{{$ResultsOfActualLoosAftTestGrams['H9']}}</td>
                                    <td id="result">{{$ResultsOfActualLoosAftTestPerc['I9']}}</td>
                                    <td id="result">{{$ResultsOfWeightAvrg['K9']}}</td>
                                </tr>
                                <tr>
                                    <td><input disabled value="{{$data->A10}}" type="text" name="A10" id=""></td>
                                    <td><input disabled value="{{$data->B10}}" type="text" name="B10" id=""></td>
                                    <td><input disabled value="{{$data->E10}}" type="text" name="E10" id=""></td>
                                    <td><input disabled value="{{$data->F10}}" type="text" name="F10" id=""></td>
                                    <td><input disabled value="{{$data->G10}}" type="text" name="G10" id=""></td>
                                    <td id="result">{{$ResultsOfActualLoosAftTestGrams['H10']}}</td>
                                    <td id="result">{{$ResultsOfActualLoosAftTestPerc['I10']}}</td>
                                    <td id="result">{{$ResultsOfWeightAvrg['K10']}}</td>
                                </tr>
                                <tr>
                                    <td><input disabled value="{{$data->A11}}" type="text" name="A11" id=""></td>
                                    <td><input disabled value="{{$data->B11}}" type="text" name="B11" id=""></td>
                                    <td><input disabled value="{{$data->E11}}" type="text" name="E11" id=""></td>
                                    <td><input disabled value="{{$data->F11}}" type="text" name="F11" id=""></td>
                                    <td><input disabled value="{{$data->G11}}" type="text" name="G11" id=""></td>
                                    <td id="result">{{$ResultsOfActualLoosAftTestGrams['H11']}}</td>
                                    <td id="result">{{$ResultsOfActualLoosAftTestPerc['I11']}}</td>
                                    <td id="result">{{$ResultsOfWeightAvrg['K12']}}</td>
                                </tr>
                                <tr>
                                    <td><input disabled value="{{$data->A12}}" type="text" name="A12" id=""></td>
                                    <td><input disabled value="{{$data->B12}}" type="text" name="B12" id=""></td>
                                    <td><input disabled value="{{$data->E12}}" type="text" name="E12" id=""></td>
                                    <td><input disabled value="{{$data->F12}}" type="text" name="F12" id=""></td>
                                    <td><input disabled value="{{$data->G12}}" type="text" name="G12" id=""></td>
                                    <td id="result">{{$ResultsOfActualLoosAftTestGrams['H12']}}</td>
                                    <td id="result">{{$ResultsOfActualLoosAftTestPerc['I12']}}</td>
                                    <td id="result">{{$ResultsOfWeightAvrg['K12']}}</td>
                                </tr>
                                <tr>
                                    <td><input disabled value="{{$data->A13}}" type="text" name="A13" id=""></td>
                                    <td><input disabled value="{{$data->B13}}" type="text" name="B13" id=""></td>
                                    <td><input disabled value="{{$data->E13}}" type="text" name="E13" id=""></td>
                                    <td><input disabled value="{{$data->F13}}" type="text" name="F13" id=""></td>
                                    <td><input disabled value="{{$data->G13}}" type="text" name="G13" id=""></td>
                                    <td><input disabled value="{{$data->H13}}" type="text" name="H13" id=""></td>
                                    <td><input disabled value="{{$data->I13}}" type="text" name="I13" id=""></td>
                                    <td><input disabled value="{{$data->K13}}" type="text" name="K13" id=""></td>
                                </tr>
                                <tr>
                                    <td><input disabled value="{{$data->A14}}" type="text" name="A14" id=""></td>
                                    <td><input disabled value="{{$data->B14}}" type="text" name="B14" id=""></td>
                                    <td><input disabled value="{{$data->E14}}" type="text" name="E14" id=""></td>
                                    <td><input disabled value="{{$data->F14}}" type="text" name="F14" id=""></td>
                                    <td><input disabled value="{{$data->G14}}" type="text" name="G14" id=""></td>
                                    <td><input disabled value="{{$data->H14}}" type="text" name="H14" id=""></td>
                                    <td><input disabled value="{{$data->I14}}" type="text" name="I14" id=""></td>
                                    <td><input disabled value="{{$data->K14}}" type="text" name="K14" id=""></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td id="result">A(%)</td>
                                </tr>
                                <tr>
                                    <td>Test No.</td>
                                    <td colspan="7"><input disabled value="{{$data->B16}}" type="text" name="B16" id=""></td>
                                </tr>

                            </tbody>
                        </table>
                        {{-- ###### Table end ######## --}}

                        {{-- ###### Table Start ######## --}}
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="2">Slieve</th>
                                    <th rowspan="2">A (%)</th>
                                    <th rowspan="2">B (g)</th>
                                    <th colspan="2">Wt. Retained</th>
                                </tr>
                                <tr>
                                    <th>Passing (mm)</th>
                                    <th>Retained (mm)</th>
                                    <th>Sieve (mm)</th>
                                    <th>C (g)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input disabled value="{{$data->A19}}" type="text" name="A19" id=""></td>
                                    <td><input disabled value="{{$data->B19}}" type="text" name="B19" id=""></td>
                                    <td><input disabled value="{{$data->F19}}" type="text" name="F19" id=""></td>
                                    <td><input disabled value="{{$data->H19}}" type="text" name="H19" id=""></td>
                                    <td><input disabled value="{{$data->I19}}" type="text" name="I19" id=""></td>
                                    <td><input disabled value="{{$data->K19}}" type="text" name="K19" id=""></td>
                                </tr>
                                <tr>
                                    <td><input disabled value="{{$data->A20}}" type="text" name="A20" id=""></td>
                                    <td><input disabled value="{{$data->B20}}" type="text" name="B20" id=""></td>
                                    <td><input disabled value="{{$data->F20}}" type="text" name="F20" id=""></td>
                                    <td><input disabled value="{{$data->H20}}" type="text" name="H20" id=""></td>
                                    <td><input disabled value="{{$data->I20}}" type="text" name="I20" id=""></td>
                                    <td><input disabled value="{{$data->K20}}" type="text" name="K20" id=""></td>
                                </tr>
                                <tr>
                                    <td><input disabled value="{{$data->A21}}" type="text" name="A21" id=""></td>
                                    <td><input disabled value="{{$data->B21}}" type="text" name="B21" id=""></td>
                                    <td><input disabled value="{{$data->F21}}" type="text" name="F21" id=""></td>
                                    <td><input disabled value="{{$data->H21}}" type="text" name="H21" id=""></td>
                                    <td><input disabled value="{{$data->I21}}" type="text" name="I21" id=""></td>
                                    <td><input disabled value="{{$data->K21}}" type="text" name="K21" id=""></td>
                                </tr>
                                <tr>
                                    <td><input disabled value="{{$data->A22}}" type="text" name="A22" id=""></td>
                                    <td><input disabled value="{{$data->B22}}" type="text" name="B22" id=""></td>
                                    <td><input disabled value="{{$data->F22}}" type="text" name="F22" id=""></td>
                                    <td><input disabled value="{{$data->H22}}" type="text" name="H22" id=""></td>
                                    <td><input disabled value="{{$data->I22}}" type="text" name="I22" id=""></td>
                                    <td><input disabled value="{{$data->K22}}" type="text" name="K22" id=""></td>
                                </tr>
                                <tr>
                                    <td><input disabled value="{{$data->A23}}" type="text" name="A23" id=""></td>
                                    <td><input disabled value="{{$data->B23}}" type="text" name="B23" id=""></td>
                                    <td><input disabled value="{{$data->F23}}" type="text" name="F23" id=""></td>
                                    <td><input disabled value="{{$data->H23}}" type="text" name="H23" id=""></td>
                                    <td><input disabled value="{{$data->I23}}" type="text" name="I23" id=""></td>
                                    <td><input disabled value="{{$data->K23}}" type="text" name="K23" id=""></td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- ###### Table end ######## --}}
                    </div>
                    <div class="grid grid-cols-1 w-full my-5">
                        <textarea name="A14" id="" cols="30" rows="10" placeholder="Remarks" class="p-2"></textarea>
                    </div>
                    <div class="grid grid-cols-6 gap-2 w-full">
                        <input disabled value="" required name='A15' type="text" placeholder="Sampled by"
                            class="p-3 rounded-sm" />
                        <input disabled value="" required name='E15' type="date" placeholder="Date" class="p-3 rounded-sm" />
                        <input disabled value="" required name='F15' type="text" placeholder="Tested by"
                            class="p-3 rounded-sm" />
                        <input disabled value="" required name='K15' type="date" placeholder="Date" class="p-3 rounded-sm" />
                        <input disabled value="" required name='L15' type="text" placeholder="Checked by"
                            class="p-3 rounded-sm" />
                        <input disabled value="" required name='Q15' type="date" placeholder="Date" class="p-3 rounded-sm" />
                    </div>
                </div>
        </div>
    </div>
</body>
</body>

</html>

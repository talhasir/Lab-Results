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

    td input{
        width: 100%;
        padding: 0.2vw;
        text-align: center;
    }

    table thead th {
        background-color: #f2f2f2;
        text-align: center;
    }

    table tbody td {}

    ul li {
        text-align: center;
    }

    table td input {
        background: #ffffcc;
    }

    table #result {
        border: 1px solid gray;
        background: rgb(222, 221, 221);
        text-align: center;
        font-weight: bold
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
            content: attr();
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
                    <h1 class="lg:text-xl text-center md:text-base sm:text-sm font-bold">
                        UNIT WEIGHT OF AGGREGATE (ASTM-C29)
                    </h1>
                </div>
                <div class="flex flex-col">
                    <input value="" disabled required type="text" placeholder="Doc#">
                    <input value="" disabled required type="text" placeholder="Rev" />
                    <input value="" disabled required type="date" placeholder="Date" />
                    <input value="" disabled required type="text" placeholder="Page" />
                </div>
            </header>

            <body class="flex flex-col">
                <div>
                    {{-- ######// Header Start//####### --}}
                    <div class="w-full my-5">
                        <div class="grid grid-cols-5 gap-2 mb-2 w-full">
                            <input value="" disabled required name='A5' type="text"
                                placeholder="Contract No." class="p-2 rounded-sm" />
                            <input value="" disabled required name='D5' type="text"
                                placeholder="Contractor" class="p-2 rounded-sm" />
                            <input value="" disabled required name='I5' type="text" placeholder="Location"
                                class="p-2 rounded-sm" />
                            <input value="" disabled required name='Q5' type="text" placeholder="Lab No:"
                                class="p-2 rounded-sm" />
                            <input value="" disabled required name='Q5' type="text"
                                placeholder="Sample No" class="p-2 rounded-sm" />
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-2 w-full">
                            <input value="" disabled required name='A6' type="text"
                                placeholder="Discription" class="p-2 rounded-sm" />
                            <input value="" disabled required name='I6' type="text"
                                placeholder="Test Method" class="p-2 rounded-sm flex-2" />
                        </div>
                    </div>

                    {{-- ###### Table Start ######## --}}
                    <table>
                        <thead>
                            <tr>
                                <th rowspan="2" colspan="5">
                                    A- LOOSE WETGHT DETERMTNATTON
                                </th>
                                <th colspan="3">DETERMTNATTON</th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="4">
                                    (i) Wt. of measure filled with aggregate
                                </td>
                                <td>(g)</td>
                                <td><input value="{{ $data->H9 }}" disabled type="text" name="H9"
                                        id=""></td>
                                <td><input value="{{ $data->J9 }}" disabled type="text" name="J9"
                                        id=""></td>
                                <td><input value="{{ $data->L9 }}" disabled type="text" name="L9"
                                        id=""></td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    (ii) Wt. of measure
                                </td>
                                <td>(g)</td>
                                <td><input value="{{ $data->H10 }}" disabled type="text" name="H10"
                                        id=""></td>
                                <td><input value="{{ $data->J10 }}" disabled type="text" name="J10"
                                        id=""></td>
                                <td><input value="{{ $data->L10 }}" disabled type="text" name="L10"
                                        id=""></td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    (iii) Net Wt. of Aggregate
                                </td>
                                <td>(g)</td>
                                <td id="result">{{ $H11 }}</td>
                                <td id="result">{{ $J11 }}</td>
                                <td id="result">{{ $L11 }}</td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    (iv) Unit Wt. of Aggregate
                                </td>
                                <td>(g/cc)</td>
                                <td id="result">{{ $H12 }}</td>
                                <td id="result">{{ $J12 }}</td>
                                <td id="result">{{ $L12 }}</td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    Average
                                </td>
                                <td id="result" {{ $H13 }}colspan="3"></td>
                            </tr>
                            <tr>
                                <td colspan="8" class="font-bold">
                                    B- RODDED WETGHT DETERMTNATTON
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    (i) Wt. of measure filled with aggregate
                                </td>
                                <td>(g)</td>
                                <td><input value="{{ $data->H15 }}" disabled type="text" name="H15"
                                        id="">
                                </td>
                                <td><input value="{{ $data->J15 }}" disabled type="text" name="J15"
                                        id="">
                                </td>
                                <td><input value="{{ $data->L15 }}" disabled type="text" name="L15"
                                        id="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    (ii) Wt. of measure
                                </td>
                                <td>(g)</td>
                                <td><input value="{{ $data->H16 }}" disabled type="text" name="H16"
                                        id="">
                                </td>
                                <td><input value="{{ $data->J16 }}" disabled type="text" name="J16"
                                        id="">
                                </td>
                                <td><input value="{{ $data->L16 }}" disabled type="text" name="L16"
                                        id="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    (iii) Net Wt. of Aggregate
                                </td>
                                <td>(g)</td>
                                <td id="result">{{ $H17 }}</td>
                                <td id="result">{{ $J17 }}</td>
                                <td id="result">{{ $L17 }}</td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    (iv) Unit Wt. of Aggregate
                                </td>
                                <td>(g/cc)</td>
                                <td id="result">{{ $H18 }}</td>
                                <td id="result">{{ $J18 }}</td>
                                <td id="result">{{ $L18 }}</td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    Average
                                </td>
                                <td id="result"colspan="3"> {{ $H19 }}</td>
                            </tr>
                            <tr>
                                <td colspan="8" class="font-bold">
                                    C- VOLUME OF MEASURE
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    (i) Temperature of Water
                                </td>
                                <td>(OC)</td>
                                <td><input value="{{ $data->H21 }}" disabled type="text" name="H21"
                                        id="">
                                </td>
                                <td><input value="{{ $data->J21 }}" disabled type="text" name="J21"
                                        id="">
                                </td>
                                <td><input value="{{ $data->L21 }}" disabled type="text" name="L21"
                                        id="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    (ii) Wt. of Measure + Water
                                </td>
                                <td>(g)</td>
                                <td><input value="{{ $data->H22 }}" disabled type="text" name="H22"
                                        id="">
                                </td>
                                <td><input value="{{ $data->J22 }}" disabled type="text" name="J22"
                                        id="">
                                </td>
                                <td><input value="{{ $data->L22 }}" disabled type="text" name="L22"
                                        id="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    (iii) Wt. of Measure
                                </td>
                                <td>(g)</td>
                                <td><input value="{{ $data->H23 }}" disabled type="text" name="H23"
                                        id="">
                                </td>
                                <td><input value="{{ $data->J23 }}" disabled type="text" name="J23"
                                        id="">
                                </td>
                                <td><input value="{{ $data->L23 }}" disabled type="text" name="L23"
                                        id="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    (iv) Net Wt. of Water to fill Measure
                                </td>
                                <td>(g)</td>
                                <td><input value="{{ $data->H24 }}" disabled type="text" name="H24"
                                        id="">
                                </td>
                                <td><input value="{{ $data->J24 }}" disabled type="text" name="J24"
                                        id="">
                                </td>
                                <td><input value="{{ $data->L24 }}" disabled type="text" name="L24"
                                        id="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    (v) Volume of Measure
                                </td>
                                <td>(cc)</td>
                                <td><input value="{{ $data->H25 }}" disabled type="text" name="H25"
                                        id="">
                                </td>
                                <td><input value="{{ $data->J25 }}" disabled type="text" name="J25"
                                        id="">
                                </td>
                                <td><input value="{{ $data->L25 }}" disabled type="text" name="L25"
                                        id="">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    Average
                                </td>
                                <td colspan="3" id="result">{{ $H26 }}
                                </td>
                            </tr>


                            {{-- <tr>
                                <td>1.15</td>
                                <td>0.15</td>
                                <td><input value="" disabled type="text" name="D9" id=""></td>
                                <td><input value="" disabled type="text" name="G9" id=""></td>
                                <td><input value="" disabled type="text" name="I9" id=""></td>
                                <td id="result">{{$td>
                                <td id="result">{{$td>
                                <td id="result">{{$td>
                            </tr>
                            <tr>
                                <td>0.6</td>
                                <td>0.3</td>
                                <td><input value="" disabled type="text" name="D10" id=""></td>
                                <td><input value="" disabled type="text" name="G10" id=""></td>
                                <td><input value="" disabled type="text" name="I10" id=""></td>
                                <td id="result">{{$td>
                                <td id="result">{{$td>
                                <td id="result">{{$td>
                            </tr>
                            <tr>
                                <td>1.18</td>
                                <td>0.6</td>
                                <td><input value="" disabled type="text" name="D11" id=""></td>
                                <td><input value="" disabled type="text" name="G11" id=""></td>
                                <td><input value="" disabled type="text" name="I11" id=""></td>
                                <td id="result">{{$td>
                                <td id="result">{{$td>
                                <td id="result">{{$td>
                            </tr>
                            <tr>
                                <td>2.36</td>
                                <td>1.18</td>
                                <td><input value="" disabled type="text" name="D12" id=""></td>
                                <td><input value="" disabled type="text" name="G12" id=""></td>
                                <td><input value="" disabled type="text" name="I12" id=""></td>
                                <td id="result">{{$td>
                                <td id="result">{{$td>
                                <td id="result">{{$td>
                            </tr>
                            <tr>
                                <td>4.75</td>
                                <td>2.36</td>
                                <td><input value="" disabled type="text" name="D13" id=""></td>
                                <td><input value="" disabled type="text" name="G13" id=""></td>
                                <td><input value="" disabled type="text" name="I13" id=""></td>
                                <td id="result">{{$td>
                                <td id="result">{{$td>
                                <td id="result">{{$td>
                            </tr>
                            <tr>
                                <td>9.5</td>
                                <td>4.75</td>
                                <td><input value="" disabled type="text" name="D14" id=""></td>
                                <td><input value="" disabled type="text" name="G14" id=""></td>
                                <td><input value="" disabled type="text" name="I14" id=""></td>
                                <td id="result">{{$td>
                                <td id="result">{{$td>
                                <td id="result">{{$td>
                            </tr>
                            <tr>
                                <td class="font-bold">Total</td>
                                <td></td>
                                <td colspan="2" id="result">{{$td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td id="result">{{$td>
                            </tr>
                            <tr>
                                <td>9.5mm9.5mm</td>
                                <td>4.75mm4.75mm</td>
                                <td><input value="" disabled type="text" name="D16" id=""></td>
                                <td><input value="" disabled type="text" name="G16" id=""></td>
                                <td><input value="" disabled type="text" name="I16" id=""></td>
                                <td id="result">{{$td>
                                <td id="result">{{$td>
                                <td id="result">{{$td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>9.5</td>
                                <td><input value="" disabled type="text" name="D17" id=""></td>
                                <td><input value="" disabled type="text" name="G17" id=""></td>
                                <td><input value="" disabled type="text" name="I17" id=""></td>
                                <td id="result">{{$td>
                                <td id="result">{{$td>
                                <td id="result">{{$td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>19</td>
                                <td><input value="" disabled type="text" name="D18" id=""></td>
                                <td><input value="" disabled type="text" name="G18" id=""></td>
                                <td><input value="" disabled type="text" name="I18" id=""></td>
                                <td id="result">{{$td>
                                <td id="result">{{$td>
                                <td id="result">{{$td>
                            </tr>
                            <tr>
                                <td>63</td>
                                <td>38</td>
                                <td><input value="" disabled type="text" name="D19" id=""></td>
                                <td><input value="" disabled type="text" name="G19" id=""></td>
                                <td><input value="" disabled type="text" name="I19" id=""></td>
                                <td id="result">{{$td>
                                <td id="result">{{$td>
                                <td id="result">{{$td>
                            </tr>
                            <tr>
                                <td class="font-bold">Total</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="2" id="result">{{$td>
                            </tr>
                            <tr>
                                <td class="font-bold">Total Fine + Coarse:</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="2" id="result">{{$td>
                            </tr> --}}
                        </tbody>
                    </table>
                    {{-- ###### Table end ######## --}}

                    <div class="grid grid-cols-1 w-full my-5">
                        <textarea name="A14" id="" cols="30" rows="10" placeholder="Remarks" class="p-2"></textarea>
                    </div>
                    <div class="grid grid-cols-6 gap-2 w-full">
                        <input value="" disabled required name='A15' type="text"
                            placeholder="Sampled by" class="p-3 rounded-sm" />
                        <input value="" disabled required name='E15' type="date" placeholder="Date"
                            class="p-3 rounded-sm" />
                        <input value="" disabled required name='F15' type="text"
                            placeholder="Tested by" class="p-3 rounded-sm" />
                        <input value="" disabled required name='K15' type="date" placeholder="Date"
                            class="p-3 rounded-sm" />
                        <input value="" disabled required name='L15' type="text"
                            placeholder="Checked by" class="p-3 rounded-sm" />
                        <input value="" disabled required name='Q15' type="date" placeholder="Date"
                            class="p-3 rounded-sm" />
                    </div>
                </div>
            </body>
        </div>
    </div>
</body>
</body>

</html>

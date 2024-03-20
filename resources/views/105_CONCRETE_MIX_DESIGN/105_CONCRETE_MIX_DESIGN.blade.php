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
                    <input required type="text" placeholder="Doc#">
                    <input required type="text" placeholder="Rev" />
                    <input required type="date" placeholder="Date" />
                    <input required type="text" placeholder="Page" />
                </div>
            </header>

            <body class="flex flex-col">
                {{ Form::open(['route' => 'VIEW_105_CONCRETE_MIX_DESIGN', 'method' => 'POST', 'class' => '', 'id' => '']) }}
                <div>
                    {{-- ######// Header Start//####### --}}
                    <div class="w-full my-5">
                        <div class="grid grid-cols-4 gap-2 mb-2 w-full">
                            <input required name='A5' type="text" placeholder="Contract No."
                                class="p-2 rounded-sm" />
                            <input required name='D5' type="text" placeholder="Contract No. :"
                                class="p-2 rounded-sm" />
                            <input required name='I5' type="text" placeholder="Location"
                                class="p-2 rounded-sm" />
                            <input required name='Q5' type="text" placeholder="Lab No:"
                                class="p-2 rounded-sm" />
                        </div>
                        <div class="grid grid-cols-4 gap-2 mb-2 w-full">
                            <input required name='A5' type="text" placeholder="Cement:"
                                class="p-2 rounded-sm" />
                            <input required name='D5' type="text" placeholder="Cement Brand:"
                                class="p-2 rounded-sm" />
                            <input required name='I5' type="text" placeholder="Concrete Class:"
                                class="p-2 rounded-sm" />
                            <input required name='Q5' type="date" placeholder="Date:" class="p-2 rounded-sm" />
                        </div>
                        <div class="grid grid-cols-5 gap-2 mb-2 w-full">
                            <input required name='A6' type="text" placeholder="Admixture:"
                                class="p-2 rounded-sm" />
                            <input required name='A6' type="text" placeholder="Cement Specific Gravity:"
                                class="p-2 rounded-sm" />
                            <input required name='A6' type="text" placeholder="Admixture Specific Gravity:"
                                class="p-2 rounded-sm" />
                            <input required name='A6' type="text" placeholder="Water Cement Ratio"
                                class="p-2 rounded-sm" />
                            <input required name='I6' type="text" placeholder="Water Specific Gravity:"
                                class="p-2 rounded-sm flex-2" />
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
                                <td><input type="number" name="C11" id=""></td>
                                <td><input type="number" name="D11" id=""></td>
                                <td><input type="number" name="F11" id=""></td>
                                <td><input type="number" name="H11" id=""></td>
                                <td><input type="number" name="I11" id=""></td>
                                <td>Blending %</td>
                                <td colspan="2"><input type="number" name="L11" id=""></td>
                                <td><input type="number" name="N11" id=""></td>
                            </tr>
                            <tr>
                                <td>Blending %</td>
                                <td><input type="number" name="C12" id=""></td>
                                <td><input type="number" name="D12" id=""></td>
                                <td><input type="number" name="F12" id=""></td>
                                <td><input type="number" name="H12" id=""></td>
                                <td><input type="number" name="I12" id=""></td>
                                <td>Water</td>
                                <td colspan="3"><input type="number" name="L12" id=""></td>
                            </tr>
                            <tr>
                                <td>Sp. Gr. (S.S.D)</td>
                                <td><input type="number" name="C13" id=""></td>
                                <td><input type="number" name="D13" id=""></td>
                                <td><input type="number" name="F13" id=""></td>
                                <td><input type="number" name="H13" id=""></td>
                                <td><input type="number" name="I13" id=""></td>
                                <td>NMSA</td>
                                <td colspan="3"><input type="number" name="L13" id=""></td>
                            </tr>
                            <tr>
                                <td>Absorption %</td>
                                <td><input type="number" name="C14" id=""></td>
                                <td><input type="number" name="D14" id=""></td>
                                <td><input type="number" name="F14" id=""></td>
                                <td><input type="number" name="H14" id=""></td>
                                <td><input type="number" name="I14" id=""></td>
                                <td>Admixture%</td>
                                <td colspan="3"><input type="number" name="L14" id=""></td>
                            </tr>
                            <tr>
                                <td>Moisture Content %</td>
                                <td><input type="number" name="C15" id=""></td>
                                <td><input type="number" name="D15" id=""></td>
                                <td><input type="number" name="F15" id=""></td>
                                <td><input type="number" name="H15" id=""></td>
                                <td><input type="number" name="I15" id=""></td>
                                <td>Slump</td>
                                <td colspan="3"><input type="number" name="L15" id=""></td>
                            </tr>
                            <tr>
                                <td>Unit Weight of Aggregate (Kg/m3)</td>
                                <td><input type="number" name="C15" id=""></td>
                                <td><input type="number" name="D15" id=""></td>
                                <td><input type="number" name="F15" id=""></td>
                                <td id="result"></td>
                                <td><input type="number" name="I15" id=""></td>
                                <td>Strength "PSI"</td>
                                <td><input type="number" name="L15" id=""></td>
                                <td>Target</td>
                                <td id="result"></td>
                            </tr>
                            <tr>
                                <td>Finess Modulus</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><input type="number" name="I17" id=""></td>
                                <td>Entrapped Air</td>
                                <td colspan="3"><input type="number" name="I17" id=""></td>
                            </tr>
                            <tr>
                                <td colspan="2">Cement</td>
                                <td colspan="3" id="result"></td>
                                <td>Tot. vol. of C. Agg.</td>
                                <td><input type="number" name="K18" id=""></td>
                                <td colspan="3" id="result">Tot. vol. of C. Agg.</td>
                            </tr>

                            <tr>
                                <td colspan="2">Fly Ash</td>
                                <td colspan="3"><input type="number" name="E19" id=""></td>
                                <td>Tot. vol. of F. Agg.</td>
                                <td><input type="number" name="K19" id=""></td>
                                <td colspan="3" id="result">Tot. vol. of C. Agg.</td>
                            </tr>

                            <tr>
                                <td colspan="2">Water </td>
                                <td colspan="3" id="result"></td>
                                <td rowspan="2" colspan="3"><input type="number" name="I20"
                                        id="" placeholder="Volume of Fine Aggregate"></td>
                                <td rowspan="2" colspan="2" id="result"></td>
                            </tr>
                            <tr>
                                <td colspan="2">Admixture </td>
                                <td colspan="3" id="result"></td>
                            </tr>

                            <tr>
                                <td colspan="2">Entrapped Air </td>
                                <td colspan="3" id="result"></td>
                                <td rowspan="2" colspan="3"><input type="number" name="I20"
                                        id="" placeholder="Volume of Coarse Agg.- 19 mm"></td>
                                <td rowspan="2" colspan="2" id="result"></td>
                            </tr>
                            <tr>
                                <td colspan="2">Total Paste </td>
                                <td colspan="3" id="result"></td>
                            </tr>
                            <tr>
                                <td colspan="2">Total Volume of Aggregates </td>
                                <td colspan="3" id="result"></td>
                                <td rowspan="2" colspan="3"><input type="number" name="I20"
                                        id="" placeholder="Volume of Coarse Agg.- 10 mm"></td>
                                <td rowspan="2" colspan="2" id="result"></td>
                            </tr>
                            <tr>
                                <td colspan="2">Unit Weight of Blended Agg. (Kg/m3)</td>
                                <td colspan="3" id="result"></td>
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
                                <th>0.125</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-[20%]">Cement (Kg)</td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td colspan="2" id="result"></td>
                            </tr>
                            <tr>
                                <td>Water (Kg)</td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td colspan="2" id="result"></td>
                            </tr>
                            <tr>
                                <td>Admixture (Kg)</td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td colspan="2" id="result"></td>
                            </tr>
                            <tr>
                                <td>Fine Aggregate (Kg)</td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td colspan="2" id="result"></td>
                            </tr>
                            <tr>
                                <td>Coarse Aggregate 1 (Kg)</td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td colspan="2" id="result"></td>
                            </tr>
                            <tr>
                                <td>Coarse Aggregate 2 (Kg)</td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td colspan="2" id="result"></td>
                            </tr>
                            <tr>
                                <td>Combined Coarse Aggregate (Kg)</td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td colspan="2" id="result"></td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td colspan="2" id="result"></td>
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
                                <th><input type="number" name="K36" id=""></th>
                                <th><input type="number" name="L36" id=""></th>
                                <th><input type="number" name="N36" id=""></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2">Crushing Date</td>
                                <td colspan="2"><input type="number" name="E37" id=""></td>
                                <td colspan="3"><input type="number" name="k37" id=""></td>
                            </tr>
                            <tr>
                                <td colspan="2">Age (Days)</td>
                                <td colspan="2">7 DAYS</td>
                                <td colspan="3">28 DAYS</td>
                            </tr>
                            <tr>
                                <td>Load (KN)</td>
                                <td><input type="number" name="E36" id=""></td>
                                <td><input type="number" name="H36" id=""></td>
                                <td><input type="number" name="J36" id=""></td>
                                <td><input type="number" name="K36" id=""></td>
                                <td><input type="number" name="L36" id=""></td>
                                <td><input type="number" name="N36" id=""></td>
                            </tr>
                            <tr>
                                <td>Comp. strength (PSI)</td>
                                <td><input type="number" name="E37" id=""></td>
                                <td><input type="number" name="H37" id=""></td>
                                <td><input type="number" name="J37" id=""></td>
                                <td><input type="number" name="K37" id=""></td>
                                <td><input type="number" name="L37" id=""></td>
                                <td><input type="number" name="N37" id=""></td>
                            </tr>
                            <tr>
                                <td>Avg. comp. strength (PSI)</td>
                                <td id="result" colspan="3"></td>
                                <td id="result" colspan="3"></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="grid grid-cols-6 gap-2 w-full">
                        <input required name='A15' type="text" placeholder="Sampled by"
                            class="p-3 rounded-sm" />
                        <input required name='E15' type="date" placeholder="Date" class="p-3 rounded-sm" />
                        <input required name='F15' type="text" placeholder="Tested by"
                            class="p-3 rounded-sm" />
                        <input required name='K15' type="date" placeholder="Date" class="p-3 rounded-sm" />
                        <input required name='L15' type="text" placeholder="Checked by"
                            class="p-3 rounded-sm" />
                        <input required name='Q15' type="date" placeholder="Date" class="p-3 rounded-sm" />
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

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

    td input,
    td span {
        width: 100%;
        padding: 0.2vw;
        text-align: center
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
                    <h1 class="lg:text-xl text-center md:text-base sm:text-sm font-bold">SOUNDNESS OF AGGREGATE BY USE
                        OF SODIUM
                        SULPHATE (ASTM C-88)SOUNDNESS OF AGGREGATE BY USE OF SODIUM SULPHATE (ASTM C-88)</h1>
                </div>
                <div class="flex flex-col">
                    <input  type="text" placeholder="Doc#">
                    <input  type="text" placeholder="Rev" />
                    <input  type="date" placeholder="Date" />
                    <input  type="text" placeholder="Page" />
                </div>
            </header>

            <body class="flex flex-col">
                {{ Form::open(['route' => 'view_51_soundness_of_aggregate_by_use_of_sodium_sulphate', 'method' => 'POST', 'class' => '', 'id' => '']) }}
                <div>
                    {{-- ######// Header Start//####### --}}
                    <div class="w-full my-5">
                        <div class="grid grid-cols-4 gap-2 mb-2 w-full">
                            <input  name='A5' type="text" placeholder="Contract No."
                                class="p-2 rounded-sm" />
                            <input  name='D5' type="text" placeholder="Contract No. :"
                                class="p-2 rounded-sm" />
                            <input  name='I5' type="text" placeholder="Location"
                                class="p-2 rounded-sm" />
                            <input  name='Q5' type="text" placeholder="Lab No:"
                                class="p-2 rounded-sm" />
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-2 w-full">
                            <input  name='A6' type="text" placeholder="Sample Number.:"
                                class="p-2 rounded-sm" />
                            <input  name='I6' type="text" placeholder="Discription"
                                class="p-2 rounded-sm flex-2" />
                        </div>
                    </div>

                    {{-- ###### Table Start ######## --}}
                    <table>
                        <thead>
                            <tr>
                                <th class="items-center">Sieve Passing (mm)</th>
                                <th>Size Retained
                                    (mm)</th>
                                <th>Grading Original Sample Retained (%)</th>
                                <th>Weight Test Fraction Before Test (g)</th>
                                <th>
                                    Weight Test Fraction After Test (g)</th>
                                <th>Loss Weight After Test (g)</th>
                                <th>
                                    Loss After Test (g)</th>
                                <th>
                                    Weighted Average (%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>0.15</td>
                                <td>--</td>
                                <td><input  type="number" name="DB" id=""></td>
                                <td><input  type="number" name="G8" id=""></td>
                                <td><input  type="number" name="I8" id=""></td>
                                <td><input  type="number" name="J8" id=""></td>
                                <td><input  type="number" name="L8" id=""></td>
                                <td><input  type="number" name="N8" id=""></td>
                            </tr>
                            <tr>
                                <td>1.15</td>
                                <td>0.15</td>
                                <td><input  type="number" name="D9" id=""></td>
                                <td><input  type="number" name="G9" id=""></td>
                                <td><input  type="number" name="I9" id=""></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                            </tr>
                            <tr>
                                <td>0.6</td>
                                <td>0.3</td>
                                <td><input  type="number" name="D10" id=""></td>
                                <td><input  type="number" name="G10" id=""></td>
                                <td><input  type="number" name="I10" id=""></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                            </tr>
                            <tr>
                                <td>1.18</td>
                                <td>0.6</td>
                                <td><input  type="number" name="D11" id=""></td>
                                <td><input  type="number" name="G11" id=""></td>
                                <td><input  type="number" name="I11" id=""></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                            </tr>
                            <tr>
                                <td>2.36</td>
                                <td>1.18</td>
                                <td><input  type="number" name="D12" id=""></td>
                                <td><input  type="number" name="G12" id=""></td>
                                <td><input  type="number" name="I12" id=""></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                            </tr>
                            <tr>
                                <td>4.75</td>
                                <td>2.36</td>
                                <td><input  type="number" name="D13" id=""></td>
                                <td><input  type="number" name="G13" id=""></td>
                                <td><input  type="number" name="I13" id=""></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                            </tr>
                            <tr>
                                <td>9.5</td>
                                <td>4.75</td>
                                <td><input  type="number" name="D14" id=""></td>
                                <td><input  type="number" name="G14" id=""></td>
                                <td><input  type="number" name="I14" id=""></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                            </tr>
                            <tr>
                                <td class="font-bold">Total</td>
                                <td></td>
                                <td colspan="2" id="result"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td id="result"></td>
                            </tr>
                            <tr>
                                <td>9.5mm9.5mm</td>
                                <td>4.75mm4.75mm</td>
                                <td><input  type="number" name="D16" id=""></td>
                                <td><input  type="number" name="G16" id=""></td>
                                <td><input  type="number" name="I16" id=""></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>9.5</td>
                                <td><input  type="number" name="D17" id=""></td>
                                <td><input  type="number" name="G17" id=""></td>
                                <td><input  type="number" name="I17" id=""></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>19</td>
                                <td><input  type="number" name="D18" id=""></td>
                                <td><input  type="number" name="G18" id=""></td>
                                <td><input  type="number" name="I18" id=""></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                            </tr>
                            <tr>
                                <td>63</td>
                                <td>38</td>
                                <td><input  type="number" name="D19" id=""></td>
                                <td><input  type="number" name="G19" id=""></td>
                                <td><input  type="number" name="I19" id=""></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                            </tr>
                            <tr>
                                <td class="font-bold">Total</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="2" id="result"></td>
                            </tr>
                            <tr>
                                <td class="font-bold">Total Fine + Coarse:</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="2" id="result"></td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- ###### Table end ######## --}}

                    <div>
                        <div class="grid grid-cols-1 w-full">
                            <span class="text-center p-2">NOTE: Weight for test individual size -</span>
                        </div>
                        <div class="grid grid-cols-4 w-full">
                            <span>
                                <ul style="list-style: none">
                                    <li>63 mm --- 50 mm</li>
                                    <li>50 mm --- 38 mm</li>
                                    <li>38 mm --- 25 mm</li>
                                    <li>25mm --- 19.0mm</li>
                                </ul>
                            </span>
                            <span>
                                <ul style="list-style: none">
                                    <li>2825 gm</li>
                                    <li>1958 gm</li>
                                    <li>1012 gm</li>
                                    <li>513 gm</li>
                                </ul>
                            </span>
                            <span>
                                <ul style="list-style: none">
                                    <li>19.0 mm –- 12.5 mm</li>
                                    <li>12.5 mm --- 9.5 mm</li>
                                    <li>9.5 mm --- 4.75 mm</li>
                                </ul>
                            </span>
                            <span>
                                <ul style="list-style: none">
                                    <li>675 gm</li>
                                    <li>33 gm</li>
                                    <li>298 gm</li>
                                </ul>
                            </span>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 w-full my-5">
                        <textarea name="A14" id="" cols="30" rows="10" placeholder="Remarks" class="p-2"></textarea>
                    </div>
                    <div class="grid grid-cols-6 gap-2 w-full">
                        <input  name='A15' type="text" placeholder="Sampled by"
                            class="p-3 rounded-sm" />
                        <input  name='E15' type="date" placeholder="Date" class="p-3 rounded-sm" />
                        <input  name='F15' type="text" placeholder="Tested by"
                            class="p-3 rounded-sm" />
                        <input  name='K15' type="date" placeholder="Date" class="p-3 rounded-sm" />
                        <input  name='L15' type="text" placeholder="Checked by"
                            class="p-3 rounded-sm" />
                        <input  name='Q15' type="date" placeholder="Date" class="p-3 rounded-sm" />
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

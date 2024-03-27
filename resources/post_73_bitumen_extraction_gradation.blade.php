<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/app.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
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
            text-align: center
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
                    <h1 class="lg:text-xl text-center md:text-base sm:text-sm font-bold">BITUMEN EXTRACTION/GRADATION
                        (ASTM D-2172)</h1>
                </div>
                <div class="flex flex-col">
                    <input required type="text" placeholder="Doc#">
                    <input required type="text" placeholder="Rev" />
                    <input required type="date" placeholder="Date" />
                    <input required type="text" placeholder="Page" />
                </div>
            </header>

            <body class="flex flex-col">
                {{ Form::open(['route' => 'VIEW_73_BITUMEN_EXTRACTION_GRADATION', 'method' => 'POST', 'class' => '', 'id' => '']) }}
                <div>

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
                                <input required name='A6' type="text" placeholder="Sample Number.:"
                                    class="p-2 rounded-sm" />
                                <input required name='I6' type="text" placeholder="Sampled by:"
                                    class="p-2 rounded-sm flex-2" />
                                <input required name='I6' type="text" placeholder="Material Source:"
                                    class="p-2 rounded-sm flex-2" />
                                <input required name='I6' type="text" placeholder="Tested by:"
                                    class="p-2 rounded-sm flex-2" />
                            </div>
                        </div>

                        {{-- ###### Table Start ######## --}}
                        <table>
                            <thead>
                                <tr>
                                    <th>Test No.</th>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>ASTM Sieve</th>
                                    <th>Retained gm</th>
                                    <th>Retained %</th>
                                    <th>Passing %</th>
                                    <th colspan="2">Specs</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Weight Of Mix</td>
                                    <td><input type="number" name="C10" id=""></td>
                                    <td><input type="number" name="E10" id=""></td>
                                    <td><input type="number" name="G10" id=""></td>
                                    <td>1 ½”</td>
                                    <td><input type="number" name="J10" id=""></td>
                                    <td><input type="number" name="L10" id=""></td>
                                    <td><input type="number" name="N10" id=""></td>
                                    <td colspan="2"><input type="number" name="P10" id=""></td>
                                </tr>
                                <tr>
                                    <td>Weight Of Filter Before Test</td>
                                    <td><input type="number" name="C11" id=""></td>
                                    <td><input type="number" name="E11" id=""></td>
                                    <td><input type="number" name="G11" id=""></td>
                                    <td>1”</td>
                                    <td><input type="number" name="J11" id=""></td>
                                    <td><input type="number" name="L11" id=""></td>
                                    <td><input type="number" name="N11" id=""></td>
                                    <td><input type="number" name="P11" id=""></td>
                                    <td><input type="number" name="Q11" id=""></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Weight Of Filter Before Test</td>
                                    <td rowspan="2"><input type="number" name="C12" id=""></td>
                                    <td rowspan="2"><input type="number" name="E12" id=""></td>
                                    <td rowspan="2"><input type="number" name="G12" id=""></td>
                                    <td>¾”</td>
                                    <td><input type="number" name="J12" id=""></td>
                                    <td id="result"></td>
                                    <td id="result"></td>
                                    <td><input type="number" name="P12" id=""></td>
                                    <td><input type="number" name="Q12" id=""></td>
                                </tr>
                                <tr>
                                    <td>½”</td>
                                    <td><input type="number" name="J13" id=""></td>
                                    <td id="result"></td>
                                    <td id="result"></td>
                                    <td><input type="number" name="P13" id=""></td>
                                    <td><input type="number" name="Q13" id=""></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Weight Of Agg. after Test</td>
                                    <td rowspan="2"><input type="number" name="C14" id=""></td>
                                    <td rowspan="2"><input type="number" name="E14" id=""></td>
                                    <td rowspan="2"><input type="number" name="G14" id=""></td>
                                    <td>⅜”</td>
                                    <td><input type="number" name="J14" id=""></td>
                                    <td id="result"></td>
                                    <td id="result"></td>
                                    <td><input type="number" name="P14" id=""></td>
                                    <td><input type="number" name="Q14" id=""></td>
                                </tr>
                                <tr>
                                    <td>#4</td>
                                    <td><input type="number" name="J15" id=""></td>
                                    <td id="result"></td>
                                    <td id="result"></td>
                                    <td><input type="number" name="P15" id=""></td>
                                    <td><input type="number" name="Q15" id=""></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Total Weight Of Aggregate</td>
                                    <td rowspan="2" id="result"></td>
                                    <td rowspan="2" id="result"></td>
                                    <td rowspan="2" id="result"></td>
                                    <td>#8</td>
                                    <td><input type="number" name="J16" id=""></td>
                                    <td id="result"></td>
                                    <td id="result"></td>
                                    <td><input type="number" name="P16" id=""></td>
                                    <td><input type="number" name="Q16" id=""></td>
                                </tr>
                                <tr>
                                    <td>#20</td>
                                    <td><input type="number" name="J17" id=""></td>
                                    <td><input type="number" name="L17" id=""></td>
                                    <td><input type="number" name="N17" id=""></td>
                                    <td colspan="2"><input type="number" name="P17" id=""></td>
                                </tr>
                                <tr>
                                    <td>Loss of Weight</td>
                                    <td id="result"></td>
                                    <td id="result"></td>
                                    <td id="result"></td>
                                    <td>#40</td>
                                    <td><input type="number" name="J18" id=""></td>
                                    <td><input type="number" name="L18" id=""></td>
                                    <td><input type="number" name="N18" id=""></td>
                                    <td colspan="2"><input type="number" name="P18" id=""></td>
                                </tr>
                                <tr>
                                    <td>Bitumen By Weight of Mix</td>
                                    <td id="result"></td>
                                    <td id="result"></td>
                                    <td id="result"></td>
                                    <td>#50</td>
                                    <td><input type="number" name="J19" id=""></td>
                                    <td id="result"></td>
                                    <td id="result"></td>
                                    <td><input type="number" name="P19" id=""></td>
                                    <td><input type="number" name="Q19" id=""></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Avg. Bit. By Wt. of Agg.</td>
                                    <td rowspan="2" colspan="3" id="result"></td>
                                    <td>#200</td>
                                    <td><input type="number" name="J20" id=""></td>
                                    <td id="result"></td>
                                    <td id="result"></td>
                                    <td><input type="number" name="P20" id=""></td>
                                    <td><input type="number" name="Q20" id=""></td>
                                </tr>
                                <tr>
                                    <td>Pan</td>
                                    <td><input type="number" name="J21" id=""></td>
                                    <td><input type="number" name="L21" id=""></td>
                                    <td><input type="number" name="N21" id=""></td>
                                    <td><input type="number" name="P21" id=""></td>
                                    <td><input type="number" name="Q21" id=""></td>
                                </tr>
                                <tr>
                                    <td rowspan="2">Avg. Bit. By Wt. of Mix</td>
                                    <td colspan="3"><input type="number" name="C22" id=""></td>
                                    <td>Total (gm)</td>
                                    <td><input type="number" name="J22" id=""></td>
                                    <td><input type="number" name="L22" id=""></td>
                                    <td><input type="number" name="N22" id=""></td>
                                    <td><input type="number" name="P22" id=""></td>
                                    <td><input type="number" name="Q22" id=""></td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- ###### Table end ######## --}}

                        {{-- ###### Graph Start ######## --}}
                        <div class="w-full">
                            <canvas id="labChart" class="w-full" style="max-height: 30rem"></canvas>
                            <script>
                                const xValues = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];

                                new Chart("labChart", {
                                    type: "line",
                                    data: {
                                        labels: xValues,
                                        datasets: [{
                                            data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                                            borderColor: "red",
                                            fill: false
                                        }, {
                                            data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
                                            borderColor: "green",
                                            fill: false
                                        }, {
                                            data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
                                            borderColor: "blue",
                                            fill: false
                                        }]
                                    },
                                    options: {
                                        legend: {
                                            display: false
                                        }
                                    }
                                });
                            </script>
                        </div>
                        {{-- ###### Graph end ######## --}}
                    </div>
                    <div class="grid grid-cols-1 w-full my-5">
                        <textarea name="A14" id="" cols="30" rows="10" placeholder="Remarks" class="p-2"></textarea>
                    </div>
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

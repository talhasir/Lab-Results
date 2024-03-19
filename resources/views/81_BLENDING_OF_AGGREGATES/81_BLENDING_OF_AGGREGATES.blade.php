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
        font-weight: bold;
    }
    table input, table, span, td{
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
                {{ Form::open(['route' => 'VIEW_81_BLENDING_OF_AGGREGATES', 'method' => 'POST', 'class' => '', 'id' => '']) }}
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
                        <div class="grid grid-cols-3 gap-2 mb-2 w-full">
                            <input required name='A6' type="text" placeholder="Sample Number.:"
                                class="p-2 rounded-sm" />
                            <input required name='A6' type="text" placeholder="Source" class="p-2 rounded-sm" />
                            <input required name='I6' type="text" placeholder="Discription"
                                class="p-2 rounded-sm flex-2" />
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
                                <td><input type="number" name="F11" id=""></td>
                                <td><input type="number" name="G11" id=""></td>
                                <td><input type="number" name="I11" id=""></td>
                                <td><input type="number" name="J11" id=""></td>
                                <td><input type="number" name="K11" id=""></td>
                                <td><input type="number" name="M11" id=""></td>
                                <td><input type="number" name="N11" id=""></td>
                                <td><input type="number" name="O11" id=""></td>
                                <td><input type="number" name="Q11" id=""></td>
                                <td><input type="number" name="R11" id=""></td>
                                <td><input type="number" name="S11" id=""></td>
                                <td><input type="number" name="T11" id=""></td>
                                <td><input type="number" name="U11" id=""></td>
                                <td><input type="number" name="V11" id=""></td>
                                <td><input type="number" name="W11" id=""></td>
                                <td><input type="number" name="X11" id=""></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td colspan="2" id="sizeOfAggCol">Size of Aggregate 2</td>
                                <td>%</td>
                                <td><input type="number" name="F12" id=""></td>
                                <td><input type="number" name="G12" id=""></td>
                                <td><input type="number" name="I12" id=""></td>
                                <td><input type="number" name="J12" id=""></td>
                                <td><input type="number" name="K12" id=""></td>
                                <td><input type="number" name="M12" id=""></td>
                                <td><input type="number" name="N12" id=""></td>
                                <td><input type="number" name="O12" id=""></td>
                                <td><input type="number" name="Q12" id=""></td>
                                <td><input type="number" name="R12" id=""></td>
                                <td><input type="number" name="S12" id=""></td>
                                <td><input type="number" name="T12" id=""></td>
                                <td><input type="number" name="U12" id=""></td>
                                <td><input type="number" name="V12" id=""></td>
                                <td><input type="number" name="W12" id=""></td>
                                <td><input type="number" name="X12" id=""></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td colspan="2" id="sizeOfAggCol">Size of Aggregate 3</td>
                                <td>%</td>
                                <td><input type="number" name="F13" id=""></td>
                                <td><input type="number" name="G13" id=""></td>
                                <td><input type="number" name="I13" id=""></td>
                                <td><input type="number" name="J13" id=""></td>
                                <td><input type="number" name="K13" id=""></td>
                                <td><input type="number" name="M13" id=""></td>
                                <td><input type="number" name="N13" id=""></td>
                                <td><input type="number" name="O13" id=""></td>
                                <td><input type="number" name="Q13" id=""></td>
                                <td><input type="number" name="R13" id=""></td>
                                <td><input type="number" name="S13" id=""></td>
                                <td><input type="number" name="T13" id=""></td>
                                <td><input type="number" name="U13" id=""></td>
                                <td><input type="number" name="V13" id=""></td>
                                <td><input type="number" name="W13" id=""></td>
                                <td><input type="number" name="X13" id=""></td>
                            </tr>
                            <tr>
                                <td colspan="2">Combined Gradation</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td colspan="2" id="sizeOfAggCol">Size of Aggregate 1</td>
                                <td>%</td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td colspan="2" id="sizeOfAggCol">Size of Aggregate 2</td>
                                <td>%</td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td colspan="2" id="sizeOfAggCol">Size of Aggregate 3</td>
                                <td>%</td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                            </tr>
                            <tr>
                                <td rowspan="3" colspan="3">Specification</td>
                                <td>100%</td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                            </tr>
                            <tr>
                                <td>Mid Point</td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                                <td id="result"></td>
                            </tr>
                            <tr>
                                <td>Limits</td>
                                <td><input type="number" name="F20" id=""></td>
                                <td><input type="number" name="G20" id=""></td>
                                <td><input type="number" name="I20" id=""></td>
                                <td id="result">100</td>
                                <td id="result">75~90</td>
                                <td id="result">'60~80</td>
                                <td id="result">40~60</td>
                                <td id="result">20~40</td>
                                <td><input type="number" name="Q20" id=""></td>
                                <td><input type="number" name="R20" id=""></td>
                                <td><input type="number" name="S20" id=""></td>
                                <td><input type="number" name="T20" id=""></td>
                                <td id="result">5~15</td>
                                <td><input type="number" name="V20" id=""></td>
                                <td><input type="number" name="W20" id=""></td>
                                <td id="result">3~8</td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- ###### Table end ######## --}}
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

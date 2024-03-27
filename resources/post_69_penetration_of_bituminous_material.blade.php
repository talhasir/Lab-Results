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
                    <h1 class="lg:text-xl text-center md:text-base sm:text-sm font-bold">
                        PENETRATION OF BITUMINOUS MATERIAL (ASTM-DS)
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
                {{ Form::open(['route' => 'VIEW_69_PENETRATION_OF_BITUMINOUS_MATERIAL', 'method' => 'POST', 'class' => '', 'id' => '']) }}
                <div>
                    {{-- ######// Header Start//####### --}}
                    <div class="w-full my-5">
                        <div class="grid grid-cols-4 gap-2 mb-2 w-full">
                            <input required name='A5' type="text" placeholder="Contract No."
                                class="p-2 rounded-sm" />
                            <input required name='D5' type="text" placeholder="Contractor"
                                class="p-2 rounded-sm" />
                            <input required name='I5' type="text" placeholder="Location"
                                class="p-2 rounded-sm" />
                            <input required name='Q5' type="text" placeholder="Lab No:"
                                class="p-2 rounded-sm" />
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-2 w-full">
                            <input required name='A6' type="text" placeholder="Sample No."
                                class="p-2 rounded-sm" />
                            <input required name='I6' type="text" placeholder="Source"
                                class="p-2 rounded-sm flex-2" />
                        </div>
                    </div>

                    {{-- ###### Table Start ######## --}}
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Penetration Value</th>
                                <th>Average</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="3" class="px-3">
                                    Asphaltic Cement Penetration ( )
                                </td>
                                <td class="">
                                    <input type="text" name="C8" id="">
                                </td>
                                <td rowspan="3">
                                    <input type="text" name="E8" id="">
                                </td>
                                <td rowspan="3">
                                    <input type="text" name="H8" id="">
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <input type="text" name="C9" id="">
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <input type="text" name="C10" id="">
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="3" class="px-3">
                                    Cut-Back Asphalt Prime Coat Penetration ( )
                                </td>
                                <td class="">
                                    <input type="text" name="C11" id="">
                                </td>
                                <td rowspan="3">
                                    <input type="text" name="E11" id="">
                                </td>
                                <td rowspan="3">
                                    <input type="text" name="H11" id="">
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <input type="text" name="C12" id="">
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <input type="text" name="C12" id="">
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="3" class="px-3">
                                    Cut-Back Asphalt Tack Coat Penetration ( )
                                </td>
                                <td class="">
                                    <input type="text" name="C14" id="">
                                </td>
                                <td rowspan="3">
                                    <input type="text" name="E14" id="">
                                </td>
                                <td rowspan="3">
                                    <input type="text" name="H14" id="">
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <input type="text" name="C15" id="">
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <input type="text" name="C15" id="">
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <p class="text-center">Smaple No.</p>
                                </td>
                                <td class="">
                                    <input type="text" name="B17" id="">
                                </td>
                                <td class="">
                                    <p class="text-center">Lab No.</p>
                                </td>
                                <td class="">
                                    <input type="text" name="F17" id="">
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    {{-- ###### Table end ######## --}}

                    {{-- ###### Table Start ######## --}}
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Penetration Value</th>
                                <th>Average</th>
                                <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="3" class="px-3">
                                    Asphaltic Cement Penetration ( )
                                </td>
                                <td class="">
                                    <input type="text" name="C19" id="">
                                </td>
                                <td rowspan="3">
                                    <input type="text" name="E19" id="">
                                </td>
                                <td rowspan="3">
                                    <input type="text" name="H19" id="">
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <input type="text" name="C20" id="">
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <input type="text" name="C21" id="">
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="3" class="px-3">
                                    Cut-Back Asphalt Prime Coat Penetration ( )
                                </td>
                                <td class="">
                                    <input type="text" name="C22" id="">
                                </td>
                                <td rowspan="3">
                                    <input type="text" name="E22" id="">
                                </td>
                                <td rowspan="3">
                                    <input type="text" name="H22" id="">
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <input type="text" name="C23" id="">
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <input type="text" name="C24" id="">
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="3" class="px-3">
                                    Cut-Back Asphalt Tack Coat Penetration ( )
                                </td>
                                <td class="">
                                    <input type="text" name="C25" id="">
                                </td>
                                <td rowspan="3">
                                    <input type="text" name="E25" id="">
                                </td>
                                <td rowspan="3">
                                    <input type="text" name="H25" id="">
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <input type="text" name="C26" id="">
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <input type="text" name="C27" id="">
                                </td>
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

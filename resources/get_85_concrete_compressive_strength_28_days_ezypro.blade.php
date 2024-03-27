<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta  value="viewport" name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="/app.css" rel="stylesheet">
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
                <div class="col-span-2 flex justify-center items-center ">
                    <h1 class="text-[1.5rem] font-bold text-center">CONTRETE COMPRESSIVE STRENGTH (ASTM C39)</h1>
                </div>
                <div class="flex flex-col">
                    <input required type="text" placeholder="Doc#">
                    <input required type="text" placeholder="Rev">
                    <input required type="date" placeholder="Date">
                    <input required type="text" placeholder="Page">
                </div>
            </header>

            <body class="flex flex-col" >
                <div class="w-full my-5">
                    <div class="grid grid-cols-4 gap-2 mb-2 w-full">
                        <input required type="text" placeholder="BQQ No:" class="p-2 rounded-sm" />
                        <input required type="text" placeholder="Contractor:" class="p-2 rounded-sm" />
                        <input required type="text" placeholder="Project:" class="p-2 rounded-sm" />
                        <input required type="text" placeholder="Lab No:" class="p-2 rounded-sm" />
                    </div>
                    <div class="grid grid-cols-1 gap-2 mb-2 w-full">
                        <input required type="text" placeholder="Concrete Plant Location:" class="p-2 rounded-sm" />
                    </div>
                    <div class="grid grid-cols-3 gap-2 mb-2 w-full">
                        <input required type="text" placeholder="Concrete Class" class="p-2 rounded-sm" />
                        <input required type="date" placeholder="Date Moulded" class="p-2 rounded-sm" />
                        <input required type="text" placeholder="Check Request No" class="p-2 rounded-sm" />
                    </div>
                    <div class="grid grid-cols-3 gap-2 mb-2 w-full">
                        <input required type="text" placeholder="Phase" class="p-2 rounded-sm" />
                        <input required type="text" placeholder="Street" class="p-2 rounded-sm" />
                        <input required type="text" placeholder="Road" class="p-2 rounded-sm flex-2" />
                    </div>
                </div>
                {{ Form::open(['route' => 'VIEW_85_CONCRETE_COMPRESSIVE_STRENGTH_28_DAYS_EZYPRO', 'method' => 'POST', 'class' => '', 'id' => '']) }}
                <div class="grid grid-cols-1 mb-2 w-full">
                    <span class="p-3 bg-blue-100">Curing Laboratory / Fields</span>
                </div>

                <table class="mt-5 table">
                    <thead>
                        <tr class="w-full">
                            <td class="p-4 w-[10%]">
                                Cylinder No.
                            </td>
                            <td class="p-4 w-[10%]">
                                Testing Date
                            </td>
                            <td class="p-4 w-[10%]">
                                Age
                            </td>
                            <td class="p-4 w-[21%]">
                                Dimensions(cm)
                            </td>
                            <td class="p-4 w-[9%]">
                                Area(cm2)
                            </td>
                            <td class="p-4 w-[10%]">
                                Type of Fracture
                            </td>
                            <td class="p-4 w-[9%]">
                                Load(Kg)
                            </td>
                            <td class="p-4 w-[21%]">
                                Compressive Street Kg/cm2
                            </td>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td class="w-[10%]">
                                <div class='p-2 text-center'>1</div>
                            </td>

                            <td class="w-[10%]">
                                <input required type="date" {{-- placeholder="Testing Date" --}} class="p-2 w-full" id='b-11'
                                     value="{{$data->B11 ?? ''}}" name='B11' />
                            </td>

                            <td class="w-[10%]">
                                <div class='p-2 font-bold' id='gray_col'>28-Days</div>
                            </td>

                            <td class="w-[10%]">
                                <input required type="number" {{-- placeholder="Dimensions (cm)" --}} class="p-2 w-full"
                                     value="{{$data->G11 ?? ''}}" name='G11' />
                            </td>

                            <td class="w-[10%]">
                                <div class='p-2 font-bold' id='gray_col'>182.4</div>
                            </td>

                            <td class="w-[10%]">
                                <input required type="number" {{-- placeholder="Type of Fracture" --}} class="p-2 w-full"
                                     value="{{$data->N11 ?? ''}}" name='N11' />
                            </td>

                            <td class="w-[10%]">
                                <input required type="number" {{-- placeholder="Load (kg)" --}} class="p-2 w-full"
                                     value="{{$data->Q11 ?? ''}}" name='Q11' />
                            </td>

                            <td class="w-[10%]">
                                <div class='p-2 font-bold' id='gray_col'>
                                    0
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td class="w-[10%]">
                                <div class='p-2 number-center'>2</div>
                            </td>

                            <td class="w-[10%]">
                                <input required type="date" {{-- placeholder="Testing Date" --}} class="p-2 w-full"
                                    id='b-11'  value="{{$data->B12 ?? ''}}" name='B12' />
                            </td>

                            <td class="w-[10%]">
                                <div class='p-2 font-bold' id='gray_col'>28-Days</div>
                            </td>

                            <td class="w-[10%]">
                                <input required type="number" {{-- placeholder="Dimensions (cm)" --}} class="p-2 w-full"
                                     value="{{$data->G12 ?? ''}}" name='G12' />
                            </td>

                            <td class="w-[10%]">
                                <div class='p-2 font-bold' id='gray_col'>182.4</div>
                            </td>

                            <td class="w-[10%]">
                                <input required type="number" {{-- placeholder="Type of Fracture" --}} class="p-2 w-full"
                                     value="{{$data->N12 ?? ''}}" name='N12' />
                            </td>

                            <td class="w-[10%]">
                                <input required type="number" {{-- placeholder="Load (kg)" --}} class="p-2 w-full"
                                     value="{{$data->Q12 ?? ''}}" name='Q12' />
                            </td>

                            <td class="w-[10%]">
                                <div class='p-2 font-bold' id='gray_col'>
                                    0
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td class="w-[10%]">
                                <div class='p-2 number-center'>3</div>
                            </td>

                            <td class="w-[10%]">
                                <input required type="date" {{-- placeholder="Testing Date" --}} class="p-2 w-full"
                                     value="{{$data->B13 ?? ''}}" name='B13' />
                            </td>

                            <td class="w-[10%]">
                                <div class='p-2 font-bold' id='gray_col'>28-Days</div>
                            </td>

                            <td class="w-[10%]">
                                <input required type="number" {{-- placeholder="Dimensions (cm)" --}} class="p-2 w-full"
                                     value="{{$data->G13 ?? ''}}" name='G13' />
                            </td>

                            <td class="w-[10%]">
                                <div class='p-2 font-bold' id='gray_col'>182.4</div>
                            </td>

                            <td class="w-[10%]">
                                <input required type="number" {{-- placeholder="Type of Fracture" --}} class="p-2 w-full"
                                     value="{{$data->N13 ?? ''}}" name='N13' />
                            </td>

                            <td class="w-[10%]">
                                <input required type="number" {{-- placeholder="Load (kg)" --}} class="p-2 w-full"
                                     value="{{$data->Q13 ?? ''}}" name='Q13' />
                            </td>

                            <td class="w-[10%]">
                                <div class='p-2 font-bold' id='gray_col'>
                                    0
                                </div>
                            </td>

                        </tr>
                    </tbody>
                </table>

                <div class="grid grid-cols-6 w-full my-5  ">
                    <input required type="number" placeholder="Tested by" class="p-2 rounded-sm gap-2 bg-[#ffffcc]"
                        id="a-20"  value="{{$data->A14 ?? ''}}" name='A14' />

                    <input required type="date" {{-- placeholder="Date" --}} class="p-2 rounded-sm" id="c-20"
                         value="{{$data->B14 ?? ''}}" name='B14' />

                    <span class='p-3'>
                        Average for 28 days:
                    </span>

                    <span class='p-3 font-bold' id='gray_col'>
                        0
                    </span>

                    <span class='p-3'>
                        Reported for 28 days:
                    </span>

                    <input required type="number" {{-- placeholder="" --}}  value="{{$data->S15 ?? ''}}" name='S15'
                        class="p-2 rounded-sm gap-2 bg-[#ffffcc]" />

                </div>

                <table class="mb-5 table">
                    <thead>
                        <tr class="w-full">
                            <td class="p-4 w-7">
                                Cylinder No.
                            </td>
                            <td class="p-4 w-7">
                                SSD Mass (g)
                            </td>
                            <td class="p-4 w-7">
                                Volume(cc)
                            </td>
                            <td class="p-4 w-7">
                                Density(g/cc)
                            </td>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td class="w-[10%]">
                                <input required type="number" {{-- placeholder="Cylinder No." --}} class="p-2 w-full"
                                    id='a-17'  value="{{$data->A17 ?? ''}}" name='A17' />
                            </td>

                            <td class="w-[10%]">
                                <input required type="number" {{-- placeholder="SSD Mass (g)" --}} class="p-2 w-full"
                                    id='i-17'  value="{{$data->E17 ?? ''}}" name='E17' />
                            </td>

                            <td class="w-[10%]">
                                <input required type="number" {{-- placeholder="Volume (cc)" --}} class="p-2 w-full"
                                    id='l-17'  value="{{$data->J17 ?? ''}}" name='J17' />
                            </td>

                            <td class="w-[10%]">
                                <input required type="number" {{-- placeholder="Density (g/cc)" --}} class="p-2 w-full"
                                    id='s-17'  value="{{$data->P17 ?? ''}}" name='P17' />
                            </td>

                        </tr>

                        <tr>
                            <td class="w-[10%]">
                                <input required type="number" {{-- placeholder="Cylinder No." --}} class="p-2 w-full"
                                    id='a-17'  value="{{$data->A18 ?? ''}}" name='A18' />
                            </td>

                            <td class="w-[10%]">
                                <input required type="number" {{-- placeholder="SSD Mass (g)" --}} class="p-2 w-full"
                                    id='i-17'  value="{{$data->E18 ?? ''}}" name='E18' />
                            </td>

                            <td class="w-[10%]">
                                <input required type="number" {{-- placeholder="Volume (cc)" --}} class="p-2 w-full"
                                    id='l-17'  value="{{$data->J18 ?? ''}}" name='J18' />
                            </td>

                            <td class="w-[10%]">
                                <input required type="number" {{-- placeholder="Density (g/cc)" --}} class="p-2 w-full"
                                    id='s-17'  value="{{$data->P18 ?? ''}}" name='P18' />
                            </td>

                        </tr>

                        <tr>
                            <td class="w-[10%]">
                                <input required type="number" {{-- placeholder="Cylinder No." --}} class="p-2 w-full"
                                    id='a-17'  value="{{$data->A19 ?? ''}}" name='A19' />
                            </td>

                            <td class="w-[10%]">
                                <input required type="number" {{-- placeholder="SSD Mass (g)" --}} class="p-2 w-full"
                                    id='i-17'  value="{{$data->E19 ?? ''}}" name='E19' />
                            </td>

                            <td class="w-[10%]">
                                <input required type="number" {{-- placeholder="Volume (cc)" --}} class="p-2 w-full"
                                    id='l-17'  value="{{$data->J19 ?? ''}}" name='J19' />
                            </td>

                            <td class="w-[10%]">
                                <input required type="number" {{-- placeholder="Density (g/cc)" --}} class="p-2 w-full"
                                    id='s-17'  value="{{$data->P19 ?? ''}}" name='P19' />
                            </td>

                        </tr>
                    </tbody>
                </table>

                <!-- // Tested by, Date, Average Fields // -->

                <div class="grid grid-cols-3 gap-2 w-full">
                    <input required type="text" placeholder="Tested by" class="p-2 rounded-sm gap-2"
                        id="a-20"  value="{{$data->A20 ?? ''}}" name='A20' />

                    <input required type="date" placeholder="Date" class="p-2 rounded-sm" id="c-20"
                         value="{{$data->B20 ?? ''}}" name='B20' />

                    <input required type="text" placeholder="Average" class="p-2 rounded-sm" id="c-20"
                         value="{{$data->C20 ?? ''}}" name='C20' />

                </div>

                <div class="grid grid-cols-1 w-full my-5">
                    <textarea  value="{{$data->textarea ?? ''}}" name="textarea" id="" cols="30" rows="10" placeholder="Remarks: " class="p-2"
                        id="A21">
          </textarea>
                </div>

                <div class="grid grid-cols-4 gap-2 w-full">
                    <input required type="text" placeholder="Sampled by" class="p-3 rounded-sm"  value="{{$data->A22 ?? ''}}" name='A22' />
                    <input required type="text" placeholder="Tested by" class="p-3 rounded-sm"  value="{{$data->B22 ?? ''}}" name='B22' />
                    <input required type="text" placeholder="Checked by" class="p-3 rounded-sm col-span-2"
                         value="{{$data->C22 ?? ''}}" name='C22' />
                </div>
            </body>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">
        Submit Form
    </button>

    {{ Form::close() }}
</body>

</html>

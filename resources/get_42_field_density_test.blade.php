<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/app.css" rel="stylesheet">
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
</style>

<body>
    <div class="flex justify-center align-center">
        <div class="w-[80%] p-[3%]">
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
                    <h1 class="lg:text-3xl md:text-base sm:text-sm font-bold text-center">
                        FIELD DENSITY TEST (ASTM-D1557) SOIL/SUBGRADE/SUB BASE/AGG.BASE COURSE
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
                {{ Form::open(['route' => 'post_42_field_density', 'method' => 'POST', 'class' => '', 'id' => '']) }}
                <div class="w-full mt-5">
                    <div class="grid grid-cols-5 gap-2 mb-2 w-full">
                        <input required type="text" placeholder="BOQ No." class="p-2 rounded-sm" />
                        <input required type="text" placeholder="Contractor:" class="p-2 rounded-sm" />
                        <input required type="text" placeholder="Project:" class="p-2 rounded-sm" />
                        <input required type="text" placeholder="Field No." class="p-2 rounded-sm" />
                        <input required type="text" placeholder="CR No.:" class="p-2 rounded-sm" />
                    </div>
                    <div class="grid grid-cols-3 gap-2 mb-2 w-full">
                        <input required name='A6' type="text" placeholder="Phase:" class="p-2 rounded-sm" />
                        <input required name='I6' type="date" placeholder="Street:"
                            class="p-2 rounded-sm flex-2" />
                        <input required name='I6' type="date" placeholder="Road:"
                            class="p-2 rounded-sm flex-2" />
                    </div>
                </div>

                <div class="my-5 table">
                    {{-- // Table Header // --}}
                    <div class="grid grid-cols-12 width-full">
                        <span class="p-4 font- text-center font-bold col-span-4">
                            Discription
                        </span>
                        <span class="p-4 font- text-center font-bold col-span-1">
                            Unit
                        </span>
                        <span class="p-4 font- text-center font-bold col-span-7">
                            Determination
                        </span>
                    </div>

                    {{-- // Table Body Start // --}}
                    <div>
                        {{-- tr 8 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Inspection/Survey/Quality No.
                            </span>
                            <span class="p-2 col-span-1">
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input disabled name='G8' value="{{ $data->G8 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I8' value="{{ $data->I8 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='K8' value="{{ $data->K8 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='M8' value="{{ $data->M8 }}" type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 9 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Chainage Represented BY Test
                            </span>
                            <span class="p-2 col-span-1">Km</span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input name='G9' value="{{ $data->G9 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='I9' value="{{ $data->I9 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='K9' value="{{ $data->K9 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='M9' value="{{ $data->M9 }}" type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 10 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Test/Retest No.
                            </span>
                            <span class="p-2 col-span-1">

                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input name='G10' value="1" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I10' value="2" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='K10' value="3" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='M10' value="4" type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 11 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Offset from Centre Line
                            </span>
                            <span class="p-2 col-span-1">
                                m
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input disabled name='G11' value="{{ $data->G11 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='I11' value="{{ $data->I11 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='K11' value="{{ $data->K11 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='M11' value="{{ $data->M11 }}" type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 12 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Layer No. or Level
                            </span>
                            <span class="p-2 col-span-1">
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input disabled name='G12' value="{{ $data->G12 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='I12' value="{{ $data->I12 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='K12' value="{{ $data->K12 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='M12' value="{{ $data->M12 }}" type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 13 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Depth of Hole
                            </span>
                            <span class="p-2 col-span-1">
                                cm
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input disabled name='G13' value="{{ $data->G13 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='I13' value="{{ $data->I13 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='K13' value="{{ $data->K13 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='M13' value="{{ $data->M13 }}" type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 14 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Wt. of Excavated Wet Material from the Hole
                            </span>
                            <span class="p-2 col-span-1">
                                gm
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input disabled name='G14' value="{{ $data->G14 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='I14' value="{{ $data->I14 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='K14' value="{{ $data->K14 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='M14' value="{{ $data->M14 }}" type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 15 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Bulk Specific Gravity of + 4.75 mm from Hole
                            </span>
                            <span class="p-2 col-span-1">
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input disabled name="G15" value="{{ $data->G15 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name="I15" value="{{ $data->I15 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name="K15" value="{{ $data->K15 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name="M15" value="{{ $data->M15 }}" type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 16 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Initial Wt. of Sand + Cone before Test
                            </span>
                            <span class="p-2 col-span-1">
                                gm
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input disabled name='G16' value="{{ $data->G16 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='I16' value="{{ $data->I16 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='K16' value="{{ $data->K16 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='M16' value="{{ $data->M16 }}" type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 17 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Residual Wt. of Sand + Cone after Test
                            </span>
                            <span class="p-2 col-span-1">
                                gm
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input disabled name='G17' value="{{ $data->G17 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='I17' value="{{ $data->I17 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='K17' value="{{ $data->K17 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='M17' value="{{ $data->M17 }}" type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 18 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Wt. of Used Sand (Hole + Cone)
                            </span>
                            <span class="p-2 col-span-1">
                                gm
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <span class="p-2 font-bold"></span>
                                <span class="p-2 font-bold"></span>
                                <span class="p-2 font-bold"></span>
                                <span class="p-2 font-bold"></span>
                            </span>
                        </div>
                        {{-- tr 19 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Wt. of Sand in Cone
                            </span>
                            <span class="p-2 col-span-1">
                                gm
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input disabled name='G19' value="{{ $data->G19 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='I19' value="{{ $data->I19 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='K19' value="{{ $data->K19 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='M19' value="{{ $data->M19 }}" type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 20 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Wt. of Sand in Hole
                            </span>
                            <span class="p-2 col-span-1">
                                gm
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <span class="p-2 font-bold"></span>
                                <span class="p-2 font-bold"></span>
                                <span class="p-2 font-bold"></span>
                                <span class="p-2 font-bold"></span>
                            </span>
                        </div>
                        {{-- tr 21 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Unit Wt. of Sand
                            </span>
                            <span class="p-2 col-span-1">
                                gm/cc
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input disabled name='G21' value="{{ $data->G21 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='I21' value="{{ $data->I21 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='K21' value="{{ $data->K21 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name='M21' value="{{ $data->M21 }}" type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 22 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Volume of Material from Hole
                            </span>
                            <span class="p-2 col-span-1">
                                gm
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <span class="p-2 font-bold"></span>
                                <span class="p-2 font-bold"></span>
                                <span class="p-2 font-bold"></span>
                                <span class="p-2 font-bold"></span>
                            </span>
                        </div>
                        {{-- tr 23 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Wet Density of Material from Hole
                            </span>
                            <span class="p-2 col-span-1">
                                g/cc
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <span class="p-2 font-bold"></span>
                                <span class="p-2 font-bold"></span>
                                <span class="p-2 font-bold"></span>
                                <span class="p-2 font-bold"></span>
                            </span>
                        </div>
                        {{-- tr 24 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Container No.
                            </span>
                            <span class="p-2 col-span-1">
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input disabled name="G24" value="{{ $data->G24 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name="I24" value="{{ $data->I24 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input disabled name="K24" value="{{ $data->K24 }}" type="text"
                                    class="p-2 rounded-sm" />
                                <input name="M24" value="{{ $data->M24 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 25 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Wt. of Wet Material + Container
                            </span>
                            <span class="p-2 col-span-1">
                                gm
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input name='G25' value="{{ $data->G25 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I25' value="{{ $data->I25 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K25' value="{{ $data->K25 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M25' value="{{ $data->M25 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 26 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Wt. of Dry Material + Container
                            </span>
                            <span class="p-2 col-span-1">
                                gm
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input name='G26' value="{{ $data->G26 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I26' value="{{ $data->I26 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K26' value="{{ $data->K26 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M26' value="{{ $data->M26 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 27 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Wt. of Container
                            </span>
                            <span class="p-2 col-span-1">
                                gm
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input name='G27' value="{{ $data->G27 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I27' value="{{ $data->I27 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K27' value="{{ $data->K27 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M27' value="{{ $data->M27 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 28 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Moisture Content of material
                            </span>
                            <span class="p-2 col-span-1">
                                %
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input name='G28' value="{{ $data->G28 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I28' value="{{ $data->I28 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K28' value="{{ $data->K28 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M28' value="{{ $data->M28 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 29 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Dry Density of Material from Hole
                            </span>
                            <span class="p-2 col-span-1">
                                gm/cc
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <span class="p-2 font-bold"></span>
                                <span class="p-2 font-bold"></span>
                                <span class="p-2 font-bold"></span>
                                <span class="p-2 font-bold"></span>
                            </span>
                        </div>
                        {{-- tr 30 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Corrected Dry Density
                            </span>
                            <span class="p-2 col-span-1">
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input name='G30' value="{{ $data->G30 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I30' value="{{ $data->I30 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K30' value="{{ $data->K30 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M30' value="{{ $data->M30 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 31 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                3/4” Material from Hole
                            </span>
                            <span class="p-2 col-span-1">
                                %
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input name='G31' value="{{ $data->G31 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I31' value="{{ $data->I31 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K31' value="{{ $data->K31 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M31' value="{{ $data->M31 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 32 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Lab No. for Proctor
                            </span>
                            <span class="p-2 col-span-1">
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input name='G32' value="{{ $data->G32 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I32' value="{{ $data->I32 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K32' value="{{ $data->K32 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M32' value="{{ $data->M32 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 33 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Max Dry Density (T-180D)
                            </span>
                            <span class="p-2 col-span-1">
                                gm/cc
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input name='G33' value="{{ $data->G33 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I33' value="{{ $data->I33 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K33' value="{{ $data->K33 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M33' value="{{ $data->M33 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 34 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Adj; Max Dry Density (T-224)
                            </span>
                            <span class="p-2 col-span-1">
                                gm/cc
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input name='G34' value="{{ $data->G34 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I34' value="{{ $data->I34 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K34' value="{{ $data->K34 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M34' value="{{ $data->M34 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 35 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Optimum Moisture Content
                            </span>
                            <span class="p-2 col-span-1">
                                %
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input name='G35' value="{{ $data->G35 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I35' value="{{ $data->I35 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K35' value="{{ $data->K35 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M35' value="{{ $data->M35 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 36 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Compaction Obtained
                            </span>
                            <span class="p-2 col-span-1">
                                %
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <span class="p-4 font-bold"></span>
                                <span class="p-4 font-bold"></span>
                                <span class="p-4 font-bold"></span>
                                <span class="p-4 font-bold"></span>
                            </span>
                        </div>
                        {{-- tr 37 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Compaction Reported
                            </span>
                            <span class="p-2 col-span-1">
                                %
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <span class="p-4 font-bold"></span>
                                <span class="p-4 font-bold"></span>
                                <span class="p-4 font-bold"></span>
                                <span class="p-4 font-bold"></span>
                            </span>
                        </div>
                        {{-- tr 38 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Compaction Required
                            </span>
                            <span class="p-2 col-span-1">
                                %
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input name='G38' value="{{ $data->G38 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I38' value="{{ $data->I38 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K38' value="{{ $data->K38 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M38' value="{{ $data->M38 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 39 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Time of Test Hrs.
                            </span>
                            <span class="p-2 col-span-1">
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input name='G39' value="{{ $data->G39 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I39' value="{{ $data->I39 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K39' value="{{ $data->K39 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M39' value="{{ $data->M39 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>
                        {{-- tr 40 --}}
                        <div class="grid grid-cols-12 width-full">
                            <span class="p-2 col-span-4">
                                Pass/Fail
                            </span>
                            <span class="p-2 col-span-1">
                            </span>
                            <span class="grid col-span-7 grid-cols-4">
                                <input name='G40' value="{{ $data->G40 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I40' value="{{ $data->I40 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K40' value="{{ $data->K40 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M40' value="{{ $data->M40 }}" disabled type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>

                    </div>
                </div>

                <div class="grid grid-cols-3 gap-2 w-full">
                    <input disabled name='A15' type="text" placeholder="Sampled by" class="p-3 rounded-sm" />
                    <input disabled name='F15' type="text" placeholder="Tested by" class="p-3 rounded-sm" />
                    <input disabled name='L15' type="text" placeholder="Checked by" class="p-3 rounded-sm" />
                </div>
                <button type="submit">Submit</button>
                {{ Form::close() }}
            </body>

</html>

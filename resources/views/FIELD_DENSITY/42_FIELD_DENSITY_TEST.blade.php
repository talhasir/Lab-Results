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
                    <input required type="text" placeholder="Doc#">
                    <input required type="text" placeholder="Rev" />
                    <input required type="date" placeholder="Date" />
                    <input required type="text" placeholder="Page" />
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
                                <input required name='G8' {{-- value="G8" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I8' {{-- value="I8" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='K8' {{-- value="K8" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='M8' {{-- value="M8" --}} type="text"
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
                                <input name='G9' {{-- value="G9" --}} type="text" class="p-2 rounded-sm" />
                                <input required name='I9' {{-- value="I9" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='K9' {{-- value="K9" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='M9' {{-- value="M9" --}} type="text"
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
                                <input name='G10' {{-- value="1" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I10' {{-- value="2" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='K10' {{-- value="3" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='M10' {{-- value="4" --}} type="text"
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
                                <input required name='G11' {{-- value="G11" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='I11' {{-- value="I11" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='K11' {{-- value="K11" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='M11' {{-- value="M11" --}} type="text"
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
                                <input required name='G12' {{-- value="G12" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='I12' {{-- value="I12" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='K12' {{-- value="K12" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='M12' {{-- value="M12" --}} type="text"
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
                                <input required name='G13' {{-- value="G13" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='I13' {{-- value="I13" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='K13' {{-- value="K13" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='M13' {{-- value="M13" --}} type="text"
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
                                <input required name='G14' {{-- value="G14" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='I14' {{-- value="I14" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='K14' {{-- value="K14" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='M14' {{-- value="M14" --}} type="text"
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
                                <input required name="G15" {{-- value="G15" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name="I15" {{-- value="I15" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name="K15" {{-- value="K15" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name="M15" {{-- value="M15" --}} type="text"
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
                                <input required name='G16' {{-- value="G16" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='I16' {{-- value="I16" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='K16' {{-- value="K16" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='M16' {{-- value="M16" --}} type="text"
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
                                <input required name='G17' {{-- value="G17" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='I17' {{-- value="I17" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='K17' {{-- value="K17" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='M17' {{-- value="M17" --}} type="text"
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
                                <input required name='G19' {{-- value="G19" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='I19' {{-- value="I19" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='K19' {{-- value="K19" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='M19' {{-- value="M19" --}} type="text"
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
                                <input required name='G21' {{-- value="G21" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='I21' {{-- value="I21" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='K21' {{-- value="K21" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name='M21' {{-- value="M21" --}} type="text"
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
                                <input required name="G24" {{-- value="G24" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name="I24" {{-- value="I24" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input required name="K24" {{-- value="K24" --}} type="text"
                                    class="p-2 rounded-sm" />
                                <input name="M24" {{-- value="M24" --}} required type="text"
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
                                <input name='G25' {{-- value="G25" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I25' {{-- value="I25" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K25' {{-- value="K25" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M25' {{-- value="M25" --}} required type="text"
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
                                <input name='G26' {{-- value="G26" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I26' {{-- value="I26" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K26' {{-- value="K26" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M26' {{-- value="M26" --}} required type="text"
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
                                <input name='G27' {{-- value="G27" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I27' {{-- value="I27" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K27' {{-- value="K27" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M27' {{-- value="M27" --}} required type="text"
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
                                <input name='G28' {{-- value="G28" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I28' {{-- value="I28" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K28' {{-- value="K28" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M28' {{-- value="M28" --}} required type="text"
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
                                <input name='G30' {{-- value="G30" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I30' {{-- value="I30" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K30' {{-- value="K30" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M30' {{-- value="M30" --}} required type="text"
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
                                <input name='G31' {{-- value="G31" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I31' {{-- value="I31" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K31' {{-- value="K31" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M31' {{-- value="M31" --}} required type="text"
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
                                <input name='G32' {{-- value="G32" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I32' {{-- value="I32" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K32' {{-- value="K32" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M32' {{-- value="M32" --}} required type="text"
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
                                <input name='G33' {{-- value="G33" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I33' {{-- value="I33" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K33' {{-- value="K33" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M33' {{-- value="M33" --}} required type="text"
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
                                <input name='G34' {{-- value="G34" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I34' {{-- value="I34" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K34' {{-- value="K34" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M34' {{-- value="M34" --}} required type="text"
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
                                <input name='G35' {{-- value="G35" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I35' {{-- value="I35" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K35' {{-- value="K35" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M35' {{-- value="M35" --}} required type="text"
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
                                <input name='G38' {{-- value="G38" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I38' {{-- value="I38" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K38' {{-- value="K38" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M38' {{-- value="M38" --}} required type="text"
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
                                <input name='G39' {{-- value="G39" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I39' {{-- value="I39" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K39' {{-- value="K39" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M39' {{-- value="M39" --}} required type="text"
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
                                <input name='G40' {{-- value="G40" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='I40' {{-- value="I40" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='K40' {{-- value="K40" --}} required type="text"
                                    class="p-2 rounded-sm" />
                                <input name='M40' {{-- value="M40" --}} required type="text"
                                    class="p-2 rounded-sm" />
                            </span>
                        </div>

                    </div>
                </div>

                <div class="grid grid-cols-3 gap-2 w-full mr">
                    <input required name='A15' type="text" placeholder="Sampled by" class="p-3 rounded-sm" />
                    <input required name='F15' type="text" placeholder="Tested by" class="p-3 rounded-sm" />
                    <input required name='L15' type="text" placeholder="Checked by" class="p-3 rounded-sm" />
                </div>
                <button type="submit">Submit</button>
                {{ Form::close() }}
            </body>

</html>

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

    input,
    textarea {
        background-color: #F2EFE5;
    }
</style>

<body>
    <div class="flex justify-center align-center">
        <div class="w-[90%] p-[3%]">
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
                    <h2 class="text-[1.5rem] font-bold text-center">CALIFORNIA BEARING RATIO (AASHTO T-193)</h2>
                </div>
                <div class="flex flex-col">
                    <input value="" disabled name="" type="text" placeholder="Doc#">
                    <input value="" disabled name="" type="text" placeholder="Rev">
                    <input value="" disabled name="" type="text" placeholder="Date">
                    <input value="" disabled name="" type="text" placeholder="Page">
                </div>
            </header>

            <body class="flex flex-col">
                {{ Form::open(['route' => 'post_view_40_CALIFORNIA_BEARING_RATIO', 'method' => 'POST', 'class' => '', 'id' => '']) }}
                <div class="w-full my-3">
                    <div class="grid grid-cols-3 gap-2 mb-2 w-full">
                        <input value="" disabled name="" type="text" placeholder="Contract No."
                            class="p-2 rounded-sm" />
                        <input value="" disabled name="" type="text" placeholder="Contractor"
                            class="p-2 rounded-sm" />
                        <input value="" disabled name="" type="text" placeholder="Location"
                            class="p-2 rounded-sm" />
                    </div>
                    <div class="grid grid-cols-5 gap-2 mb-2 w-full">
                        <input value="" disabled name="" type="text" placeholder="Lab No."
                            class="p-2 rounded-sm" />
                        <input value="" disabled name="" type="text" placeholder="Description:"
                            class="p-2 rounded-sm" />
                        <input value="" disabled name="" type="text" placeholder="Source:"
                            class="p-2 rounded-sm" />
                        <input value="" disabled name="" type="text" placeholder="Change:"
                            class="p-2 rounded-sm" />
                        <input value="" disabled name="" type="text" placeholder="Sample No."
                            class="p-2 rounded-sm" />
                    </div>
                </div>
                <div class="mt-5 table">
                    <div class="grid grid-cols-2">
                        <!-- Header -->
                        <div>
                            <div class="grid grid-cols-1" id="header">
                                <span class="p-3 lg:text-lg text-center font-bold col-span-2">SPECIMEN BEFORE
                                    SOAKING</span>
                            </div>
                            <div class="grid grid-cols-2" id="header">
                                <span class="p-2 text-center font-bold">MOISTURE OF CONTENT</span>
                                <span class="p-2 text-center font-bold">DRY DENSITY</span>
                            </div>
                            <!-- // body // -->
                            <div class="grid grid-cols-4" id="body">
                                <span class="p-3">Can No.</span>
                                <input value="{{$data->C9}}" disabled name="C9" type="text" placeholder="Ring Factor:"
                                    class="p-3 rounded-sm" />
                                <span class="p-3">No. of Blows</span>
                                <input value="{{$data->I9}}" disabled name="I9" type="text" placeholder="Ring Factor:"
                                    class="p-3 rounded-sm" />
                            </div>
                            <div class="grid grid-cols-4" id="body">
                                <span class="p-3">Can + Wet Soil (gm)</span>
                                <input value="{{$data->C10}}" disabled name="C10" type="text"
                                    placeholder="Ring Factor:" class="p-3 rounded-sm" />
                                <span class="p-3  ">No. of Blows</span>
                                <input value="{{$data->I10}}" disabled name="I10" type="text"
                                    placeholder="Ring Factor:" class="p-3 rounded-sm" />
                            </div>
                            <div class="grid grid-cols-4" id="body">
                                <span class="p-3">Can + Dry Soil (gm)</span>
                                <input value="{{$data->C11}}" disabled name="C11" type="text"
                                    placeholder="Ring Factor:" class="p-3 rounded-sm" />
                                <span class="p-3  ">Mold + Wet Soil</span>
                                <input value="{{$data->I11}}" disabled name="I11" type="text"
                                    placeholder="Ring Factor:" class="p-3 rounded-sm" />
                            </div>
                            <div class="grid grid-cols-4" id="body">
                                <span class="p-3">Wt. of Can (gm)</span>
                                <input value="{{$data->C12}}" disabled name="C12" type="text"
                                    placeholder="Ring Factor:" class="p-3 rounded-sm" />
                                <span class="p-3  ">Wt. Mold</span>
                                <input value="{{$data->I12}}" disabled name="I12" type="text"
                                    placeholder="Ring Factor:" class="p-3 rounded-sm" />
                            </div>
                            <div class="grid grid-cols-4" id="body">
                                <span class="p-3">Wt. of Water (gm)</span>
                                <span class="p-2 font-bold">

                                </span>
                                <span class="p-3  ">Wt. Wet Soil (gm)</span>
                                <span class="p-2 font-bold"></span>
                            </div>
                            <div class="grid grid-cols-4" id="body">
                                <span class="p-3">Wt. of Dry Soil (gm)</span>
                                <input value="{{$data->C14}}" disabled name="C14" type="text"
                                    placeholder="Ring Factor:" class="p-3 rounded-sm" />
                                <span class="p-3  ">Mold Volume (gm)</span>
                                <input value="{{$data->I14}}" disabled name="I14" type="text"
                                    placeholder="Ring Factor:" class="p-3 rounded-sm" />
                            </div>
                            <div class="grid grid-cols-4" id="body">
                                <span class="p-3">Moisture Content % </span>
                                <input value="{{$data->C15}}" disabled name="C15" type="text"
                                    placeholder="Ring Factor:" class="p-3 rounded-sm" />
                                <span class="p-3  ">Wet Density (gm)</span>
                                <span class="p-2 font-bold"></span>
                            </div>
                            <div class="grid grid-cols-4" id="body">
                                <span class="p-3">Average %</span>
                                <input value="{{$data->C16}}" disabled name="C16" type="text"
                                    placeholder="Ring Factor:" class="p-3 rounded-sm" />
                                <span class="p-3  ">Dry Density (gm)</span>
                                <span class="p-2 font-bold"></span>
                            </div>
                        </div>

                        <div>
                            <div class="grid grid-cols-2">
                                <input value="" disabled name="C17" type="text"
                                    placeholder="Ring Factor:" class="p-3 rounded-sm" />
                                <input value="{{$data->I17}}" disabled name="I17" type="text"
                                    placeholder="Area of Plunger (cm2):" class="p-3 rounded-sm" />
                            </div>
                            <div class="grid grid-rows">
                                <div class="lg:text-5xl font-bold text-center">
                                    Graph
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 table">
                    <div class="grid grid-cols-1">
                        <div>
                            <!-- table Header -->
                            <div class="grid grid-cols-1" id="header">
                                <span class="p-3 lg:text-lg text-center font-bold col-span-2">MOISTURE CONTENT AFTER
                                    SOAKING</span>
                            </div>
                            <!-- // Table body // -->
                            <div class="grid grid-cols-6" id="body">
                                <span class="p-3">Can No.</span>
                                <input value="{{$data->C19}}" disabled name="C19" type="text" placeholder=""
                                    class="p-3 rounded-sm" />
                                <span class="p-3">Wt. of Container (gm)</span>
                                <input value="{{$data->I19}}" disabled name="I19" type="text" placeholder=""
                                    class="p-3 rounded-sm" />
                                <span class="p-3">Can + Wet Soil (gm)</span>
                                <input value="{{$data->C20}}" disabled name="C20" type="text"
                                    placeholder="Ring Factor:" class="p-3 rounded-sm" />
                            </div>
                            <div class="grid grid-cols-6" id="body">
                                <span class="p-3  ">Wt. of Dry Soil (gm)</span>
                                <span class="p-2 font-bold"></span>
                                <span class="p-3">Can + Dry Soil (gm)</span>
                                <input value="{{$data->C21}}" disabled name="C21" type="text"
                                    placeholder="Ring Factor:" class="p-3 rounded-sm" />
                                <span class="p-3  ">Moisture Content %</span>
                                <input value="{{$data->I21}}" disabled name="I21" type="text"
                                    placeholder="Ring Factor:" class="p-3 rounded-sm" />
                            </div>
                            <div class="grid grid-cols-6" id="body">
                                <span class="p-3">Wt. Water (gm)</span>
                                <span class="p-2 font-bold"></span>
                                <span class="p-3 col-span-4"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5 table">
                    <div class="grid grid-cols-1">
                        <div>
                            <!-- Table Header -->
                            <div class="grid grid-cols-1" id="header">
                                <span class="p-3 lg:text-lg text-center font-bold col-span-2">CBR TEST</span>
                            </div>
                            <!-- // Table body // -->
                            <div class="grid grid-cols-12" id="body">
                                <span class="py-1 px-3">Penetration (mm)</span>
                                <input value="{{$data->K19}}" disabled name="K19" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->M19}}" disabled name="M19" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->N19}}" disabled name="N19" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->P19}}" disabled name="P19" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->Q19}}" disabled name="Q19" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->S19}}" disabled name="S19" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->U19}}" disabled name="U19" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->W19}}" disabled name="W19" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->Y19}}" disabled name="Y19" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->AA19}}" disabled name="AA19" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="" disabled name="" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                            </div>
                            <div class="grid grid-cols-12" id="body">
                                <span class="py-1 px-3">Dial Reading</span>
                                <input value="{{$data->K20}}" disabled name="K20" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->M20}}" disabled name="M20" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->K20}}" disabled name="N20" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->P20}}" disabled name="P20" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->Q20}}" disabled name="Q20" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->S20}}" disabled name="S20" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->U20}}" disabled name="U20" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->U20}}" disabled name="W20" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->Y20}}" disabled name="Y20" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->AA20}}" disabled name="AA20" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->AB20}}" disabled name="AB20" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                            </div>
                            <div class="grid grid-cols-12" id="body">
                                <span class="py-1 px-3">Load (kg)</span>
                                <span class="p-y1 p-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                            </div>
                            <div class="grid grid-cols-12" id="body">
                                <span class="py-1 px-3">Unit Load (kg/cm2)</span>
                                <span class="p-y1 p-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                            </div>
                            <div class="grid grid-cols-12" id="body">
                                <span class="py-1 px-3">Standard Load</span>
                                <input value="{{$data->K19}}" disabled name="K19" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm col-span-11" />
                            </div>
                            <div class="grid grid-cols-12" id="body">
                                <span class="py-1 px-3">CBR (%)</span>
                                <span class="p-y1 p-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                                <span class="py-1 px-3 font-bold"></span>
                            </div>
                            <div class="grid grid-cols-12" id="body">
                                <span class="py-1 px-3">Corrected CBR(%)</span>
                                <input value="{{$data->K25}}" disabled name="K25" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->M25}}" disabled name="M25" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->N25}}" disabled name="N25" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->P25}}" disabled name="P25" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->Q25}}" disabled name="Q25" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->S25}}" disabled name="S25" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->U25}}" disabled name="U25" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->W25}}" disabled name="W25" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->Y25}}" disabled name="Y25" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->AA25}}" disabled name="AA25" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                                <input value="{{$data->AB25}}" disabled name="AB25" type="text" placeholder=""
                                    class="py-1 px-3 rounded-sm" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 w-full my-5">
                    <textarea name="A23" id="" cols="30" rows="10" placeholder="Remarks"
                        class="p-2"></textarea>
                </div>
                <div class="grid grid-cols-6 gap-2 w-full">
                    <input value="" disabled name="" type="text" placeholder="Sampled by"
                        class="p-3 rounded-sm" />
                    <input value="" disabled name="" type="text" placeholder="Date"
                        class="p-3 rounded-sm" />
                    <input value="" disabled name="" type="text" placeholder="Tested by"
                        class="p-3 rounded-sm" />
                    <input value="" disabled name="" type="text" placeholder="Date"
                        class="p-3 rounded-sm" />
                    <input value="" disabled name="" type="text" placeholder="Checked by"
                        class="p-3 rounded-sm" />
                    <input value="" disabled name="" type="text" placeholder="Date"
                        class="p-3 rounded-sm" />
                </div>
                <button type="submit">Submit</button>
                {{ Form::close() }}
            </body>

</html>

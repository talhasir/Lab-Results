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
    td,
    input,
    span,
    textarea,
    label {
        border: 1px solid gray;
    }

    table {
        width: 100%;
    }

    table tr td:nth-child(1) {
        padding: 1%;
    }

    table tbody input {
        border: none;
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
                <div class="col-span-2 flex justify-center items-center ">
                    <h1 class="text-[1.5rem] font-bold text-center">WORKSHEET FOR BITUMINOUS (Prime Coat/Track
                        Coat/DST/TST)</h1>
                </div>
                <div class="flex flex-col">
                    <input disabled value="" name="" type="text" placeholder="Doc#">
                    <input disabled value="" name="" type="text" placeholder="Rev">
                    <input disabled value="" name="" type="text" placeholder="Date">
                    <input disabled value="" name="" type="text" placeholder="Page">
                </div>
            </header>

            <body class="flex flex-col">
                <div class="w-full my-5">
                    <div class="grid grid-cols-4 gap-2 mb-2 w-full">
                        <input disabled value="" name="" type="text" placeholder="Contract No."
                            class="p-2 rounded-sm" />
                        <input disabled value="" name="" type="text" placeholder="Contractor"
                            class="p-2 rounded-sm" />
                        <input disabled value="" name="" type="text" placeholder="Location"
                            class="p-2 rounded-sm" />
                        <input disabled value="" name="" type="text" placeholder="Lab No:"
                            class="p-2 rounded-sm" />
                    </div>
                    <div class="grid grid-cols-3 gap-2 mb-2 w-full">
                        <input disabled value="" name="" type="text" placeholder="CR No."
                            class="p-2 rounded-sm" />
                        <input disabled value="" name="" type="text" placeholder="Type of Material"
                            class="p-2 rounded-sm" />
                        <input disabled value="" name="" type="text" placeholder="Date"
                            class="p-2 rounded-sm" />
                    </div>
                    <div class="grid grid-cols-4 gap-2 mb-2 w-full">
                        <input disabled value="" name="" type="text" placeholder="Temperature OC"
                            class="p-2 rounded-sm" />
                        <input disabled value="" name="" type="text" placeholder="Trunk"
                            class="p-2 rounded-sm" />
                        <input disabled value="" name="" type="text" placeholder="Speed"
                            class="p-2 rounded-sm" />
                        <input disabled value="" name="" type="text" placeholder="Plump"
                            class="p-2 rounded-sm" />
                    </div>
                    <div class="grid grid-cols-4 gap-2 mb-2 w-full">
                        <input disabled value="" name="" type="text"
                            placeholder="Density @ 15.6 OC: (a)" class="p-2 rounded-sm" />
                        <input disabled value="" name="" type="text" placeholder="Temp. Vol Crop (b)"
                            class="p-2 rounded-sm" />
                        <input disabled value="" name="" type="text"
                            placeholder="Air Temperature (c)" class="p-2 rounded-sm" />
                        <input disabled value="" name="" type="text" placeholder="Output"
                            class="p-2 rounded-sm" />
                    </div>
                    <div class="grid grid-cols-1 mb-2 w-full">
                        <input disabled value="" name="" type="text" class="p-3"
                            placeholder="Description" />
                    </div>
                    <div class="grid grid-cols-2 mb-2 w-full">
                        <input disabled value="" name="" type="text" class="p-2"
                            placeholder="Prime Coat/ Track Coat/ DST/ TST" />
                        <input disabled value="" name="" type="text" class="p-2"
                            placeholder="ISQ No." />
                    </div>
                </div>
                <table class="mt-5 table">
                    <thead>
                        <tr class="w-full">
                            <td class="p-4 w-[85%]">
                                Determinations
                            </td>
                            <td class="p-4 w-[5%] text-center">
                                1
                            </td>
                            <td class="p-4 text-center w-[5%]">
                                2
                            </td>
                            <td class="p-4 text-center w-[5%]">
                                3
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-[85%]">
                                1. Weight of Tray without Bituminous Material (kg)
                            </td>
                            <td class="w-[5%]">
                                <input disabled value="{{ $data->F15 }}" name="F15" type="text"
                                    placeholder="Tested by" class="p-2 rounded-sm" />
                            </td>
                            <td class="w-[5%]">
                                <input disabled value="{{ $data->I15 }}" name="I15" type="text"
                                    placeholder="Tested by" class="p-2 rounded-sm" />
                            </td>
                            <td class="w-[5%]">
                                <input disabled value="{{ $data->L15 }}" name="L15" type="text"
                                    placeholder="Tested by" class="p-2 rounded-sm" />
                            </td>
                        </tr>
                        <tr>
                            <td class="w-[70%]">
                                2. Weight of Tray with Bituminous Material (kg)
                            </td>
                            <td class="w-[5%]">
                                <input disabled value="{{ $data->F16 }}" name="F16" type="text"
                                    placeholder="Tested by" class="p-2 rounded-sm" />
                            </td>
                            <td class="w-[5%]">
                                <input disabled value="{{ $data->I16 }}" name="I16" type="text"
                                    placeholder="Tested by" class="p-2 rounded-sm" />
                            </td>
                            <td class="w-[5%]">
                                <input disabled value="{{ $data->L16 }}" name="L16" type="text"
                                    placeholder="Tested by" class="p-2 rounded-sm" />
                            </td>
                        </tr>
                        <tr>
                            <td class="w-[70%]">
                                3. Weight of Bituminous Material (kg)
                            </td>
                            <td class="w-[5%] p-2 font-bold w-full">
                                {{ $F17 ?? 0 }}
                            </td>

                            <td class="w-[5%] p-2 font-bold">
                                {{ $I17 ?? 0 }}
                            </td>
                            <td class="w-[5%] p-2 font-bold">
                                {{ $L17 ?? 0 }}
                            </td>
                        </tr>
                        <tr>
                            <td class="w-[70%]">
                                4. Area of Tray (m2)
                            </td>
                            <td class="w-[5%]">
                                <input disabled value="{{ $data->F18 }}" name="F18" type="text"
                                    placeholder="Tested by" class="p-2 rounded-sm" />
                            </td>
                            <td class="w-[5%]">
                                <input disabled value="{{ $data->I18 }}" name="I18" type="text"
                                    placeholder="Tested by" class="p-2 rounded-sm" />
                            </td>
                            <td class="w-[5%]">
                                <input disabled value="{{ $data->L18 }}" name="L18" type="text"
                                    placeholder="Tested by" class="p-2 rounded-sm" />
                            </td>
                        </tr>
                        <tr>
                            <td class="w-[70%]">
                                5. Specific Gravity of Bitumen
                            </td>
                            <td class="w-[5%]">
                                <input disabled value="{{ $data->F18 }}" name="F18" type="text"
                                    placeholder="Tested by" class="p-2 rounded-sm" />
                            </td>
                            <td class="w-[5%]">
                                <input disabled value="{{ $data->I18 }}" name="I18" type="text"
                                    placeholder="Tested by" class="p-2 rounded-sm" />
                            </td>
                            <td class="w-[5%]">
                                <input disabled value="{{ $data->L18 }}" name="L18" type="text"
                                    placeholder="Tested by" class="p-2 rounded-sm" />
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="grid grid-cols-6 w-full">
                    <label class="p-3 col-span-3"> 6. Rate of Spray (l/m2)</label>
                    <span class="p-2 font-bold">{{ $F20 }}</span>
                    <span class="p-2 font-bold">{{ $I20 }}</span>
                    <span class="p-2 font-bold">{{ $L20 }}</span>
                </div>
                <div class="grid grid-cols-2 w-full">
                    <label class="p-3"> 7. Average rate of Spray</label>
                    <span class="p-2 font-bold">{{ $F21 }}</span>
                </div>
                <div class="grid grid-cols-2 w-full">
                    <label class="p-3"> 8. Required Rate of Application</label>
                    <span class="p-2 font-bold">{{ $F22 }}</span>
                </div>
                <div class="grid grid-cols-1 w-full my-5">
                    <textarea name="A23" id="" cols="30" rows="10" placeholder="Remarks" class="p-2"></textarea>
                </div>
                <div class="grid grid-cols-6 gap-2 w-full">
                    <input disabled value="" name="" type="text" placeholder="Sampled by"
                        class="p-3 rounded-sm" />
                    <input disabled value="" name="" type="text" placeholder="Date"
                        class="p-3 rounded-sm" />
                    <input disabled value="" name="" type="text" placeholder="Tested by"
                        class="p-3 rounded-sm" />
                    <input disabled value="" name="" type="text" placeholder="Date"
                        class="p-3 rounded-sm" />
                    <input disabled value="" name="" type="text" placeholder="Checked by"
                        class="p-3 rounded-sm" />
                    <input disabled value="" name="" type="text" placeholder="Date"
                        class="p-3 rounded-sm" />
                </div>
                <button type="submit">Submit</button>
                {{ Form::close() }}
            </body>

</html>

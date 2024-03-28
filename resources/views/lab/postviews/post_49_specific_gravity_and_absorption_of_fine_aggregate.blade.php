<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>specificgravity</title>
</head>

<style>
    .yellow-bg {
        background-color: #ffffcc;
    }

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
        /* width: 100%; */
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        /* Adjust width as needed */
        border: 1px solid #000;
        /* Add border */
    }

    th,
    td,
    tr {
        border: 1px solid #000;
        /* Add cell borders */
        padding: 5px;
        /* Add padding */
        text-align: center;
    }

    td input {
        width: 100%;
        padding: 0.2vw;
    }

    table thead th {
        background-color: #f2f2f2;
        text-align: center;
    }

    table tbody td {
        border: black;
    }

    ul li {
        text-align: center;
    }

    table td input {
        background: #ffffcc;
    }

    table #result {
        border: 1px solid gray;
        background: rgb(150, 150, 150);
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
        <div class="w-[95%] p-[3%] shadow-2xl">
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
                    <h1 class="text-[1.5rem] font-bold">SPECIFIC GRAVITY AND ABSORPTION OF FINE AGGREGATE (ASTM-C127,
                        128) </h1>
                </div>
                <div class="flex flex-col">
                    <input type="text" placeholder="Doc#">
                    <input type="text" placeholder="Rev">
                    <input type="date" placeholder="Date">
                    <input type="text" placeholder="Page">
                </div>
            </header>

            <body class="flex flex-col">
                <div class="w-full my-5">
                    <!-- {{ Form::open(['route' => 'postasphalt', 'method' => 'POST', 'class' => '', 'id' => '']) }}
                    @csrf -->
                    <div class="grid grid-cols-3 gap-2 mb-2 w-full">
                        <input type="text" placeholder="Contract No." class="p-2 rounded-sm yellow-bg " />
                        <input type="text" placeholder="Contractor" class="p-2 rounded-sm yellow-bg " />
                        <input type="text" placeholder="Location" class="p-2 rounded-sm yellow-bg " />
                        <input type="text" placeholder="Lab No." class="p-2 rounded-sm yellow-bg " />
                        <input type="text" placeholder="Description" class="p-2 rounded-sm yellow-bg " />
                        <input type="date" placeholder="Date" class="p-2 rounded-sm " />

                    </div>
                </div>

                <!-- --------------table start  -->
                <table>
                    <thead>
                        <tr>
                            <th rowspan="2" colspan="5">
                                DETERMTNATTON NO.
                            </th>
                        </tr>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 1.</td>
                            <td colspan="4">
                                Pycnometer no.
                            </td>
                            <td><input type="text" name="F8" id=""></td>
                            <td><input type="text" name="I8" id=""></td>
                            <td><input type="text" name="L8" id=""></td>
                        </tr>
                        <tr>
                            <td> 2.</td>
                            <td colspan="4">
                                Temperature of water (°C)
                            </td>
                            <td><input type="text" name="E9" id=""></td>
                            <td><input type="text" name="I9" id=""></td>
                            <td><input type="text" name="L9" id=""></td>
                        </tr>
                        <tr>
                            <td> 3.</td>
                            <td colspan="4">
                                Weight of oven dry - #4 sample in air (W1) (g)
                            </td>
                            <td><input type="text" name="F10" id=""></td>
                            <td><input type="text" name="I10" id=""></td>
                            <td><input type="text" name="L10" id=""></td>
                        </tr>
                        <tr>
                            <td> 4.</td>
                            <td colspan="4">
                                Weight of saturated surface dry (SSD) sample in air,(W2) (g)
                            </td>
                            <td><input type="text" name="F11" id=""></td>
                            <td><input type="text" name="I11" id=""></td>
                            <td><input type="text" name="L11" id=""></td>
                        </tr>
                        <tr>
                            <td> 5.</td>
                            <td colspan="4">
                                Weight of pycnometer filled with water(W2)(g)
                            </td>
                            <td><input type="text" name="F12" id=""></td>
                            <td><input type="text" name="I12" id=""></td>
                            <td><input type="text" name="L12" id=""></td>
                        </tr>
                        <tr>
                            <td> 6.</td>
                            <td colspan="4">
                                Weight of pycnometer filled with SSD sample & water (W4)
                            </td>
                            <td><input type="text" name="F13" id=""></td>
                            <td><input type="text" name="I13" id=""></td>
                            <td><input type="text" name="L13" id=""></td>
                        </tr>
                        <tr>
                            <td> 7.</td>
                            <td colspan="4">
                                Bulk SG (oven dry),-----> [W1/(W2+W3)-W4]
                            </td>
                            <td><input disabled type="text" name="F14" id="result"></td>
                            <td><input disabled type="text" name="I14" id="result"></td>
                            <td><input disabled type="text" name="L14" id="result"></td>
                        </tr>
                        <tr>
                            <td> 8.</td>
                            <td colspan="4">
                                Bulk SG (SSD), -----> [W2/(W2+W3)-W4]
                            </td>
                            <td><input disabled type="text" name="F15" id="result"></td>
                            <td><input disabled type="text" name="I15" id="result"></td>
                            <td><input disabled type="text" name="L15" id="result"></td>
                        </tr>
                        <tr>
                            <td> 9.</td>
                            <td colspan="4">
                                Apparent SG,-----> [W1/(W2+W3)-W4]
                            </td>
                            <td><input disabled type="text" name="F16" id="result"></td>
                            <td><input disabled type="text" name="I16" id="result"></td>
                            <td><input disabled type="text" name="L16" id="result"></td>
                        </tr>
                        <tr>
                            <td> 10.</td>
                            <td colspan="4">
                                Absorption,------(W2-W1)
                            </td>
                            <td><input disabled type="text" name="F17" id="result"></td>
                            <td><input disabled type="text" name="I17" id="result"></td>
                            <td><input disabled type="text" name="L17" id="result"></td>
                        </tr>
                        <tr>
                            <td> 11.</td>
                            <td colspan="4">
                                Absorption ------>(W2-W1/W1)%
                            </td>
                            <td><input disabled type="text" name="F18" id="result"></td>
                            <td><input disabled type="text" name="I18" id="result"></td>
                            <td><input disabled type="text" name="L18" id="result"></td>
                        </tr>
                        <tr>
                            <td> 12.</td>
                            <td colspan="4">
                                Corrected Bulk SG (oven dry) at 20oC
                            </td>
                            <td colspan="3"><input disabled type="text" name="F19" id="result"></td>
                            <!-- <td><input type="text" name="G8" id=""></td>
                            <td><input type="text" name="I8" id=""></td> -->
                        </tr>
                        <tr>
                            <td> 13.</td>
                            <td colspan="4">
                                Corrected Bulk SG (SSD) at 20oC
                            </td>
                            <td colspan="3"><input disabled type="text" name="F20" id="result"></td>
                            <!-- <td><input type="text" name="G8" id=""></td>
                            <td><input type="text" name="I8" id=""></td> -->
                        </tr>
                        <tr>
                            <td> 14.</td>
                            <td colspan="4">
                                Corrected Apparent SG at 20oC
                            </td>
                            <td colspan="3"><input disabled type="text" name="F21" id="result"></td>
                            <!-- <td><input type="text" name="G8" id=""></td>
                            <td><input type="text" name="I8" id=""></td> -->
                        </tr>

                    </tbody>
                </table>

                <div class="grid grid-cols-1 w-full my-5">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Remarks" class="p-2"></textarea>
                </div>

                <div class="grid grid-cols-4 my-5 gap-2 w-full">
                    <input name="" type="text" placeholder="Prepared by" class="p-3 rounded-sm" />
                    <input name="" type="date" placeholder="Date" class="p-3 rounded-sm" />
                    <input name="" type="text" placeholder="Checked by" class="p-3 rounded-sm" />
                    <input name="" type="date" placeholder="Date" class="p-3 rounded-sm" />
                </div>

                <Button type="submit">Submit</Button>
                {{ Form::close() }}

            </body>
            <script type="text/javascript">
                const tableData = [{
                        title: 'title'
                    },
                    {
                        title: 'title'
                    },
                    {
                        title: 'title'
                    },
                    {
                        title: 'title'
                    },
                    {
                        title: 'title'
                    },
                ]
                const elemAppender = (Data) => {
                    const elem = document.getElementById('tableRow');
                    const appending = elem.appendChild(
                        Data.map(td => {
                            `<td class="w-[70%]">
                            ${td.title}
                        </td>
                        `
                        })
                    )
                    return appending;
                }
                elemAppender(tableData);
            </script>
        </div>
    </div>
</body>
</body>

</html>

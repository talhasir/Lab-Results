<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/app.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="flex justify-center align-center">
        <div class="w-[90%] p-[3%] shadow-2xl">
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
              <h1 class="lg:text-3xl md:text-base sm:text-sm font-bold">BRICK TESTING (ASTM C67)</h1>
            </div>
            <div class="flex flex-col">
                <input
                disabled type="text" placeholder="Doc#">
              <input
                disabled type="text" placeholder="Rev" />
              <input
                disabled type="text" placeholder="Date" />
              <input
                disabled type="text" placeholder="Page" />
            </div>
          </header>
          <body class="flex flex-col">
            <div class="w-full my-5">
              <div class="grid grid-cols-4 gap-2 mb-2 w-full">
                <input
                    value="{{$data->A5}}"
                    disabled
                    name='A5'
                  type="text"
                  placeholder="Contract No."
                  class="p-2 rounded-sm "

                />
                <input
                    value="{{$data->D5}}"
                    disabled
                    name='D5'
                  type="text"
                  placeholder="Contractor"
                  class="p-2 rounded-sm "

                />
                <input
                    value="{{$data->I5}}"
                    disabled
                    name='I5'
                  type="text"
                  placeholder="Location"
                  class="p-2 rounded-sm "

                />
                <input
                    value="{{$data->Q5}}"
                    disabled
                    name='Q5'
                  type="text"
                  placeholder="Lab No:"
                  class="p-2 rounded-sm "

                />
              </div>
              <div class="grid grid-cols-2 gap-2 mb-2 w-full">
                <input
                    value="{{$data->A6}}"
                    disabled
                    name='A6'
                  type="text"
                  placeholder="Source"
                  class="p-2 rounded-sm "

                />
                <input
                    value="{{$data->I6}}"
                    disabled
                    name='I6'
                  type="text"
                  placeholder="Date of Sampling"
                  class="p-2 rounded-sm  flex-2"

                />
              </div>
            </div>
            <div class="mt-5 table">
              <div class="grid grid-cols-6 width-full">
                    <span class="p-4">
                      No
                    </span>
                    <span class="p-4">
                      Weight Oven Dry (g)
                    </span>
                    <span class="p-4">
                      SSD(g)
                    </span>
                    <span class="p-4">
                      Weight of Water
                    </span>
                    <span class="p-4">
                      Absorption %
                    </span>
                    <span class="p-4">
                     Average Absorption
                    </span>

                </div>

                  <div class="grid grid-cols-6 width-full">
                       <input
                        value="{{$data->A8}}"
                        disabled
                        name='A8'
                        type="text"
                        placeholder="No."
                        class="p-2 rounded-sm "
                        />
                       <input
                        value="{{$data->B8}}"
                        disabled
                        name='B8'
                        type="text"
                        placeholder="Weight Oven Dry (g)"
                        class="p-2 rounded-sm "
                        />
                       <input
                        value="{{$data->C8}}"
                        disabled
                        name='C8'
                        type="text"
                        placeholder="Tested by"
                        class="p-2 rounded-sm "
                        />
                       <input
                        value="{{$data->E8}}"
                        disabled
                        name='E8'
                        type="text"
                        placeholder="Tested by"
                        class="p-2 rounded-sm "
                        />

                       <span class="p-2 font-bold">{{$G8}}</span>

                        <span class="p-2 font-bold">{{$H8}}</span>

                </div>
                  <div class="grid grid-cols-6 width-full">
                       <input
                        value="{{$data->A9}}"
                        disabled
                        name='A9'
                        type="text"
                        placeholder="No."
                        class="p-2 rounded-sm "
                        />
                       <input
                        value="{{$data->B9}}"
                        disabled
                        name='B9'
                        type="text"
                        placeholder="Weight Oven Dry (g)"
                        class="p-2 rounded-sm "
                        />
                       <input
                        value="{{$data->C9}}"
                        disabled
                        name='C9'
                        type="text"
                        placeholder="Tested by"
                        class="p-2 rounded-sm "
                        />
                       <input
                        value="{{$data->E9}}"
                        disabled
                        name='E9'
                        type="text"
                        placeholder="Tested by"
                        class="p-2 rounded-sm "
                        />

                        <span class="p-2 font-bold">{{$G9}}</span>

                        <span class="p-2 font-bold">{{$H8}}</span>

                </div>
                  <div class="grid grid-cols-6 width-full">
                       <input
                        value="{{$data->A10}}"
                        disabled
                        name='A10'
                        type="text"
                        placeholder="No."
                        class="p-2 rounded-sm "
                        />
                       <input
                        value="{{$data->B10}}"
                        disabled
                        name='B10'
                        type="text"
                        placeholder="Weight Oven Dry (g)"
                        class="p-2 rounded-sm "
                        />
                       <input
                        value="{{$data->C10}}"
                        disabled
                        name='C10'
                        type="text"
                        placeholder="Tested by"
                        class="p-2 rounded-sm "
                        />
                       <input
                        value="{{$data->E10}}"
                        disabled
                        name='E10'
                        type="text"
                        placeholder="Tested by"
                        class="p-2 rounded-sm "
                        />

                        <span class="p-2 font-bold">{{$G10}}</span>
                        <span class="p-2 font-bold">{{$H8}}</span>

                </div>
                  <div class="grid grid-cols-6 width-full">
                       <input
                        value="{{$data->A11}}"
                        disabled
                        name='A11'
                        type="text"
                        placeholder="No."
                        class="p-2 rounded-sm "
                        />
                       <input
                        value="{{$data->B11}}"
                        disabled
                        name='B11'
                        type="text"
                        placeholder="Weight Oven Dry (g)"
                        class="p-2 rounded-sm "
                        />
                       <input
                        value="{{$data->C11}}"
                        disabled
                        name='C11'
                        type="text"
                        placeholder="Tested by"
                        class="p-2 rounded-sm "
                        />
                       <input
                        value="{{$data->E11}}"
                        disabled
                        name='E11'
                        type="text"
                        placeholder="Tested by"
                        class="p-2 rounded-sm "
                        />

                        <span class="p-2 font-bold">{{$G11}}</span>
                        <span class="p-2 font-bold">{{$H8}}</span>

                </div>
                  <div class="grid grid-cols-6 width-full">
                       <input
                        value="{{$data->A12}}"
                        disabled
                        name='A12'
                        type="text"
                        placeholder="No."
                        class="p-2 rounded-sm "
                        />
                       <input
                        value="{{$data->B12}}"
                        disabled
                        name='B12'
                        type="text"
                        placeholder="Weight Oven Dry (g)"
                        class="p-2 rounded-sm "
                        />
                       <input
                        value="{{$data->C12}}"
                        disabled
                        name='C12'
                        type="text"
                        placeholder="Tested by"
                        class="p-2 rounded-sm "
                        />
                       <input
                        value="{{$data->E12}}"
                        disabled
                        name='E12'
                        type="text"
                        placeholder="Tested by"
                        class="p-2 rounded-sm "
                        />

                        <span class="p-2 font-bold">{{$G12}}</span>
                        <span class="p-2 font-bold">{{$H8}}</span>

                </div>
                  <div class="grid grid-cols-6 width-full">
                       <input
                        value="{{$data->A13}}"
                        disabled
                        name='A13'
                        type="text"
                        placeholder="No."
                        class="p-2 rounded-sm "
                        />
                       <input
                        value="{{$data->B13}}"
                        disabled
                        name='B13'
                        type="text"
                        placeholder="Weight Oven Dry (g)"
                        class="p-2 rounded-sm "
                        />
                       <input
                        value="{{$data->C13}}"
                        disabled
                        name='C13'
                        type="text"
                        placeholder="Tested by"
                        class="p-2 rounded-sm "
                        />
                       <input
                        value="{{$data->E13}}"
                        disabled
                        name='E13'
                        type="text"
                        placeholder="Tested by"
                        class="p-2 rounded-sm "
                        />

                        <span class="p-2 font-bold">{{$G13}}</span>
                        <span class="p-2 font-bold">{{$H8}}</span>

                </div>

            </div>

            <div class="mt-3 table">
                <div class="grid grid-cols-5 w-full">
                    <span class="p-4">
                        Dimensions (cm)
                      </span>
                      <span class="p-4">
                        Area (cm2)
                      </span>
                      <span class="p-4">
                        Load (kg)
                      </span>
                      <span class="p-4">
                        Compressive Strength (Kg/cm2)
                      </span>
                      <span class="p-4">
                        Average
                      </span>
                </div>

                <div class="grid grid-cols-5 w-full">
                    <input
                        value="{{$data->J8}}"
                    disabled
                    name='J8'
                    type="text"
                    placeholder="No."
                    class="p-2 rounded-sm "
                    />
                   <input
                    value="{{$data->K8}}"
                    disabled
                    name='K8'
                    type="text"
                    placeholder="Weight Oven Dry (g)"
                    class="p-2 rounded-sm "
                    />
                   <input
                    value="{{$data->M8}}"
                    disabled
                    name='M8'
                    type="text"
                    placeholder="Tested by"
                    class="p-2 rounded-sm "
                    />

                    <span class="p-2 font-bold">{{$N8}}</span>
                    <span class="p-2 font-bold">{{$Q8}}</span>

                </div>
                <div class="grid grid-cols-5 w-full">
                    <input
                        value="{{$data->J9}}"
                    disabled
                    name='J9'
                    type="text"
                    placeholder="No."
                    class="p-2 rounded-sm "
                    />
                   <input
                    value="{{$data->K9}}"
                    disabled
                    name='K9'
                    type="text"
                    placeholder="Weight Oven Dry (g)"
                    class="p-2 rounded-sm "
                    />
                   <input
                    value="{{$data->M9}}"
                    disabled
                    name='M9'
                    type="text"
                    placeholder="Tested by"
                    class="p-2 rounded-sm "
                    />

                    <span class="p-2 font-bold">{{$N9}}</span>
                    <span class="p-2 font-bold">{{$Q8}}</span>

                </div>
                <div class="grid grid-cols-5 w-full">
                    <input
                        value="{{$data->J10}}"
                    disabled
                    name='J10'
                    type="text"
                    placeholder="No."
                    class="p-2 rounded-sm "
                    />
                   <input
                    value="{{$data->K10}}"
                    disabled
                    name='K10'
                    type="text"
                    placeholder="Weight Oven Dry (g)"
                    class="p-2 rounded-sm "
                    />
                   <input
                    value="{{$data->M10}}"
                    disabled
                    name='M10'
                    type="text"
                    placeholder="Tested by"
                    class="p-2 rounded-sm "
                    />

                    <span class="p-2 font-bold">{{$N10}}</span>
                    <span class="p-2 font-bold">{{$Q8}}</span>

                </div>
                <div class="grid grid-cols-5 w-full">
                    <input
                        value="{{$data->J11}}"
                    disabled
                    name='J11'
                    type="text"
                    placeholder="No."
                    class="p-2 rounded-sm "
                    />
                   <input
                    value="{{$data->K11}}"
                    disabled
                    name='K11'
                    type="text"
                    placeholder="Weight Oven Dry (g)"
                    class="p-2 rounded-sm "
                    />
                   <input
                    value="{{$data->M11}}"
                    disabled
                    name='M11'
                    type="text"
                    placeholder="Tested by"
                    class="p-2 rounded-sm "
                    />

                    <span class="p-2 font-bold">{{$N11}}</span>
                    <span class="p-2 font-bold">{{$Q8}}</span>

                </div>
                <div class="grid grid-cols-5 w-full">
                    <input
                        value="{{$data->J12}}"
                    disabled
                    name='J12'
                    type="text"
                    placeholder="No."
                    class="p-2 rounded-sm "
                    />
                   <input
                    value="{{$data->K12}}"
                    disabled
                    name='K12'
                    type="text"
                    placeholder="Weight Oven Dry (g)"
                    class="p-2 rounded-sm "
                    />
                   <input
                    value="{{$data->M12}}"
                    disabled
                    name='M12'
                    type="text"
                    placeholder="Tested by"
                    class="p-2 rounded-sm "
                    />

                    <span class="p-2 font-bold">{{$N12}}</span>
                    <span class="p-2 font-bold">{{$Q8}}</span>

                </div>
                <div class="grid grid-cols-5 w-full">
                    <input
                        value="{{$data->J13}}"
                    disabled
                    name='J13'
                    type="text"
                    placeholder="No."
                    class="p-2 rounded-sm "
                    />
                   <input
                    value="{{$data->K13}}"
                    disabled
                    name='K13'
                    type="text"
                    placeholder="Weight Oven Dry (g)"
                    class="p-2 rounded-sm "
                    />
                   <input
                    value="{{$data->M13}}"
                    disabled
                    name='M13'
                    type="text"
                    placeholder="Tested by"
                    class="p-2 rounded-sm "
                    />

                    <span class="p-2 font-bold"></span>
                    <span class="p-2 font-bold">{{$Q8}}</span>

                </div>

            </div>
            <div class="grid grid-cols-1 w-full my-5">
                <textarea
                  id=""
                  cols="30"
                  rows="10"
                  placeholder="Remarks"
                  class="p-2"
                >
                {{$data->A14}}
            </textarea>
              </div>
              <div class="grid grid-cols-6 gap-2 w-full">
                <input
                    value="{{$data->A15}}"
                    required
                    name='A15'
                  type="text"
                  placeholder="Sampled by"
                  class="p-3 rounded-sm"

                />
                <input
                    value="{{$data->E15}}"
                    required
                    name='E15'
                  type="date"
                  placeholder="Date"
                  class="p-3 rounded-sm"

                />
                <input
                    value="{{$data->F15}}"
                    required
                    name='F15'
                  type="text"
                  placeholder="Tested by"
                  class="p-3 rounded-sm"
                />
                <input
                    value="{{$data->K15}}"
                    required
                    name='K15'
                  type="date"
                  placeholder="Date"
                  class="p-3 rounded-sm"
                />
                <input
                    value="{{$data->L15}}"
                    required
                    name='L15'
                  type="text"
                  placeholder="Checked by"
                  class="p-3 rounded-sm"
                />
                <input
                    value="{{$data->Q15}}"
                    required
                    name='Q15'
                  type="date"
                  placeholder="Date"
                  class="p-3 rounded-sm"
                />
              </div>
          </body>
          <script type="text/javascript">
              const divData = [
                  {title: 'title'},
                  {title: 'title'},
                  {title: 'title'},
                  {title: 'title'},
                  {title: 'title'},
                ]

        const elemAppender = (Data) => {
          const elem = document.getElementById('divRow');
          const appending = Data.map(span => {
            const newSpan = document.createElement('span');
              newSpan.className = 'w-[70%]';
              newSpan.textContent = span.title;
              return newSpan;
         });
        appending.forEach(span => elem.appendChild(span));
        return appending;
    };
        elemAppender(divData);
          </script>
        </div>
    </div>
</body>
</body>
</html>

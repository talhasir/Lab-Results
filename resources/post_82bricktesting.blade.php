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
    span, input, span, textarea, label, header div{
      border: 1px solid gray;
    }
    div{
      width: 100%;
    }
  </style>
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
                required type="text" placeholder="Doc#">
              <input
                required type="text" placeholder="Rev" />
              <input
                required type="date" placeholder="Date" />
              <input
                required type="text" placeholder="Page" />
            </div>
          </header>
          <body class="flex flex-col">
            {{ Form::open(['route' => 'post_82_Brick_Testing', 'method' => 'POST', 'class' => '', 'id' => '']) }}
            <div class="w-full my-5">
              <div class="grid grid-cols-4 gap-2 mb-2 w-full">
                <input
                    required
                    name='A5'
                  type="text"
                  placeholder="Contract No."
                  class="p-2 rounded-sm"

                />
                <input
                    required
                    name='D5'
                  type="text"
                  placeholder="Contractor"
                  class="p-2 rounded-sm"

                />
                <input
                    required
                    name='I5'
                  type="text"
                  placeholder="Location"
                  class="p-2 rounded-sm"

                />
                <input
                    required
                    name='Q5'
                  type="text"
                  placeholder="Lab No:"
                  class="p-2 rounded-sm"

                />
              </div>
              <div class="grid grid-cols-2 gap-2 mb-2 w-full">
                <input
                    required
                    name='A6'
                  type="text"
                  placeholder="Source"
                  class="p-2 rounded-sm"

                />
                <input
                    required
                    name='I6'
                  type="date"
                  placeholder="Date of Sampling"
                  class="p-2 rounded-sm flex-2"

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
                        required
                        name='A8'
                        type="text"
                        class="p-2 rounded-sm"
                        />
                       <input
                        required
                        name='B8'
                        type="text"
                        class="p-2 rounded-sm"
                        />
                       <input
                        required
                        name='C8'
                        type="text"
                        class="p-2 rounded-sm"
                        />
                       <input
                        required
                        name='E8'
                        type="text"
                        class="p-2 rounded-sm"
                        />

                       <span class="p-2 font-bold"></span>

                        <span class="p-2 font-bold"></span>

                </div>
                  <div class="grid grid-cols-6 width-full">
                       <input
                        required
                        name='A9'
                        type="text"
                        class="p-2 rounded-sm"
                        />
                       <input
                        required
                        name='B9'
                        type="text"
                        class="p-2 rounded-sm"
                        />
                       <input
                        required
                        name='C9'
                        type="text"
                        class="p-2 rounded-sm"
                        />
                       <input
                        required
                        name='E9'
                        type="text"
                        class="p-2 rounded-sm"
                        />

                       <span class="p-2 font-bold"></span>

                        <span class="p-2 font-bold"></span>

                </div>
                  <div class="grid grid-cols-6 width-full">
                       <input
                        required
                        name='A10'
                        type="text"
                        class="p-2 rounded-sm"
                        />
                       <input
                        required
                        name='B10'
                        type="text"
                        class="p-2 rounded-sm"
                        />
                       <input
                        required
                        name='C10'
                        type="text"
                        class="p-2 rounded-sm"
                        />
                       <input
                        required
                        name='E10'
                        type="text"
                        class="p-2 rounded-sm"
                        />

                       <span class="p-2 font-bold"></span>

                        <span class="p-2 font-bold"></span>

                </div>
                  <div class="grid grid-cols-6 width-full">
                       <input
                        required
                        name='A11'
                        type="text"
                        class="p-2 rounded-sm"
                        />
                       <input
                        required
                        name='B11'
                        type="text"
                        class="p-2 rounded-sm"
                        />
                       <input
                        required
                        name='C11'
                        type="text"
                        class="p-2 rounded-sm"
                        />
                       <input
                        required
                        name='E11'
                        type="text"
                        class="p-2 rounded-sm"
                        />

                       <span class="p-2 font-bold"></span>

                        <span class="p-2 font-bold"></span>

                </div>
                  <div class="grid grid-cols-6 width-full">
                       <input
                        required
                        name='A12'
                        type="text"
                        class="p-2 rounded-sm"
                        />
                       <input
                        required
                        name='B12'
                        type="text"
                        class="p-2 rounded-sm"
                        />
                       <input
                        required
                        name='C12'
                        type="text"
                        class="p-2 rounded-sm"
                        />
                       <input
                        required
                        name='E12'
                        type="text"
                        class="p-2 rounded-sm"
                        />

                       <span class="p-2 font-bold"></span>

                        <span class="p-2 font-bold"></span>

                </div>
                  <div class="grid grid-cols-6 width-full">
                       <input
                        required
                        name='A13'
                        type="text"
                        class="p-2 rounded-sm"
                        />
                       <input
                        required
                        name='B13'
                        type="text"
                        class="p-2 rounded-sm"
                        />
                       <input
                        required
                        name='C13'
                        type="text"
                        class="p-2 rounded-sm"
                        />
                       <input
                        required
                        name='E13'
                        type="text"
                        class="p-2 rounded-sm"
                        />

                       <span class="p-2 font-bold"></span>

                        <span class="p-2 font-bold"></span>

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
                    required
                    name='J8'
                    type="text"
                    class="p-2 rounded-sm"
                    />
                   <input
                    required
                    name='K8'
                    type="text"
                    class="p-2 rounded-sm"
                    />
                   <input
                    required
                    name='M8'
                    type="text"
                    class="p-2 rounded-sm"
                    />

                    <span class="p-2 font-bold"></span>

                    <span class="p-2 font-bold"></span>

                </div>
                <div class="grid grid-cols-5 w-full">
                    <input
                    required
                    name='J9'
                    type="text"
                    class="p-2 rounded-sm"
                    />
                   <input
                    required
                    name='K9'
                    type="text"
                    class="p-2 rounded-sm"
                    />
                   <input
                    required
                    name='M9'
                    type="text"
                    class="p-2 rounded-sm"
                    />

                    <span class="p-2 font-bold"></span>

                    <span class="p-2 font-bold"></span>

                </div>
                <div class="grid grid-cols-5 w-full">
                    <input
                    required
                    name='J10'
                    type="text"
                    class="p-2 rounded-sm"
                    />
                   <input
                    required
                    name='K10'
                    type="text"
                    class="p-2 rounded-sm"
                    />
                   <input
                    required
                    name='M10'
                    type="text"
                    class="p-2 rounded-sm"
                    />

                    <span class="p-2 font-bold"></span>

                    <span class="p-2 font-bold"></span>

                </div>
                <div class="grid grid-cols-5 w-full">
                    <input
                    required
                    name='J11'
                    type="text"
                    class="p-2 rounded-sm"
                    />
                   <input
                    required
                    name='K11'
                    type="text"
                    class="p-2 rounded-sm"
                    />
                   <input
                    required
                    name='M11'
                    type="text"
                    class="p-2 rounded-sm"
                    />

                    <span class="p-2 font-bold"></span>

                    <span class="p-2 font-bold"></span>

                </div>
                <div class="grid grid-cols-5 w-full">
                    <input
                    required
                    name='J12'
                    type="text"
                    class="p-2 rounded-sm"
                    />
                   <input
                    required
                    name='K12'
                    type="text"
                    class="p-2 rounded-sm"
                    />
                   <input
                    required
                    name='M12'
                    type="text"
                    class="p-2 rounded-sm"
                    />

                    <span class="p-2 font-bold"></span>

                    <span class="p-2 font-bold"></span>

                </div>
                <div class="grid grid-cols-5 w-full">
                    <input
                    required
                    name='J13'
                    type="text"
                    class="p-2 rounded-sm"
                    />
                   <input
                    required
                    name='K13'
                    type="text"
                    class="p-2 rounded-sm"
                    />
                   <input
                    required
                    name='M13'
                    type="text"
                    class="p-2 rounded-sm"
                    />

                    <span class="p-2 font-bold"></span>

                    <span class="p-2 font-bold"></span>

                </div>

            </div>
            <div class="grid grid-cols-1 w-full my-5">
                <textarea
                  name="A14"
                  id=""
                  cols="30"
                  rows="10"
                  placeholder="Remarks"
                  class="p-2"
                ></textarea>
              </div>
              <div class="grid grid-cols-6 gap-2 w-full">
                <input
                    required
                    name='A15'
                  type="text"
                  placeholder="Sampled by"
                  class="p-3 rounded-sm"

                />
                <input
                    required
                    name='E15'
                  type="date"
                  placeholder="Date"
                  class="p-3 rounded-sm"

                />
                <input
                    required
                    name='F15'
                  type="text"
                  placeholder="Tested by"
                  class="p-3 rounded-sm"
                />
                <input
                    required
                    name='K15'
                  type="date"
                  placeholder="Date"
                  class="p-3 rounded-sm"
                />
                <input
                    required
                    name='L15'
                  type="text"
                  placeholder="Checked by"
                  class="p-3 rounded-sm"
                />
                <input
                    required
                    name='Q15'
                  type="date"
                  placeholder="Date"
                  class="p-3 rounded-sm"
                />
              </div>
              <button type="submit">Submit</button>
              {{ Form::close() }}
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

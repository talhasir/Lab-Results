<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="/app.css" rel="stylesheet">
  </head>
  <style>
    td, input, span, textarea{
      border: 1px solid gray;
    }
    table{
      width: 100%;
    }
  </style>
  <body>

    <div class="flex justify-center align-center">
      <div class="w-[70%] p-[3%]">
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
            <input
            disabled type="text" placeholder="Doc#">
            <input
            disabled type="text" placeholder="Rev">
            <input
            disabled type="text" placeholder="Date">
            <input
            disabled type="text" placeholder="Page">
          </div>
        </header>
        <body class="flex flex-col">
          <div class="w-full my-5">
            <div class="grid grid-cols-4 gap-2 mb-2 w-full">
              <input
              disabled
                type="text"
                placeholder="BQQ No:"
                class="p-2 rounded-sm"
                
              />
              <input
              disabled
                type="text"
                placeholder="Contractor:"
                class="p-2 rounded-sm"
                
              />
              <input
              disabled
                type="text"
                placeholder="Project:"
                class="p-2 rounded-sm"
                
              />
              <input
              disabled
                type="text"
                placeholder="Lab No:"
                class="p-2 rounded-sm"
                
              />
            </div>
            <div class="grid grid-cols-1 gap-2 mb-2 w-full">
              <input
              disabled
                type="text"
                placeholder="Concrete Plant Location:"
                class="p-2 rounded-sm"
                
              />
            </div>
            <div class="grid grid-cols-3 gap-2 mb-2 w-full">
              <input
              disabled
                type="text"
                placeholder="Concrete Class"
                class="p-2 rounded-sm"
                
              />
              <input
              disabled
                type="text"
                placeholder="Date Moulded"
                class="p-2 rounded-sm"
                
              />
              <input
              disabled
                type="text"
                placeholder="Check Request No"
                class="p-2 rounded-sm"
                
              />
            </div>
            <div class="grid grid-cols-3 gap-2 mb-2 w-full">
              <input
              disabled
                type="text"
                placeholder="Phase"
                class="p-2 rounded-sm"
                
              />
              <input
              disabled
                type="text"
                placeholder="Street"
                class="p-2 rounded-sm"
                
              />
              <input
              disabled
                type="text"
                placeholder="Road"
                class="p-2 rounded-sm flex-2"
                
              />
            </div>
          </div>
          <div class="grid grid-cols-1 mb-2 w-full">
            <span class="p-3 bg-blue-100" 
              >Curing Laboratory / Fields</span
            >
          </div>
  
          <table class="mt-5 table">
            <thead>
              <tr class="w-full">
                <td class="p-4 w-[10%]">
                  Cylinder No.
                </td>
                <td class="p-4 w-[10%]" >
                  Testing Date
                </td>
                <td class="p-4 w-[10%]" >
                  Age
                </td>
                <td class="p-4 w-[21%]" >
                  Dimensions(cm)
                </td>
                <td class="p-4 w-[9%]" >
                  Area(cm2)
                </td>
                <td class="p-4 w-[10%]" >
                  Type of Fracture
                </td>
                <td class="p-4 w-[9%]" >
                  Load(Kg)
                </td>
                <td class="p-4 w-[21%]" >
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
                  <input
                  disabled
                    type="text"
                    placeholder="Testing Data"
                    class="p-2 w-full"
                    id='b-11'
                    name='B11'
                    value='{{$data->B11 ?? ""}}'
                  />
                </td>
                
                <td class="w-[10%]">
                  <div class='p-2 font-bold' id='gray_col'>7-Days</div>
                </td>
                
                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="Dimensions (cm)"
                    class="p-2 w-full"
                    name='G11'
                    value='{{$data->G11 ?? ""}}'
                  />
                </td>

                <td class="w-[10%]">
                  <div class='p-2 font-bold' id='gray_col'>182.4</div>
                </td>

                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="Type of Fracture"
                    class="p-2 w-full"
                    name='N11'
                    value='{{$data->N11 ?? ""}}'
                  />
                </td>

                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="Load (kg)"
                    class="p-2 w-full"
                    name='Q11'
                    value='{{$data->Q11 ?? ""}}'
                  />
                </td>

                <td class="w-[10%]">
                  <div class='p-2 font-bold' id='gray_col'>
                    {{$data->Q11/182.4*14.223 ?? 0}}
                  </div>
                </td>

              </tr>
            <tr>
                <td class="w-[10%]">
                  <div class='p-2 text-center'>2</div>
                </td>

                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="Testing Data"
                    class="p-2 w-full"
                    id='b-11'
                    name='B12'
                    value='{{$data->B12 ?? ""}}'
                  />
                </td>
                
                <td class="w-[10%]">
                  <div class='p-2 font-bold' id='gray_col'>7-Days</div>
                </td>
                
                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="Dimensions (cm)"
                    class="p-2 w-full"
                    name='G12'
                    value='{{$data->G12 ?? ""}}'
                  />
                </td>

                <td class="w-[10%]">
                  <div class='p-2 font-bold' id='gray_col'>182.4</div>
                </td>

                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="Type of Fracture"
                    class="p-2 w-full"
                    name='N12'
                    value='{{$data->N12 ?? ""}}'
                  />
                </td>

                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="Load (kg)"
                    class="p-2 w-full"
                    name='Q12'
                    value='{{$data->Q12 ?? ""}}'
                  />
                </td>

                <td class="w-[10%]">
                  <div class='p-2 font-bold' id='gray_col'>
                  {{$data->Q12/182.4*14.223 ?? 0}}
                  </div>
                </td>

              </tr>
            <tr>
                <td class="w-[10%]">
                  <div class='p-2 text-center'>3</div>
                </td>

                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="Testing Data"
                    class="p-2 w-full"
                    name='B13'
                    value='{{$data->B13 ?? ""}}'
                  />
                </td>
                
                <td class="w-[10%]">
                  <div class='p-2 font-bold' id='gray_col'>7-Days</div>
                </td>
                
                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="Dimensions (cm)"
                    class="p-2 w-full"
                    name='G13'
                    value='{{$data->G13 ?? ""}}'
                  />
                </td>

                <td class="w-[10%]">
                  <div class='p-2 font-bold' id='gray_col'>182.4</div>
                </td>

                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="Type of Fracture"
                    class="p-2 w-full"
                    name='N13'
                    value='{{$data->N13 ?? ""}}'
                  />
                </td>

                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="Load (kg)"
                    class="p-2 w-full"
                    name='Q13'
                    value='{{$data->Q13 ?? ""}}'
                  />
                </td>

                <td class="w-[10%]">
                  <div class='p-2 font-bold' id='gray_col'>
                  {{$data->Q13/182.4*14.223 ?? 0}}
                  </div>
                </td>

              </tr>
            </tbody>
          </table>

          <div class="grid grid-cols-6 w-full my-5">
            <input
            disabled
              type="text"
              placeholder="Tested by"
              class="p-2 rounded-sm gap-2 bg-[#ffffcc]"
              id="a-20"
              name='A14'
                    value='{{$data->A14 ?? ""}}'
            />

            <input
            disabled
              type="text"
              placeholder="Date"
              class="p-2 rounded-sm"
              id="c-20"
              name='B14'
              value='{{$data->B14 ?? ""}}'
            />

            <span class='p-3'>
              Average for 7 days:
            </span>
            
            <span class='p-3 font-bold' id='gray_col'>
            {{($S11+$S12+$S13)/3}}
            </span>

            <span class='p-3'>
              Reported for 7 days:
            </span>

            <input
            disabled
              type="text"
              placeholder=""
              class="p-2 rounded-sm gap-2 bg-[#ffffcc]"
              name='S15'
                    value='{{$data->S15 ?? ""}}'
            />
            
          </div>

          <table class="mb-5 table">
            <thead>
              <tr class="w-full">
                <td class="p-4 w-7" >
                  Cylinder No.
                </td>
                <td class="p-4 w-7" >
                  SSD Mass (g)
                </td>
                <td class="p-4 w-7" >
                  Volume(cc)
                </td>
                <td class="p-4 w-7" >
                  Density(g/cc)
                </td>
              </tr>
            </thead>
            
            <tbody>

              <tr>
                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="Cylinder No."
                    class="p-2 w-full"
                    id='a-17'
                    name='A17'
                    value='{{$data->A17 ?? ""}}'
                  />
                </td>

                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="SSD Mass (g)"
                    class="p-2 w-full"
                    id='i-17'
                    name='E17'
                    value='{{$data->E17 ?? ""}}'
                  />
                </td>

                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="Volume (cc)"
                    class="p-2 w-full"
                    id='l-17'
                    name='J17'
                    value='{{$data->J17 ?? ""}}'
                  />
                </td>

                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="Density (g/cc)"
                    class="p-2 w-full"
                    id='s-17'
                    name='P17'
                    value='{{$data->P17 ?? ""}}'
                  />
                </td>
                
              </tr>

              <tr>
                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="Cylinder No."
                    class="p-2 w-full"
                    id='a-17'
                    name='A18'
                    value='{{$data->A18 ?? ""}}'
                  />
                </td>

                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="SSD Mass (g)"
                    class="p-2 w-full"
                    id='i-17'
                    name='E18'
                    value='{{$data->E18 ?? ""}}'
                  />
                </td>

                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="Volume (cc)"
                    class="p-2 w-full"
                    id='l-17'
                    name='J18'
                    value='{{$data->J18 ?? ""}}'
                  />
                </td>

                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="Density (g/cc)"
                    class="p-2 w-full"
                    id='s-17'
                    name='P18'
                    value='{{$data->P18 ?? ""}}'
                  />
                </td>

              </tr>

              <tr>
                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="Cylinder No."
                    class="p-2 w-full"
                    id='a-17'
                    name='A19'
                    value='{{$data->A19 ?? ""}}'
                  />
                </td>

                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="SSD Mass (g)"
                    class="p-2 w-full"
                    id='i-17'
                    name='E19'
                    value='{{$data->E19 ?? ""}}'
                  />
                </td>

                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="Volume (cc)"
                    class="p-2 w-full"
                    id='l-17'
                    name='J19'
                    value='{{$data->J19 ?? ""}}'
                  />
                </td>

                <td class="w-[10%]">
                  <input
                  disabled
                    type="text"
                    placeholder="Density (g/cc)"
                    class="p-2 w-full"
                    id='s-17'
                    name='P19'
                    value='{{$data->P19 ?? ""}}'
                  />
                </td>

              </tr>
            </tbody>
          </table>

          <!-- // Tested by, Date, Average Fields // -->

          <div class="grid grid-cols-3 gap-2 w-full">
            <input
            disabled
              type="text"
              placeholder="Tested by"
              class="p-2 rounded-sm gap-2"
              id="a-20"
              name='A20'
                    value='{{$data->A20 ?? ""}}'
            />

            <input
            disabled
              type="text"
              placeholder="Date"
              class="p-2 rounded-sm"
              id="c-20"
              name='B20'
                    value='{{$data->B20 ?? ""}}'
            />

            <input
            disabled
              type="text"
              placeholder="Average"
              class="p-2 rounded-sm"
              id="c-20"
              name='C20'
                    value='{{$data->C20 ?? ""}}'
            />

          </div>

          <div class="grid grid-cols-1 w-full my-5">
            <textarea
              name="textarea"
              id=""
              cols="30"
              rows="10"
              placeholder="Remarks: "
              class="p-2"
              id="A21"
                    value='{{$data->A21 ?? ""}}'
            >
          </textarea>
          </div>

          <div class="grid grid-cols-4 gap-2 w-full">
            <input
            disabled
              type="text"
              placeholder="Sampled by"
              class="p-3 rounded-sm"
              name='A22'
                    value='{{$data->A22 ?? ""}}'
            />
            <input
            disabled
              type="text"
              placeholder="Tested by"
              class="p-3 rounded-sm"
              name='B22'
                    value='{{$data->B22 ?? ""}}'
            />
            <input
            disabled
              type="text"
              placeholder="Checked by"
              class="p-3 rounded-sm col-span-2"
              name='C22'
                    value='{{$data->C22 ?? ""}}'
            />
          </div>
        </body>
    </div>
</div>
  </body>
</html>

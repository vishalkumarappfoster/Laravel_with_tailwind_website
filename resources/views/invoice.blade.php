<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
  <!--Replace with your tailwind.css once created-->

  <title>Invoice</title>

</head>

<body>
  <!-- student-details -->
  <div class="bg-gray-100 py-4 ">
    <div class="mx-auto p-8 max-w-3xl">
      <div class="flex items-center justify-between mb-8 px-3">
        <div>
          <span class="text-2xl font-bold">Invoice of student registration</span><br />
        </div>
        <div class="text-right">
          <img src="{{asset('/image/codesmith-logo.svg')}}" />
        </div>
      </div>

      <div class="flex justify-between mb-8 px-3">
        <div>
          Student Name: {{ $student->name }} <br />
          Email: {{ $student->email }}<br />
          Phone: {{ $student->phone_number }} <br />
          Address: {{ $student->address }}<br />
          Course: {{ $student->select_course }}<br />
          Highest Qualification: {{ $student->highest_qualification }}
        </div>
        <div class="text-right mb-8 px-3">
          Codesmith<br />
          Street 12<br />
          10000 City<br />
          Codesmith@org.com
        </div>
      </div>

      <div class="border border-t-2 border-gray-200 mb-4 px-3"></div>

      <div class="mb-2 px-2">
        <p class="font-bold">Fees receipt</p>
      </div>

      <div class="flex justify-between ">
        <div>Admission Fees </div>
        <div class="text-right font-medium">12500</div>
      </div>
      <div class="flex justify-between ">
        <div>Tuition Fees</div>
        <div class="text-right font-medium">8000</div>
      </div>
      <div class="flex justify-between ">
        <div>Hostel Fees</div>
        <div class="text-right font-medium">3000</div>
      </div>

      <div class="flex justify-between items-center mb-2 px-3">
        <div class="text-2xl leading-none font-bold"><span class="">Total</span>:</div>
        <div class="text-2xl text-right font-medium">23500 INR</div>
      </div>

    </div>
    <footer class="bg-gray-200 text-3xl text-center fixed bottom-0 left-0 right-0 h-20 px-3">
  <div class="flex items-center justify-center h-full">
    Thank you! <br />
  </div>
</footer>

</body>

</html>
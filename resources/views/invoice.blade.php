<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
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
                <img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_256,w_256,f_auto,q_auto:eco,dpr_1/v1440631924/pndgufyq2sakv6yir8sg.jpg" class="w-32 h-auto" />
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
    <div class="text-right">
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

        <div class="flex justify-between mb-4 bg-gray-400 px-3 py-2">
            <div>Admission Fees </div>
            <div class="text-right font-medium">12500</div>
        </div>
        <div class="flex justify-between mb-4 bg-gray-400 px-3 py-2">
            <div>Tuition Fees</div>
            <div class="text-right font-medium">8000</div>
        </div>
        <div class="flex justify-between mb-4 bg-gray-400 px-3 py-2">
            <div>Hostel Fees</div>
            <div class="text-right font-medium">3000</div>
        </div>

        <div class="flex justify-between items-center mb-2 px-3">
            <div class="text-2xl leading-none font-bold"><span class="">Total</span>:</div>
            <div class="text-2xl text-right font-medium">23500 INR</div>
        </div>

       

        <div class="mb-8 text-4xl text-center px-3">
            <span class="font-bold">Thank you!</span>
        </div>

        <div class="text-center text-sm px-3">
            Codesmith@site.com ∖ www.codesmithschool@gmail.com
       
</div>
</div>
</body>
</html>
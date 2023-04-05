<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show student details</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9fad20195a.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

<header>
    <!--Nav-->
    <nav aria-label="menu nav" class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

<div class="flex flex-wrap items-center">
    <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
        <a href="#" aria-label="Home">
            <span class="text-xl pl-2"><i class="em em-grinning"></i></span>
        </a>
    </div>

    <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">
        <span class="relative w-full">
            <input aria-label="search" type="search" id="search" placeholder="Search" class="w-full bg-gray-900 text-white transition border border-transparent focus:outline-none focus:border-gray-400 rounded-lg py-3 px-2 pl-10 appearance-none leading-normal">
            <div class="absolute search-icon" style="top: 1rem; left: .8rem;">
                <svg class="fill-current pointer-events-none text-white w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                </svg>
            </div>
        </span>
    </div>

    <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
        <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
            
          
            <li class="flex-1 md:flex-none md:mr-3">
                <div class="relative inline-block">
                    <button onclick="toggleDD('myDropdown')" class="drop-button text-white py-2 px-2"> <span class="pr-2"><i class="em em-robot_face"></i></span> Hi, User <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg></button>
                    <div id="myDropdown" class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                        <input type="text" class="drop-search p-2 text-gray-600" placeholder="Search.." id="myInput" onkeyup="filterDD('myDropdown','myInput')">
                        <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-user fa-fw"></i> Profile</a>
                        <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-cog fa-fw"></i> Settings</a>
                        <div class="border border-gray-800"></div>
                        <a href="{{ url('/logout') }}" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

</nav>

</header>
 
<main>

    <div class="flex flex-col md:flex-row">
        <nav aria-label="alternative nav">
            <div class="bg-gray-800 shadow-xl h-20 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48 content-center">

                <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                    <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
                        <li class="mr-3 flex-1">
                            <a href="{{ url('/dashboard') }}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                                <i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Dashboard</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                                <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Messages</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                                <i class="fas fa-chart-area pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-white block md:inline-block">Analytics</span>
                            </a>
                        </li>
                        <li class="mr-3 flex-1">
                            <a href="{{ route('students.index') }}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                                <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">Students Data</span>
                            </a>
                        </li>
                    </ul>
                </div>


            </div>
        </nav>
        <section class="bg-gray-100 w-4/5 rounded-lg mt-6">
            <!-- student-details -->
            <div class="flex-1  mt-12  pb-24  md:pb-5  w-full rounded-lg overflow-x-auto">
            <div class="mx-auto p-16" style="max-width: 800px;">
  <div class="flex items-center justify-between mb-8 px-3">
    <div>
      <span class="text-2xl"> Invoice of student registration</span><br />
      <span></span> <br />
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
    <div class="text-right">
      Codesmith<br />
      Street 12<br />
      10000 City<br />
      Codesmith@org.com
    </div>
  </div>

  <div class="border border-t-2 border-gray-200 mb-8 px-3"></div>

  <div class="mb-8 px-3">
    <p>Fees receipt</p>
  </div>

  <div class="flex justify-between mb-4 bg-gray-200 px-3 py-2">
    <div>Admission Fees </div>
    <div class="text-right font-medium">12500</div>
  </div>
  <div class="flex justify-between mb-4 bg-gray-200 px-3 py-2">
    <div>Tution Fees</div>
    <div class="text-right font-medium">8000</div>
  </div>
  <div class="flex justify-between mb-4 bg-gray-200 px-3 py-2">
    <div>Hostel Fees</div>
    <div class="text-right font-medium">3000</div>
  </div>

  <div class="flex justify-between items-center mb-2 px-3">
    <div class="text-2xl leading-none"><span class="">Total</span>:</div>
    <div class="text-2xl text-right font-medium">23500 INR</div>
  </div>

  <div class="flex mb-8 justify-end px-3">
    <div class="text-right w-1/2 px-0 leading-tight mb-0">
      <div>
        <p>
        <!-- <a href="{{ route('download-invoice-pdf', $student->id) }}" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-print"></span> Print
        </a> -->
        <a id="print-invoice" href="{{ route('download-invoice-pdf', $student->id) }}" class="btn btn-info btn-lg">
  <span class="glyphicon glyphicon-print"></span> Print
</a>
    </div>
    </div>
  </div>

  <div class="mb-8 text-4xl text-center px-3">
    <span>Thank you!</span>
  </div>

  <div class="text-center text-sm px-3">
    Codesmith@site.com ∖ www.codesmithschool@gmail.com
  </div>
</div>
    </div>
        </section>
    </div>
</main>


<!-- ****Script windows.print**** -->

<script>
  // Get the print button element by ID
  var printButton = document.getElementById("print-invoice");

  // Add a click event listener to the button
  printButton.addEventListener("click", function(e) {
    e.preventDefault();

    // Open the invoice page in a new window
    var invoiceWindow = window.open(printButton.href, "Invoice", "height=600,width=800");

    // Wait for the window to load
    invoiceWindow.addEventListener("load", function() {
      // Print the invoice
      invoiceWindow.print();
    });
  });
</script>




<!-- excel sheet -->
<script>
    // click event button
    document.getElementById('download-excel').addEventListener('click', function() {
        // Redirect to downloadExcel route
        window.location.href = "{{ route('students.download.excel') }}";
    });
</script>


<script>
  document.getElementById("download-excel").addEventListener("click", function() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '{{ route("students.download.excel") }}');
    xhr.responseType = 'blob';
    xhr.onload = function() {
      if (this.status === 200) {
        var a = document.createElement('a');
        var url = window.URL.createObjectURL(this.response);
        a.href = url;
        a.download = 'students.xlsx';
        document.body.appendChild(a);
        a.click();
        setTimeout(function() {
          document.body.removeChild(a);
          window.URL.revokeObjectURL(url);  
        }, 0);
      }
    };
    xhr.send();
  });
</script>
<!-- excel sheet -->
<script>
    /*Toggle dropdown list*/
    function toggleDD(myDropMenu) {
        document.getElementById(myDropMenu).classList.toggle("invisible");
    }
    /*Filter dropdown options*/
    function filterDD(myDropMenu, myDropMenuSearch) {
        var input, filter, ul, li, a, i;
        input = document.getElementById(myDropMenuSearch);
        filter = input.value.toUpperCase();
        div = document.getElementById(myDropMenu);
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }
    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
            var dropdowns = document.getElementsByClassName("dropdownlist");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (!openDropdown.classList.contains('invisible')) {
                    openDropdown.classList.add('invisible');
                }
            }
        }
    }
</script>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9fad20195a.js" crossorigin="anonymous"></script>
 
    

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
            
            <
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
        <section>
            <!-- student-data -->
     <div class="bg-gray-100">
     <div class="bg-gray-100 flex justify-between items-center pr-6 pl-4">
     <h1 class="text-5xl text-center font-bold py-3 pb-7">Students Data</h1>
     <button id="Add new student"  class="bg-blue-500 hover:bg-blue-700 text-white  py-2 px-4 rounded-lg" onclick="window.location.href='{{ url('/register') }}'">Add new</button>
     <button id="download-excel"  class="bg-blue-500 hover:bg-blue-700 text-white  py-2 px-4 rounded-lg ">Export excel</button>
     <a href="{{ route('students.download.pdf') }}" target="_blank">
    <button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-lg">Export PDF</button>
</a>



     </div>

        <div class="overflow-x-auto pr-4 rounded-lg pl-4">
      <table class="table-auto border-collapse border border-gray-300 text-sm">
        <thead>
        <tr class="bg-gray-200">
        <!-- <th class="px-4 py-2">Id</th> -->
        <th class="px-4 py-2">Name</th>
        <th class="px-4 py-2">Email</th>
        <th class="px-4 py-2">Phone No.</th>
        <th class="px-4 py-2">Address</th>
        <th class="px-4 py-2">Course</th>
        <th class="px-4 py-2">Highest Qualification</th>
        <th class="px-4 py-2">Download CV</th>
        <th class="px-4 py-2">Edit</th>
        <th class="px-4 py-2">Delete</th>
      </tr>
     </thead>
     <tbody>
     @foreach ($students as $student)
      <tr class="bg-white">
      <!-- <td class="border px-4 py-2">{{ $student->id }}</td> -->
      <td class="border px-4 py-2">
      <a href="{{ route('students.show', $student->id) }}">{{ $student->name }}</a></td>
        <td class="border px-4 py-2">{{ $student->email }}</td>
        <td class="border px-4 py-2">{{ $student->phone_number }}</td>
        <td class="border px-4 py-2">{{ $student->address }}</td>
        <td class="border px-4 py-2">{{ $student->select_course }}</td>
        <td class="border px-4 py-2">{{ $student->highest_qualification}}</td>
        <td class="border px-4 py-2 text-center">
     <a href="{{ route('download.cv', $student->id) }}" class="btn btn-primary"><i class="fa-solid fa-cloud-arrow-down "></i></a>
     </td>

        
        <td class="border px-4 py-2 text-center">
     <a href="{{ route('students.edit', $student->id) }}" class="text-center"><i class="fa-solid fa-pen-to-square "></i></a>
     </td>

        <td class="border px-4 py-2 text-center">
     <form action="{{ route('students.destroy', $student->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="" onclick="return confirm('Are you sure you want to delete this student?')"><i class="fa-solid fa-trash"></i></button>
     </form>
      </td>
        <!-- <td class="border px-4 py-2"><button class="hover:bg-red-500">Delete</button></td> -->
      </tr>
     @endforeach
     </tbody>
     </table>
        </section>
    </div>
</main>

<!-- students export to pdf -->

<script>
    var printButton = document.getElementById("print-students-pdf");
    printButton.addEventListener("click", function(e) {
        e.preventDefault();
        var studentsWindow = window.open(printButton.href, "Students List", "height=600,width=800");
        studentsWindow.addEventListener("load", function() {
            studentsWindow.print();
        });
    });
</script>



<!-- students export to pdf -->


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
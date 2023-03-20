<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
<!-- hamburger menu -->
<button data-collapse-toggle="navbar-cta" type="button"
          class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          aria-controls="navbar-cta" aria-expanded="false" id="menu-button">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg%22%3E
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>

        </button>

 <!-- header -->
 

 <x-header/>


 <div class=" bg-cover bg-center min-h-screen " style="background-image: url({{asset('/image/bg22.avif')}})"    >
 

<!-- hero -->

<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0 relative">
      <img class="w-96 rounded-lg transform transition-all duration-300 hover:scale-125" src="/image/img1.jpeg"> 
    </div>
   


    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-bold text-gray-600 tracking-wider ">Create The Career And Life You Want With Codesmith</h1>
      <p class="mb-8 font-medium text-gray-600 text-2xl tracking-wide">Get the program syllabus and JavaScript resources:</p>
      <div class="flex w-full md:justify-start justify-center items-end">
        <div class="relative mr-4 lg:w-full xl:w-1/2 w-2/4">
          <label for="hero-field" class="leading-7 text-sm text-gray-600 tracking-wide">First Name:</label>
          <input type="text" id="hero-field" name="hero-field" class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:ring-2 focus:ring-indigo-200 focus:bg-transparent focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8">
         
          <label for="email-field" class="leading-7 text-sm text-gray-600 tracking-wide">Email:</label>
          <input type="text" id="email-field" name="email-field" class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:ring-2 focus:ring-indigo-200 focus:bg-transparent focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8">
       
        </div>
        <button class="inline-flex text-white bg-blue-800 border-0 py-3 px-10  focus:outline-none hover:bg-blue-900 rounded text-lg">Submit</button>
      </div>
      <p class="text-sm mt-2 text-gray-500 mb-8 w-full tracking-wide">We keep your information private and secure.</p>
      <div class="flex lg:flex-row md:flex-col">
        <button class="">
          <span class="ml-4 flex flex-col leading-none pr-5">
          <img src="{{asset('/image/google-gray-logo.svg')}}"> 
          </span>
        </button>
        <button class="">
          <span class="ml-4 flex flex-col leading-none pr-5">
          <img src="{{asset('/image/linkedin-gray-logo.svg')}}"> 
          </span>
        </button>
        <button class="">
          <span class="ml-4 flex flex-col leading-none">
          <img src="{{asset('/image/amazon-gray-logo.svg')}}"> 
          </span>
        </button>
      </div>
    </div>
  </div>
</section>
</div>

<!-- feature -->

<section class="text-gray-600 body-font font-medium">
  <div class="container px-0 py-24 mx-auto">
    <div class="text-center mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4 tracking-wide">Our Programs</h1>
      <p class="text-base leading-relaxed xl:w-3/4 lg:w-3/4 mx-auto text-gray-500s tracking-wide">Our expertly designed full-stack JavaScript curriculum is consistent between all remote, onsite, full-time and part-time programs. Choose the option that works best for you.</p>
      <div class="flex mt-6 justify-center">
        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
      </div>
    </div>
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
      <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3 tracking-wide">Full-Time Remote</h2>
          <p class="leading-relaxed text-base tracking-wide">13 Weeks | Conducted remotely Mon-Sat in Pacific Time, Central Time, and Eastern Time</p>
          <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
            <circle cx="6" cy="6" r="3"></circle>
            <circle cx="6" cy="18" r="3"></circle>
            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3 tracking-wide">Global Part-Time Remote</h2>
          <p class="leading-relaxed text-base tracking-wide">38 Weeks | Conducted remotely Mon-Thurs evenings and Saturdays in Pacific Time</p>
          <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3 tracking-wide">New York City Onsite</h2>
          <p class="leading-relaxed text-base tracking-wide">13 Weeks | Conducted in-person onsite at our New York City campus Mon-Sat in Eastern Time</p>
          <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <button class="flex mx-auto mt-16 text-white bg-blue-800 border-0 py-4 px-8 focus:outline-none hover:bg-blue-900 rounded text-lg">Explore Our Program</button>
  </div>
</section>


 <!-- content -->


<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
   
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full transition-all duration-300 hover:scale-125" src="{{asset('/image/card1.avif')}}">
        </div>
        <h2 class="text-xl font-medium title-font text-gray-900 mt-5 tracking-wide">JavaScript for Beginners</h2>
        <p class="text-base leading-relaxed mt-2 tracking-wide">This prep program gives you a foundation in software engineering and is a great first step for true beginners. It is designed for those new to coding or who have minimal experience.</p>
        <a class="text-indigo-500 inline-flex items-center mt-3">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full transition-all duration-300 hover:scale-125 " src="{{asset('/image/card2.avif')}}">
        </div>
        <h2 class="text-xl font-medium title-font text-gray-900 mt-5 tracking-wide">CS Prep</h2>
        <p class="text-base leading-relaxed mt-2 tracking-wide">This prep program aims to build your core JavaScript knowledge, improve your technical communication, and develop your engineering toolkit.</p>
        <a class="text-indigo-500 inline-flex items-center mt-3">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full transition-all duration-300 hover:scale-125" src="{{asset('/image/card3.avif')}}">
        </div>

        <h2 class="text-xl font-medium title-font text-gray-900 mt-5 tracking-wide">Software Engineering Immersive</h2>
        <p class="text-base leading-relaxed mt-2 tracking-wide">The Full-Time and Part-Time Software Engineering Immersive Programs teach full-stack JavaScript and computer science to prepare you for mid- to senior-level software engineering roles.</p>
        <a class="text-indigo-500 inline-flex items-center mt-3">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- steps -->

<section class="text-gray-600 body-font">

  <div class="container px-5 py-24 mx-auto flex flex-wrap">
    <div class="flex flex-wrap w-full">
      <div class="lg:w-2/4 md:w-1/2 md:pr-10 md:py-6">
        <div class="flex relative pb-12">
          <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
          </div>
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-900 inline-flex items-center justify-center text-white relative z-10">
            <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            </svg> -->
            <p class="" >1</p>
          </div>
          <div class="flex-grow pl-4">
            <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Submit application</h2>
            <p class="leading-relaxed">Includes essay questions and an optional coding challenge.</p>
          </div>
        </div>
        <div class="flex relative pb-12">
          <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
          </div>
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-900 inline-flex items-center justify-center text-white relative z-10">
            <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg> -->
            <p class="" >2</p>
          </div>
          <div class="flex-grow pl-4">
            <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Initial Interview</h2>
            <p class="leading-relaxed">Non-technical conversation that allows us to get to know you and your goals.</p>
          </div>
        </div>
        <div class="flex relative pb-12">
          <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
          </div>
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-900 inline-flex items-center justify-center text-white relative z-10">
            <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <circle cx="12" cy="5" r="3"></circle>
              <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
            </svg> -->
            <p class="" >3</p>
          </div>
          <div class="flex-grow pl-4">
            <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Technical Interview</h2>
            <p class="leading-relaxed">Gauges readiness for the fast-paced, intense immersive program.</p>
          </div>
        </div>
        <div class="flex relative pb-12">
          <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
          </div>
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-900 inline-flex items-center justify-center text-white relative z-10">
            <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg> -->
            <p class="" >4</p>
          </div>
          <div class="flex-grow pl-4">
            <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Decision</h2>
            <p class="leading-relaxed">An admissions team member will reach out with an admissions decision.</p>
          </div>
        </div>
        <div class="flex relative">
          <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-900 inline-flex items-center justify-center text-white relative z-10">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
              <path d="M22 4L12 14.01l-3-3"></path>
            </svg>
          </div>
          <div class="flex-grow pl-4">
            <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">FINISH</h2>
            <p class="leading-relaxed"></p><br>
            <button class="inline-flex text-white bg-blue-800 border-0 py-4 px-10 focus:outline-none hover:bg-blue-900 rounded text-lg tracking-wide mt-7  ">Submit</button>
          </div>
        </div>

      </div>
      
      <img class="lg:w-2/4 md:w-1/2 object-cover object-center rounded-lg md:mt-0 mt-12 transition-all duration-300 hover:scale-125" src="/image/meeting2.avif" alt="step">
    </div>
  </div>
</section>

<!-- TESTIMONIAL -->

<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto ">
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/3 lg:mb-0 mb-6 p-4 ">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100 transition-all duration-300 hover:scale-125" src="/image/photo1.avif">
          <p class="leading-relaxed tracking-wide">I had a phenomenal three months at Codesmith. The amount of support I received by all my peers and the staff was outstanding. I had a much different 
            experience studying Computer Science in college. My CS classes there focused more on theory, and at Codesmith I learned technologies that I’ve been able to implement immediately on the job.</p>
          <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">JUAN E.</h2>
          <p class="text-gray-500">Software Engineer <br> @ AT&T</p>
        </div>
      </div>
      <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100 transition-all duration-300 hover:scale-125" src="/image/photo2.avif">
          <p class="leading-relaxed tracking-wide">Codesmith’s project-centered and communication-oriented approach prepared me for a career in software engineering more any other program could have.
             Because the program, beyond teaching the specifics of JavaScript, is aimed at educating students to think like a developer,
             I was able to pick up a different language (Python) I use at work within weeks of being hired by Netflix.</p>
          <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Nisha C.</h2>
          <p class="text-gray-500">Software Engineer <br> @ Netflix</p>
        </div>
      </div>
      <div class="lg:w-1/3 lg:mb-0 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100 transition-all duration-300 hover:scale-125" src="/image/photo3.avif">
          <p class="leading-relaxed tracking-wide">The skills that you learn at Codesmith are what market is actually looking for. 
            They also update the curriculum every cohort to follow the fast-changing tech industry standard. What makes Codesmith stand out from other bootcamps, however, 
            is the people. Thanks to Codesmith, I was able to receive an offer from my dream company.</p>
          <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">TIM J.</h2>
          <p class="text-gray-500">Software Engineer <br> @ Microsoft</p>
        </div>
      </div>
    </div>
  </div>
</section>
    

<!-- hero -->

<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
      <img class="object-cover object-center rounded transition-all duration-300 hover:scale-125" src="image/cirr.png">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Graduate Outcomes You Can Trust </h1>
      <p class="mb-8 leading-relaxed tracking-wide">At Codesmith, we are committed to publishing trustworthy graduate outcomes. We share our outcomes through CIRR, the industry standard for transparency in reporting.

As a CIRR certified school, we have our graduate outcomes audited by a third-party to ensure that we have fully complied with CIRR standards, including accounting for 100% of students, graduation rate, job placement in-field, and median starting salaries.
</p>
      <div class="flex justify-center">
        <button class="inline-flex text-white bg-blue-800 border-0 py-4 px-9 focus:outline-none hover:bg-blue-900 rounded text-lg">View Grad Outcomes</button>
      
      </div>
    </div>
  </div>
</section>

<!-- logo -->

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
        <h2 class="mb-8 lg:mb-16 text-3xl font-bold tracking-tight leading-tight text-center text-gray-700 tracking-wider dark:text-white md:text-4xl">Where Codesmith Graduates Get Hired</h2>
        <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-6 dark:text-gray-400">
            <a href="#" class="flex justify-center items-center">
              <img src="/image/Amazon-logo.png" class="h-14 transition-all origin-bottom-right hover:rotate-6 duration-200">                      
            </a>
            <a href="#" class="flex justify-center items-center">
                <img src="/image/Google-logo.png" class="h-14 transition-all origin-bottom-right hover:rotate-6 duration-200">                                               
            </a>
            <a href="#" class="flex justify-center items-center">
                <img src="/image/Riot-game-logo.png" class="h-14 transition-all origin-bottom-right hover:rotate-6 duration-200">                                                            
            </a>

            <a href="#" class="flex justify-center items-center">
            <img src="/image/NPR-logo.png" class="h-14 transition-all origin-bottom-right hover:rotate-6 duration-200">                                                                                    
            </a>
            
           
            <a href="#" class="flex justify-center items-center">
            <img src="/image/Netflix-logo.png" class="h-14 transition-all origin-bottom-right hover:rotate-6 duration-200">                                                                                  
            </a>
            <a href="#" class="flex justify-center items-center">
            <img src="/image/Screen Shot 2022-12-22 at 12.01.10 PM.png" class="h-18 transition-all origin-bottom-right hover:rotate-6 duration-200">                                                                                   
            </a>
            <a href="#" class="flex justify-center items-center">
                <img src="image/microsoft-logo-svg-vector.svg" class="h-14 transition-all origin-bottom-right hover:rotate-6 duration-200">                                                                                
            </a>
            <a href="#" class="flex justify-center items-center">
            <img src="image/Hulu-Logo.wine-svg.svg" class="h-12 transition-all origin-bottom-right hover:rotate-6 duration-200">                                                                                      
            </a>
            <a href="#" class="flex justify-center items-center">
            <img src="image/tutu.png" class="h-18 transition-all origin-bottom-right hover:rotate-6 duration-200">                                                                                 
            </a>
            <a href="#" class="flex justify-center items-center">
            <img src="image/paypal-logo.png" class="h-18 transition-all origin-bottom-right hover:rotate-6 duration-200">                                                                                      
            </a>
            <a href="#" class="flex justify-center items-center">
                <img src="/image/Disney-logo.png" class="h-14 transition-all origin-bottom-right hover:rotate-6 duration-200">                                                                                    
            </a>
            <a href="#" class="flex justify-center items-center">
            <img src="/image/tinder-logo.png" class="h-10 transition-all origin-bottom-right hover:rotate-6 duration-200">                                                                                   
            </a>
            <a href="#" class="flex justify-center items-center">
            <img src="/image/oscar-logo.png" class="h-12 transition-all origin-bottom-right hover:rotate-6 duration-200">                                                                                   
            </a>
            <a href="#" class="flex justify-center items-center">
            <img src="/image/linkedin-logo.png" class="h-12 transition-all origin-bottom-right hover:rotate-6 duration-200">                                                                                  
            </a>
            <a href="#" class="flex justify-center items-center">
            <img src="/image/blizzard-entertainment-1-logo-svg-vector.svg" class="h-14 transition-all origin-bottom-right hover:rotate-6 duration-200">                                                                                   
            </a>
            <a href="#" class="flex justify-center items-center">
            <img src="/image/IBM-logo.png" class="h-14 transition-all origin-bottom-right hover:rotate-6 duration-200">                                                                                  
            </a>
            <a href="#" class="flex justify-center items-center">
            <img src="/image/Appfoster-512.png" class="h-18 transition-all origin-bottom-right hover:rotate-6 duration-200">                                                                                
            </a>
            <a href="#" class="flex justify-center items-center">
            <img src="/image/Spotify_Logo_RGB_Green-768x231.png" class="h-12 transition-all origin-bottom-right hover:rotate-6 duration-200">                                                                                       
            </a>
            
        </div>
    </div>
</section>


<!-- Footer -->

<x-footer/>


</body>
</html>
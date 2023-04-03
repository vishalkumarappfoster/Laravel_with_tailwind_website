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
    

<!-- header -->

<x-header/>

<!-- signup -->


<form action="{{route('signup-user')}}" method="post">
@if(Session::has('success'))
  <div class="alert alert-success text-center">{{ Session::get('success') }}</div>
@endif

@if(Session::has('fail'))
  <div class="alert alert-danger text-center">{{ Session::get('fail') }}</div>
@endif
          @csrf
<div class="bg-grey-lighter min-h-screen flex flex-col">
            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-white px-6 py-8 rounded  text-black w-full">
                    <h1 class="mb-8 text-4xl text-center font-bold">Sign up</h1>
                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="email"
                        placeholder="Email Address" />
                        <span class="text-red-500">@error('email') {{$message}} @enderror</span>
                        


                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="first_name"
                        placeholder="First Name" />
                        <span class="text-red-500">@error('first name') {{$message}} @enderror</span>


                    <input 
                        type="text"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="last_name"
                        placeholder="Last Name" />
                        <span class="text-red-500">@error('last name') {{$message}} @enderror</span>
                    <input 
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="password"
                        placeholder="Password" />
                        <span class="text-red-500">@error('password') {{$message}} @enderror</span>
                        <input 
                        type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4"
                        name="confirm_password"
                        placeholder="Confirm Password" />

                    <button
                        type="submit"
                        class="w-full text-center py-3 rounded bg-blue-800 text-white hover:bg-blue-900 focus:outline-none my-1"
                    >Sign Up</button>

                <div class="text-grey-dark mt-6">
                Already a user?  
                    <a class="no-underline border-b border-blue text-blue" href="../login/">
                        Log in
                    </a>.
                </div>
            </div>
        </div>
</form>

<!-- Footer -->

<x-footer/>

</body>
</html>
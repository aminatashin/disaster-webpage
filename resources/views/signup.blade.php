<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="icon" href="images/favicon.ico" />
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    laravel: "#ef3b2d",
                },
            },
        },
    };
</script>
</head>
<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
      <a href="/" class="w3-bar-item w3-button"><b>RoAm</b> Disaster Agency</a>
      <!-- Float links to the right. Hide them on small screens -->
      <div class="w3-right w3-hide-small">
        <a href="/#projects" class="w3-bar-item w3-button">Projects</a>
        <a href="#about" class="w3-bar-item w3-button">About</a>
        <a href="#contact" class="w3-bar-item w3-button">Contact</a>
      </div>
    </div>
  </div>


 
    <!-- Main -->
   
  <div class="bg-gray-50 border border-gray-200 rounded p-6 max-w-lg mx-auto mt-24" >
  <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">
          Sign Up
      </h2>
      {{-- <p class="mb-4">Post Disaster Site</p> --}}
  </header>
  <form method="POST" action="/users" enctype="multipart/form-data" >
    @csrf
   
    @if(session('success'))
    <div class="alert alert-success" >
        {{session('success')}}
    </div>
    @endif
    {{-- <div class="mb-6">
        <label for="pic" class="inline-block text-lg mb-2">
           Profile Picture
        </label>
        <input
            type="file"
            class="border border-gray-200 rounded p-2 w-full"
            name="pic"
            value="{{old('pic')}}"
        />
        @error('pic')
        <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
        @enderror
    </div> --}}
    <div class="mb-6">
        <label for="name" class="inline-block text-lg mb-2">
            Name
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="name"
            value="{{old('name')}}"
        />
        @error('name')
        <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
        @enderror
    </div>


{{-- ------- --}}
<div class="mb-6">
    <label for="email" class="inline-block text-lg mb-2"
        > Email</label
    >
    <input
        type="email"
        class="border border-gray-200 rounded p-2 w-full"
        name="email"
        placeholder="Example: Email"
        value="{{old('email')}}"
    />
    @error('email')
    <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
    @enderror
</div>
{{-- ------- --}}
<div class="mb-6">
    <label for="password" class="inline-block text-lg mb-2"
        > Password</label
    >
    <input
        type="password"
        class="border border-gray-200 rounded p-2 w-full"
        name="password"
        placeholder="Example: Password"
        
    />
    @error('password')
    <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
    @enderror
</div>
<div class="mb-6">
    <label for="Password2" class="inline-block text-lg mb-2"
        > Confirm Password</label
    >
    <input
        type="password"
        class="border border-gray-200 rounded p-2 w-full"
        name="password_confirmation"
        placeholder="Example:Confirm Password"
      
    />
    @error('password_confirmation')
    <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
    @enderror
</div>
{{-- ------- --}}
{{-- <div class="mb-6">
    <label for="number" class="inline-block text-lg mb-2"
        > Contact Number</label
    >
    <input
        type="number"
        class="border border-gray-200 rounded p-2 w-full"
        name="number"
        placeholder="Example: musium"
        value="{{old('number')}}"
    />
    @error('number')
    <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
    @enderror
</div> --}}
{{-- ------- --}}

{{-- ------- --}}

 

   
   

    <div class="mb-6 justify content center text-center">
        <button
            class="btn btn-primary text-white rounded py-2 px-4 hover:bg-black"
        >
           Sign Up
        </button>

       <a href="/"><button  type="button" class="btn btn-secondary text-black">Back</button></a>

    </div>
    <div class="mb-6  justify-content-center text-center">
        <a href="/login">
        <button
        type="button"
            class="btn btn-success text-black rounded py-2 px-4 hover:bg-black"
        >
          Have an Account? Log In
        </button>
    </a>
    </div>
</form>
  
  
  </div>


    <!-- Footer -->
{{-- <footer class="w3-center w3-black w3-padding-16 ">
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  </footer> --}}
  
  </body>
  </html>
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
      <a href="#home" class="w3-bar-item w3-button"><b>RoAm</b> Disaster Agency</a>
      <!-- Float links to the right. Hide them on small screens -->
      <div class="w3-right w3-hide-small">
        <a href="#projects" class="w3-bar-item w3-button">Projects</a>
        <a href="#about" class="w3-bar-item w3-button">About</a>
        <a href="#contact" class="w3-bar-item w3-button">Contact</a>
      </div>
    </div>
  </div>


 
    <!-- Main -->
   
  <div class="bg-gray-50 border border-gray-200 rounded p-6 max-w-lg mx-auto mt-24" >
  <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">
          Sign In
      </h2>
      {{-- <p class="mb-4">Post Disaster Site</p> --}}
  </header>
  <form method="POST" action="/disaster" enctype="multipart/form-data" >
    @csrf
   
    @if(session('success'))
    <div class="alert alert-success" >
        {{session('success')}}
    </div>
    @endif
    <div class="mb-6">
        <label for="First Name" class="inline-block text-lg mb-2"
            > First Name</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="First Name"
            placeholder="Example: musium"
            value="{{old('First Name')}}"
        />
        @error('First Name')
        <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
        @enderror
    </div>
    <div class="mb-6">
        <label for="Last Name" class="inline-block text-lg mb-2"
            > Last Name</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="Last Name"
            placeholder="Example: Senior Laravel Developer"
            value="{{old('Last Name')}}"
        />
        @error('Last Name')
        <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
        @enderror
    </div>

{{-- ------- --}}
<div class="mb-6">
    <label for="email" class="inline-block text-lg mb-2"
        > Email</label
    >
    <input
        type="text"
        class="border border-gray-200 rounded p-2 w-full"
        name="email"
        placeholder="Example: musium"
        value="{{old('email')}}"
    />
    @error('email')
    <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
    @enderror
</div>
{{-- ------- --}}
<div class="mb-6">
    <label for="Password" class="inline-block text-lg mb-2"
        > Password</label
    >
    <input
        type="text"
        class="border border-gray-200 rounded p-2 w-full"
        name="Password"
        placeholder="Example: musium"
        value="{{old('Password')}}"
    />
    @error('Password')
    <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
    @enderror
</div>
{{-- ------- --}}
<div class="mb-6">
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
</div>
{{-- ------- --}}
<div class="mb-6">
    <label for="significance" class="inline-block text-lg mb-2"
        > Significance</label
    >
    <input
        type="text"
        class="border border-gray-200 rounded p-2 w-full"
        name="significance"
        placeholder="Example: musium"
        value="{{old('significance')}}"
    />
    @error('significance')
    <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
    @enderror
</div>
{{-- ------- --}}
<div class="mb-6">
    <label for="use" class="inline-block text-lg mb-2"
        > Use</label
    >
    <input
        type="text"
        class="border border-gray-200 rounded p-2 w-full"
        name="use"
        placeholder="Example: musium"
        value="{{old('use')}}"
    />
    @error('use')
    <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
    @enderror
</div>
{{-- ------- --}}
<div class="mb-6">
    <label for="keywords" class="inline-block text-lg mb-2"
        > Key Words</label
    >
    <input
        type="text"
        class="border border-gray-200 rounded p-2 w-full"
        name="keywords"
        placeholder="Example: musium"
        value="{{old('keywords')}}"
    />
    @error('keywords')
    <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
    @enderror
</div>
{{-- ------- --}}
<div class="mb-6">
    <label for="link" class="inline-block text-lg mb-2"
        > Link</label
    >
    <input
        type="text"
        class="border border-gray-200 rounded p-2 w-full"
        name="link"
        placeholder="Example: musium"
        value="{{old('link')}}"
    />
    @error('link')
    <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
    @enderror
</div>
    <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2">
            Company Logo
        </label>
        <input
            type="file"
            class="border border-gray-200 rounded p-2 w-full"
            name="logo"
            value="{{old('logo')}}"
        />
        @error('logo')
        <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
        @enderror
    </div>
    <div class="mb-6">
        <label
            for="recomendation"
            class="inline-block text-lg mb-2"
        >
             Recomendation
        </label>
        <textarea
            class="border border-gray-200 rounded p-2 w-full"
            name="recomendation"
            rows="10"
            placeholder="Include tasks, requirements, salary, etc"
          
        >{{old('recomendation')}}</textarea>
        @error('recomendation')
        <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
        @enderror
    </div>
    <div class="mb-6">
        <label
            for="description"
            class="inline-block text-lg mb-2"
        >
             Description
        </label>
        <textarea
            class="border border-gray-200 rounded p-2 w-full"
            name="description"
            rows="10"
            placeholder="Include tasks, requirements, salary, etc"
          
        >{{old('description')}}</textarea>
        @error('description')
        <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
        @enderror
    </div>

   

    <div class="mb-6">
        <button
            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
        >
            Create Job
        </button>

        <a href="/" class="text-black ml-4"> Back </a>

    </div>
</form>
  
  
  </div>


    <!-- Footer -->
<footer class="w3-center w3-black w3-padding-16 ">
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  </footer>
  
  </body>
  </html>
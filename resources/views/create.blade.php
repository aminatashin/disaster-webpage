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
          Upload The Damage Information
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
        <label for="title" class="inline-block text-lg mb-2"
            > Name Of The Site/Building</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="title"
            placeholder="Example: Senior Laravel Developer"
            value="{{old('title')}}"
        />
        @error('title')
        <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
        @enderror
    </div>
    <div class="mb-6">
        <label for="address" class="inline-block text-lg mb-2"
            > address</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="address"
            placeholder="Example: Senior Laravel Developer"
            value="{{old('address')}}"
        />
        @error('address')
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
        <button
            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
        >
            Create Job
        </button>

        <a href="/" class="text-black ml-4"> Back </a>

    </div>
</form>
  
  {{-- <form method="POST" action="/disaster" enctype="multipart/form-data" >
      @csrf
      @if(session('success'))
      <div class="alert alert-success" >
          {{session('success')}}
      </div>
      @endif
      <div class="mb-6">
          <label
              for="title"
              class="inline-block text-lg mb-2"
              >Name of the Site</label
          >
          <input
              type="text"
              class="border border-gray-200 rounded p-2 w-full"
              name="title" value="{{old('title')}}"
          />
          @error('title')
          <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
          @enderror
      </div>
  
      <div class="mb-6">
          <label for="address" class="inline-block text-lg mb-2"
              >Address</label
          >
          <input
              type="text"
              class="border border-gray-200 rounded p-2 w-full"
              name="address"
              placeholder="Example: Senior Laravel Developer"
              value="{{old('address')}}"
          />
          @error('address')
          <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
          @enderror
      </div>
  
      <div class="mb-6">
          <label
              for="country"
              class="inline-block text-lg mb-2"
              >country</label
          >
          <input
              type="text"
              class="border border-gray-200 rounded p-2 w-full"
              name="country"
              placeholder="Example: Remote, Boston MA, etc"
              value="{{old('country')}}"
          />
          @error('country')
          <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
          @enderror
      </div>
  
      <div class="mb-6">
          <label for="damage" class="inline-block text-lg mb-2"
              >Type of Damage</label
          >
          <input
              type="text"
              class="border border-gray-200 rounded p-2 w-full"
              name="damage"
              value="{{old('damage')}}"
          />
          @error('damage')
          <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
          @enderror
      </div>
  
      <div class="mb-6">
          <label
              for="source"
              class="inline-block text-lg mb-2"
          >
              Sources URL
          </label>
          <input
              type="text"
              class="border border-gray-200 rounded p-2 w-full"
              name="source"
              value="{{old('source')}}"
          />
          @error('source')
          <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
          @enderror
      </div>
      <div class="mb-6">
          <label
              for="email"
              class="inline-block text-lg mb-2"
          >
             Email
          </label>
          <input
              type="email"
              class="border border-gray-200 rounded p-2 w-full"
              name="email"
              value="{{old('email')}}"
          />
          @error('email')
          <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
          @enderror
      </div>
       <div class="mb-6">
          <label
              for="fullname"
              class="inline-block text-lg mb-2"
          >
             Full Name
          </label>
          <input
              type="text"
              class="border border-gray-200 rounded p-2 w-full"
              name="fullname"
              value="{{old('fullname')}}"
          />
          @error('fullname')
          <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
          @enderror
      </div>
  
      <div class="mb-6">
          <label
              for="contact"
              class="inline-block text-lg mb-2"
          >
             Phone Number
          </label>
          <input
              type="number"
              class="border border-gray-200 rounded p-2 w-full"
              name="contact"
              value="{{old('contact')}}"
          />
          @error('contact')
          <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
          @enderror
      </div>
  
      <div class="mb-6">
          <label for="tags" class="inline-block text-lg mb-2">
              Tags (Comma Separated)
          </label>
          <input
              type="text"
              class="border border-gray-200 rounded p-2 w-full"
              name="tags"
              placeholder="Example: Laravel, Backend, Postgres, etc"
              value="{{old('tags')}}"
          />
          @error('tags')
          <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
          @enderror
      </div>
  
      <div class="mb-6">
          <label for="logo" class="inline-block text-lg mb-2">
              Picture of the Site
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
              Submit
          </button>
  
          <a href="/" class="text-black ml-4"> Back </a>
      </div>
  </form> --}}

  </div>


    <!-- Footer -->
<footer class="w3-center w3-black w3-padding-16 ">
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  </footer>
  
  </body>
  </html>
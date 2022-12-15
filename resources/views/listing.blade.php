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
<a href="/" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
            <div class="mx-4">
                
                <div class='bg-gray-50 border border-gray-200 rounded p-6 p-10'>
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-48 mr-6 mb-6"
                            src="{{$listing->logo ? asset('storage/'.$listing->logo) : asset($listing->picture) }}"
                            alt=""
                        />
                        

                        <h3 class="text-2xl font-bold mb-2">{{$listing->name}}</h3>
                        <h3 class="text-2xl font-bold mb-2">{{$listing->title}}</h3>
                        <div class="text-xl  mb-4">{{$listing->address}}</div>
                        
                        {{-- <x-listing-tags :label="$listing->tags" />
                        <div class="text-lg my-4">
                            <i class="fa-solid fa-location-dot"></i>{{$listing->location}}
                        </div> --}}
                        <div class="border border-gray-200 w-full mb-6"></div>
                        <div>
                            <h3 class="text-3xl font-bold mb-4">
                               Listing Site Description
                            </h3>
                            <div class="text-lg space-y-6">
                                <p>
                                    {{$listing->significance}}
                                </p>
                                <p>
                                    {{$listing->description}}
                                </p>

                                <p>
                                    {{$listing->recomendation}}
                                    <p  class="text-xl  mb-4">
                                        {{$listing->explanation}}
                                    </p>
                                </p>
                              
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="mt-4 p-2 flex space-x-6">
                        <a href="/listings/{{$listing->id}}/edit">
                          <i class="fa-solid fa-pencil"></i> Edit
                        </a>

                </div>
                <form method="POST" action="/listings/{{$listing->id}}" >
                    @csrf
                    @method('DELETE')
                   <button class="text-red-500" ><i class="fa-solid fa-trash"></i>DELETE</button>
                </form>
            </div>
            <footer class="w3-center w3-black w3-padding-16 ">
                <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
              </footer>
              
              </body>
              </html>
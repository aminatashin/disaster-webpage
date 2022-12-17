@props(['listing'])



<section>
  <span class="icon solid featured fa-check"></span>
  <a href={{"disaster/$listing->id"}} class="image featured"><img src="{{$listing->logo ? asset('storage/'.$listing->logo) : asset("img/no-image.jpg") }}" alt="" /></a>
<header class="flex">
 <h3>{{$listing->name}}</h3> 
  <h2><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
  </svg>{{$listing->address}}</h2> 
   <p>{{$listing->significance}}</p>
   
    <h3><x-tag  :label="$listing->keywords" /></h3>
   
  </header>

</section>
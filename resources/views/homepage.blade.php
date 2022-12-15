@extends('layout')
@section('content')
<div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Projects</h3>
  </div>

  <div class="w3-row-padding">
    @foreach($listings as $listing)
    <div class="w3-col l3 m6 w3-margin-bottom d-flex">
      <div class="w3-display-container mt-2">
        <div class="w3-display-topleft w3-black w3-padding">
          <a href="/disaster/102"> {{$listing->title}}</a>
        
        </div>
        <img src="{{$listing->picture}}" alt="" style="max-width:100%">
      </div>
    </div>
    @endforeach
  </div>



  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
   <h1>company full of good desire and good deeds</h1> 
    
  </div>

  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team2.jpg" alt="John" style="width:100%">
      <h3>Rohit Jigyasu</h3>
      <p class="w3-opacity">CEO & Founder</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
      <h3>Amin Atashkhayer</h3>
      <p class="w3-opacity">Manager</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team3.jpg" alt="Mike" style="width:100%">
      <h3>Mike Ross</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="/w3images/team4.jpg" alt="Dan" style="width:100%">
      <h3>Dan Star</h3>
      <p class="w3-opacity">Architect</p>
      <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
  </div>
<!-----Shared------------->
<h1>Shared By You</h1>
<div class="w3-row-padding w3-grayscale">
@foreach($listings as $listing)


<x-listing-card :listing="$listing" />
@endforeach
  </div>



    @endsection
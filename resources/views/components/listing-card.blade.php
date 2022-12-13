@props(['listing'])
<div class="w3-col l3 m3 w3-margin-bottom">
  <img src="{{$listing->logo ? asset('storage/'.$listing->logo) : asset('/images/no-image.png') }}" alt="" style="width:100%">
  <h3><a href="/disaster/{{$listing->id}}">{{$listing->name}}</a></h3>
  <p> {{$listing->significance}}</p>
  <p> {{$listing->address}}</p>

  {{-- <p><button class="w3-button w3-light-grey w3-block">More</button></p> --}}
</div>
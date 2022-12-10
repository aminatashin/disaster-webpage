

<div class="w3-col l3 m6 w3-margin-bottom">
    <img src="{{$listings->logo ? asset('storage/'.$listings->logo) : asset('/images/no-image.png') }}" alt="John" style="width:100%">
    <h3 class="text-2xl">
        <a href="/listings/{{$listings->id}}">{{$listings->title}}</a>
    </h3>
    {{-- <div class="text-xl font-bold mb-4">{{$listing->source}}</div> --}}
            {{-- <div class="text-xl font-bold mb-4">{{$listing->damage}}</div> --}}
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot">{{$listings->address}}</i> 
                
            </div>
            {{-- <div class="text-xl font-bold mb-4">{{$listing->fullname}},{{$listing->email}}</div> --}}
  </div>

@props(['label'])

@php
  $keywords = explode(',' , $label)  
@endphp

<ul class="flex">
    @foreach($keywords as $keyword)
  
   
  
        <a href="/?keyword={{$keyword}}"><span class="badge badge-warning">{{$keyword}}</span></a>
   
   @endforeach
</ul>
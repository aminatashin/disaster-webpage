@props(['label'])

@php
  $keywords = explode(',' , $label)  
@endphp

<ul class="flex">
    @foreach($keywords as $keyword)
  
   
  
        <a href="/?keyword={{$keyword}}">{{$keyword}},</a>
   
   @endforeach
</ul>
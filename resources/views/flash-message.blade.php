@if (session()->has('success'))
<div class="fixed top-0 transform -translate-x-1/2 bg-laravel left-1/2 text-white px-48 py-3">


<p>
   {{ session('success')}}
</p>

</div>
@endif
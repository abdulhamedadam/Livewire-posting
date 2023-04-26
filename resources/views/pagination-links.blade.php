@if($paginator->hasPages())
<ul class="flex justify-center">
    <!-- prev -->
    @if ($paginator->onFirstPage())
    <li class="w-16 px-2 py-1 text-center rounded hover:border ">Prev</li>
    @else
    <li class="w-16 px-2 py-1 text-center rounded  text-blue-500  cursor-pointer hover:border" wire:click="previousPage">Prev</li>
    @endif
    <!-- prev end -->

<!-- numbers -->
@foreach ($elements as $element)
<div class="flex">
    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <li class="mx-2 w-10 px-2 py-1 text-center rounded  shadow bg-blue-500 text-white cursor-pointer hover:borde" wire:click="gotoPage({{$page}})">{{$page}}</li>
    @else
    <li class="mx-2 w-10 px-2 py-1 text-center rounded   cursor-pointer hover:borde" wire:click="gotoPage({{$page}})">{{$page}}</li>
    @endif
    @endforeach
    @endif
</div>
@endforeach
<!-- end numbers -->

     <!-- next  -->
     @if ($paginator->hasMorePages())
     <li class="w-16 px-2 py-1 text-center rounded  text-blue-500  cursor-pointer hover:border" wire:click="nextPage">Next</li>
     @else
     <li class="w-16 px-2 py-1 text-center rounded hover:border ">Next</li>
     @endif
     <!-- next end -->
</ul>
@endif
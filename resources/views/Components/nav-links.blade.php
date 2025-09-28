@props(['active' => false, 'type']) 

@if ($type === 'button')
    <button {{$attributes}} class="{{$active? 'bg-slate-900': ''}} hover:bg-gray-600  p-2 m-2">{{$slot}}</button>  
@else
    <a {{$attributes}} class="{{$active? 'bg-slate-900': ''}} hover:bg-gray-600  p-2 m-2">{{$slot}}</a>  
@endif
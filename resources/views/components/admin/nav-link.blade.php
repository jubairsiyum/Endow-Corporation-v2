@props(['route', 'icon', 'label', 'permission' => null])

@php
    if ($permission && !auth()->user()->can($permission)) { return; }
    $isActive = request()->routeIs($route . '*');
@endphp

<a href="{{ route($route) }}"
   @class([
       'nav-item',
       'active' => $isActive,
   ])>
    <i @class([$icon])></i>
    <span class="flex-1">{{ $label }}</span>
    {{ $slot }}
</a>


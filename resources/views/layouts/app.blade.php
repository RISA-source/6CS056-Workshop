{{--
    Bridge layout: lets pages that use @extends('layouts.app') / @section(...)
    render through the component layout (<x-layouts.app>), so the navbar,
    footer and alert still live in one place only.
--}}
<x-layouts.app :title="trim($__env->yieldContent('title', 'Home'))">
    @yield('content')
</x-layouts.app>
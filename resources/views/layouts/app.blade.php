<!DOCTYPE html>
<html lang="en">
{{-- Head --}}
@include('partials.head')

{{-- Body --}}

<body id="page-top">
    @yield('content')
    @include('partials.scripts')
    {{-- <x:notify-messages /> --}}
</body>

</html>

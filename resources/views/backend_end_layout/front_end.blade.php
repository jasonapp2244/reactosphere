<!DOCTYPE html>
<html lang="en">

{{-- headd  --}}
@include('front_end_layout.header_script')

<body>


    {{-- main head --}}
    @include('front_end_layout.main_header')



    {{-- navbar --}}
    @include('front_end_layout.navbar')

    {{-- Include content pending --}}
    @yield('content')


    {{-- footer --}}
    @include('front_end_layout.footer')



    {{-- footer script --}}
    @include('front_end_layout.footer_script')
</body>

</html>

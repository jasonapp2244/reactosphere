<!DOCTYPE html>
<html lang="en">

    @include('front_end_layout.header_script')
{{-- headd  --}}

<body>

    @include('front_end_layout.main_header')

    {{-- main head --}}



    {{-- navbar --}}
    {{-- @include('front_end_layout.navbar') --}}

    {{-- Include content pending --}}
    @yield('content')




    {{-- footer --}}
    @include('front_end_layout.footer')



    {{-- footer script --}}
    @include('front_end_layout.footer_script')
</body>

</html>

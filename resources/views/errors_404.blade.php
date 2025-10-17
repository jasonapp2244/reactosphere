@extends('front_end_layout.front_end')

@section('title', 'Page Not Found')

@section('content')
<div class="text-center py-5" style="margin: 37px">
    <h1 class="display-3 text-danger fw-bold">404</h1>
    <h3 class="mb-3">Oops! Page Not Found</h3>
    <p class="text-muted mb-4">
        The page you’re looking for doesn’t exist or may have been moved.
    </p>
    <a href="{{ url('/') }}" class="btn btn-primary px-4">Go to Home</a>
</div>
@endsection

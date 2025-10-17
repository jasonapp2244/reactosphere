@extends('front_end_layout.front_end')

@section('content')
    <section class="thank_you_section">
        <div class="container text-center">
            <h2 class="heading26px">Thank You!</h2>
            <p>Your support message has been sent successfully. We'll get back to you soon.</p>
            <a href="{{ url('/') }}" class="btn btn-primary mt-3">Go to Homepage</a>
        </div>
    </section>
@endsection

@component('mail::message')
<table style="width:100%; border-collapse:collapse;">
    <tr>
        <td style="background-color:#17eefa; text-align:center; padding:20px; border-radius: 10px;">
            <h2 style="margin:0; color:#000;">New Support Request</h2>
        </td>
    </tr>
    <tr>
        <td style="padding:20px;">
            <p><strong>First Name:</strong> {{ $details['first_name'] }}</p>
            <p><strong>Last Name:</strong> {{ $details['last_name'] }}</p>
            <p><strong>Phone:</strong> {{ $details['phone'] }}</p>
            <p><strong>Email:</strong> {{ $details['email'] }}</p>
            <p><strong>Message:</strong></p>
            <p>{{ $details['comments'] }}</p>
        </td>
    </tr>
    <tr>
        <td style="background-color:#f1f1f1; text-align:center; padding:10px;">
            <small>© {{ date('Y') }} {{ config('app.name') }} | Support Team</small>
        </td>
    </tr>
</table>
@endcomponent

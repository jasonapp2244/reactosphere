<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Welcome - {{ config('app.name') }}</title>
</head>

<body style="margin:0; padding:0; background-color:#f4f9fb; font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
        style="background-color:#f4f9fb; padding:40px 0;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellpadding="0" cellspacing="0"
                    style="background-color:#ffffff; border-radius:10px; box-shadow:0 4px 15px rgba(0,0,0,0.08); overflow:hidden;">

                    <!-- Header -->
                    {{-- <tr>
                        <td align="center" style="background-color:#0d6efd; padding:25px 0;">
                            <a href="{{ config('app.url') }}" target="_blank" style="text-decoration:none;">
                                <img src="{{ asset('user/assets/images/logo.png') }}" alt="{{ config('app.name') }}"
                                    style="height:60px; border:none;">
                            </a>
                        </td>
                    </tr> --}}
                    <tr>
                        <td align="center" style="background-color:#0d6efd; padding:25px 0;">
                            <h1 style="color:#ffffff; font-size:24px; font-weight:700; margin:0; text-align: center;">
                                Welcome to {{ config('app.name') }}
                            </h1>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:40px;">
                            <h1 style="font-size:24px; color:#222; margin:0 0 15px;">Welcome, {{ $name }} 👋
                            </h1>
                            <p style="font-size:16px; line-height:1.6; color:#555; margin:0 0 20px;">
                                We’re excited to have you on board! Your account has been successfully created.
                            </p>
                            <p style="font-size:16px; line-height:1.6; color:#555; margin:0 0 20px;">
                                Here are your login credentials:
                            </p>

                            <!-- Credentials Box -->
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0"
                                style="background-color:#f7fafa; border-radius:8px; padding:15px 20px; margin-bottom:25px;">
                                <tr>
                                    <td style="font-size:15px; color:#333;">
                                        <strong>Email:</strong> {{ $email }}<br>
                                        <strong>Temporary Password:</strong>
                                        <code
                                            style="background-color:#eee; padding:3px 6px; border-radius:4px; font-family:monospace;">{{ $password }}</code>
                                    </td>
                                </tr>
                            </table>

                            <p style="font-size:15px; line-height:1.6; color:#555; margin:0 0 30px;">
                                For your security, please change your password immediately after logging in.
                            </p>

                            <!-- Button -->
                            <p align="center" style="margin:30px 0;">
                                <a href="{{ route('user.signin', ['email' => $email]) }}" target="_blank"
                                    style="background-color:#0d6efd; color:#ffffff; text-decoration:none; font-weight:600; font-size:16px; padding:12px 30px; border-radius:6px; display:inline-block;">
                                    Login Now
                                </a>
                                {{-- <a href="{{ route('user.signin') }}" target="_blank"
                                    style="background-color:#0d6efd; color:#ffffff; text-decoration:none; font-weight:600; font-size:16px; padding:12px 30px; border-radius:6px; display:inline-block;">
                                    Login Now
                                </a> --}}
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    {{-- <tr>
              <td align="center" style="border-top:1px solid #f0f0f0; padding:25px 0 30px;">
                <p style="font-size:14px; color:#888; margin:0;">
                  Thanks,<br>
                  <strong style="color:#0d6efd;">{{ config('app.name') }}</strong> Team
                </p>
              </td>
            </tr> --}}

                </table>
            </td>
        </tr>
    </table>
</body>

</html>

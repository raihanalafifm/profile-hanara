<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Admin Login Alert</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #ff6b35;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }

        .content {
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 0 0 5px 5px;
        }

        .field {
            margin-bottom: 15px;
            padding: 10px;
            background-color: white;
            border-radius: 3px;
        }

        .field strong {
            color: #ff6b35;
            display: inline-block;
            width: 150px;
        }

        .alert-box {
            background-color: #fff3cd;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
            border-left: 4px solid #ffc107;
        }

        .login-details {
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            border-left: 4px solid #ff6b35;
        }

        .security-actions {
            background-color: #f8d7da;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
            border-left: 4px solid #dc3545;
        }

        .security-actions ol {
            margin: 10px 0;
            padding-left: 20px;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 12px;
            color: #666;
        }

        .link {
            color: #ff6b35;
            text-decoration: none;
        }

        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2>🔒 Admin Login Alert</h2>
        <p>Security notification for your Hanara account</p>
    </div>

    <div class="content">
        <p>Dear <strong>{{ $adminName }}</strong>,</p>

        <div class="alert-box">
            <p style="margin: 0;"><strong>⚠️ Login Activity Detected</strong></p>
            <p style="margin: 5px 0 0 0;">We noticed a login to your Hanara admin account using the email address
                <strong>{{ $loginUser->email }}</strong>.
            </p>
        </div>

        <div class="login-details">
            <h3 style="margin-top: 0; color: #ff6b35;">📊 Login Details:</h3>

            <div class="field">
                <strong>👤 User Name:</strong> {{ $loginUser->name ?? '-' }}
            </div>

            <div class="field">
                <strong>📧 Email:</strong> {{ $loginUser->email ?? '-' }}
            </div>

            <div class="field">
                <strong>🎭 Role:</strong> {{ $loginUser->role ?? 'User' }}
            </div>

            <div class="field">
                <strong>📅 Date & Time:</strong> {{ $loginTime->format('F j, Y – g:i A') }} WIB
            </div>

            <div class="field">
                <strong>🌐 Public IP Address:</strong> {{ $ipAddress ?? 'Unknown' }}
            </div>

            <div class="field">
                <strong>💻 Browser/Device:</strong> {{ $userAgent ?? 'Unknown' }}
            </div>

            <div class="field">
                <strong>📍 Location (Approx.):</strong> Jakarta, Indonesia
            </div>
        </div>

        <p><strong>✅ If this was authorized, no further action is needed.</strong></p>

        <div class="security-actions">
            <p style="margin-top: 0;"><strong>🚨 However, if this login seems suspicious, we strongly recommend that
                    you:</strong></p>
            <ol>
                <li>Change your account password immediately.</li>
                <li>Review your account activity.</li>
                <li>Contact our support team if you notice any suspicious activity.</li>
            </ol>
        </div>

        <p>Your account security is important to us.</p>
    </div>

    <div class="footer">
        <p><strong>Best regards,<br>
                Hanara Web Security Team</strong></p>
        <p><a href="https://hanara.id" class="link">https://hanara.id</a></p>
        <p>Email ini dikirim secara otomatis dari sistem keamanan {{ config('app.name', 'Hanara') }}</p>
        <p>Tanggal: {{ date('d F Y H:i:s') }}</p>
    </div>
</body>

</html>

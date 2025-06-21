<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Lamaran Kerja Baru</title>
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

        .position-box {
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            border-left: 4px solid #ff6b35;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2>Lamaran Kerja Baru</h2>
        <p>dari {{ $data['fullName'] ?? 'Unknown' }}</p>
    </div>

    <div class="content">
        <div class="position-box">
            <h3 style="margin-top: 0; color: #ff6b35;">Posisi yang Dilamar:</h3>
            <p style="font-size: 18px; font-weight: bold; margin: 0;">
                {{ $data['career_position'] ?? 'Unknown Position' }}</p>
        </div>

        <div class="field">
            <strong>Nama Lengkap:</strong> {{ $data['fullName'] ?? '-' }}
        </div>

        <div class="field">
            <strong>Email:</strong>
            <a href="mailto:{{ $data['email'] ?? '' }}">{{ $data['email'] ?? '-' }}</a>
        </div>

        <div class="field">
            <strong>Nomor Telepon:</strong>
            @if (!empty($data['phoneNumber']))
                <a href="tel:{{ $data['phoneNumber'] }}">{{ $data['phoneNumber'] }}</a> |
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $data['phoneNumber']) }}" target="_blank">Chat
                    WhatsApp</a>
            @else
                -
            @endif
        </div>

        @if (!empty($data['linkedin']))
            <div class="field">
                <strong>LinkedIn:</strong>
                <a href="{{ str_starts_with($data['linkedin'], 'http') ? $data['linkedin'] : 'https://linkedin.com/in/' . $data['linkedin'] }}"
                    target="_blank">{{ $data['linkedin'] }}</a>
            </div>
        @endif

        <div class="field">
            <strong>Tanggal Lamaran:</strong> {{ date('d F Y H:i:s') }}
        </div>
    </div>

    <div class="footer">
        <p>Email ini dikirim dari form karir website {{ config('app.name', 'Hanara') }}</p>
        <p>Tanggal: {{ date('d F Y H:i:s') }}</p>
        <p><strong>Segera hubungi kandidat untuk proses selanjutnya!</strong></p>
    </div>
</body>

</html>

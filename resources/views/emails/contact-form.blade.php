<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pesan Kontak Baru</title>
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
        .message-box {
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
        <h2>Pesan Kontak Baru</h2>
        <p>dari {{ $data['name'] ?? 'Unknown' }}</p>
    </div>
    
    <div class="content">
        <div class="field">
            <strong>Nama:</strong> {{ $data['name'] ?? '-' }}
        </div>
        
        <div class="field">
            <strong>Email:</strong> 
            <a href="mailto:{{ $data['email'] ?? '' }}">{{ $data['email'] ?? '-' }}</a>
        </div>
        
        @if(!empty($data['company']))
        <div class="field">
            <strong>Perusahaan:</strong> {{ $data['company'] }}
        </div>
        @endif
        
        @if(!empty($data['address']))
        <div class="field">
            <strong>Alamat:</strong> {{ $data['address'] }}
        </div>
        @endif
        
        @if(!empty($data['whatsapp']))
        <div class="field">
            <strong>WhatsApp:</strong> 
            <a href="https://wa.me/62{{ ltrim($data['whatsapp'], '0') }}">{{ $data['whatsapp'] }}</a>
        </div>
        @endif
        
        <div class="field">
            <strong>Waktu Kontak:</strong> {{ $data['preferred_time'] ?? '-' }}
        </div>
        
        <div class="message-box">
            <h3 style="margin-top: 0; color: #ff6b35;">Pesan:</h3>
            <p style="white-space: pre-wrap;">{{ $data['message'] ?? 'Tidak ada pesan' }}</p>
        </div>
    </div>
    
    <div class="footer">
        <p>Email ini dikirim dari form kontak website {{ config('app.name', 'Hanara') }}</p>
        <p>Tanggal: {{ date('d F Y H:i:s') }}</p>
    </div>
</body>
</html>
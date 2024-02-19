<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/person-style.css') }}">
    <title>Detail Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;


            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            opacity: 70%;
        }
    </style>
</head>

<body>
    <div class="report-container">
        <div class="report-title">Detail Report</div>
        <div class="report-item">
            <span class="report-label">Nama:</span>
            <span class="report-value">{{ $person->name }}</span>
        </div>
        <div class="report-item">
            <span class="report-label">Gender:</span>
            <span class="report-value">{{ $person->gender }}</span>
        </div>
        <div class="report-item">
            <span class="report-label">Email:</span>
            <span class="report-value">{{ $person->contact['email'] }}</span>
        </div>
        <div class="report-item">
            <span class="report-label">Telepon:</span>
            <span class="report-value">{{ $person->contact['phone'] }}</span>
        </div>
        <div class="report-item">
            <span class="report-label">Alamat:</span>
            <span class="report-value">{{ $person->contact['address'] }}</span>
        </div>
        <div class="report-item">
            <span class="report-label">Pekerjaan:</span>
            <span class="report-value">{{ $person->position }}</span>
        </div>
        <div class="report-item">
            <span class="report-label">Gaji:</span>
            <span class="report-value">{{ $person->salary }}</span>
        </div>
    </div>
</body>

</html>

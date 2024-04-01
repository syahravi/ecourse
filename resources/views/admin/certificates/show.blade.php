<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        @page {
            margin: 0in;
        }

        body {
            background-image: url('{{ secure_asset('sertifikat/sertifikat33.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            padding: 1in;
        }

        .certificate-info {
            position: absolute;
            top: 53%;
            left: 63%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #035657;
            /* Atur warna teks jika diperlukan */
            font-size: 45px;
            text-transform: uppercase;
            /* Ukuran teks */
            font-weight: bold;
            font-family: 'Montserrat', sans-serif;
            /* Tebal (bold) */
        }

        .certificate-course {
            position: absolute;
            top: 64%;
            left: 64%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #035657;
            /* Atur warna teks jika diperlukan */
            font-size: 17px;
            /* Ukuran teks */
            font-weight: bold;
            font-family: 'Montserrat', sans-serif;
            /* Tebal (bold) */
        }

        .certificate-date {
            position: absolute;
            top: 70%;
            left: 45%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #035657;
            /* Atur warna teks jika diperlukan */
            font-size: 17px;
            /* Ukuran teks */
            font-weight: bold;
            font-family: 'Montserrat', sans-serif;
            /* Tebal (bold) */
        }
    </style>
</head>

<body>
    <div class="certificate-info">
        {{-- <p>Serial Number: {{ $certificate->serial_number }}</p> --}}
        <p>{{ $certificate->user->name }}</p>
        {{-- <p>{{ $certificate->course->name }}</p> --}}
        {{-- <p>Score: {{ $certificate->score }}</p> --}}
    </div>
    <div class="certificate-course">
        {{-- <p>Serial Number: {{ $certificate->serial_number }}</p> --}}
        {{-- <p>{{ $certificate->user->name }}</p> --}}
        <p>{{ $certificate->course->name }}</p>
        {{-- <p>Score: {{ $certificate->score }}</p> --}}
    </div>
    <div class="certificate-date">
        {{-- <p>Serial Number: {{ $certificate->serial_number }}</p> --}}
        {{-- <p>{{ $certificate->user->name }}</p> --}}
        <p>{{ $certificate->created_at->format('M d, Y')}}</p>
        {{-- <p>Score: {{ $certificate->score }}</p> --}}
    </div>
</body>

</html>

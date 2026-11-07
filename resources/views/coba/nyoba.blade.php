<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        halo aku {{ $namq  }},kamu siapa? umurku {{ $umur }} tahun
        @if ($umur >= 18)
    <p>{{ $namq }} sudah dewasa.</p>
@else
    <p>{{ $namq }} masih di bawah umur.</p>
@endif
    </h1>
</body>
</html>
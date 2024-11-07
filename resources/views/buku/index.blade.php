<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Data Buku</title>
</head>
<body>
    @foreach ($buku as $item)
        <span>{{ $loop->iteration }}</span>. 
        <span>{{ $item['judul'] }}</span> - <span>{{ $item['halaman'] }}</span>
        <br>
    @endforeach
</body>
</html>
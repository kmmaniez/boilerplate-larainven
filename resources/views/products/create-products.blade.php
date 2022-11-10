<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" />
        </div>
        <div>
            <label for="harga">Harga</label>
            <input type="text" name="harga" id="harga" />
        </div>
        <div>
            <label for="stok">Stok</label>
            <input type="text" name="stok" id="stok" />
        </div>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
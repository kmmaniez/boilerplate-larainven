<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/products" method="post">
        @csrf
        <div>
            <label for="nama_produk">nama</label>
            <input type="text" name="nama_produk" id="nama_produk" value="{{ old('nama_produk') }}"/>
        </div>
        <div>
            <label for="harga_produk">harga</label>
            <input type="text" name="harga_produk" id="harga_produk" value="{{ old('harga_produk') }}"/>
        </div>
        <div>
            <label for="stok">Stok</label>
            <input type="text" name="stok" id="stok" value="{{ old('stok') }}"/>
        </div>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
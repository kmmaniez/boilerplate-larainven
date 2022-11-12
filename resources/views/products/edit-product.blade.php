<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @method('put')
        @csrf
        <div>
            <label for="">Category</label>
            <select name="id_kategori">
                @foreach ($categories as $category)
                    @if (old('id_kategori', $product->id_kategori) == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->nama_kategori }}</option>
                    @else
                        <option value="{{ $category->id }}">
                        {{ $category->nama_kategori }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div>
            <label for="nama">Nama produk</label>
            <input type="text" name="nama_produk" id="nama" value="{{ old('nama_produk', $product->nama_produk) }}"/>
            @error('nama_produk')
                    <div class="invalid-feedback">
                       <p>hadeh</p>
                    </div>
            @enderror
        </div>
        <div>
            <label for="harga">Harga</label>
            <input type="text" name="harga_produk" id="harga" value="{{ old('harga_produk', $product->harga_produk) }}"/>
        </div>
        <div>
            <label for="stok">Stok</label>
            <input type="text" name="stok" id="stok" value="{{ old('stok', $product->stok) }}"/>
        </div>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
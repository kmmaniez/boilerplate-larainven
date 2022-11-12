<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>index products</h1>
    <ol>
        @foreach ($data_product as $data)
        <li>{{ $data->nama_produk }}</li>
        <ul>
            @foreach ($categories as $category)
                @if ($data->id_kategori == $category->id)
                <li>{{ $category->nama_kategori }}</li>
                @endif
            @endforeach
            <li>Harga : Rp. {{ $data->harga_produk }} </li>
            <li>Stok : {{ $data->stok }}</li>
            <li><a href="/products/{{ $data->id }}/edit">edit</a></li>
            <li><form action="/products/{{ $data->id }}" method="POST">
                @method('delete')
                @csrf
                <button type="submit">Delete</button>
                </form>
            </li>
        </ul>
        @endforeach
        
        @if (session()->has('success'))
            <div class="message" style="width: 200px;height:auto;padding:8px 16px;background-color:rgb(0, 81, 148);border-radius:8px;color:#ffff;">
                <p>{{ session('success') }}</p>
            </div>
        @endif
    </ol>
    <a href="/products/create">Create</a>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Form Checkout</title>
</head>
<body>
    <h1>Form Checkout</h1>
    <form action="{{ route('checkout.process') }}" method="POST">
        @csrf
        <div>
            <label for="product_name">Nama Produk:</label>
            <input type="text" name="product_name" value="{{ old('product_name') }}" required>
            @error('product_name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="quantity">Jumlah Pesanan:</label>
            <input type="number" name="quantity" value="{{ old('quantity') }}" required>
            @error('quantity')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <!-- Tambahkan input untuk data checkout lainnya jika diperlukan -->
        <button type="submit">Checkout</button>
    </form>
</body>
</html>

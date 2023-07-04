<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Pembayaran</title>
</head>
<body>
    <h1>Konfirmasi Pembayaran</h1>
    <p>Total harga pesanan: {{ $totalPrice }}</p>
    <!-- Tambahkan detail lainnya yang perlu ditampilkan di halaman konfirmasi -->
    <form action="{{ route('checkout.confirm') }}" method="POST">
        @csrf
        <input type="hidden" name="total_price" value="{{ $totalPrice }}">
        <!-- Tambahkan input untuk data konfirmasi pembayaran lainnya jika diperlukan -->
        <button type="submit">Konfirmasi Pembayaran</button

<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderCotroller extends Controller
{
    public function checkout(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_name' => 'required',
            'quantity' => 'required|integer|min:1',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $productName = $request->input('product_name');
        $quantity = $request->input('quantity');

        // Lakukan perhitungan harga pesanan di sini sesuai dengan bisnis logikanya
        // Misalnya, dapat menggunakan model atau logika lain untuk menghitung total harga

        // Contoh perhitungan sederhana:
        $product = Product::where('name', $productName)->first();
        $totalPrice = $product->price * $quantity;

        // Lanjutkan dengan menyimpan pesanan atau melakukan tindakan lain yang diperlukan

        // Redirect ke halaman konfirmasi pembayaran atau halaman lain yang sesuai
        return redirect()->route('checkout.confirmation', ['totalPrice' => $totalPrice]);
    }

    public function showConfirmation($totalPrice)
    {
        return view('checkout.confirmation', compact('totalPrice'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    public function index()
    {
        $data = Pembayaran::all();
        return view('pembayaran.index', ['pembayaran' => $data]);
    }

    public function create()
    {
        return view('pembayaran.create');
    }

    public function show($id)
    {
        $data = Pembayaran::find($id);
        return view('pembayaran.show', ['pembayaran' => $data]);
    }

    public function edit($id)
    {
        $data = Pembayaran::find($id);
        return view('pembayaran.edit', ['pembayaran' => $data]);
    }

    public function destroy($id)
    {
        // Karena ini dummy, hanya return view konfirmasi
        return view('pembayaran.delete', ['id' => $id]);
    }
}

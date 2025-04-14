<?php

namespace App\Models;

class Pembayaran
{
    // Dummy data sebagai pengganti database
    protected static function getDummyData()
    {
        return [
            ['id' => 1, 'nama' => 'Ahmad', 'jumlah' => 500000, 'status' => 'Lunas'],
            ['id' => 2, 'nama' => 'Budi', 'jumlah' => 300000, 'status' => 'Belum Lunas'],
            ['id' => 3, 'nama' => 'Citra', 'jumlah' => 500000, 'status' => 'Lunas'],
        ];
    }

    // Ambil semua data
    public static function all()
    {
        return self::getDummyData();
    }

    // Cari data berdasarkan id
    public static function find($id)
    {
        $pembayaran = self::getDummyData();
        foreach ($pembayaran as $item) {
            if ($item['id'] == $id) {
                return $item;
            }
        }
        return null;
    }
}

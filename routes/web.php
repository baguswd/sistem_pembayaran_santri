<?php

use App\Http\Controllers\PembayaranController;

Route::get('/pembayaran', [PembayaranController::class, 'index']);
Route::get('/pembayaran/create', [PembayaranController::class, 'create']);
Route::get('/pembayaran/{id}', [PembayaranController::class, 'show']);
Route::get('/pembayaran/{id}/edit', [PembayaranController::class, 'edit']);
Route::delete('/pembayaran/{id}', [PembayaranController::class, 'destroy']);
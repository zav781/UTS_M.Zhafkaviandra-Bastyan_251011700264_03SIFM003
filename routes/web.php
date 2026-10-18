<?php

use App\Http\Controllers\NftController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NftController::class, 'index'])->name('nfts.index');
Route::get('/nft/{id}', [NftController::class, 'show'])->name('nfts.show');

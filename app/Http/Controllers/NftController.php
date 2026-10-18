<?php

namespace App\Http\Controllers;

use App\Models\Nft;

class NftController extends Controller
{
    public function index()
    {
        $nfts = Nft::all();
        return view('nfts.index', compact('nfts'));
    }

    public function show($id)
    {
        $nft = Nft::findOrFail($id);
        return view('nfts.show', compact('nft'));
    }
}

@extends('layouts.app')

@section('title', $nft->title . ' - NFT Marketplace')

@section('content')
<div class="container py-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('nfts.index') }}" class="text-info">Beranda</a></li>
            <li class="breadcrumb-item active text-secondary">{{ $nft->title }}</li>
        </ol>
    </nav>

    <div class="row g-4">
        <div class="col-md-6">
            <img src="{{ asset('assets/images/' . $nft->image) }}" class="img-fluid rounded border border-secondary" alt="{{ $nft->title }}">
        </div>
        <div class="col-md-6">
            <span class="badge bg-info text-dark mb-2">{{ $nft->collection }}</span>
            <h1 class="fw-bold">{{ $nft->title }}</h1>
            <p class="text-secondary">Creator: <strong class="text-light">{{ $nft->creator }}</strong></p>
            <h3 class="text-info mb-4">{{ rtrim(rtrim(number_format($nft->price_eth, 4), '0'), '.') }} ETH</h3>
            <h6>Deskripsi</h6>
            <p class="text-secondary">{{ $nft->description }}</p>
            <div class="d-flex gap-2 mt-3">
    <button type="button" class="btn btn-info fw-bold px-4" data-bs-toggle="modal" data-bs-target="#beliModal">
        Beli Sekarang
    </button>
    <a href="{{ route('nfts.index') }}" class="btn btn-outline-light">&larr; Kembali</a>
</div>
        </div>
    </div>
</div>
@endsection
<div class="modal fade" id="beliModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-black text-light border-secondary">
            <div class="modal-header border-secondary">
                <h5 class="modal-title">Konfirmasi Pembelian</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>Kamu akan membeli <strong>{{ $nft->title }}</strong> dari {{ $nft->creator }}.</p>
                <p class="text-info fs-5 mb-0">{{ rtrim(rtrim(number_format($nft->price_eth, 4), '0'), '.') }} ETH</p>
            </div>
            <div class="modal-footer border-secondary">
                <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-info" data-bs-dismiss="modal"
                    onclick="alert('Pembelian berhasil! (simulasi)')">Konfirmasi</button>
            </div>
        </div>
    </div>
</div>
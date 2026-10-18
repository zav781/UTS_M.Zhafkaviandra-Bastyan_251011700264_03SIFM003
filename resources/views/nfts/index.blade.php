@extends('layouts.app')

@section('title', 'Beranda - NFT Marketplace')

@section('content')
<section class="py-5 text-center bg-black border-bottom border-secondary">
    <div class="container py-4">
        <h1 class="display-4 fw-bold">Discover, Collect &amp; Trade <span class="text-info">NFT</span></h1>
        <p class="lead text-secondary">Marketplace karya digital eksklusif dengan harga dalam ETH.</p>
        <p class="mb-4 text-light">
    <strong>M. Zhafkaviandra Bastyan</strong><br>
    251011700264 | 03SIFM003
</p>
        <a href="#koleksi" class="btn btn-info btn-lg">Jelajahi Koleksi</a>
    </div>
</section>

<section class="container py-5" id="koleksi">
    <h2 class="mb-4">Daftar NFT</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
        @foreach ($nfts as $nft)
        <div class="col">
            <div class="card h-100 bg-black text-light border-secondary">
                <img src="{{ asset('assets/images/' . $nft->image) }}" class="card-img-top" alt="{{ $nft->title }}">
                <div class="card-body">
                    <span class="badge bg-info text-dark mb-2">{{ $nft->collection }}</span>
                    <h5 class="card-title">{{ $nft->title }}</h5>
                    <p class="card-text text-secondary mb-1">by {{ $nft->creator }}</p>
                    <p class="fw-bold text-info mb-0">{{ rtrim(rtrim(number_format($nft->price_eth, 4), '0'), '.') }} ETH</p>
                </div>
                <div class="card-footer bg-transparent border-secondary">
                    <a href="{{ route('nfts.show', $nft->id) }}" class="btn btn-outline-info w-100">Lihat Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection

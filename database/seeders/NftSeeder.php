<?php

namespace Database\Seeders;

use App\Models\Nft;
use Illuminate\Database\Seeder;

class NftSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['Neon Samurai #001', 'KazuArt', 1.2500, 'nft1.jpg', 'Cyber Warriors', 'Samurai futuristik dengan cahaya neon biru di kota malam.'],
            ['Cosmic Jellyfish', 'AquaVerse', 0.8000, 'nft2.jpg', 'Deep Space Sea', 'Ubur-ubur kosmik yang melayang di antara galaksi.'],
            ['Pixel Dragon', 'RetroByte', 0.4500, 'nft3.jpg', 'Pixel Beasts', 'Naga bergaya 8-bit dengan api berwarna-warni.'],
            ['Golden Skull', 'MorteLab', 2.3000, 'nft4.jpg', 'Dark Royalty', 'Tengkorak emas dengan ornamen mewah, edisi terbatas.'],
            ['Sunset Robot', 'Mechanica', 0.9500, 'nft5.jpg', 'Rusty Future', 'Robot tua yang menatap matahari terbenam di gurun.'],
            ['Lotus Dreams', 'NusaPixel', 0.6000, 'nft6.jpg', 'Nusantara Art', 'Bunga teratai digital terinspirasi motif batik Indonesia.'],
            ['Glitch Portrait', 'ErrorMind', 1.7500, 'nft7.jpg', 'Broken Reality', 'Potret abstrak dengan efek glitch dan warna terdistorsi.'],
            ['Crystal Forest', 'GreenChain', 1.1000, 'nft8.jpg', 'Mystic Lands', 'Hutan kristal bercahaya dengan suasana magis.'],
        ];

        foreach ($data as [$title, $creator, $price, $image, $collection, $desc]) {
            Nft::create([
                'title' => $title,
                'creator' => $creator,
                'price_eth' => $price,
                'image' => $image,
                'collection' => $collection,
                'description' => $desc,
            ]);
        }
    }
}

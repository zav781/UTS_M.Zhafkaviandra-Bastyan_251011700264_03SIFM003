<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nft extends Model
{
    protected $table = 'nfts';

    protected $fillable = [
        'title', 'creator', 'price_eth', 'image', 'collection', 'description',
    ];
}

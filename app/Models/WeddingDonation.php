<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingDonation extends Model
{
    use HasFactory;

    public function wedding()
    {
        return $this->belongsTo(Wedding::class);
    }
}

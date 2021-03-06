<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affiliator extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function affiliator_withdrawal()
    {
        return $this->hasMany(AffiliatorWithdrawal::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $guarded = [];

    public function profileImage()
    {
        return ($this->image) ? '/storage/'.$this->image : '/storage/profile/RaNPkUVE1sBuyC3TxMNLC8xI6TaFOVF2Ox8zvWq5.webp';
    }
}

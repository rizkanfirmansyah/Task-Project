<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'no_kk',
        'no_handphone',
        'tempat_lahir',
        'tanggal_lahir',
        'status_pernikahan',
        'gender',
        'kebangsaan',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tipe_pajak',
        'deskripsi',
        'penghasilan',
        'jumlah_pajak',
        'alamat_kantor',
        'pekerjaan',
        'pernyataan',
        'npwp',
        'company_id',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

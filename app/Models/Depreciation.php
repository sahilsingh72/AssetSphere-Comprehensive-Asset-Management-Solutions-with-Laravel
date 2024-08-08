<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depreciation extends Model
{
    use HasFactory;

    protected $fillable = [
        'asset_id',
        'value',
        'depreciation_date',
        'details',
    ];

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }
}

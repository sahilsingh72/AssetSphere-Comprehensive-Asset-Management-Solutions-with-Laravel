<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    protected $fillable = [
        'asset_id',
        'component_id',
        'details',
        'maintenance_date',
        'performed_by',
    ];

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }

    public function component()
    {
        return $this->belongsTo(Component::class);
    }
}

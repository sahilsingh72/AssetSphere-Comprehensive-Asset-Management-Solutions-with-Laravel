<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'purchase_date',
        'status',
        'warranty_end_date',
        'brand_id',
        'type_id',
        'location_id',
        'picture',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function depreciations()
    {
        return $this->hasMany(Depreciation::class);
    }

    public function maintenances()
    {
        return $this->hasMany(Maintenance::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}

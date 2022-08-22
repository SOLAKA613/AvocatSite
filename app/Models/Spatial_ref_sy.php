<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spatial_ref_sy extends Model
{
    use HasFactory;

    protected $table = 'spatial_ref_sys';
    protected $primaryKey = 'srid';
}

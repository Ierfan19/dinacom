<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetImage extends Model
{
    use HasFactory;
    protected $table = 'asset_image';
    protected $primaryKey = 'id';

    public $timestamps = true;
}

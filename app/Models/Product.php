<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $timestamps = true;
    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'name',
        'description',
        'height',
        'department_id',
        'width',
        'weight',
        'brand',
        'size',
        'image'

    ];
    public function stocks()
    {
        return $this->hasMany('App\Models\Stock','product_id','id');
    }
    public function department()
    {
        return $this->belongsTo('App\Models\Department','department_id','id');
    }
}

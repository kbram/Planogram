<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bay extends Model
{
    use HasFactory;
    protected $table = 'bays';
    public $timestamps = true;
    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'name',
        'aisle_id',
        'height',
        'width'
    ];
    public function stocks()
    {
        return $this->hasMany('App\Models\Stock','stock_id','id');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment','blog_id','id');
    }
    public function aisle()
    {
        return $this->belongsTo('App\Models\Aisle','aisle_id','id');
    }
}

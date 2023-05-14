<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $table = 'stocks';
    public $timestamps = true;
    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'product_id',
        'bay_id',
        'aisle_id',
        'status',
        'department_id',
    ];
    public function product()
    {
        return $this->belongsTo('App\Models\Product','product_id','id');
    }
    public function bay()
    {
        return $this->belongsTo('App\Models\Bay','bay_id','id');
    }
    public function aisle()
    {
        return $this->belongsTo('App\Models\Aisle','aisle_id','id');
    }
    public function department()
    {
        return $this->belongsTo('App\Models\Department','department_id','id');
    }
}

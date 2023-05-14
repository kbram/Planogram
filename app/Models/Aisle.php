<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aisle extends Model
{
    use HasFactory;
    protected $table = 'aisles';
    public $timestamps = true;
    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'name',
        'department_id',
        'description',
    ];
    public function stocks()
    {
        return $this->hasMany('App\Models\Stock','aisle_id','id');
    }
    public function bays()
    {
        return $this->hasMany('App\Models\Bay','aisle_id','id');
    }
    public function department()
    {
        return $this->belongsTo('App\Models\Department','department_id','id');
    }
}

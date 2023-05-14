<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = 'departments';
    public $timestamps = true;
    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'name',
        'description',
    ];
    public function stocks()
    {
        return $this->hasMany('App\Models\Department','department_id','id');
    }
    public function aisles()
    {
        return $this->hasMany('App\Models\Aisle','department_id','id');
    }
    
}

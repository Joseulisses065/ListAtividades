<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{

    protected $fillable = [
        'name',
        'user_id',
        
    ];
    use HasFactory;

    protected static function booted()
    {
        self::addGlobalScope("status",function(Builder $querry){
            $querry->orderBy('status');
        });
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}

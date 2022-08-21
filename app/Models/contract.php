<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contract extends Model
{
    use HasFactory;
    protected $table ='contracts';
    protected $fillable = [
        'order','name','ticketing_start','ticketing_end','terms_conditiaons','group_id','airline_code'
    ];
    public function group()
    {
        return $this->belongsTo(group::class,'group_id');
    }
    public function airlines(){
        return $this->hasMany(airline::class,'foreign_key');
    }
}

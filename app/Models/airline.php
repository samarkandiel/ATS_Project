<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class airline extends Model
{
    use HasFactory;
    protected $table ='airlines';
    protected $fillable=[
        'airline_code',
        'airline_name',
        'airline_active'
    ];
    public function contact(){
        return $this->belongsTo(contact::class);
    }
    protected $primaryKey = 'airline_code';
    public $incrementing = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    use HasFactory;
    protected $table ='groups';
    protected $fillable=[
        'group_id',
        'group_name',
        
    ];
    public function contract()
    {
        return $this->hasOne(contract::class);
    }
    protected $primaryKey = 'group_id';
    public $incrementing = false;
}

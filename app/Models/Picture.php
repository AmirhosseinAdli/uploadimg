<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','picture','default_picture','state','link','expire_time','expire_count','token'];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}

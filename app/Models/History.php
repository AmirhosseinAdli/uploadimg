<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    public $timestamps = ['created_at'];

    protected $fillable =[
        'picture_id',
        'visited_ip',
        'title',
    ];

    public function picture(){
        return $this->belongsTo(Picture::class);
    }
}

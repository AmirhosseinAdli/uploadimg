<?php


namespace App\Traits;


use App\Models\History;
use App\Models\Picture;
use Illuminate\Support\Facades\DB;

trait HistoryTrait
{
    public function upload(Picture $picture): History
    {
        $history = DB::table('histories')->insert([
            'picture_id' => $picture->id,
            'visitor_ip' => \Request::ip(),
            'operation' => 'uploaded',
        ]);
    }
}

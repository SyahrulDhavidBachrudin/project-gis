<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DataPasien extends Model
{
    use HasFactory;
    protected $table = "data_pasiens";
    protected $primaryKey = "id";
    protected $fillable = [];

    public function DatabaseMap()
    {
        $result = DB::table("data_pasiens")
            ->select()
            ->get();
        return $result;
    }
}

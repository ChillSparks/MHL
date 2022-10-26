<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class forms extends Model
{
    use HasFactory;
    protected $table="forms";
    protected $fillable = ['fish','uom','kg','size1d'	,'size1015',	'size12',	'size23',	'size34',	'size35'	,'size45',	'size46',	'size56',	'size58',	'size68'	,'size810'	,'size1012',	'size1215',	'size15up',	'tcarton'	,'tkg'];
    protected $hidden = ['id','status','created_at','updated_at'];

    public static function getform()
    {
        $data=DB::table('forms')->get()->toArray();
        return $data;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataNew extends Model
{
    public $timestamps = false;

    protected $table='new_datas';
    protected $primaryKey = 'id';
    protected $fillable = [ 'opini', 'tgl_waktu','predict_categorie'];
}

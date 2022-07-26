<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTesting extends Model
{
    protected $table='testing_datas';
    protected $primaryKey = 'id';
    protected $fillable = [ 'opini', 'tgl_waktu','predict_categorie', 'category'];}

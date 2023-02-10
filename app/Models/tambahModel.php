<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tambahModel extends Model
{
    use HasFactory;
    protected $table='tambah_models';
    protected $fillable=['nama','nis','kelas','tmtlhr','tgllhr'];
}

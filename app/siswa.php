<?php

namespace App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
    protected $table = 'siswas';
    protected $fillable = ['NIS','nama','tempat_lahir','tanggal_lahir','alamat','citacita','hobi'];
}

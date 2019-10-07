<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_biodata extends Model
{
    public $timestamps = false;
    protected $table = 'tbl_biodata';

    protected $fillable = ['nama','no_hp','alamat','hobi','foto'];
}

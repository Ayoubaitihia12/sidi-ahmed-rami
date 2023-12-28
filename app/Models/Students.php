<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $fillable = ['arName','frName','code','dateInscription','placeBirth','dateBirth','fatherName','motherName','frFatherName','frMotherName','studing','dateStuding','sex','level','school_id'];
}

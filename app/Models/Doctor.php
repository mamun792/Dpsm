<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['doctor_themble_photo','fname','lname','phone_number','date_of_birth','about','hospital_address','city','locations','degree','dwards','year'];

    function relationwithspeclist()
    {
        return $this->hasOne(_specilest::class, 'id', 'special_id');
    }
}

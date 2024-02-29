<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    public $table = 'profile_info';
    public $fillable = ['dob', 'blood_type', 'drug_allergies', 'food_allergies', 'gender', 'image', 'height', 'weight', 'patient_id'];
}

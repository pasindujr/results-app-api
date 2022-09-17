<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function firstSemResults() {
        return $this->hasOne(FirstSemResult::class);
    }

    public function secondSemResults() {
        return $this->hasOne(SecondSemResult::class);
    }

    public function thirdSemResults() {
        return $this->hasOne(ThirdSemResult::class);
    }

    public function fourthSemResults() {
        return $this->hasOne(FourthSemResult::class);
    }
}

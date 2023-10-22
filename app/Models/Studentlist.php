<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentlist extends Model
{
    use HasFactory;
    protected $table = "studentlist";
    protected $primaryKey = "id";
}

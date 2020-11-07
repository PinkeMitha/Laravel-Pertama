<?php

namespace App\Models;

use App\Http\Controllers\CobaController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    use HasFactory;
    protected $guarded = ['nama'];
}

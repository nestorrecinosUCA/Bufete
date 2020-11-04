<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $fillable = [
        'number_of_case',
        'folio',
        'name_of_case',
        'requirements',
        'comments',
        'status'
    ];
    use HasFactory;
}

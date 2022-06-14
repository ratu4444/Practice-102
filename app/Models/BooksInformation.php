<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BooksInformation extends Model
{
    use HasFactory;
    protected $table = 'books_information';
    protected $primaryKey = 'id';

    
    
    protected $guarded = ['id'];

}

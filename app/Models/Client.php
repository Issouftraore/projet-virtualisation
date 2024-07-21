<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['firstname', 'lastname', 'birthday'];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'client_produit');
    }
}

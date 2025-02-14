<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'description', 'datePub', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function clients()
    {
        return $this->belongsToMany(Client::class, 'client_produit');
    }
}

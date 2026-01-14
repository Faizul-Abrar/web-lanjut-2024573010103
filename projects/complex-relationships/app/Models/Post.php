<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\Tag;

class Post extends Model
{
    use Hasfactory;
    //kolom yang dapat diisi secara massal

    protected $fillable = ['user_id', 'tittle','content'];

    //relasi iinverse one-to-many dengan user

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function tags()
    {
        return $this ->belongsToMany(tag::class);
    }
}

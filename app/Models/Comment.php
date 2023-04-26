<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    const TABLE = 'comments';

    protected $table = self::TABLE;


    protected $fillable = [

        'body',
        'user_id',
        'created_at',
        'image',

    ];

    public function id()
    {
        return $this->id;
    }

    public function body(): string
    {
        return $this->body;
    }

    public function creator()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function createdAt()
    {
       return $this->created_at->diffForHumans();
    }
}

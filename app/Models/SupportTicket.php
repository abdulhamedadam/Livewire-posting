<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SupportTicket extends Model
{
    use HasFactory;

    const TABLE = 'support_tickets';

    protected $table = self::TABLE;


    protected $fillable = [

        'question'

    ];


    public function question()
    {
        return $this->question;
    }



    public function comments():HasMany
    {
        return $this->hasMany(Comment::class);
    }


}

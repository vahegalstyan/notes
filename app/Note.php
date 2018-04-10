<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'notes';

    protected $fillable = [
        'title', 'note', 'created_at', 'updated_at',
    ];

    public function post()
    {
        return $this->belongsTo('App\User');
    }
}
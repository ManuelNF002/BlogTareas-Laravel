<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model {
    use HasFactory;
    protected $table = 'task_listings';

    protected $guarded=[];

    //protected $fillable = ['user_id','titulo', 'descripcion'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'task_listing_id');
    }
}

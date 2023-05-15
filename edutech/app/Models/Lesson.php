<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $table = 'lessons';
    protected $fillable = [
        'course_id',
        'name',
        'duration',
        'video_file',
        'video_link',
    ];
    public function lessonBelongsToModule()
    {
        return $this->belongsTo('App\Models\Module');
    }
}

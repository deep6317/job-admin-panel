<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewJobs extends Model
{
    use HasFactory;

    protected $table = 'review_jobs';
	
    protected $fillable = [
        'user_id',
        'job_post_id',
        'status'
    ];
}

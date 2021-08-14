<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosts extends Model
{
    use HasFactory;

    protected $table = 'job_posts';
	
    protected $fillable = [
        'user_id',
        'company_name',
        'address',
        'email',
        'job_title',
        'job_skill',
        'job_type',
        'wfh',
        'status'
    ];
}

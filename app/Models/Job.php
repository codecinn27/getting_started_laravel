<?php

namespace App\Models;
use Illuminate\Support\Arr;   // declare this to use the Arr class, for best practice, is ok to not declare this
use Illuminate\Database\Eloquent\Model; //to use the Model class must declare
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Employer;
use App\Models\Tag;

class Job extends Model{
    use HasFactory;
    protected $table = 'job_listings';//assign this data from this table into this class

    protected $fillable = ['title', 'salary'];//this is to prevent mass assignment, only this field can be assigned

    public function employer(){
        return $this->belongsTo(Employer::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');
    }
}
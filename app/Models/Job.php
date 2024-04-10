<?php

namespace App\Models;
use Illuminate\Support\Arr;   // declare this to use the Arr class, for best practice, is ok to not declare this

class Job{
    public static function all():array //return type array
    {
        return [
            [   
                'id' => 1,
                'title' => 'Web Developer',
                'salary' => '30k'
            ],
            [
                'id' => 2,
                'title' => 'Web Designer',
                'salary' => '25k'
            ],
            [
                'id' => 3,
                'title' => 'Project Manager',
                'salary' => '40k'
            ]
        ];
    }

    public static function find($id):array //return type array
    {
        $job = Arr::first(self::all(), fn($value) => $value['id'] == $id);

        if(!$job){
            abort(404);
        }else{
            return $job;
        }
    }
}
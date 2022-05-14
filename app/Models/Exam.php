<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Exam
 *
 * @property $id_exam
 * @property $id_class
 * @property $id_student
 * @property $name
 * @property $mark
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Exam extends Model
{
    
    static $rules = [
		'id_exam' => 'required',
		'id_class' => 'required',
		'id_student' => 'required',
		'name' => 'required',
		'mark' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_exam','id_class','id_student','name','mark'];



}

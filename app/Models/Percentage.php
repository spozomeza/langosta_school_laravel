<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Percentage
 *
 * @property $id_percentage
 * @property $id_course
 * @property $id_class
 * @property $continuous_assessment
 * @property $exams
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Percentage extends Model
{
    
    static $rules = [
		'id_percentage' => 'required',
		'id_course' => 'required',
		'id_class' => 'required',
		'continuous_assessment' => 'required',
		'exams' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_percentage','id_course','id_class','continuous_assessment','exams'];



}

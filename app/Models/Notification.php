<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Notification
 *
 * @property $id_notification
 * @property $id_student
 * @property $work
 * @property $exam
 * @property $continuous_assessment
 * @property $final_note
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Notification extends Model
{
    
    static $rules = [
		'id_notification' => 'required',
		'id_student' => 'required',
		'work' => 'required',
		'exam' => 'required',
		'continuous_assessment' => 'required',
		'final_note' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_notification','id_student','work','exam','continuous_assessment','final_note'];



}

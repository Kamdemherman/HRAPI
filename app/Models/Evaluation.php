<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evaluation
 * 
 * @property int $ID_EVALUATION
 * @property int $ID_EVALUATOR
 * @property int $ID_QUESTION
 * @property int $ID_APPLICATION
 * @property string $APPRECIATION
 * @property float $NOTE
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class Evaluation extends Model
{
	protected $table = 'evaluations';
	protected $primaryKey = 'ID_EVALUATION';
	public $timestamps = false;

	protected $casts = [
		'ID_EVALUATOR' => 'int',
		'ID_QUESTION' => 'int',
		'ID_APPLICATION' => 'int',
		'NOTE' => 'float'
	];

	protected $fillable = [
		'ID_EVALUATOR',
		'ID_QUESTION',
		'ID_APPLICATION',
		'APPRECIATION',
		'NOTE',
		'DATE_POST'
	];
}

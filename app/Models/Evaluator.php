<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evaluator
 * 
 * @property int $ID_EVALUATOR
 * @property string $NAME
 * @property string $ROLE
 * @property string $SERVICE
 * @property int $ID_OFFER
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class Evaluator extends Model
{
	protected $table = 'evaluators';
	protected $primaryKey = 'ID_EVALUATOR';
	public $timestamps = false;

	protected $casts = [
		'ID_OFFER' => 'int'
	];

	protected $fillable = [
		'NAME',
		'ROLE',
		'SERVICE',
		'ID_OFFER',
		'DATE_POST'
	];
}

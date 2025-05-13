<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EvaluationSession
 * 
 * @property int $ID_EVALUATION_SESSION
 * @property string $REFERENCE
 * @property string $YEAR
 * @property string $NAME
 * @property string $DATE_START
 * @property string $DATE_END
 * @property string $MOTIF
 * @property string $DESCRIPTION
 * @property string $STATUS
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class EvaluationSession extends Model
{
	protected $table = 'evaluation_sessions';
	protected $primaryKey = 'ID_EVALUATION_SESSION';
	public $timestamps = false;

	protected $casts = [
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'REFERENCE',
		'YEAR',
		'NAME',
		'DATE_START',
		'DATE_END',
		'MOTIF',
		'DESCRIPTION',
		'STATUS',
		'DATE_POST'
	];
}

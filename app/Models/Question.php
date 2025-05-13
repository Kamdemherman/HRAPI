<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Question
 * 
 * @property int $ID_QUESTION
 * @property string $NAME
 * @property string $CONTENT
 * @property string $POINTS
 * @property string $DATE_POST
 * @property int $ID_OFFER
 *
 * @package App\Models
 */
class Question extends Model
{
	protected $table = 'questions';
	protected $primaryKey = 'ID_QUESTION';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_QUESTION' => 'int',
		'ID_OFFER' => 'int'
	];

	protected $fillable = [
		'NAME',
		'CONTENT',
		'POINTS',
		'DATE_POST',
		'ID_OFFER'
	];
}

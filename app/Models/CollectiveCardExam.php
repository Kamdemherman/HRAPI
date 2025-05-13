<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CollectiveCardExam
 * 
 * @property int $ID_COLLECTIVE_CARD_EXAM
 * @property int $ID_COLLECTIVE_CARD
 * @property int $ID_EXAM
 * @property string $REFERENCE
 * @property int $ID_HOSPITAL
 * @property string $REFERENCE_HOSPITAL
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class CollectiveCardExam extends Model
{
	protected $table = 'collective_card_exams';
	protected $primaryKey = 'ID_COLLECTIVE_CARD_EXAM';
	public $timestamps = false;

	protected $casts = [
		'ID_COLLECTIVE_CARD' => 'int',
		'ID_EXAM' => 'int',
		'ID_HOSPITAL' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_COLLECTIVE_CARD',
		'ID_EXAM',
		'REFERENCE',
		'ID_HOSPITAL',
		'REFERENCE_HOSPITAL',
		'DATE_POST'
	];
}

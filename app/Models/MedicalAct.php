<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MedicalAct
 * 
 * @property int $ID_MEDICAL_ACT
 * @property string $TYPE
 * @property string $REFERENCE
 * @property string $NAME
 * @property string $DESCRIPTION
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class MedicalAct extends Model
{
	protected $table = 'medical_acts';
	protected $primaryKey = 'ID_MEDICAL_ACT';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_MEDICAL_ACT' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'TYPE',
		'REFERENCE',
		'NAME',
		'DESCRIPTION',
		'DATE_POST'
	];
}

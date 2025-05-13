<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeSicknessCardDoc
 * 
 * @property int $ID_EMPLOYEE_SICKNESS_CARD_DOC
 * @property int $ID_EMPLOYEE_SICKNESS_CARD
 * @property string $NAME
 * @property string $LINK
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class EmployeeSicknessCardDoc extends Model
{
	protected $table = 'employee_sickness_card_docs';
	protected $primaryKey = 'ID_EMPLOYEE_SICKNESS_CARD_DOC';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE_SICKNESS_CARD' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE_SICKNESS_CARD',
		'NAME',
		'LINK',
		'FILE_EXT',
		'FILE_TYPE',
		'DATE_POST'
	];
}

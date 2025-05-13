<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dependent
 * 
 * @property int $ID_DEPENDENT
 * @property string $NAME
 * @property string $SURNAME
 * @property string $GENRE
 * @property string $BIRTH_DATE
 * @property string $BIRTH_PLACE
 * @property string $KINSHIP
 * @property int $ID_EMPLOYEE
 * @property string $NIC
 * @property string $DATE_NIC
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class Dependent extends Model
{
	protected $table = 'dependents';
	protected $primaryKey = 'ID_DEPENDENT';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'NAME',
		'SURNAME',
		'GENRE',
		'BIRTH_DATE',
		'BIRTH_PLACE',
		'KINSHIP',
		'ID_EMPLOYEE',
		'NIC',
		'DATE_NIC',
		'DATE_POST'
	];
}

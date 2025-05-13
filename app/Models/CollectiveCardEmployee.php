<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CollectiveCardEmployee
 * 
 * @property int $ID_COLLECTIVE_CARD_EMPLOYEE
 * @property int $ID_COLLECTIVE_CARD
 * @property int $ID_EMPLOYEE
 * @property string $MATRICULE
 * @property string $NAME
 * @property string $GRADE
 * @property string $SERVICE
 * @property string $ROLE
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class CollectiveCardEmployee extends Model
{
	protected $table = 'collective_card_employees';
	protected $primaryKey = 'ID_COLLECTIVE_CARD_EMPLOYEE';
	public $timestamps = false;

	protected $casts = [
		'ID_COLLECTIVE_CARD' => 'int',
		'ID_EMPLOYEE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_COLLECTIVE_CARD',
		'ID_EMPLOYEE',
		'MATRICULE',
		'NAME',
		'GRADE',
		'SERVICE',
		'ROLE',
		'DATE_POST'
	];
}

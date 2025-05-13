<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hygiene
 * 
 * @property int $ID_HYGIENE
 * @property string $REFERENCE
 * @property string $NAME
 * @property int $DATE_POST
 * @property string $DATE_REPORT
 * @property string $OBJECTIVE
 * @property string $ZONE
 * @property string $CONTACTS
 * @property string $PREDISPOSITIONS
 * @property string $OBSERVATION
 * @property string $COMETTEE
 *
 * @package App\Models
 */
class Hygiene extends Model
{
	protected $table = 'hygiene';
	protected $primaryKey = 'ID_HYGIENE';
	public $timestamps = false;

	protected $casts = [
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'REFERENCE',
		'NAME',
		'DATE_POST',
		'DATE_REPORT',
		'OBJECTIVE',
		'ZONE',
		'CONTACTS',
		'PREDISPOSITIONS',
		'OBSERVATION',
		'COMETTEE'
	];
}

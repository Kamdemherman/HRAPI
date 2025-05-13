<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Need
 * 
 * @property int $ID_NEED
 * @property string $REFERENCE
 * @property string $NAME
 * @property string $DESCRIPTION
 * @property string $EMITER
 * @property string $DETAILS
 * @property string $STATUS
 * @property string $VALIDATOR
 * @property string $MOTIVE
 * @property int $PLACES
 * @property string $DATE_POST
 * @property string $DATE_APPROUVAL
 *
 * @package App\Models
 */
class Need extends Model
{
	protected $table = 'needs';
	protected $primaryKey = 'ID_NEED';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_NEED' => 'int',
		'PLACES' => 'int'
	];

	protected $fillable = [
		'REFERENCE',
		'NAME',
		'DESCRIPTION',
		'EMITER',
		'DETAILS',
		'STATUS',
		'VALIDATOR',
		'MOTIVE',
		'PLACES',
		'DATE_POST',
		'DATE_APPROUVAL'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Offer
 * 
 * @property int $ID_OFFER
 * @property int $ID_NEED
 * @property string $NEED
 * @property string $REFERENCE
 * @property string $DATE_POST
 * @property string $DESCRIPTION
 * @property string $NAME
 * @property int $PLACES
 * @property string $APPLICANT_PROFILE
 * @property string $REQUIREMENTS
 * @property string $DATE_PUBLISH
 * @property string $STATUS
 * @property string $DATE_LIMIT
 * @property string $DATE_EXPIRY
 * @property string $DETAILS
 * @property string $EMITER
 * @property string $SESSION_START
 * @property string $SESSION_END
 *
 * @package App\Models
 */
class Offer extends Model
{
	protected $table = 'offers';
	protected $primaryKey = 'ID_OFFER';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_OFFER' => 'int',
		'ID_NEED' => 'int',
		'PLACES' => 'int'
	];

	protected $fillable = [
		'ID_NEED',
		'NEED',
		'REFERENCE',
		'DATE_POST',
		'DESCRIPTION',
		'NAME',
		'PLACES',
		'APPLICANT_PROFILE',
		'REQUIREMENTS',
		'DATE_PUBLISH',
		'STATUS',
		'DATE_LIMIT',
		'DATE_EXPIRY',
		'DETAILS',
		'EMITER',
		'SESSION_START',
		'SESSION_END'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CollectiveCard
 * 
 * @property int $ID_COLLECTIVE_CARD
 * @property string $REFERENCE
 * @property string $TYPE
 * @property string $REFERENCE_ACT
 * @property string $DESCRIPTION
 * @property string $REFERENCE_CAMPAIGN
 * @property string $DATE_START
 * @property string $DATE_END
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class CollectiveCard extends Model
{
	protected $table = 'collective_cards';
	protected $primaryKey = 'ID_COLLECTIVE_CARD';
	public $timestamps = false;

	protected $casts = [
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'REFERENCE',
		'TYPE',
		'REFERENCE_ACT',
		'DESCRIPTION',
		'REFERENCE_CAMPAIGN',
		'DATE_START',
		'DATE_END',
		'DATE_POST'
	];
}

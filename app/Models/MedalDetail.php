<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MedalDetail
 * 
 * @property int $ID_MEDAL_DETAIL
 * @property int $ID_MEDAL
 * @property string $SENIORITY
 * @property string $CAT
 * @property string $REWARD
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class MedalDetail extends Model
{
	protected $table = 'medal_details';
	protected $primaryKey = 'ID_MEDAL_DETAIL';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_MEDAL_DETAIL' => 'int',
		'ID_MEDAL' => 'int'
	];

	protected $fillable = [
		'ID_MEDAL',
		'SENIORITY',
		'CAT',
		'REWARD',
		'DATE_POST'
	];
}

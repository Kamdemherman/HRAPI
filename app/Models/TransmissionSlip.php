<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TransmissionSlip
 * 
 * @property int $ID_TRANSMISSION_SLIP
 * @property string $REFERENCE
 * @property string $DATE_START
 * @property string $DATE_END
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class TransmissionSlip extends Model
{
	protected $table = 'transmission_slips';
	protected $primaryKey = 'ID_TRANSMISSION_SLIP';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_TRANSMISSION_SLIP' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'REFERENCE',
		'DATE_START',
		'DATE_END',
		'DATE_POST'
	];
}

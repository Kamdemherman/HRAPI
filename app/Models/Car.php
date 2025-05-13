<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Car
 * 
 * @property int $ID_CAR
 * @property string $IMMATRICULATION
 * @property string $NAME
 * @property string $MODEL
 * @property string $PURCHASE_PRICE
 * @property string $PURCHASE_DATE
 * @property string $REFERENCE_DIRECTION
 * @property string $CAR_STATUS
 * @property int $DATE_POST
 * @property string $STATUS
 * @property string $USE_STATUS
 * @property string $DESCRIPTION
 *
 * @package App\Models
 */
class Car extends Model
{
	protected $table = 'cars';
	protected $primaryKey = 'ID_CAR';
	public $incrementing = false;
    protected $keyType = 'int';
	public $timestamps = false;

	protected $casts = [
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		
		'IMMATRICULATION',
		'NAME',
		'MODEL',
		'PURCHASE_PRICE',
		'PURCHASE_DATE',
		'REFERENCE_DIRECTION',
		'CAR_STATUS',
		'DATE_POST',
		'STATUS',
		'USE_STATUS',
		'DESCRIPTION'
	];
}

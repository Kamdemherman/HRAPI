<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InsuredCat
 * 
 * @property int $ID_INSURED_CAT
 * @property string $COMPANY
 * @property string $TYPE
 * @property string $REFERENCE
 * @property string $NAME
 * @property string $AGE
 * @property string $COVERAGE
 * @property string $PREMIUM_AMOUNT
 * @property string $CEILING_AMOUNT
 * @property string $PAYMENT_METHOD
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class InsuredCat extends Model
{
	protected $table = 'insured_cats';
	protected $primaryKey = 'ID_INSURED_CAT';
	public $timestamps = false;

	protected $casts = [
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'COMPANY',
		'TYPE',
		'REFERENCE',
		'NAME',
		'AGE',
		'COVERAGE',
		'PREMIUM_AMOUNT',
		'CEILING_AMOUNT',
		'PAYMENT_METHOD',
		'DATE_POST'
	];
}

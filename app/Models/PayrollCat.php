<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayrollCat
 * 
 * @property int $ID_PAYROLL_CAT
 * @property int $ID_PAYROLL_CLASSE
 * @property string $META_CATS
 * @property string $NAME
 * @property string $DESCRIPTION
 * @property string $STATUS
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class PayrollCat extends Model
{
	protected $table = 'payroll_cats';
	protected $primaryKey = 'ID_PAYROLL_CAT';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAYROLL_CAT' => 'int',
		'ID_PAYROLL_CLASSE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_PAYROLL_CLASSE',
		'META_CATS',
		'NAME',
		'DESCRIPTION',
		'STATUS',
		'DATE_POST'
	];
}

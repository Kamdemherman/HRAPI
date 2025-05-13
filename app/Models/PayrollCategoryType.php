<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayrollCategoryType
 * 
 * @property int $ID_PAYROLL_CATEGORY_TYPE
 * @property string $NAME
 * @property string $DESCRIPTION
 * @property string $STATUS
 * @property int $ID_PARENT
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class PayrollCategoryType extends Model
{
	protected $table = 'payroll_category_types';
	protected $primaryKey = 'ID_PAYROLL_CATEGORY_TYPE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAYROLL_CATEGORY_TYPE' => 'int',
		'ID_PARENT' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'NAME',
		'DESCRIPTION',
		'STATUS',
		'ID_PARENT',
		'DATE_POST'
	];
}

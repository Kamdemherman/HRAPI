<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayrollMetaCat
 * 
 * @property int $ID_PAYROLL_META_CAT
 * @property string $NAME
 * @property string $DESCRIPTION
 * @property string $STATUS
 * @property int $DATE_POST
 * @property int $PARENT
 *
 * @package App\Models
 */
class PayrollMetaCat extends Model
{
	protected $table = 'payroll_meta_cats';
	protected $primaryKey = 'ID_PAYROLL_META_CAT';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAYROLL_META_CAT' => 'int',
		'DATE_POST' => 'int',
		'PARENT' => 'int'
	];

	protected $fillable = [
		'NAME',
		'DESCRIPTION',
		'STATUS',
		'DATE_POST',
		'PARENT'
	];
}

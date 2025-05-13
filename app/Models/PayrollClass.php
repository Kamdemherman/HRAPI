<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayrollClass
 * 
 * @property int $ID_PAYROLL_CLASSE
 * @property string $NAME
 * @property string $DESCRIPTION
 * @property string $STATUS
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class PayrollClass extends Model
{
	protected $table = 'payroll_classes';
	protected $primaryKey = 'ID_PAYROLL_CLASSE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAYROLL_CLASSE' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'NAME',
		'DESCRIPTION',
		'STATUS',
		'DATE_POST'
	];
}

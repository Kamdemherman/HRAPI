<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeCareVoucherDoc
 * 
 * @property int $ID_EMPLOYEE_CARE_VOUCHER_DOC
 * @property int $ID_EMPLOYEE_CARE_VOUCHER
 * @property string $NAME
 * @property string $LINK
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class EmployeeCareVoucherDoc extends Model
{
	protected $table = 'employee_care_voucher_docs';
	protected $primaryKey = 'ID_EMPLOYEE_CARE_VOUCHER_DOC';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE_CARE_VOUCHER' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE_CARE_VOUCHER',
		'NAME',
		'LINK',
		'FILE_EXT',
		'FILE_TYPE',
		'DATE_POST'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PayrollConractDoc
 * 
 * @property int $ID_PAYROLL_CONTRACT_DOC
 * @property int $ID_PAYROLL_CONTRACT
 * @property string $NAME
 * @property string $LINK
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class PayrollConractDoc extends Model
{
	protected $table = 'payroll_conract_docs';
	protected $primaryKey = 'ID_PAYROLL_CONTRACT_DOC';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAYROLL_CONTRACT_DOC' => 'int',
		'ID_PAYROLL_CONTRACT' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_PAYROLL_CONTRACT',
		'NAME',
		'LINK',
		'FILE_EXT',
		'FILE_TYPE',
		'DATE_POST'
	];
}

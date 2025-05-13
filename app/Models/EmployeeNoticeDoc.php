<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeNoticeDoc
 * 
 * @property int $ID_EMPLOYEE_NOTICE_DOC
 * @property int $ID_EMPLOYEE_NOTICE
 * @property string $NAME
 * @property string $LINK
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class EmployeeNoticeDoc extends Model
{
	protected $table = 'employee_notice_docs';
	protected $primaryKey = 'ID_EMPLOYEE_NOTICE_DOC';
	public $timestamps = false;

	protected $casts = [
		'ID_EMPLOYEE_NOTICE' => 'int'
	];

	protected $fillable = [
		'ID_EMPLOYEE_NOTICE',
		'NAME',
		'LINK',
		'FILE_EXT',
		'FILE_TYPE',
		'DATE_POST'
	];
}

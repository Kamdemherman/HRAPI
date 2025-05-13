<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReimbursementSlipDoc
 * 
 * @property int $ID_REIMBURSEMENT_SLIP_DOC
 * @property int $ID_REIMBURSEMENT_SLIP
 * @property string $NAME
 * @property string $LINK
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class ReimbursementSlipDoc extends Model
{
	protected $table = 'reimbursement_slip_docs';
	protected $primaryKey = 'ID_REIMBURSEMENT_SLIP_DOC';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_REIMBURSEMENT_SLIP_DOC' => 'int',
		'ID_REIMBURSEMENT_SLIP' => 'int'
	];

	protected $fillable = [
		'ID_REIMBURSEMENT_SLIP',
		'NAME',
		'LINK',
		'FILE_EXT',
		'FILE_TYPE',
		'DATE_POST'
	];
}

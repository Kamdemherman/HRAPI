<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReimbursementSlip
 * 
 * @property int $ID_REIMBURSEMENT_SLIP
 * @property string $REFERENCE
 * @property string $DATE_REIMBURSEMENT
 * @property string $REFERENCE_SLIP
 * @property int $DATE_POST
 *
 * @package App\Models
 */
class ReimbursementSlip extends Model
{
	protected $table = 'reimbursement_slips';
	protected $primaryKey = 'ID_REIMBURSEMENT_SLIP';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_REIMBURSEMENT_SLIP' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'REFERENCE',
		'DATE_REIMBURSEMENT',
		'REFERENCE_SLIP',
		'DATE_POST'
	];
}

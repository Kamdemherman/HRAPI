<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Complaint
 * 
 * @property int $ID_COMPLAINT
 * @property string $REFERENCE_COMPLAINT
 * @property string $COMPLAINANT_TYPE
 * @property string $COMPLAINANT_NAME
 * @property string $COMPLAINANT
 * @property string $DEFENDANT
 * @property string $DEFENDANT_NAME
 * @property string $OBJECT_COMPLAINT
 * @property string $OBSERVATION_COMPLAINT
 * @property string $DATE_COMPLAINT
 * @property string $STATUS_COMPLAINT
 * @property string $REFERENCE_REQUEST
 * @property string $DATE_REQUEST
 * @property string $RECIPIENT_REQUEST
 * @property string $SENDER_REQUEST
 * @property string $OBJECT_REQUEST
 * @property string $STATUS_REQUEST
 * @property string $OBSERVATION_REQUEST
 * @property string $MENTION
 * @property string $SANCTION_TYPE
 * @property string $REFERENCE_SANCTION
 * @property string $DATE_SANCTION
 * @property string $DATE_START_SANCTION
 * @property string $DATE_END_SANCTION
 * @property string $DAYS
 * @property string $AMOUNT
 * @property string $MONTHLY
 * @property string $STATUS_SANCTION
 * @property string $DECISION_NUMBER
 * @property string $DATE_DECISION
 * @property string $RECOMMENDATION
 * @property string $PARTICIPANTS
 * @property int $DATE_POST
 * @property string $REQUEST_MENTION
 * @property string $REFERENCE_ANSWER
 * @property string $DATE_ANSWER
 *
 * @package App\Models
 */
class Complaint extends Model
{
	protected $table = 'complaints';
	protected $primaryKey = 'ID_COMPLAINT';
	public $timestamps = false;

	protected $casts = [
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'REFERENCE_COMPLAINT',
		'COMPLAINANT_TYPE',
		'COMPLAINANT_NAME',
		'COMPLAINANT',
		'DEFENDANT',
		'DEFENDANT_NAME',
		'OBJECT_COMPLAINT',
		'OBSERVATION_COMPLAINT',
		'DATE_COMPLAINT',
		'STATUS_COMPLAINT',
		'REFERENCE_REQUEST',
		'DATE_REQUEST',
		'RECIPIENT_REQUEST',
		'SENDER_REQUEST',
		'OBJECT_REQUEST',
		'STATUS_REQUEST',
		'OBSERVATION_REQUEST',
		'MENTION',
		'SANCTION_TYPE',
		'REFERENCE_SANCTION',
		'DATE_SANCTION',
		'DATE_START_SANCTION',
		'DATE_END_SANCTION',
		'DAYS',
		'AMOUNT',
		'MONTHLY',
		'STATUS_SANCTION',
		'DECISION_NUMBER',
		'DATE_DECISION',
		'RECOMMENDATION',
		'PARTICIPANTS',
		'DATE_POST',
		'REQUEST_MENTION',
		'REFERENCE_ANSWER',
		'DATE_ANSWER'
	];
}

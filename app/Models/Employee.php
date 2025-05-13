<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 * 
 * @property int $ID_EMPLOYEE
 * @property int $ID_APPLICANT
 * @property string $IDENTIFIER
 * @property string $MATRICULE
 * @property string $NAME
 * @property string $SURNAME
 * @property string $SEX
 * @property string $DATE_BIRTH
 * @property string $BIRTH_PLACE
 * @property string $EMAIL
 * @property string $PASSWORD
 * @property string $PHONE
 * @property string $PIC
 * @property string $CIVILITY
 * @property string $REGION
 * @property string $ETHNIC_GROUP
 * @property string $ORIGINAL_DEPARTMENT
 * @property string $ENJOYMENT_PLACE
 * @property string $NATIONALITY
 * @property string $RESIDENCE_PLACE
 * @property string $POBOX
 * @property string $NIC
 * @property string $DATE_ISSUE_NIC
 * @property string $PLACE_ISSUE_NIC
 * @property string $MARITAL_STATUS
 * @property string $SENIORITY
 * @property string $KIDS
 * @property string $EMPLOYEE_GROUP
 * @property string $BLOOD_GROUP
 * @property string $HB
 * @property string $HEIGHT
 * @property string $WEIGHT
 * @property string $HAIR_COLOR
 * @property string $DISABLED
 * @property string $HANDICAP
 * @property string $SALARY_PAYMENT_MODE
 * @property string $BANK_NAME
 * @property string $BANK_TYPE
 * @property string $BANK_NUMBER
 * @property string $BANK_KEY
 * @property string $BANK_STATUS
 * @property string $DATE_BANK_CHANGE
 * @property string $SOCIAL_IMMATRICULATION_DATE
 * @property string $SOCIAL_NUMBER
 * @property string $SOCIAL_DIPE
 * @property string $SOCIAL_CENTER_NUMBER
 * @property string $SOCIAL_CENTER_NAME
 * @property string $CREDIT
 * @property string $STATUS
 * @property int $DATE_POST
 * @property string $DATE_HIRING
 * @property string $CONTRACT_CODE
 * @property string $CONTRACT_TYPE
 * @property string $REFERENCE
 * @property string $DURATION
 * @property string $HIRING_PLACE
 * @property string $DIPLOMA_ACTUAL
 * @property string $DIPLOMA_HIRING
 * @property string $DATE_CONTRACT_CREATION
 * @property string $DATE_START_CONTRACT
 * @property string $DATE_END_CONTRACT
 * @property string $CONTRACT_CLAUSE
 * @property string $BREACH_REASON
 * @property string $CONTRACT_STATUS
 * @property string $ROLE
 * @property string $FUNCTION
 * @property string $DIRECTION
 * @property string $SERVICE
 * @property string $CLASSIFICATION
 * @property string $GRADE
 * @property string $RANGES
 * @property string $AGENT_SUBGROUP
 * @property string $CLASS
 * @property string $SALARY_GRID
 * @property string $CAT
 * @property string $ECHELON
 * @property string $INDICE
 * @property string $SALARY_MENSUAL
 * @property string $SALARY_HOURLY
 * @property string $PAYMENT_CYCLE
 * @property string $DATE_SALARY_CHANGE_MODE
 * @property string $DATE_RETIREMENT
 * @property string $NOTIFICATION
 * @property string $NOTIFICATION2
 * @property string $NOTIFICATION6
 * @property string $RETIREMENT_OBSERVATION
 * @property string $HUSBAND_BIRTHPLACE
 *
 * @package App\Models
 */
class Employee extends Model
{
	protected $table = 'employees';
	protected $primaryKey = 'ID_EMPLOYEE';
	public $timestamps = false;

	protected $casts = [
		'ID_APPLICANT' => 'int',
		'DATE_POST' => 'int'
	];

	protected $fillable = [
		'ID_APPLICANT',
		'IDENTIFIER',
		'MATRICULE',
		'NAME',
		'SURNAME',
		'SEX',
		'DATE_BIRTH',
		'BIRTH_PLACE',
		'EMAIL',
		'PASSWORD',
		'PHONE',
		'PIC',
		'CIVILITY',
		'REGION',
		'ETHNIC_GROUP',
		'ORIGINAL_DEPARTMENT',
		'ENJOYMENT_PLACE',
		'NATIONALITY',
		'RESIDENCE_PLACE',
		'POBOX',
		'NIC',
		'DATE_ISSUE_NIC',
		'PLACE_ISSUE_NIC',
		'MARITAL_STATUS',
		'SENIORITY',
		'KIDS',
		'EMPLOYEE_GROUP',
		'BLOOD_GROUP',
		'HB',
		'HEIGHT',
		'WEIGHT',
		'HAIR_COLOR',
		'DISABLED',
		'HANDICAP',
		'SALARY_PAYMENT_MODE',
		'BANK_NAME',
		'BANK_TYPE',
		'BANK_NUMBER',
		'BANK_KEY',
		'BANK_STATUS',
		'DATE_BANK_CHANGE',
		'SOCIAL_IMMATRICULATION_DATE',
		'SOCIAL_NUMBER',
		'SOCIAL_DIPE',
		'SOCIAL_CENTER_NUMBER',
		'SOCIAL_CENTER_NAME',
		'CREDIT',
		'STATUS',
		'DATE_POST',
		'DATE_HIRING',
		'CONTRACT_CODE',
		'CONTRACT_TYPE',
		'REFERENCE',
		'DURATION',
		'HIRING_PLACE',
		'DIPLOMA_ACTUAL',
		'DIPLOMA_HIRING',
		'DATE_CONTRACT_CREATION',
		'DATE_START_CONTRACT',
		'DATE_END_CONTRACT',
		'CONTRACT_CLAUSE',
		'BREACH_REASON',
		'CONTRACT_STATUS',
		'ROLE',
		'FUNCTION',
		'DIRECTION',
		'SERVICE',
		'CLASSIFICATION',
		'GRADE',
		'RANGES',
		'AGENT_SUBGROUP',
		'CLASS',
		'SALARY_GRID',
		'CAT',
		'ECHELON',
		'INDICE',
		'SALARY_MENSUAL',
		'SALARY_HOURLY',
		'PAYMENT_CYCLE',
		'DATE_SALARY_CHANGE_MODE',
		'DATE_RETIREMENT',
		'NOTIFICATION',
		'NOTIFICATION2',
		'NOTIFICATION6',
		'RETIREMENT_OBSERVATION',
		'HUSBAND_BIRTHPLACE'
	];
}

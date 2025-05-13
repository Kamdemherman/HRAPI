<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Applicant
 * 
 * @property int $ID_APPLICANT
 * @property string $APPLICANT_TYPE
 * @property string $ACTUAL_ROLE
 * @property string $MATRICULE
 * @property string $CIVILITY
 * @property string $NAME
 * @property string $SURNAME
 * @property string $DATE_BIRTH
 * @property string $SEXE
 * @property string $EMAIL
 * @property string $PHONE
 * @property string $ADDRESS
 * @property string $MARITAL_STATUS
 * @property string $NATIONALITY
 * @property string $ROLE
 * @property string $EXPERIENCE
 * @property string $DIPLOMA
 * @property string $SCHOOL_LEVEL
 * @property string $SPECIALITY
 * @property string $CNI
 * @property string $BIRTH_PLACE
 * @property string $REGION
 * @property string $DEPARTMENT
 * @property string $ROLES
 * @property string $FORMATION
 * @property string $DIPLOMA_YEAR
 * @property string $SCHOOL
 * @property string $COMPETENCES
 * @property string $PROFESSIONAL_HISTORY
 * @property string $QUALITIES
 * @property string $IS_RECOMMENDED
 * @property string $MENTHOR
 * @property string $AVAILABILITY
 * @property string $DATE_POST
 * @property string $BP
 *
 * @package App\Models
 */
class Applicant extends Model
{
	protected $table = 'applicants';
	protected $primaryKey = 'ID_APPLICANT';
	public $timestamps = false;

	protected $fillable = [
		'APPLICANT_TYPE',
		'ACTUAL_ROLE',
		'MATRICULE',
		'CIVILITY',
		'NAME',
		'SURNAME',
		'DATE_BIRTH',
		'SEXE',
		'EMAIL',
		'PHONE',
		'ADDRESS',
		'MARITAL_STATUS',
		'NATIONALITY',
		'ROLE',
		'EXPERIENCE',
		'DIPLOMA',
		'SCHOOL_LEVEL',
		'SPECIALITY',
		'CNI',
		'BIRTH_PLACE',
		'REGION',
		'DEPARTMENT',
		'ROLES',
		'FORMATION',
		'DIPLOMA_YEAR',
		'SCHOOL',
		'COMPETENCES',
		'PROFESSIONAL_HISTORY',
		'QUALITIES',
		'IS_RECOMMENDED',
		'MENTHOR',
		'AVAILABILITY',
		'DATE_POST',
		'BP'
	];
}

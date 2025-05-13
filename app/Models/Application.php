<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Application
 * 
 * @property int $ID_APPLICATION
 * @property int $ID_OFFER
 * @property string $STATUS
 * @property float $NOTE
 * @property string $APPRECIATION
 * @property string $DATE_START
 * @property string $DATE_END
 * @property string $DATE_POST
 * @property int $ID_APPLICANT
 * @property string $HIRING_NOTE
 * @property string $IS_HIRED
 *
 * @package App\Models
 */
class Application extends Model
{
	protected $table = 'applications';
	protected $primaryKey = 'ID_APPLICATION';
	public $timestamps = false;

	protected $casts = [
		'ID_OFFER' => 'int',
		'NOTE' => 'float',
		'ID_APPLICANT' => 'int'
	];

	protected $fillable = [
		'ID_OFFER',
		'STATUS',
		'NOTE',
		'APPRECIATION',
		'DATE_START',
		'DATE_END',
		'DATE_POST',
		'ID_APPLICANT',
		'HIRING_NOTE',
		'IS_HIRED'
	];
}

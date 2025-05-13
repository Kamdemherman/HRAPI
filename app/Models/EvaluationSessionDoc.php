<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EvaluationSessionDoc
 * 
 * @property int $ID_EVALUATION_SESSION_DOC
 * @property string $NAME
 * @property string $LINK
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property int $DATE_POST
 * @property int $ID_EVALUATION_SESSION
 *
 * @package App\Models
 */
class EvaluationSessionDoc extends Model
{
	protected $table = 'evaluation_session_docs';
	protected $primaryKey = 'ID_EVALUATION_SESSION_DOC';
	public $timestamps = false;

	protected $casts = [
		'DATE_POST' => 'int',
		'ID_EVALUATION_SESSION' => 'int'
	];

	protected $fillable = [
		'NAME',
		'LINK',
		'FILE_EXT',
		'FILE_TYPE',
		'DATE_POST',
		'ID_EVALUATION_SESSION'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrainingDoc
 * 
 * @property int $ID_TRAINING_DOC
 * @property int $ID_TRAINING
 * @property string $NAME
 * @property string $LINK
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class TrainingDoc extends Model
{
	protected $table = 'training_docs';
	protected $primaryKey = 'ID_TRAINING_DOC';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_TRAINING_DOC' => 'int',
		'ID_TRAINING' => 'int'
	];

	protected $fillable = [
		'ID_TRAINING',
		'NAME',
		'LINK',
		'FILE_EXT',
		'FILE_TYPE',
		'DATE_POST'
	];
}

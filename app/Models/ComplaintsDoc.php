<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComplaintsDoc
 * 
 * @property int $ID_COMPLAINTS_DOC
 * @property string $NAME
 * @property string $LINK
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property int $DATE_POST
 * @property int $ID_COMPLAINT
 *
 * @package App\Models
 */
class ComplaintsDoc extends Model
{
	protected $table = 'complaints_docs';
	protected $primaryKey = 'ID_COMPLAINTS_DOC';
	public $timestamps = false;

	protected $casts = [
		'DATE_POST' => 'int',
		'ID_COMPLAINT' => 'int'
	];

	protected $fillable = [
		'NAME',
		'LINK',
		'FILE_EXT',
		'FILE_TYPE',
		'DATE_POST',
		'ID_COMPLAINT'
	];
}

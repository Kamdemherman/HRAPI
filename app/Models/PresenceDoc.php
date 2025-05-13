<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PresenceDoc
 * 
 * @property int $ID_PRESENCE_DOC
 * @property int $ID_PRESENCE
 * @property string $NAME
 * @property string $LINK
 * @property string $FILE_EXT
 * @property string $FILE_TYPE
 * @property string $DATE_POST
 *
 * @package App\Models
 */
class PresenceDoc extends Model
{
	protected $table = 'presence_docs';
	protected $primaryKey = 'ID_PRESENCE_DOC';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PRESENCE_DOC' => 'int',
		'ID_PRESENCE' => 'int'
	];

	protected $fillable = [
		'ID_PRESENCE',
		'NAME',
		'LINK',
		'FILE_EXT',
		'FILE_TYPE',
		'DATE_POST'
	];
}

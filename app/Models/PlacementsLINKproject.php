<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PlacementsLINKproject
 * 
 * @property int $id
 * @property Carbon $dtinsert
 * @property Carbon $dtedit
 * @property int $pr_ID
 * @property int $phyID
 * @property int $searchID
 * @property string $vorgeschlagen
 * @property Carbon $vorgeschlagenAm
 * @property string $vorgeschlagenVon
 * @property string|null $bemerkungen
 * @property string $EinsatzBestaetigt
 * @property string $ignorieren
 *
 * @package App\Models
 */
class PlacementsLINKproject extends Model
{
	protected $table = 'placementsLINKprojects';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'pr_ID' => 'int',
		'phyID' => 'int',
		'searchID' => 'int'
	];

	protected $dates = [
		'dtinsert',
		'dtedit',
		'vorgeschlagenAm'
	];

	protected $fillable = [
		'id',
		'dtinsert',
		'dtedit',
		'searchID',
		'vorgeschlagen',
		'vorgeschlagenAm',
		'vorgeschlagenVon',
		'bemerkungen',
		'EinsatzBestaetigt',
		'ignorieren'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Placement
 *
 * @property int $id
 * @property int $searchID
 * @property int $phyID
 * @property Carbon $dtinsert
 * @property Carbon $dtedit
 * @property string $gesehen
 * @property string $Einsatzinfo
 * @property string $gescheitert
 * @property string $gescheitert_warum
 * @property string $gescheitert_aue
 *
 * @package App\Models
 */
class Placement extends Model
{
	protected $table = 'placements';
	public $timestamps = false;

	protected $casts = [
		'searchID' => 'int',
		'phyID' => 'int'
	];

	protected $dates = [
		'dtinsert',
		'dtedit'
	];

	protected $fillable = [
		'searchID',
		'phyID',
		'dtinsert',
		'dtedit',
		'gesehen',
		'Einsatzinfo',
		'gescheitert',
		'gescheitert_warum',
		'gescheitert_aue'
    ];

    public function Vermittlung()
    {
        return $this->belongsTo('App\Models\Vermittlung');
    }

    public function Nutzer()
    {
        return $this->hasOne('App\Models\Nutzer','id','phyID');
    }
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectsDatum
 *
 * @property int $id
 * @property int $searchID
 * @property int $ContractID
 * @property int $docsID
 * @property Carbon $dtinsert
 * @property Carbon $dtedit
 * @property string $von
 * @property string $bis
 * @property string $VertragZusage
 * @property string $Vertrag
 * @property int $VertragPhyID
 * @property string|null $VertragPhyIDs
 * @property string $VertragDatei
 * @property string $VertragZurueckArzt
 * @property string $VertragZurueckEinr
 * @property string $VertragZurueckVerfolgen
 * @property string|null $projects_info
 * @property string $boolClosed
 * @property string $boolIgnoreForBills
 * @property string|null $strKostenstelle
 *
 * @package App\Models
 */
class Zeitraum extends Model
{
	protected $table = 'projects_data';
	public $timestamps = false;

	protected $casts = [
		'searchID' => 'int',
		'ContractID' => 'int',
		'docsID' => 'int',
		'VertragPhyID' => 'int'
	];

	protected $dates = [
		'dtinsert',
		'dtedit'
	];

	protected $fillable = [
		'searchID',
		'ContractID',
		'docsID',
		'dtinsert',
		'dtedit',
		'von',
		'bis',
		'VertragZusage',
		'Vertrag',
		'VertragPhyID',
		'VertragPhyIDs',
		'VertragDatei',
		'VertragZurueckArzt',
		'VertragZurueckEinr',
		'VertragZurueckVerfolgen',
		'projects_info',
		'boolClosed',
		'boolIgnoreForBills',
		'strKostenstelle'
    ];

    public function Vermittlung()
    {
        return $this->belongsTo('App\Models\Vermittlung');
    }

    public function Vertrag()
    {
        return $this->hasOne('App\Models\Vertrag');
    }
}

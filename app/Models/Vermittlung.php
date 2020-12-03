<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Utilities\FilterBuilder;
use Kyslik\ColumnSortable\Sortable;

/**
 * Class ContractorsSearch
 *
 * @property int $id
 * @property Carbon $dtinsert
 * @property Carbon $dtedit
 * @property string $FirmenIDs
 * @property int $Angebotsnr
 * @property string $AuftragsnrAG
 * @property string $SessionID
 * @property string $angelegtvon
 * @property string $bearbeitetvon
 * @property string $status
 * @property int $contractor
 * @property int|null $person
 * @property int|null $user
 * @property int $AkquiseID
 * @property string $typ
 * @property string $type_med
 * @property string $type_search
 * @property string $fachgebiet
 * @property string $fgid
 * @property string $fachabteilung
 * @property string $facharzt
 * @property string $zusatzbezeichnung
 * @property string $sprachkenntnisse
 * @property string|null $besondereAnforderungen
 * @property string $ort
 * @property string $plz
 * @property string $land
 * @property string|null $zeitraum
 * @property string|null $stunden
 * @property string $unterbringung
 * @property string $verpflegung
 * @property string $berufshaftpflicht
 * @property string $verguetung
 * @property int $verguetung_intern
 * @property string $verguetung_currency
 * @property bool $honorarart
 * @property string|null $anmerkungen
 * @property string|null $ShouldBeContacted
 * @property string|null $alreadyContacted
 * @property string|null $alreadyReplied
 * @property string $schwerpunktkompetenz
 * @property string $skid
 * @property string $spezialkenntnisse
 * @property string $spid
 * @property string $Rettungsdienst
 * @property string $zsb_uo_rettungsdienst
 * @property string $Strahlenschutz
 * @property string $Vertretungsarten
 * @property string $zeitarten_ausschluss
 * @property string $zeitarten_preferences
 * @property string|null $plzbereich
 * @property string|null $smslist
 * @property string|null $deakInfo
 * @property int $AP1
 * @property int $AP2
 * @property int $APM
 * @property int $APV
 * @property string $PL1
 * @property string $PL2
 * @property string $PV1
 * @property string|null $Verm_infos
 * @property string|null $Verm_infos_intern
 * @property Carbon $WVLam
 * @property string $WVLGrund
 * @property string $boolToDelete
 * @property string $sj3
 * @property string $sj4
 * @property string $sj5
 * @property string $sj14
 *
 * @package App\Models
 */
class Vermittlung extends Model
{
	protected $table = 'contractors_searches';
	public $timestamps = false;

	protected $casts = [
		'Angebotsnr' => 'int',
		'contractor' => 'int',
		'person' => 'int',
		'user' => 'int',
		'AkquiseID' => 'int',
		'verguetung_intern' => 'int',
		'honorarart' => 'bool',
		'AP1' => 'int',
		'AP2' => 'int',
		'APM' => 'int',
		'APV' => 'int'
	];

	protected $dates = [
		'dtinsert',
		'dtedit',
		'WVLam'
	];

	protected $fillable = [
		'dtinsert',
		'dtedit',
		'FirmenIDs',
		'Angebotsnr',
		'AuftragsnrAG',
		'SessionID',
		'angelegtvon',
		'bearbeitetvon',
		'status',
		'contractor',
		'person',
		'user',
		'AkquiseID',
		'typ',
		'type_med',
		'type_search',
		'fachgebiet',
		'fgid',
		'fachabteilung',
		'facharzt',
		'zusatzbezeichnung',
		'sprachkenntnisse',
		'besondereAnforderungen',
		'ort',
		'plz',
		'land',
		'zeitraum',
		'stunden',
		'unterbringung',
		'verpflegung',
		'berufshaftpflicht',
		'verguetung',
		'verguetung_intern',
		'verguetung_currency',
		'honorarart',
		'anmerkungen',
		'ShouldBeContacted',
		'alreadyContacted',
		'alreadyReplied',
		'schwerpunktkompetenz',
		'skid',
		'spezialkenntnisse',
		'spid',
		'Rettungsdienst',
		'zsb_uo_rettungsdienst',
		'Strahlenschutz',
		'Vertretungsarten',
		'zeitarten_ausschluss',
		'zeitarten_preferences',
		'plzbereich',
		'smslist',
		'deakInfo',
		'AP1',
		'AP2',
		'APM',
		'APV',
		'PL1',
		'PL2',
		'PV1',
		'Verm_infos',
		'Verm_infos_intern',
		'WVLam',
		'WVLGrund',
		'boolToDelete',
		'sj3',
		'sj4',
		'sj5',
		'sj14'
    ];

    use Sortable;

    protected $sortable = [
        'id',
		'dtinsert',
		'dtedit',
		'FirmenIDs',
		'Angebotsnr',
		'AuftragsnrAG',
		'SessionID',
		'angelegtvon',
		'bearbeitetvon',
		'status',
		'contractor',
		'person',
		'user',
		'AkquiseID',
		'typ',
		'type_med',
		'type_search',
		'fachgebiet',
		'fgid',
		'fachabteilung',
		'facharzt',
		'zusatzbezeichnung',
		'sprachkenntnisse',
		'besondereAnforderungen',
		'ort',
		'plz',
		'land',
		'zeitraum',
		'stunden',
		'unterbringung',
		'verpflegung',
		'berufshaftpflicht',
		'verguetung',
		'verguetung_intern',
		'verguetung_currency',
		'honorarart',
		'anmerkungen',
		'ShouldBeContacted',
		'alreadyContacted',
		'alreadyReplied',
		'schwerpunktkompetenz',
		'skid',
		'spezialkenntnisse',
		'spid',
		'Rettungsdienst',
		'zsb_uo_rettungsdienst',
		'Strahlenschutz',
		'Vertretungsarten',
		'zeitarten_ausschluss',
		'zeitarten_preferences',
		'plzbereich',
		'smslist',
		'deakInfo',
		'AP1',
		'AP2',
		'APM',
		'APV',
		'PL1',
		'PL2',
		'PV1',
		'Verm_infos',
		'Verm_infos_intern',
		'WVLam',
		'WVLGrund',
		'boolToDelete',
		'sj3',
		'sj4',
		'sj5',
		'sj14'
    ];

    public function scopeFilterBy($query, $filters)
    {
        $namespace = 'App\Utilities\Filters';
        $filter = new FilterBuilder($query, $filters, $namespace);

        return $filter->apply();
    }
}

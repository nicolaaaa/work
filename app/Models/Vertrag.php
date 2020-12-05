<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContractorsSearchesContract
 *
 * @property int $id
 * @property Carbon $dtinsert
 * @property Carbon $dtedit
 * @property string $FirmenIDs
 * @property string $dtTimestamp
 * @property int $docsID
 * @property int $intHVnr
 * @property string $strFilename
 * @property string $strFilenameCL
 * @property int $searchID
 * @property int $Angebotsnr
 * @property string $ZeitIDs
 * @property string $optUhrzeitAuswahl
 * @property int $AkquiseID
 * @property string $apIDs
 * @property int $VertragPhyID
 * @property string $SessionID
 * @property string $bearbeitetvon
 * @property string $status
 * @property string $boolEditPage01
 * @property string $boolEditPage02
 * @property string $boolEditPage03
 * @property string $apIDsMail
 * @property string $apIDsMail_imText
 * @property string $boolMailSentAP
 * @property string $boolMailSentArzt
 * @property string|null $crm_contractors_main___name
 * @property string|null $crm_contractors_main___AnschriftVoll
 * @property string|null $crm_Ansprechpartner___Anredezeile
 * @property string|null $physicians_personal___crm_Anredezeile
 * @property string|null $physicians_personal___AnschriftVoll
 * @property string|null $contractors_searches___fachgebiet
 * @property string|null $projects_data___MIN__von__
 * @property string|null $projects_data___MAX__bis__
 * @property string|null $projects_data___id
 * @property string $verguetung_currency
 * @property float $numh
 * @property float $numd
 * @property float $numhours
 * @property float $numhadd
 * @property float $nump
 * @property string $boolBD
 * @property string $boolBDabgegolten
 * @property float $numBDh_percent
 * @property float $numBDh
 * @property float $numBDhw
 * @property float $numBDhwe
 * @property float $numBDdw
 * @property float $numBDdwe
 * @property string $boolRBD
 * @property string $boolRBDabgegolten
 * @property float $numRBDh_percent
 * @property float $numRBDh
 * @property float $numRBDh_only
 * @property float $numRBDhours
 * @property float $numRBDdw
 * @property float $numRBDdwe
 * @property float $numZSsa
 * @property string $txtZSsa
 * @property float $numZSso
 * @property string $txtZSso
 * @property float $numZSfe
 * @property string $txtZSfe
 * @property float $numZSna
 * @property string $txtZSna
 * @property float $numZSadd
 * @property string $txtZSadd
 * @property string $timeZSadd
 * @property string|null $txt_verguetung
 * @property string|null $txt_verguetung_ergaenzung
 * @property string|null $txt_verguetung_zahlungsziel
 * @property string $txt_abrechnung
 * @property string|null $txt_sonstiges_ergaenzung
 * @property float $numAbschlagProv_percent
 * @property string $boolOhneArztRV
 *
 * @package App\Models
 */
class Vertrag extends Model
{
	protected $table = 'contractors_searches_contracts';
	public $timestamps = false;

	protected $casts = [
		'docsID' => 'int',
		'intHVnr' => 'int',
		'searchID' => 'int',
		'Angebotsnr' => 'int',
		'AkquiseID' => 'int',
		'VertragPhyID' => 'int',
		'numh' => 'float',
		'numd' => 'float',
		'numhours' => 'float',
		'numhadd' => 'float',
		'nump' => 'float',
		'numBDh_percent' => 'float',
		'numBDh' => 'float',
		'numBDhw' => 'float',
		'numBDhwe' => 'float',
		'numBDdw' => 'float',
		'numBDdwe' => 'float',
		'numRBDh_percent' => 'float',
		'numRBDh' => 'float',
		'numRBDh_only' => 'float',
		'numRBDhours' => 'float',
		'numRBDdw' => 'float',
		'numRBDdwe' => 'float',
		'numZSsa' => 'float',
		'numZSso' => 'float',
		'numZSfe' => 'float',
		'numZSna' => 'float',
		'numZSadd' => 'float',
		'numAbschlagProv_percent' => 'float'
	];

	protected $dates = [
		'dtinsert',
		'dtedit'
    ];


	protected $fillable = [
		'dtinsert',
		'dtedit',
		'FirmenIDs',
		'dtTimestamp',
		'docsID',
		'intHVnr',
		'strFilename',
		'strFilenameCL',
		'searchID',
		'Angebotsnr',
		'ZeitIDs',
		'optUhrzeitAuswahl',
		'AkquiseID',
		'apIDs',
		'VertragPhyID',
		'SessionID',
		'bearbeitetvon',
		'status',
		'boolEditPage01',
		'boolEditPage02',
		'boolEditPage03',
		'apIDsMail',
		'apIDsMail_imText',
		'boolMailSentAP',
		'boolMailSentArzt',
		'crm_contractors_main___name',
		'crm_contractors_main___AnschriftVoll',
		'crm_Ansprechpartner___Anredezeile',
		'physicians_personal___crm_Anredezeile',
		'physicians_personal___AnschriftVoll',
		'contractors_searches___fachgebiet',
		'projects_data___MIN__von__',
		'projects_data___MAX__bis__',
		'projects_data___id',
		'verguetung_currency',
		'numh',
		'numd',
		'numhours',
		'numhadd',
		'nump',
		'boolBD',
		'boolBDabgegolten',
		'numBDh_percent',
		'numBDh',
		'numBDhw',
		'numBDhwe',
		'numBDdw',
		'numBDdwe',
		'boolRBD',
		'boolRBDabgegolten',
		'numRBDh_percent',
		'numRBDh',
		'numRBDh_only',
		'numRBDhours',
		'numRBDdw',
		'numRBDdwe',
		'numZSsa',
		'txtZSsa',
		'numZSso',
		'txtZSso',
		'numZSfe',
		'txtZSfe',
		'numZSna',
		'txtZSna',
		'numZSadd',
		'txtZSadd',
		'timeZSadd',
		'txt_verguetung',
		'txt_verguetung_ergaenzung',
		'txt_verguetung_zahlungsziel',
		'txt_abrechnung',
		'txt_sonstiges_ergaenzung',
		'numAbschlagProv_percent',
		'boolOhneArztRV'
    ];

    public function Vermittlung()
    {
        return $this->belongsTo('App\Models\Vermittlung');
    }

    public function Zeitraum()
    {
        return $this->belongsTo('App\Models\Zeitraum');
    }
}

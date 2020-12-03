<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;


use Carbon\Carbon;
use App\Utilities\FilterBuilder;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PhysiciansPersonal
 *
 * @property int $id
 * @property int $BuchhID
 * @property string $FirmenIDs
 * @property string $anrede
 * @property string $name
 * @property string|null $vorname
 * @property string|null $titel
 * @property string|null $strasse
 * @property string|null $zusatz
 * @property string|null $ort
 * @property string|null $plz
 * @property string|null $land
 * @property string|null $tel_privat
 * @property string|null $tel_dienstlich
 * @property string|null $tel_mobil
 * @property string|null $fax
 * @property string|null $mail
 * @property string $preferred_contact
 * @property string|null $sprachen
 * @property string $crm_Ordnerpfad
 * @property string $crm_Anredezeile
 * @property string $crm_aktiv
 * @property string $crm_aktiv_user
 * @property string|null $crm_SteuerNr
 * @property string|null $crm_Bank_Inhaber
 * @property string|null $crm_Bank_Konto
 * @property string|null $crm_Bank_Name
 * @property string|null $crm_Bank_BLZ
 * @property string $crm_Bank_IBAN
 * @property string $crm_Bank_BIC
 * @property int $crm_Zahlungsziel
 * @property int $gebtag
 * @property int $gebmonat
 * @property int $gebjahr
 * @property string|null $mail2
 * @property string $infos
 * @property string $boolToDelete
 * @property string $boolEigeneRN
 * @property string $boolPremium
 * @property string $boolHonorarDirekt
 *
 * @package App\Models
 */
class Nutzer extends Model
{
	protected $table = 'physicians_personal';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'BuchhID' => 'int',
		'crm_Zahlungsziel' => 'int',
		'gebtag' => 'int',
		'gebmonat' => 'int',
		'gebjahr' => 'int'
	];

	protected $fillable = [
		'BuchhID',
		'FirmenIDs',
		'anrede',
		'name',
		'vorname',
		'titel',
		'strasse',
		'zusatz',
		'ort',
		'plz',
		'land',
		'tel_privat',
		'tel_dienstlich',
		'tel_mobil',
		'fax',
		'mail',
		'preferred_contact',
		'sprachen',
		'crm_Ordnerpfad',
		'crm_Anredezeile',
		'crm_aktiv',
		'crm_aktiv_user',
		'crm_SteuerNr',
		'crm_Bank_Inhaber',
		'crm_Bank_Konto',
		'crm_Bank_Name',
		'crm_Bank_BLZ',
		'crm_Bank_IBAN',
		'crm_Bank_BIC',
		'crm_Zahlungsziel',
		'gebtag',
		'gebmonat',
		'gebjahr',
		'mail2',
		'infos',
		'boolToDelete',
		'boolEigeneRN',
		'boolPremium',
		'boolHonorarDirekt'
    ];

    use Sortable;

    protected $sortable = [
        'BuchhID',
		'FirmenIDs',
		'anrede',
		'name',
		'vorname',
		'titel',
		'strasse',
		'zusatz',
		'ort',
		'plz',
		'land',
		'tel_privat',
		'tel_dienstlich',
		'tel_mobil',
		'fax',
		'mail',
		'preferred_contact',
		'sprachen',
		'crm_Ordnerpfad',
		'crm_Anredezeile',
		'crm_aktiv',
		'crm_aktiv_user',
		'crm_SteuerNr',
		'crm_Bank_Inhaber',
		'crm_Bank_Konto',
		'crm_Bank_Name',
		'crm_Bank_BLZ',
		'crm_Bank_IBAN',
		'crm_Bank_BIC',
		'crm_Zahlungsziel',
		'gebtag',
		'gebmonat',
		'gebjahr',
		'mail2',
		'infos',
		'boolToDelete',
		'boolEigeneRN',
		'boolPremium',
		'boolHonorarDirekt'
    ];


    public function scopeFilterBy($query, $filters)
    {
        $namespace = 'App\Utilities\Filters';
        $filter = new FilterBuilder($query, $filters, $namespace);

        return $filter->apply();
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Vermittlung;
use App\Models\Nutzer;


class VermittlungenController extends Controller
{
    public function index(Request $request)
    {


        $vermittlungen = Vermittlung::filterBy(request()->all())->sortable()->paginate(5);

        // $vermittlungen = $query->get();
        // dd($vermittlungen->id());
        return view('vermittlungen', ['vermittlungen' => $vermittlungen]);
    }

    public function store(Request $request)
    {
        dd('ok');
    }

    public function details(int $id){
        $vermittlung = Vermittlung::find($id);
        $vertraege = $vermittlung->Vertraege()->get();
        $zeitraueme = $vermittlung->Zeitraeume()->get();
        $placements = $vermittlung->Placements()->get();
        foreach ($placements as $placement){
            $placement_nutzer = $placement->Nutzer()->get();
        }
        $rueckmeldungen = explode(',',$vermittlung->alreadyReplied);

        foreach ($rueckmeldungen as $rueckmeldung){
            // dd($rueckmeldung);

            $rueckmeldungen_nutzer = Nutzer::find($rueckmeldung);
        }
// dd($rueckmeldungen_nutzer);

        return view('vermittlung_details', [
        'vermittlung' => $vermittlung,
        'vertraege' => $vertraege,
        'zeitraueme' => $zeitraueme,
        'placements' => $placement_nutzer,
        'rueckmeldungen' => $rueckmeldungen_nutzer
        ]);
    }



}

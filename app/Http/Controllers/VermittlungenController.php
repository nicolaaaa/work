<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Vermittlung;


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



}

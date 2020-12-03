<?php

namespace App\Http\Controllers;
use App\Models\Nutzer;

use Illuminate\Http\Request;

class NutzerController extends Controller
{

        public function index(Request $request)
        {


            $nutzer = Nutzer::filterBy(request()->all())->sortable()->paginate(5);

            // $vermittlungen = $query->get();
            // dd($vermittlungen->id());
            return view('nutzer', ['nutzer' => $nutzer]);
        }


}

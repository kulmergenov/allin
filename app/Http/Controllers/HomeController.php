<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Library;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('add');
    }
    public function savelib(Request $request){
        if (Auth::user()->admin == 1) {
            $prepare = new Library();
            $prepare->title_kz = $request['title_kz'];
            $prepare->description = $request['description'];
            $prepare->title_ru = $request['title_ru'];
            $prepare->title_en = $request['title_en'];
            $prepare->title_cn = $request['title_cn'];
            $prepare->title_tr = $request['title_tr'];
            $prepare->title_de = $request['title_de'];
            $prepare->title_kg = $request['title_kg'];
            $prepare->title_uz = $request['title_uz'];
            $prepare->title_az = $request['title_az'];
            $prepare->title_tm = $request['title_tm'];
            $prepare->etimology = $request['etimology'];
            $prepare->termin = $request['termin'];
            $prepare->orphography = $request['orphography'];
            $prepare->save();
            return redirect()->back()->with(['success' => 'Сәтті тіркелді!']);
        } else {
            return redirect()->back()->with(403, 'Unauthorized action.');
        }
    }
}

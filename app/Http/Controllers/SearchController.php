<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Library;
use App\Models\Relations;
use App\Models\Types;
use Illuminate\Support\Facades\DB;
use Redirect;

class SearchController extends Controller
{
    //
    public function search(Request $request){
        $newPrepare = Library::where('title_kz', 'LIKE', trim(@$request['title_kz']))->first();
        $antonym = Relations::where('ida', @$newPrepare->id)->where('type',1)->leftjoin('library','library.id','=','relations.idb')->get();
        $synonym = Relations::where('ida', @$newPrepare->id)->where('type',2)->leftjoin('library','library.id','=','relations.idb')->get();
        $omonym = Relations::where('ida', @$newPrepare->id)->where('type',3)->leftjoin('library','library.id','=','relations.idb')->get();
        return view('welcome', compact('newPrepare','antonym','synonym','omonym'));
    }
}

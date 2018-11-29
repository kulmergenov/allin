<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Library;
use App\Models\Relations;
use App\Models\Types;
use Illuminate\Support\Facades\DB;
use Redirect;

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
    public function edit(Request $request){
        $newPrepare = Library::find( trim(@$request['id']));
        $antonym = Relations::where('ida', $newPrepare->id)->where('type',1)->leftjoin('library','library.id','=','relations.idb')->get();
        $synonym = Relations::where('ida', $newPrepare->id)->where('type',2)->leftjoin('library','library.id','=','relations.idb')->get();
        $omonym = Relations::where('ida', $newPrepare->id)->where('type',3)->leftjoin('library','library.id','=','relations.idb')->get();
        return view('edit', compact('newPrepare','antonym','synonym','omonym'));
    }
    public function list(Request $request){
        $words = Library::paginate(10);
        return view('list', compact('words'));
    }
    public function savelib(Request $request){
        if (Auth::user()->admin == 1) {
            if (!empty($request['save']) == 'OK') {
                $prepare = Library::find(@$request['wordid']);
            } elseif (!empty($request['search']) == 'OK') {
                $newPrepare = Library::where('title_kz', 'LIKE', trim(@$request['title_kz']))->first();
                return Redirect::to('/edit/'.$newPrepare->id);
            } else {
                $prepare = new Library();
            }
            $prepare->title_kz = @$request['title_kz'];
            $prepare->description = @$request['description'];
            $prepare->title_ru = @$request['title_ru'];
            $prepare->title_en = @$request['title_en'];
            $prepare->title_cn = @$request['title_cn'];
            $prepare->title_tr = @$request['title_tr'];
            $prepare->title_de = @$request['title_de'];
            $prepare->title_kg = @$request['title_kg'];
            $prepare->title_uz = @$request['title_uz'];
            $prepare->title_az = @$request['title_az'];
            $prepare->title_tm = @$request['title_tm'];
            $prepare->etimology = @$request['etimology'];
            $prepare->termin = @$request['termin'];
            $prepare->orphography = @$request['orphography'];
            $prepare->save();
            $newPrepare = Library::where('title_kz', @$request['title_kz'])->first();
//            echo '<pre>';
//            var_dump($newPrepare);
//            echo $request['antonymId'];
//            echo $request['antonymId'];
//            echo $request['omonymId'];
//            die;
            if (!empty($request['antonymId'])) {
                $newRelation = new Relations();
                $newRelation->ida = $newPrepare->id;
                $newRelation->idb = @$request['antonymId'];
                $newRelation->type = 1;
                $newRelation->save();
                $newRelation0 = new Relations();
                $newRelation0->idb = $newPrepare->id;
                $newRelation0->ida = @$request['antonymId'];
                $newRelation0->type = 1;
                $newRelation0->save();
            }
            if (!empty($request['synonymId'])) {
                $newRelation1 = new Relations();
                $newRelation1->ida = $newPrepare->id;
                $newRelation1->idb = @$request['synonymId'];
                $newRelation1->type = 2;
                $newRelation1->save();
                $newRelation11 = new Relations();
                $newRelation11->idb = $newPrepare->id;
                $newRelation11->ida = @$request['synonymId'];
                $newRelation11->type = 2;
                $newRelation11->save();
            }
            if (!empty($request['omonymId'])) {
                $newRelation2 = new Relations();
                $newRelation2->ida = $newPrepare->id;
                $newRelation2->idb = @$request['omonymId'];
                $newRelation2->type = 3;
                $newRelation2->save();
                $newRelation21 = new Relations();
                $newRelation21->idb = $newPrepare->id;
                $newRelation21->ida = @$request['omonymId'];
                $newRelation21->type = 3;
                $newRelation21->save();
            }
            return redirect()->back()->withSuccess('Сәтті тіркелді!');
        } else {
            return redirect()->back()->withErrors(403, 'Unauthorized action.');
        }
    }
    public function autocompleteAntonym(Request $request){
        $term = $request->term;
        $data = Library::where('title_kz', 'LIKE', '%'.$term.'%')->take(10)->get();
        $results = array();
        foreach ($data as $key => $v) {
            $results[] = ['id'=>$v->id,'value'=>$v->title_kz];
        }
        return response()->json($results);
    }
    public function autocompleteSynonym(Request $request){
        $term = $request->term;
        $data = Library::where('title_kz', 'LIKE', '%'.$term.'%')->take(10)->get();
        $results = array();
        foreach ($data as $key => $v) {
            $results[] = ['id'=>$v->id,'value'=>$v->title_kz];
        }
        return response()->json($results);
    }
    public function autocompleteOmonym(Request $request){
        $term = $request->term;
        $data = Library::where('title_kz', 'LIKE', '%'.$term.'%')->take(10)->get();
        $results = array();
        foreach ($data as $key => $v) {
            $results[] = ['id'=>$v->id,'value'=>$v->title_kz];
        }
        return response()->json($results);
    }

}

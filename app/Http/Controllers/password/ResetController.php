<?php

namespace App\Http\Controllers\password;

use App\City;
use App\User;
use App\faculty;
use App\ddiplome;
use App\rdiplome;
use App\Orientation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ResetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villes = City::all();
        $filiéres = faculty::all();
        return view('admin.universités.create')->with([
            'filiéres' => $filiéres,
            'villes' => $villes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nbF = DB::table('faculties')->count();
        $nbE = DB::table('schools')->count();
        return view('admin.home2')->with([
            'nbF' => $nbF,
            'nbE' => $nbE
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
            $i =0;
            $j =0;
            $BAC =$request['BAC'];
            $ville =$request['ville'];
            $city = City::select('id')->where('name', $request['ville'])->first(); 
            $orientation =  Orientation::create([
                  'BAC' => $BAC,
                  'country' => $ville,
                  'metier' => $request['D_metier'],
                  'type_ecole' => $request['type_ecole'],
                  'city_id'=>$city['id'],
              ]);
        $student = Orientation::where('id', '=',$orientation->id)->first();
            $metier = $request['metier'];
            // dd($P_metier);
            $ids_m = DB::table('metiers')->select('id')->where('name', $metier)->first();
            // dd($ids_m->id);
            $school_metiers = DB::table('metier_school')->select('school_id')->where('metier_id',$ids_m->id)->get()->toArray();
            // dd($school_metiers);
            foreach ($school_metiers as $value) {
                $array[] = (array)$value;
            }
            
            $ids_b = DB::table('series')->select('id')->where('name', $request['BAC'])->first();
            // dd($array);
            $school_serie = DB::table('school_serie')->select('school_id')->where('serie_id',$ids_b->id)->get()->toArray();            
            foreach ($school_serie as $value) {
                $table[] = (array)$value;
            }
            // dd($table);
            $schools = DB::table('schools')
            ->whereIn('id' ,$array)
            ->whereIn('id' ,$table)
            ->where('localisation',$request['country'])
            ->get()
            ->toArray();
               
        return view('Front.Orientation.resultOrientation')->with([
            'student' => $student,
            'metier' => $metier,
            'i' => $i,
            'j' => $j,
            'BAC' => $BAC,
            'ville' => $ville,
            'schools' => $schools,
    ]);
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $i = 0;
        //     $faculty_school = DB::table('faculty_school')->select('faculty_id')->where('school_id',$id)->get()->toArray();            
        //     foreach ($faculty_school as $value) {
        //         $table[] = (array)$value;
        //     }
        //     // dd($table);
        //     $faculties = DB::table('faculties')
        //     ->whereIn('id' ,$table)
        //     // ->where('TypeUniversité' , $request['type_ecole'])
        //     ->get()
        //     ->toArray();
        //     return view('Front.Orientation.faculty_school')->with([
        //         'i' => $i,
        //         'faculties' => $faculties
        //     ]);
        return view('Front.Orientation.profil_filiéres');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $facultie = faculty::where('id', '=',$id)->first();
        return view('admin.Filières.editFiliére')->with('facultie' , $facultie); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActivitesRequest;
use App\Models\Activite;
use Illuminate\Http\Request;
use App\Models\User;

class ActivitesController extends Controller
{

    public function index(User $user){
        $msg = session()->get('msg');
        if($user->id == auth()->user()->id){
            $activites = $user->activites()->get();
            return view('activites.index')->with('activites',$activites)->with('msg',$msg);        

        }else{
           return to_route('activites.index',auth()->user()->id);
        }
        

    }

    public function store(ActivitesRequest $request){
        $activite = [
            'name'=>$request->name,
            'status'=>'fazer','user_id'=>auth()->user()->id
        ];
        Activite::insert($activite);

        return to_route('activites.index',auth()->user()->id)->with('msg','Atividade adicionada com sucesso');

    }

    public function destroy(Activite $activite){
        $activite->delete();
        return to_route('activites.index',auth()->user()->id)->with('msg','Atividade removida com sucesso');
        

    }


    public function edit(){
        return view('activites.index');

    }


    public function update(Activite $activite){
        $activite['status'] = 'feito';
        $activite->save();
        return to_route('activites.index',auth()->user()->id)->with('msg','Atividade atualizada com sucesso');

    }



}

<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\state;
use Illuminate\Http\Request;

class GeoController extends Controller
{
    //
    public function stateList(){
        $states = state::all();
        return view("admin.states",["states"=>$states]);
    }
    public function cityList(){
        $cities = city::all();
        $states = state::all();
        return view("admin.cities",["cities"=>$cities,"states"=>$states]);
    }

    public function addState(Request $request){
        try{
            $validateData = $request->validate([
                'name' => 'required|string|min:2|max:64',
            ]);
                state::insert([
                    'name' => $request->post('name'),
                ]);
            return response()->json(['success'=>true]);
        }
        catch (\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        }
    }
    public function editState(Request $request){
        try{
            $validateData = $request->validate([
                'id' => 'required|integer',
                'name' => 'required|string|min:2|max:64',
            ]);

            $state = state::where('id',$request->post('id'))->first();
            if($state){
                $state->update([
                    'name' => $request->post('name'),
                ]);
                return response()->json(['success'=>true]);
            }else{
                return response()->json(['success'=>false,'msg'=>'استان وجود ندارد!']);
            }

        }
        catch (\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        }
    }
    public function getState(Request $request){
        try{
            $validateData = $request->validate([
                'id' => 'required|integer',
            ]);

            $state = state::where('id',$request->post('id'))->first();
            if($state){
                return response()->json(['success'=>true,'state'=>['name'=>$state->name]]);
            }else{
                return response()->json(['success'=>false,'msg'=>'استان وجود ندارد!']);
            }

        }
        catch (\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        }
    }
    public function removeState(Request $request){
        try{
            $validateData = $request->validate([
                'id' => 'required|integer',
            ]);

            $state = state::where('id',$request->post('id'))->first();
            if($state){
                $state->delete();
                return response()->json(['success'=>true]);
            }else{
                return response()->json(['success'=>false,'msg'=>'استان وجود ندارد!']);
            }

        }
        catch (\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        }
    }
    public function addCity(Request $request){
        try{
            $validateData = $request->validate([
                'name' => 'required|string|min:2|max:64',
                'stateId' => 'required|integer',
            ]);

            city::insert([
                'name' => $request->post('name'),
                'stateId' => $request->post('stateId'),
            ]);
            return response()->json(['success'=>true]);
        }
        catch (\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        }
    }
    public function editCity(Request $request){
        try{
            $validateData = $request->validate([
                'id' => 'required|integer',
                'name' => 'required|string|min:2|max:64',
                'stateId' => 'required|integer',
            ]);

            $city = city::where('id',$request->post('id'))->first();
            if($city){
                $city->update([
                    'name' => $request->post('name'),
                ]);
                return response()->json(['success'=>true]);
            }else{
                return response()->json(['success'=>false,'msg'=>'شهر وجود ندارد!']);
            }

        }
        catch (\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        }
    }
    public function getCity(Request $request){
        try{
            $validateData = $request->validate([
                'id' => 'required|integer',
            ]);

            $city = city::where('id',$request->post('id'))->first();
            if($city){
                return response()->json(['success'=>true,'state'=>['name'=>$city->name]]);
            }else{
                return response()->json(['success'=>false,'msg'=>'استان وجود ندارد!']);
            }

        }
        catch (\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        }
    }
    public function removeCity(Request $request){
        try{
            $validateData = $request->validate([
                'id' => 'required|integer',
            ]);

            $city = city::where('id',$request->post('id'))->first();
            if($city){
                $city->delete();
                return response()->json(['success'=>true]);
            }else{
                return response()->json(['success'=>false,'msg'=>'استان وجود ندارد!']);
            }

        }
        catch (\Exception $e){
            return response()->json(['success'=>false,'msg'=>$e->getMessage()]);
        }
    }
}

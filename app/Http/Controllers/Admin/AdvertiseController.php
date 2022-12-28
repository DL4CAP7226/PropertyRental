<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertise;
use DB;

class AdvertiseController extends Controller
{
    public function index()
    {
        $data['advertise'] = Advertise::get();
        return view('admin.advertise.advertise',$data)->with('i');
    }

    public function createadvertise(){
        return view('admin.advertise.create');
     }

     public function addadvertise(Request $request){

            $advertise = new Advertise;
            $advertise->plan = $request->plan;
            $advertise->rating = $request->rating;
            $advertise->purchase = $request->purchase;
            $advertise->off = $request->off;
            $advertise->actualPrice = $request->actualPrice;
            $advertise->disPrice = $request->disPrice;
            $advertise->visible = $request->visible;
            $advertise->content = $request->content;
            $advertise->save();

            $data['advertise'] = Advertise::get();

            return view('admin.advertise.advertise',$data);
        
     }

      
     public function editAdvertise(Advertise $advertises , $id){
        $advertise = Advertise::all()->where('id',$id)->first();
        return view('admin.advertise.edit')->with(compact(['advertise', 'advertises']));
        
    }
    
    public function update(Request $request, Advertise $advertises, $id)
    {
        $advertise = Advertise::find($id);
        $advertise->plan = $request->plan;
        $advertise->rating = $request->rating;
        $advertise->purchase = $request->purchase;
        $advertise->off = $request->off;
        $advertise->actualPrice = $request->actualPrice;
        $advertise->disPrice = $request->disPrice;
        $advertise->visible = $request->visible;
        $advertise->content = $request->content;

         if ($advertise->save() ) {
             return redirect()->route('advertise')->with(['success' => 'Trending advertise edited successfully updated.']);
         }

         else{
             return redirect()->back()->with(['fail' => 'Unable to update advertise.']);     
         }

    }


     public function deleteadvertise($id){

        $advertise = DB::delete('delete from advertises where id = ?',[$id]);
        return redirect()->route('advertise')->with('success', 'advertise details deleted successfully');
     }

}

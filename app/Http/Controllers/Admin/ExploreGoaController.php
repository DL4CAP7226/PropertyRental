<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Explore;
use DB;


class ExploreGoaController extends Controller
{
    public function index(){

        $data['goa'] = Explore::get();
        return view('admin.exploreGoa.exploreGoa',$data);
    }

    public function createExploreGoa(){
        return view('admin.exploreGoa.create');
     }

     public function addExploreGoa(Request $request){
      
        $goa = new Explore;
        if (request()->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $goa['image'] = $name;
        }
        $goa->heading = $request->heading;
        $goa->type = $request->type;
        $goa->date = $request->date;
        $goa->desc = $request->desc;
        $goa->save();

        $data['goa'] = Explore::get();

        return view('admin.exploreGoa.exploreGoa',$data);
    
 }


 public function editExploreGoa(Explore $explores , $id){
    $explore = Explore::all()->where('id',$id)->first();
    return view('admin.exploreGoa.edit')->with(compact(['explore', 'explores']));
    
}


public function update(Request $request, Explore $explores, $id)
{
    $explore = Explore::find($id);
    if (request()->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        $explore['image'] = $name;
    }
    $explore->heading = $request->heading;
    $explore->type = $request->type;
    $explore->date = $request->date;
    $explore->desc = $request->desc;

     if ($explore->save() ) {
         return redirect()->route('ExploreGoa')->with(['success' => 'Explore goa edited successfully updated.']);
     }

     else{
         return redirect()->back()->with(['fail' => 'Unable to update explore goa.']);     
     }

}

 public function deleteExploreGoa($id){

    $article = DB::delete('delete from explores where id = ?',[$id]);
    return redirect()->route('ExploreGoa')->with('success', 'News & Articles details deleted successfully');
 }



}

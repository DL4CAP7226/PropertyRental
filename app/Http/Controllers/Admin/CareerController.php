<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;
use DB;

class CareerController extends Controller
{
    public function index()
    {
        $data['career'] = Career::get();
        return view('admin.career.career',$data)->with('i');
    }

    public function createCareer(){
        return view('admin.career.create');
     }

     public function addCareer(Request $request){
      
            $career = new Career;
            $career->postName = $request->postName;
            $career->location = $request->location;
            $career->postType = $request->postType;
            $career->jobDesc = $request->jobDesc;
            $career->save();

            $data['career'] = Career::get();

            return view('admin.career.career',$data);
        
        }
            
            
            public function editCareer(Career $careers , $id){
                $career = Career::all()->where('id',$id)->first();
                return view('admin.career.edit')->with(compact(['career', 'careers']));
                
            }
            
            public function update(Request $request, Career $careers, $id)
            {
                $career = Career::find($id);
                $career->postName = $request->postName;
                $career->location = $request->location;
                $career->postType = $request->postType;
                $career->jobDesc = $request->jobDesc;

                 if ($career->save() ) {
                     return redirect()->route('career')->with(['success' => 'Trending career edited successfully updated.']);
                 }

                 else{
                     return redirect()->back()->with(['fail' => 'Unable to update career.']);     
                 }

}

     public function deleteCareer($id){

        $career = DB::delete('delete from careers where id = ?',[$id]);
        return redirect()->route('career')->with('success', 'Career details deleted successfully');
     }

}

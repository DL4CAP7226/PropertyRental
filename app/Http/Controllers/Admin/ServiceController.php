<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

use DB;

class ServiceController extends Controller
{
    public function index()
    {
        $data['service'] = Service::get();
        return view('admin.service.service',$data)->with('i');
    }

    public function createService(){
        return view('admin.service.create');
     }

     public function addService(Request $request){
      
            $service = new Service;
            if (request()->hasFile('icon')) {
                $image = $request->file('icon');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $name);
                $service['icon'] = $name;
            }
            $service->name = $request->name;
            $service->desc = $request->desc;
            $service->save();

            $data['service'] = Service::get();

            return view('admin.service.service',$data);
        
     }

     public function editservice(Service $services , $id){
        $service = Service::all()->where('id',$id)->first();
        return view('admin.service.edit')->with(compact(['service', 'services']));
        
    }
    
    public function update(Request $request, Service $services, $id)
    {
        $service = Service::find($id);
        if (request()->hasFile('icon')) {
            $image = $request->file('icon');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $service['icon'] = $name;
        }
        
        $service->name = $request->name;
        $service->desc = $request->desc;

         if ($service->save() ) {
             return redirect()->route('Service')->with(['success' => 'Trending Service edited successfully updated.']);
         }

         else{
             return redirect()->back()->with(['fail' => 'Unable to update service.']);     
         }

}

     public function deleteService($id){

        $service = DB::delete('delete from services where id = ?',[$id]);
        return redirect()->route('Service')->with('success', 'Service details deleted successfully');
     }
    
}

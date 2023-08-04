<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourType;
use App\Models\Tours;
Use Alert;


class TourController extends Controller
{
    public function all_tour()
    {
        $tours=Tours::where('status','=','Active')->with('type')->get();
        return view('admin.pages.all_tour',compact('tours'));
    }

   public function new_tour()
   {
      $tour_types=TourType::where('status','=','Active')->get();
      return view('admin.pages.new_tour',compact('tour_types'));
   }

   public function tour_save(Request $request)
   {
        $new = new Tours();
        $new->tour_name=$request->tour_name;
        $new->dep_date=$request->dep_date;
        $new->tour_code=$request->tour_code;
        $new->tour_type=$request->tour_type;
        $new->status="Active";
        $new->save();
        toast('New Tour Record Added!','success');
        return redirect()->route('all-tour');
   }

   public function tour_edit($id)
   {
      
      $tour_edit=Tours::where('id',$id)->first();
      $tour_types=TourType::where('status','=','Active')->get();
      return view('admin.pages.tour_edit',compact('tour_edit','tour_types'));
   }

   public function tour_update(Request $request)
   {
        $update = Tours::where('id',$request->id)->first();
        $update->tour_name=$request->tour_name;
        $update->dep_date=$request->dep_date;
        $update->tour_code=$request->tour_code;
        $update->tour_type=$request->tour_type;
        $update->save();
        toast('New Tour Record Updated!','success');
        return redirect()->route('all-tour');
      
   }

   public function tour_delete($id)
   {
       $tour_delete=Tours::where('id',$id)->delete();
        toast('New Tour Record Deleted!','success');
        return redirect()->back();

   }



    public function new_tour_type()
    {

       return view('admin.pages.new_tour_type');
    }
    public function tour_type_save(Request $request)
    {
        // /dd($request);
        $new= new TourType();
        $new->tour_type=$request->tour_type;
        $new->status="Active";
        $new->save();
        toast('New Tour Type Record Added!','success');
        return redirect()->route('tour-type');
    }
    public function tour_type()
    {
        $tour_types=TourType::where('status','=','Active')->get();
        return view('admin.pages.tour_types',compact('tour_types'));
    }
    public function tour_type_edit($id)
    {
      
         $tour_types_edit=TourType::where('id',$id)->first();
         return view('admin.pages.tour_type_edit',compact('tour_types_edit'));
           
    }

    public function tour_type_update(Request $request)
    {
       
       $update=TourType::where('id',$request->id)->first();
       if (!empty($update)) {
          $update->tour_type=$request->tour_type;
          $update->save();
       }
        toast('Tour Type Record Updated!','success');
        return redirect()->route('tour-type');
       
    }

    public function tour_type_delete($id)
    {
        $tourdelete=TourType::where('id',$id)->delete();
        toast('Tour Type Record Deleted!','success');
         return redirect()->back();
    }


    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DashBoard;
use Illuminate\Support\Facades\DB;

class DashBoardController extends Controller
{
    
    public function index()
    {
       return view('dashboard');
    }

    
    public function create()
    {
        // DB::table('dashboards')->insert([
        //     'fullname'=>$request->fullname,
        //     'phonenumbers' => $request-> phonenumbers,
        //     'email' => $request-> email,
        //     'image' => $request->imagename,]); 
    }

    /*
     */
     public function store(Request $request){
         $Dashboard = new Dashboard;

        $Dashboard->fullname=$request->input('fullname');
        $Dashboard->phonenumbers=$request->input('phonenumbers');
        $Dashboard->email=$request->input('email');
       
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension = $file->getClientorOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/contactphotos',$filename);
            $Dashboard->image = $filename;
        }
        else{
            return $request;
            $Dashboard->image = '';

        }

        $Dashboard->save();

        return back()->with('DashBoard',$DashBoard);
        
    }

    


// 'DashBoard',$DashBoard
 
  
//    $image=$request->file('image');
//    $fullname = $request->fullname;
//    $phonenumbers = $request-> phonenumbers;
//    $email = $request-> email;
//    $imagename = time().'.'.$image->getClientorOriginalExtension();
//    $image->move(public_path('uploads/contactphotos'),$imagename);

//    $dashboard = new dashboard;
   
//    $dashboard->fullname=$fullname;
//    $dashboard->phonenumbers=$phonenumber;
//    $dashboard->email=$email;
//    $dashboard->image = $imagename;


   
//     $dashboard->save();
//     return back()->with('DashBoard',$dashBoard);
//     }
   

  public function display(){
      $DashBoard = DashBoard::all();
    return view('display')->with('DashBoards',$DashBoard );
 }
  public function edit($id)
  {
      $Dashboard = Dashboard::find($id);
      return view('editcontacts') -> with('DashBoard', $DashBoard,);
  }


public function update($id)
{
    $Dashboard = Dashboard::find($id);

    if($request->hasfile('image')){
        $file=$request->file('image');
        $extension = $file->getClientorOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/contactphotos',$filename);
        $Dashboard->image = $filename;} 
}
       
        
}

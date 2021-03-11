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
    //    return redirect()->route('dashboard');
    }

    
    // public function create()
    // {
        // DB::table('dashboards')->insert([
        //     'fullname'=>$request->fullname,
        //     'phonenumbers' => $request-> phonenumbers,
        //     'email' => $request-> email,
        //     'image' => $request->imagename,]); 
    // }

    /*
     */
     public function store(Request $request){
         
         $fullname = $request->fullname;
         $phonenumbers = $request->phonenumbers;
         $email = $request->email;
         $image = $request -> file('file');
         $extension = $image -> extension();
         $imageName = time().'.'.$extension;
         $image->move(public_path('images'),$imageName);

        $contact = new Dashboard();
        $contact-> fullname = $fullname;
        $contact -> phonenumbers = $phonenumbers;
        $contact -> email = $email;
        $contact-> file = $imageName;
         

        $contact -> save();
      
        return redirect()->route('display');
        
    }

    

 
  
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
      $contacts = DashBoard::all();
      return view('display')->with('contacts',$contacts);
    //  return view('display')->with('contacts',$contacts );


 }
  public function edit($id)
  {
      $change = Dashboard::find($id);
      return view('editcontacts')->with('change',$change);
  }


public function update(Request $request , $id)
{
    $fullname = $request->fullname;
    $phonenumbers = $request->phonenumbers;
    $email = $request->email;
    $image = $request -> file('file');
    $extension = $image -> extension();
    $imageName = time().'.'.$extension;
    $image->move(public_path('images'),$imageName);

    $change = Dashboard::find($id);
    $change->fullname = $fullname;
    $change->phonenumbers =  $phonenumbers;
    $change->email = $email;
    $change->file =  $imageName;
    $change->save();

    return back()->with('contact_updated','contact info updated successfully');

}

  public function destroy($id){
      $change = Dashboard::find($id);
      unlink(public_path('images'). '/'.$change->file);
      $change->delete();
      return back()->with('contact deleted','contact deleted.');}
      
  public function delete($id){
    $change = Dashboard::find($id);
    unlink(public_path('images'). '/'.$change->file);
    $change->delete();
    return "deleted successfully";}

  public function list(){
      return Dashboard::all();
  }

  
  public function listid($id){
    return Dashboard::find($id);
}
  public function upload(Request $request){

      $upload=$request->file('image') -> store('images');
      $upload=$request->fullname;
      $upload=$request->phonenumbers;
      $upload=$request->email;
      return ["upload"->$upload];
  }

//     public function add(Request $request){
//         $contact = new Dashboard();
//         $contact-> fullname =  $request->input("fullname");
//         $contact -> phonenumbers =$request->input("phonenumbers");
//         $contact -> email = $request->input("email");
//         $contact-> file = $request->file('file');
//         $contact -> save();
//         return $contact;
    // }
  
    public function updatecontact(Request $request, $id)
    {

        $contact = DashBoard::findOrFail($id);
        $contact->fullname = $request->fullname;
        $contact->phonenumbers = $request->phonenumbers;
        $contact->email = $request->email;
        $ImageName='profile';
        $image = $request->file('file');
        $ImageName = time().'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(200, 160)->save(base_path('public/uploads/images/contacts/') . $ImageName); 
        $contact->file = 'images/'.$ImageName;
        $contact->save();

            return response()->json(['data' => $contact, 'code' => Response::HTTP_CREATED]);
    } 
        
}

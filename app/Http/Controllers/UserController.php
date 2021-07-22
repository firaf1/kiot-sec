<?php

namespace App\Http\Controllers;
use App\Models\User;
use Inertia\Inertia;
use Milon\Barcode\DNS1D;
 
use Milon\Barcode\DNS2D;
 
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManagerStatic;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $data = User::where('role', 'staff')->get();
//    dd($data);
        return Inertia::render('page/librariest', ['staffs'=> $data]);
    }

    
    public function store(Request $request)
    {
     
     

        $request->validate([
            // 'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required|max:30',
           'user_id'=>'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
            "shift_id" => "required",
            "PhoneNumber" => "required|min:9",
            "scannedKebeleId" => "required|image",
            "profile" => "required|image",
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
      
 
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->campos = "KIOT";
        $user->phoneNumber = $request->PhoneNumber;
        $user->role = 'staff';
        $user->status = 'Approved';
        $user->dept_id = 'staff';
        $user->shift_id = $request->shift_id;
        $picture1 = 'kebeleid'.time() . '.' . $request->scannedKebeleId->extension();
        $insert1 =  $request->scannedKebeleId->move(public_path('kebeleId'), $picture1);
        if($insert1){
            $user->scanned_kebele_id = 'kebeleId/'.$picture1;
}


        $picture = time() . '.' . $request->profile->extension();
        $insert =  $request->profile->move(public_path('ProfileImage'), $picture);
        if($insert){
            $user->profile_photo_path = 'ProfileImage/'. $picture;
        }
       
        $user->qr = "ddd";
     
        // $user->shift = $request->shift;
        
//  dd($picture);
         $card = ImageManagerStatic::make('assets/card/card.jpg')->resize(2000, 3000);
         $pic = ImageManagerStatic::make('ProfileImage/'.$picture)->resize(880, 880);
         $card->insert($pic, '', 570, 490);
         $hashedName = Hash::make($request->name);

        $user->user_id = $request->user_id;
         
 

         $dns = new DNS2D;
        
          
         $barcode = Image::make($dns->getBarcodePNG($request->user_id, 'QRCODE'))->resize(500, 500);
         $card->insert($barcode, '', 800, 2300);



         $card->text($request->name, 500, 1500, function ($font) {
            $font->file(public_path('css/id.ttf'));
            $font->size(150);
            $font->color('#00235d');
            // $font->align('center');
            $font->valign('top');
            $font->angle(0);
        });
        $card->text('Id: '.$request->id, 700, 1700, function ($font) {
            $font->file(public_path('css/id.ttf'));
            $font->size(80);
            $font->color('#757592');
            // $font->align('center');
            $font->valign('top');
            $font->angle(0);
        });

        $card->text( 'Role: '.'Staff', 700, 2000, function ($font) {
            $font->file(public_path('css/id.ttf'));
            $font->size(90);
            $font->color('#757592');
            // $font->align('center');
            $font->valign('top');
            $font->angle(0);
        });
        $card->text( 'Phone: '.$request->PhoneNumber, 600, 2150, function ($font) {
            $font->file(public_path('css/id.ttf'));
            $font->size(90);
            $font->color('#757592');
            // $font->align('center');
            $font->valign('top');
            $font->angle(0);
        });

     
         $card->save('cards/'. $request->fullname.time().$card . '.png');
 
        //  dd($card->basename);
        $user->qr = 'cards/'.$card->basename;
      
      
         $user->save();
         return back();
 
 


 
           
        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

       
        
         
         $user = User::findOrFail($id);
         $user->name = $request->name;
         $user->email = $request->email;
          
         
         $user->phoneNumber = $request->PhoneNumber;
         $user->role = 'staff';
         $user->save();
         $data = User::where('role', 'Staff')->get();
         return redirect(route('librarist'));

    }

    


    public function frontRegister(Request $request){

        $request->validate([
            // 'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required|max:30',
           
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
            'id_num' => 'required',
            'dept_id' => 'required|unique:users',
            "PhoneNumber" => "required|min:9",
            
            
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
      
 
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->campos = "KIOT";
        $user->phoneNumber = $request->PhoneNumber;
        $user->role = 'student';
        $user->status = 'pending';
        $user->user_id = $request->id_num;
        $user->department = $request->dept_id;
        $user->dept_id = $request->dept_id;
        $user->save();
     return redirect(route('login'));

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
        // dd($id);
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect(route('librarist'));
    }
///////////////////////////////Student /////////////////////////////
public function studentupdate(Request $request, $id)
    {

       
        dd($id);
         
         $user = User::findOrFail($id);
         $user->name = $request->name;
         $user->email = $request->email;
          
         
         $user->phoneNumber = $request->PhoneNumber;
         $user->role = 'staff';
         $user->save();
         $data = User::where('role', 'Staff')->get();
         return redirect(route('student'));

    }
    public function studentApproved(Request $request, $id)
    {
       $user = User::where('id', $id)->first();
       $user->status = "Approved";
       $user->save();
       return redirect(route('student'));

    }
    public function studentBlocked(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $user->status = "Blocked";
        $user->save();
        return redirect(route('student'));       
    }
    public function student()
    {
         
        $data = User::where('role', 'student')->get();
        //    dd($data);
                return Inertia::render('page/student', ['staffs'=> $data]);
    }


public function userProfile()
{
     $user = Auth::user();
    return Inertia::render('page/profile', ['user'=> $user]);
}

public function profileUpdate(Request $request)
{
   $user = Auth::user();
    $request->validate([
        // 'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        'name' => 'required|max:30',
       
        'email'  =>  'required|email|unique:users,email,'.$user->id,
        
        "campos" => "required",
        'user_id'  =>  'required|unique:users,user_id,'.$user->id,
        "phoneNumber" => "required|min:9",
        "department" => "required",
       
        // 'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
        // 'password_confirmation' => 'min:6'
    ]);
$user->name = $request->name;
$user->email = $request->email;
 $user->campos = $request->campos;
$user->user_id = $request->user_id;
$user->phoneNumber = $request->phoneNumber;
$user->department = $request->department;
 
$user->save();
return Inertia::render(route('profile.info'));
}













}

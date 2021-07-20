<?php

namespace App\Http\Controllers;
use Milon\Barcode\DNS1D;
use Milon\Barcode\DNS2D;
use App\Models\Attendance;
 
use Illuminate\Support\Facades\Hash;
 
use Intervention\Image\Facades\Image;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('is here')
     

        $request->validate([
            // 'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required|max:30',
           
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

         $last = User::latest()->first();
         $last_id = $last->user_id;
         $now_id = "";
         if(($last_id+1) < 10){
            $now_id = "WOUR/000".( $last_id + 1);
         }
         
        elseif(($last_id+1) < 100){
             $now_id = "WOUR/00" . ($last_id + 1);
}

         $dns = new DNS2D;
         $last_id = $last_id + 1;
         $hashed =Hash::make($last_id);
         $barcode = Image::make($dns->getBarcodePNG($hashed, 'QRCODE'))->resize(500, 500);
         $card->insert($barcode, '', 800, 2300);



         $card->text($request->name, 500, 1500, function ($font) {
            $font->file(public_path('css/id.ttf'));
            $font->size(150);
            $font->color('#00235d');
            // $font->align('center');
            $font->valign('top');
            $font->angle(0);
        });
        $card->text('Id: '.$now_id, 700, 1700, function ($font) {
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
         $user->user_id = $last_id;
      
         $user->save();


 


 
           
        
    
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
}

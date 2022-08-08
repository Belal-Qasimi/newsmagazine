<?php

namespace App\Http\Controllers;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator;
use App\Models\Allmodel;
use App\Models\FormMultipleUpload;
use App\Models\Information_magizan;
use App\Models\Newsmodel;
use App\Models\tb_Ades;
use App\Models\tb_bags;
use App\Models\tb_cattype;
use App\Models\tb_durar;
use App\Models\tb_subscribers;
use App\Models\tb_tageinfo;
use App\Models\tb_tags;
use App\Models\tb_eventads;
use App\Models\tb_news;
use App\Models\tb_newsvistor;
use App\Models\User;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Livewire\WithFileUploads;
use App\Models\ConatctEmail;
use App\Models\ShacawaEmail;
use App\Models\RequestBags;
use Mail;


class MianController extends Controller
{



   //Getdata



   public function  Getcategory($id=null){
    
      return $id?Allmodel ::find($id):Allmodel::all();
     
   }
   

  
   public function  Getuser(){
      return Newsmodel ::all();
   }

   public function  GetAds($id=null){
      return  DB::select('call showads()');
   }

   public function  Getinformation($id=null){
      return $id?Information_magizan::find($id):Information_magizan::all();
   }
   
   public function  Getbags(){
   return  DB::select('call show_allbags()');

   }
   public function  Gettypebags($name){
      return  DB::select('call showbags_cat(?)',[$name]);
   
      }
      public function  Gettypecatt($id=null){
         return  DB::select('call showtype()');
      }

      public function  Getdurar($id=null){
         return  DB::select('call show_alldurar()');
      }
      public function  Getlastdurar(){
         return  DB::select('call show_lastdurar()');
      
         }
         public function  Gettageinfo(){
            return  DB::select('call show_taginfo()');
         }


         public function  Gettag($id=null){
            return  DB::select('call showextrnaltags()');

         }
         public function  Gatevent(){
            return  DB::select('call show_event()');
         
         }
         public function  Gatevent_show(){
            return  DB::select('call show_event_show()');
         
         }
         public function Gatevent_type($nametype){
            return  DB::select('call show_event_type(?)',[$nametype]);
         
         }
         public function Gettype_catt($nametype){
            return  DB::select('call show_cattype(?)',[$nametype]);
         
         }
         public function Gettypetage($nametype){
            return  DB::select('call typetag(?)',[$nametype]);
         
         }
         public function Getnewsa(){
            return  DB::select('call shownew()');
         
         }
         public function getallnews(){
            return  DB::select('call getallnews()');
         
         }
         public function Getnamecat(){
            return  DB::select('call shownamecatt()');
         
         }
         
         public function Getnewsaid($id){
            return  DB::select('call shownewid(?)',[$id]);
         
         }
         public function shownew(){
            return  DB::select('call show_newsshow()');
         
         }
         public function showstaticads(){
            return  DB::select('call showadstatec()');
         
         }
         public function showloopsads(){
            return  DB::select('call showadsloop()');
         
         }
         public function Getnews_type($nametype){
            return  DB::select('call shownews_cat(?)',[$nametype]);
         
         }
         public function  Getsubscribers($id=null){
            return $id?tb_subscribers::find($id):tb_subscribers::all();
         }
         public function Getnumbernew(){
            return  DB::select('call numbernews()');
         
         }
         public function Getnumberuser(){
            return  DB::select('call numberuser()');
         
         }
         public function Getnumbercatt(){
            return  DB::select('call numbercatt()');
         
         }
         public function Getnumbertype(){
            return  DB::select('call numbertype()');
         
         }
         public function Getnumbersub(){
            return  DB::select('call numbersub()');
         
         }
         public function Getnewsvistor(){
            return  DB::select('call shownewsvistor()');
         
         }
         public function Getimgnewsvistor($id){
            return  DB::select('call showimgenewsvistor(?)',[$id]);
         
         }
         public function Getimgnews($id){
            return  DB::select('call shownews_img(?)',[$id]);
         
         }
//-----------------------------------------------------------------------


  //insertData

  //function add category
  public function  addcategory(Request $req){
   $catt=new Allmodel;
  
   DB::statement('call addcategory(?)',[$catt->name_Categorycol=$req->name_Categorycol]);
}

  //function add ads

public function  addAds(Request $req){
   $ads=new tb_Ades();

      DB::statement('call addads(?,?,?,?,?)',[
         $ads->text_Ads=$req->text_Ads,
         $ads->imageAds=$req->imageAds,
         $ads->type_Ads=$req->type_Ads,
         $ads->enddate=$req->enddate,
         $ads->id_user=$req->name,
      ]);
}

  //function add bags

public function  addbags(Request $req){
   $bags=new tb_bags();
  
   DB::statement('call addbags(?,?,?,?,?)',[
      $bags->name_bags=$req->name_bags,
      $bags->text_bags=$req->text_bags,
      $bags->id_category=$req->id_category,
      $bags->id_type=$req->id_type ,
      $bags->id_user=$req->id_user      
   ]);
}

  //function add typy category

public function  addtype(Request $req){
   $type=new tb_cattype();
   DB::statement('call addcattype(?,?)',[
      $type->name_Categorycol=$req->name_Categorycol,
      $type->name_CatType=$req->name_CatType
   ]);
   
}
//function add durar
public function  adddurar(Request $req){
   $durar=new tb_durar();
   DB::statement('call adddurar(?,?,?)',[
      $durar->text_Durar=$req->text_Durar,
      $durar->titel_durar=$req->titel_durar,
      $durar->Name_user=$req->name

   ]);
   
}

public function  addsubscribers(Request $req){
   $subs=new tb_subscribers();
      $subs->email_subs=$req->email_subs;
      $subs->save();
}
public function  addtageinfo(Request $req){
   $tagin=new tb_tageinfo();
     

      DB::statement('call addtagsinfo(?,?,?,?,?)',[
         $tagin->name_tages=$req->name_tages,
         $tagin->url_tags=$req->url_tags,
         $tagin->type=$req->type,
         $tagin->nameicon=$req->nameicon,
         $tagin->id_user=$req->id_user,
        
      ]);

}
public function  addtag(Request $req){
   $tag=new tb_tags();
      

      DB::statement('call addtagextrnal(?,?,?,?)',[
         $tag->url_Tag=$req->url_Tag,
      $tag->type_Tag=$req->type_Tag,
      $tag->title=$req->title,
      $tag->id_user=$req->id_user,
        
      ]);
}
public function  addevent(Request $req){
   $even=new tb_eventads();
   DB::statement('call add_eventads(?,?,?,?,?,?,?,?)',[
      $even->text_eventads=$req->text_eventads,
      $even->titel=$req->titel,
      $even->image=$req->image,
      $even->end_dete=$req->end_dete,
      $even->id_type=$req->name_CatType,
      $even->id_category=$req->name_Categorycol,
      $even->user_id=$req->Name_user,
      $even->show_ev=$req->show_ev


   ]);
   
}


public function  adduser(Request $req){
   $user=new Newsmodel();
      $user->username=$req->username;
      $user->password=$req->password;
      $user->typeuser=$req->typeuser;
      $user->Name_user=$req->Name_user;
      $user->image=$req->image;
      $user->phone=$req->phone;
    



      $user->save();
}

public function  addnews(Request $req){
   $news=new tb_news();
   DB::statement('call addnew(?,?,?,?,?,?,?)',[
      $news->titelpost=$req->titelpost,
      $news->textpost=$req->textpost,
      $news->id_category=$req->id_category,
      $news->id_type=$req->id_type,
      $news->author=$req->author,
      $news->state_new=$req->state_new,

      $news->image=$req->image,
      $news->number_img=$req->number_img,

   


   ]);
   
}

public function  addnews2(Request $req){
   $news=new tb_news();
   DB::statement('call addnews(?,?,?,?,?,?,?,?)',[
      $news->titelpost=$req->titelpost,
      $news->textpost=$req->textpost,
      $news->id_category=$req->id_category,
      $news->id_type=$req->id_type,
      $news->author=$req->author,
      $news->state_new=$req->state_new,
      $news->image=$req->image,
      $req->number_img=$req->number_img,

   


   ]);
   
}

public function login(Request $req){
   

   if(!Auth::attempt($req->only('email','password')))
   {
return response([
'message' => 'invalid credentials !'

],Response::HTTP_UNAUTHORIZED);
   }
   /**
     * The attributes that should be cast.
     *
     * @var User $user
     */
   $user= Auth::user();
   $token=$user->createToken('token')->plainTextToken;
$cookie= cookie('jwt',$token,60*24);
 return response([
    'message'=>'Success'
 ])->withCookie($cookie);
} 

public function register(Request $req){
   return User::create([
   'name'=> $req ->input('name'),
   'email'=> $req->input('email'),
   'password'=>hash::make( $req->input('password'))
   ]);
   }

   public function user(){
      return Auth::user();
      
   }
   public function logout(){
      $cookie= Cookie::forget('jwt');
      return response([
         'message'=>'Success'
      ])->withCookie($cookie);
   }


   public function  addnewsvistor(Request $req){
      $news=new tb_news();
      DB::statement('call addnewvistor(?,?,?,?,?,?,?,?,?,?,?)',[
         $news->titelpost=$req->titelpost,
         $news->textpost=$req->textpost,
         $news->id_category=$req->id_category,
         $news->id_type=$req->id_type,
         $news->author=$req->author,
         $news->state_new=$req->state_new,
         $news->image=$req->image,
         $req->number_img=$req->number_img,
         $req->vistorname=$req->vistorname,
         $req->email=$req->email,
         $req->phone=$req->phone,
      ]);
      
   }



// send emalis 

   // send email from contact us
   public function contactemail(Request $req)
    {
       
      $data=['name'=> $req ->name , 'meessage'=> $req ->message , 'phone' => $req -> phone, 'email' => $req -> email];
      $contactus = new ConatctEmail;
      $contactus ->name = $req ->name;
      $contactus ->email = $req ->email;
      $contactus ->subject = $req ->subject;

/*       $contactusemaile['emailto']= 'ahmedqasimi2020@gmail.com'; 
 */
      Mail::send('email.name',$data, function($messages) use ($contactus){
         $messages->from($contactus-> email ,$contactus-> name);
        $messages ->to('ahmedqasimi2020@gmail.com');
        $messages->subject($contactus-> subject);
        $messages ->replyTo($contactus-> email ,$contactus-> name);
      
      });
                      
   
  
     /*    Mail::to('ahmedqasimi2020@gmail.com')->send(new PaymentDone());
        return response()->json(["message" => "Email sent successfully."]); */
    }


       // send email from shacawa 
   public function shacawaemail(Request $req)
   {
      
     $data=['name'=> $req ->name , 'meessage'=> $req ->message , 'phone' => $req -> phone, 'email' => $req -> email];
     $shacawa = new ShacawaEmail;
     $shacawa ->name = $req ->name;
     $shacawa ->email = $req ->email;
     $shacawa ->subject = $req ->subject;

/*       $contactusemaile['emailto']= 'ahmedqasimi2020@gmail.com'; 
*/
     Mail::send('email.name',$data, function($messages) use ($shacawa){
        $messages->from($shacawa-> email ,"Email Shacawa");
       $messages ->to('ahmedqasimi2020@gmail.com');
       $messages->subject($shacawa-> subject);
       $messages ->replyTo($shacawa-> email ,$shacawa-> name);
     
     });
                     
  
 
    /*    Mail::to('ahmedqasimi2020@gmail.com')->send(new PaymentDone());
       return response()->json(["message" => "Email sent successfully."]); */
   }

          // Send request Bags 
          public function SendRequsestBags(Request $req)
          {
             
            $data=['name'=> $req ->name  , 'phone' => $req -> phone, 'email' => $req -> email];
            $requestbags = new RequestBags;
            $requestbags ->name = $req ->name;
            $requestbags ->email = $req ->email;
    
       
       /*       $contactusemaile['emailto']= 'ahmedqasimi2020@gmail.com'; 
       */
            Mail::send('welcome',$data, function($messages) use ($requestbags){
               $messages->from($requestbags-> email ,"Email Shacawa");
              $messages ->to('ahmedqasimi2020@gmail.com');
              $messages->subject('طلب حقيبة');
              $messages ->replyTo($requestbags-> email ,$requestbags-> name);
            
            });
                            
         
        return ' it is done';

           /*    Mail::to('ahmedqasimi2020@gmail.com')->send(new PaymentDone());
              return response()->json(["message" => "Email sent successfully."]); */
          }

// send emails

//-----------------------------------------------------------------------

  //updataData
   public function  updateinformation(Request $req,$id){

      $post =new Information_magizan();

      $post=Information_magizan::find($id);
      $post->name_mag= $req->name_mag;
      $post->email= $req->email;
      $post->name_owner= $req->name_owner;
      $post->our_logo= $req->our_logo;
      $post->vision= $req->vision;
      $post->target= $req->target;
      $post->editorial= $req->editorial;
      $post->logo= $req->logo;
      $post->share_artc= $req->share_artc;
      $post->copy_write= $req->copy_write;
      $post->phone1= $req->phone1;
      $post->phone2= $req->phone2;
      $post->address= $req->address;
        $post->save();
     
   }
   public function  updataAds(Request $req,$id){

      $ads =new tb_Ades();

      $ads=tb_Ades::find($id);
      $ads->text_Ads= $req->text_Ads;
      $ads->imageAds= $req->imageAds;
      $ads->type_Ads= $req->type_Ads;
      $ads->enddate= $req->enddate;
      $ads->updateby= $req->updateby;
        $ads->save();
   }

   public function  updatbags(Request $req,$id){
      $bags=new tb_bags();
      $bags=tb_bags::find($id);
      DB::statement('call updetebags(?,?,?,?,?)',[
      $id,
         $bags->name_bags=$req->name_bags,
         $bags->text_bags=$req->text_bags,
         $bags->id_type=$req->id_type ,
         $bags->updateby=$req->id_user 
      
      ]);
   }

   public function  updatacategory(Request $req,$id){


      $catt=Allmodel::find($id);
      $catt->name_Categorycol= $req->name_Categorycol;
     
        $catt->save();
     
   }
   public function  updatatype(Request $req,$id){

    

      $type=tb_cattype::find($id);
      $type->name_CatType= $req->name_CatType;
     
      DB::statement('call updatetypecat(?,?,?)',[
         $id,
         $type->name_CatType= $req->name_CatType,
         $type->name_Categorycol= $req->name_category,

         
         
         ]);
     
   }
   public function  updatedurar(Request $req,$id){
      $durar=new tb_durar();
      $durar=tb_durar::find($id);
      DB::statement('call updatedurr(?,?,?,?)',[
      $id,
         $durar->titel_durar=$req->titel_durar,
         $durar->text_Durar=$req->text_Durar,
         $durar->update_by=$req->updateby 
      
      
      ]);
   }

   public function  updatetaginf(Request $req,$id){

    

      $tagin=tb_tageinfo::find($id);
      
        DB::statement('call updatetaginfo(?,?,?,?,?,?)',[
         $id,
         $tagin->name_tages=$req->name_tages,
         $tagin->url_tags=$req->url_tags,
         $tagin->type=$req->type,
         $tagin->nameicon=$req->nameicon,
         $tagin->updateby=$req->updateby,
         
         ]);
     
   }
   public function  updatetag(Request $req,$id){

     


      $tag=tb_tags::find($id);

      DB::statement('call udatetageextrnal(?,?,?,?,?)',[
         $id,
         $tag->url_Tag= $req->url_Tag,
         $tag->type_Tag= $req->type_Tag,
         $tag->title= $req->title,
         $tag->updateby= $req->updateby,

        
      ]);
     
   }
   public function  updateevent(Request $req,$id){
      
      $even=tb_eventads::find($id);
      DB::statement('call updateevent(?,?,?,?,?,?,?,?,?)',[
     $id,
      $even->text_eventads=$req->text_eventads,
      $even->titel=$req->titel,
      $even->image=$req->image,
      $even->end_dete=$req->end_dete,
      $even->id_type=$req->name_CatType,
      $even->id_category=$req->name_Categorycol,
      $even->update_by=$req->update_by,
      $even->show_ev=$req->show_ev

   ]);

     
   }

   public function  updatenews(Request $req,$id){
      
      $news=tb_news::find($id);
      DB::statement('call updatenews(?,?,?,?,?,?,?,?,?)',[
         $id,
         $news->titelpost=$req->titelpost,
         $news->textpost=$req->textpost,
         $news->id_category=$req->id_category,
         $news->id_type=$req->id_type,
         $news->author=$req->author,
         $news->state_new=$req->state_new,
         $news->image=$req->image,
         $req->number_img=$req->number_img,
      

    

   ]);

     
   }
   public function  updateuser(Request $req,$id){

      $user=Newsmodel::find($id);
      $user->username=$req->username;
      $user->password=$req->password;
      $user->typeuser=$req->typeuser;
      $user->Name_user=$req->Name_user;

        $user->save();
     
   }

   public function  activeuser(Request $req,$id){
    
      $user=Newsmodel::find($id);
      DB::statement('call activeuser(?,?)',[
      $id,
         $user->active_user=$req->active_user,
      
        
      
      ]);
   }

   
   public function  updatenewsvistor(Request $req,$id){
      
      $news=tb_news::find($id);
      DB::statement('call updatenewvistor(?,?,?,?,?,?,?,?,?,?,?)',[
         $id,
         $news->titelpost=$req->titelpost,
         $news->textpost=$req->textpost,
         $news->id_category=$req->id_category,
         $news->id_type=$req->id_type,
         $news->author=$req->author,
         $news->state_new=$req->state_new,
         $news->image=$req->image,
         $req->number_img=$req->number_img,
         $req->vistorname=$req->vistorname,
         $req->email=$req->email,
         $req->phone=$req->phone,
      

    

   ]);
   }
   //-----------------------------------------------------------------------


   //DeleteData
   public function  Deletebags($id){

   $bags = tb_bags::find($id);
   $bags->delete();
   }
   
   public function  Deletecatt($id){

      return  DB::delete('call delete_category(?)',[$id]);

      }

   public function Deletetype($id){

     return  DB::delete('call delete_type(?)',[$id]);
   
         }

   public function  Deletedurar($id){

     $durar = tb_durar::find($id);
     $durar->delete();
    }

   public function  Deletesubscribers($id){

       $subs = tb_subscribers::find($id);
       $subs->delete();
      }
   public function  Deletetaginf($id){

         $tagin = tb_tageinfo::find($id);
         $tagin->delete();
        }
        public function  Deletetag($id){

         $tagin = tb_tags::find($id);
         $tagin->delete();
        }
        public function  Deleteevent($id){

         $even = tb_eventads::find($id);
         $even->delete();
        }

        public function  Deletenews($id){
         $news = tb_news::find($id);
         return  DB::delete('call deletenews(?)',[$id]);


        
        }
        public function  Deleteads($id){
         $ads = tb_Ades::find($id);
         $ads->delete();

        

        }

        public function  deletenewsvistor($id){
         $news = tb_newsvistor::find($id);
         return  DB::delete('call deletenewsvistor(?)',[$id]);


        
        }


  /**
* Store a newly created resource in storage.
*@param  WithFileUploads;
* @param  \App\Http\Requests\UploadRequest $request
* @return \Illuminate\Http\Response
   
*/

public function store(Request $request)
{
    if(!$request->hasFile('fileName')) {
        return response()->json(['upload_file_not_found'], 400);
    }
 
    $allowedfileExtension=['pdf','jpg','png'];
    $files = $request->file('fileName'); 
    $errors = [];
    
    foreach ($files as $file) {      
 
        $extension = $file->getClientOriginalExtension();
 
        $check = in_array($extension,$allowedfileExtension);
 
        if($check) {
         
            foreach($request->file('fileName') as $mediaFiles) {
 
              
               $path = public_path() . '/abood';
            
            $imageName = $mediaFiles->getClientOriginalName();
            $mediaFiles->move($path, $imageName);
      
              
            }
        } else {
            return response()->json(['invalid_file_format'], 422);
        }
 
        return response()->json(['file_uploaded'], 200);
        return response()->json($path);
 
    }
}
 

 





   
      




}
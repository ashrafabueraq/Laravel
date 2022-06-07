<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    function home(){
        return view('home');
    }

    function calculate(Request $req){

       
          
         $result = 0;

      
        if(isset($req->btn) && $req->btn == "adding"){

            $result = $req->number1 + $req->number2;
            
           
            }
            elseif (isset($req->btn) && $req->btn == "Substract") {
                $result = $req->number1 - $req->number2;
               
            }
            elseif (isset($req->btn) && $req->btn == "Multiply") {
                $result = $req->number1 * $req->number2;
               
            }
            elseif (isset($req->btn) && $req->btn == "Divide") {
                $result = $req->number1 / $req->number2;
                
            }

            
             return redirect('/cal')->with('message', 'result is '.$result);
    }


}

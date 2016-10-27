<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class userController extends Controller
{
  public function getUsers(Request $request)
  {
    #validate the request
    $this->validate($request, [
      'users' => 'required|numeric|min:1|max:99',
    ]);

    #Generate Lorem Ipsum text
    $usersNumber = $request->input('users');
    $generator = new \Nubs\RandomNameGenerator\Alliteration();
    $namesString='';
    for ($x = 1; $x <= $usersNumber; $x++) {
    $namesString .=  "<p>".$generator->getName()."</p>";
    }
   #display paragraphs
   return view('users/createusers')->with('names', $namesString);

  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class loremController extends Controller
{

    public function getLoremText(Request $request)
    {
        #validate the request
        $this->validate($request, [
          'paragraphsNumber' => 'required|numeric|min:1|max:99',
        ]);

        #Generate Lorem Ipsum text
        $paragraphsNumber = $request->input('paragraphsNumber');
        $generator = new \Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($paragraphsNumber);
        $stringParagraphs = "<p>".implode("</p><p>",  $paragraphs) . "</p>";

       #display paragraphs
       return view('lorem/createlorem')->with('paragraphs', $stringParagraphs);
    }

}

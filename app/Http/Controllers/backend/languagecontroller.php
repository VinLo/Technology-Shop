<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class languagecontroller extends Controller
{
    var $langs =['en','vi'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function change($lang)
    {
        if(in_array($lang,$this->$langs))
        {
            session(['lang'=>$lang]);
        }
        else
        {
            return redirect()->route('f.home');
        }

    }

}

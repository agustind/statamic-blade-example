<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Statamic\Facades\Entry;

class PagesController extends Controller
{



    public function about(){
        

        $entries = Entry::whereCollection('news')->all();
        
        foreach($entries as $entry){

            echo $entry->value('title') . '<br>';
            echo $entry->value('image') . '<br>';
            echo $entry->value('content') . '<br>';

        }
        
        return view('about');

    }



}

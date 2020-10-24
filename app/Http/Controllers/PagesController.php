<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{



    public function about(){
        

        $entries = \Statamic\Entries\Entry::whereCollection('news')->values()->all();
        foreach($entries as $entry){

            echo $entry->value('title') . '<br>';
            echo $entry->value('image') . '<br>';
            echo $entry->value('content') . '<br>';

        }
        
        return view('about');

    }


    
}

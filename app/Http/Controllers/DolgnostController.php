<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dolgnost;

class DolgnostController extends Controller
{
    public function __construct() { 
        $this->middleware('auth'); 
    } 
    public function views() {
        $result = Dolgnost::all();
        return view('viewDolgnosts', compact('result'));
        
    }
    public function create() {
       
        return view('createDolgnost');
        
    }
    public function add(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
      
        $input = $request->all();

        Dolgnost::create($input);
        return redirect()->route('dolgnosts.views');
    }
    
    public function show(Dolgnost $dolgnost)
    {
        return view('showDolgnost',compact('dolgnost'));
    }
 
    public function edit(Dolgnost $dolgnost) {  
        return view('editDolgnost', compact('dolgnost'));
    }
    
    public function update(Dolgnost $dolgnost, Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        $input = $request->all();

       
        $dolgnost->update($input);
        
        return redirect()->route('dolgnosts.views'); 
    }
    
    public function delete(Dolgnost $dolgnost)
    {
        Dolgnost::destroy($dolgnost->id);
        return redirect()->route('dolgnosts.views');
    }
}

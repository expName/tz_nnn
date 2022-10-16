<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Otdel;

class OtdelController extends Controller
{
    public function __construct() { 
        $this->middleware('auth'); 
    } 
    public function views() {
        $result = Otdel::all();
        return view('viewOtdels', compact('result'));
    }
    public function create() {
       
        return view('createOtdel');
        
    }
    public function add(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
      
        $input = $request->all();

        Otdel::create($input);
        return redirect()->route('otdels.views');
    }
    
    public function show(Otdel $otdel)
    {
       return view('showOtdel',compact('otdel'));
    }
 
    public function edit(Otdel $otdel) {
       return view('editOtdel', compact('otdel'));
    }
    
    public function update(Otdel $otdel, Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        $input = $request->all();

        $otdel->update($input);
        return redirect()->route('otdels.views');
    }
    
    public function delete(Otdel $otdel)
    {
        Otdel::destroy($otdel->id);
        return redirect()->route('otdels.views');
    }
}

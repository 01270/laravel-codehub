<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Code;

class CodeController extends Controller
{
    public function index(){
        return view('codes.index', [
            'codes' => Code::latest()->filter(request(['tag', 'search']))->simplePaginate(4)
        ]);
    }

    public function show($id){
        if(Code::find($id)){
            $code = Code::find($id);
            $yes = FALSE;
            if($code->user_id == auth()->id()){
                $yes = True;
            }
            return view('codes.show', [
                'code' => $code,
                'yes' => $yes
            ]);
        }
        return abort(404);
    }

    public function new(){
        return view('codes.create');
    }

    public function new_post(Request $req){
        $ff = ($req->validate([
            'title' => 'required',
            'telegram' => 'required',
            'tags' => 'required',
            'code' => 'required',
        ]));

        if($req->hasFile('photo')){
            $ff['photo'] = $req->file('photo')->store('photos', 'public');
        }

        $ff['user_id'] = auth()->id();
        Code::create($ff);
        return redirect('/')->with('message', 'Your Code Has Been Posted!');
    }

    public function edit($id){
        $the_code = Code::find($id);
        if(!$the_code){abort(404);}
        if($the_code->user_id != auth()->id()){abort(403, 'Fuck You');}
        return view('codes.edit', ['code' => $the_code]);
    }

    public function edit_post($id, Request $req){
        $the_code = Code::find($id);
        if(!$the_code){abort(404);}
        if($the_code->user_id != auth()->id()){abort(403, 'Fuck You');}
        $ff = ($req->validate([
            'title' => 'required',
            'telegram' => 'required',
            'tags' => 'required',
            'code' => 'required',
        ]));

        $ff['telegram'] = str_replace('@', '', $ff['telegram']);
        $ff['telegram'] = str_replace('/(https?:\/\/.+\/|\w+\.\w+\/)', '', $ff['telegram']);

        if($req->hasFile('photo')){
            $ff['photo'] = $req->file('photo')->store('photos', 'public');
        }
        $the_code->update($ff);
        return back()->with('message', 'Your Code Has Been Updated!');
    }

    public function remove($id){
        $the_code = Code::find($id);
        if(!$the_code){abort(404);}
        if($the_code->user_id != auth()->id()){abort(403, 'fuck you');}
        $the_code->delete();
        return redirect('/')->with('message', 'Code Removed!');
    }

    public function manage(){
        return view('codes.manage', ['codes' => auth()->user()->codes()->get()]);
    }

}

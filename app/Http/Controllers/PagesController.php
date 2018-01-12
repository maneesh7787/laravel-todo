<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
   public function index(){

       $todos = Page::all();
       return view('todos')->with('todos',$todos);
   }

   public function store(Request $request){
     $list = new Page();
     $list->todo = $request->todoname;
     $list->save();
       Session::flash('message', 'Insertion has done successfully !!');
       Session::flash('alert-class', 'alert-success');
       return redirect('/todos');
   }

   public function delete($id){
      $todo = Page::find($id);
      $todo->delete();
       Session::flash('message', 'Delete successfully !!');
       Session::flash('alert-class', 'alert-success');
       return redirect('/todos');
   }

    public function update($id){
        $todos = Page::find($id);
        return view('update')->with('todos',$todos);

    }

    public function edit(Request $request, $id)
    {
     $todo = Page::find($id);
     $todo->todo = $request->todoname;
     $todo->save();
        Session::flash('message', 'Updated successfully !!');
        Session::flash('alert-class', 'alert-warning');
        return redirect('/todos');
    }

    public function completed($id)
    {
        $todo = Page::find($id);
        $todo->completed= 1;
        $todo->save();
        Session::flash('message', 'mark completed successfully !!');
        Session::flash('alert-class', 'alert-success');
        return redirect('/todos');
    }
}

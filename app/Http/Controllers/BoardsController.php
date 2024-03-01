<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boards;
use DataTables;

class BoardsController extends Controller
{
    public function index(){
        // Alert::success('done','done');
        return view('admin.board.index');
    }
    public function data(Request $request){
        if ($request->ajax()) {
            $data = Boards::where('is_delete',0);
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', 'admin.board.action')
                    ->rawColumns(['action'])
                    ->make(true);
        }
    }
    public function edit($id){
        $boards=Boards::where('id', $id)->first();
        return view('admin.board.edit', compact('boards'));
    }
    public function update(Request $request, $id){
        $boards = Boards::where('id', $id)->first();
        $boards->board = isset($request->boards)?$request->boards:'NULL';
        $boards->save();
        // echo "<pre>";
        // print_r($request->all());
        return redirect()->route('boards.index')->with('success',"Product stored successfully.");
    }
    public function create(){
         return view('admin.board.create');
    }
    public function store(Request $request){
        // return "heelo";
        $boards = new Boards();
        $boards->board = $request->board;
        $boards->save();
         return view('admin.board.index');
    }



    
}

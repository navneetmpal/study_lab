<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use DataTables;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index(){

                    
        // Alert::success('done','done');
        return view('admin.address.index');
    }
// ----------------------------------------create
    public function create(){
         return view('admin.address.create');
    }
// ---------------------------------------------------
    public function store(Request $request){
        return "hello";
        // $address = new Address();
        // $address->address = isset($request->address)?$request->address:'NULL';
        // $address->save();
        // return redirect()->route('address.index')->with('success',"Product stored successfully.");
    }
// ---------------------------------------------------------
    public function data(Request $request){
        if ($request->ajax()) {
            $data = Address::where('is_delete',0);
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', 'admin.address.action')
                    ->rawColumns(['action'])
                    ->make(true);
        }
    }
// ------------------------------------------------------
    public function destroy($id){
        $address = Address::where('id', $id)->first();
        $address->is_delete = '1';
        $address->save();
        return redirect()->route('address.index')->with('success', 'Dalated Successfully!');
    }
// -----------------------------------------------------
    public function edit($id){
        $address=Address::where('id', $id)->first();
        return view('admin.address.edit', compact('address'));
    }
// -----------------------------------
    public function update(Request $request, $id){
        $address = Address::where('id', $id)->first();
        $address->address = isset($request->address)?$request->address:'NULL';
        $address->save();
        return redirect()->route('address.index')->with('success', 'update Successfully!');
    }
// -----------------------------------------------------------------
}

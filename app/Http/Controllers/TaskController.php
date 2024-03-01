<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\BlogContent;
use App\Models\Tasks;
use App\Models\Optiontypes;

class TaskController extends Controller
{
    public function index(){
        $task1 = Optiontypes::get();
        return view('admin.task.index', compact('task1'));
    }
// ----------------------------------------create
    public function create(){
        return view('admin.task.create');
    }
// ---------------------------------------------------
    public function store(Request $request){
        if ($request->hasFile('image')) {
            foreach($request->file('image') as $key => $image){
                $detailPageImgFileName = 'product_img_' . $key . '_' . time() . '.' . $image->getClientOriginalExtension();
                $savePath = public_path('/taskfolder/task_images');
                $image->move($savePath, $detailPageImgFileName);
                $pname = 'taskfolder/task_images/' . $detailPageImgFileName;
                Tasks::create(['image' => $pname, 'category' => $request->blog]);
            }
        }
        return redirect()->route('task.index');
    }
// ----------------------------------------------------
    public function getImages($category){
        $images = Tasks::where('category', $category)->get();
        if ($images->isEmpty()) {
            return response()->json(['error' => 'No images found for the provided category.'], 404);
        }
        return response()->json(['images' => $images]);
    }
}

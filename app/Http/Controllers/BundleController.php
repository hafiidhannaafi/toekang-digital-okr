<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bundle;
use App\Models\Product;
use App\Models\Task;
use App\Models\Subtask;

class BundleController extends Controller
{
    public function index(){
        //$bundle=Bundle::all();
        return view('bundling.index',[
            'bundles' => Bundle::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bundling.create');
    }

    public function store(Request $request)
    {
        $bundle=Bundle::create([
            'name'=>$request->nama_bundle,
            'description'=>$request->description,
            'price'=>$request->price,
        ]);

        return redirect('/bundle');
    }

    public function update(Request $request, $bundleID)
    {
        $bundle=Bundle::find($bundleID);
        $bundle->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
        ]);
        return $bundle;
    }

    public function destroy($bundleID)
    {
        $bundle=Bundle::destroy($bundleID);
        return $bundle;
    }

    public function storeProduct(Request $request, $bundleID)
    {
        $product=Product::create([
            'bundle_id' => $bundleID,
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
        ]);
        return $product;
    }

    public function showProductByBundle($bundleID)
    {
        $product=Product::where('bundle_id',$bundleID)->get();
        return $product;
    }

    public function showProductAll()
    {
        $product=Product::all();
        return $product;
    }

    public function updateProduct(Request $request, $productID)
    {
        $product=Product::find($productID);
        $product->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
        ]);
        return $product;
    }

    public function destroyProduct($productID)
    {
        $product=Product::destroy($productID);
        return $product;
    }

    public function storeTask(Request $request, $productID)
    {
        $task=Task::create([
            'product_id' => $productID,
            'name'=>$request->name,
        ]);
        return $task;
    }

    public function showTaskByProduct($productID)
    {
        $task=Task::where('product_id',$productID)->get();
        return $task;
    }

    public function showTaskAll()
    {
        $task=Task::all();
        return $task;
    }

    public function updateTask(Request $request, $taskID)
    {
        $task=Task::find($taskID);
        $task->update([
            'name'=>$request->name,
        ]);
        return $task;
    }

    public function destroyTask($taskID)
    {
        $task=Task::destroy($taskID);
        return $task;
    }


    public function storeSubtask(Request $request, $taskID)
    {
        $subtask=Subtask::create([
            'task_id' => $taskID,
            'name'=>$request->name,
        ]);
        return $subtask;
    }

    public function showSubtaskByTask($taskID)
    {
        $subtask=Subtask::where('task_id',$taskID)->get();
        return $subtask;
    }

    public function showSubtaskAll()
    {
        $subtask=Subtask::all();
        return $subtask;
    }

    public function updateSubtask(Request $request, $subtaskID)
    {
        $subtask=Subtask::find($subtaskID);
        $subtask->update([
            'name'=>$request->name,
        ]);
        return $subtask;
    }

    public function destroySubtask($subtaskID)
    {
        $subtask=Subtask::destroy($subtaskID);
        return $subtask;
    }


}

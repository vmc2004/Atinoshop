<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    const PATH_VIEW = 'admin.categories.';  
    const PATH_UPLOAD ='categories';
 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::query()->latest('id')->paginate(5);
        return view(self::PATH_VIEW .__FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW .__FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =  $request->except('image');
        $data['is_active'] ??= 0;   
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data['image'] = Storage::put(self::PATH_UPLOAD, $file);
        }
        

        Category::query()->create($data);
        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = Category::query()->findOrFail($id);
        return view(self::PATH_VIEW .__FUNCTION__, compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = Category::query()->findOrFail($id);
        return view(self::PATH_VIEW .__FUNCTION__, compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Category::query()->findOrFail($id);
        $data =  $request->except('image');
        $data['is_active'] ??= 0;   
        if ($request->hasFile('image')) {
            $data['image'] = Storage::put(self::PATH_UPLOAD, $request->file('image'));
        }
        
        $currentImage = $model->image;

        $model->update($data);
        if($currentImage && Storage::exists($currentImage)){
            Storage::delete($currentImage);
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
    
        return redirect()->route('admin.categories.index');

    }
}

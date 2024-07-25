@extends('admin.layout')

@section('title')
    Cập nhật danh mục
@endsection

@section('content')
<form method="POST" action="{{route('admin.categories.update', $model->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <fieldset >
      <legend class="text-center">Thêm mới danh mục</legend>
     <input type="hidden" name="id" value="{{$model->id}}">
      <div class="mb-3">
        <label for="name" class="form-label">Tên danh mục</label>
        <input type="text" name="name" class="form-control border" id="name" value="{{$model->name}}">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Ảnh Danh Mục</label>
        <img src="{{ Storage::url($model->image)}}" alt="" width="200px" class="m-3">
        <input type="file" name="image" class="form-control border" id="image">
      </div>
      <div class="mb-3">
        <div class="form-check">
          <input class="form-check-input" name="is_active" type="checkbox"  id="is_active" value="1" @if ($model->is_active)
              checked
          @endif>
          <label class="form-check-label" for="is_active">
            Is Active
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <a class="btn btn-success" href="{{route('admin.categories.index')}}">Danh sách</a>
    </fieldset>
  </form>
 
@endsection
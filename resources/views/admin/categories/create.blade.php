@extends('admin.layout')

@section('title')
    Thêm danh mục
@endsection

@section('content')
<form method="POST" action="{{route('admin.categories.store')}}" enctype="multipart/form-data">
    @csrf
    <fieldset >
      <legend class="text-center">Thêm mới danh mục</legend>
     
      <div class="mb-3">
        <label for="name" class="form-label">Tên danh mục</label>
        <input type="text" name="name" class="form-control border" id="name">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Ảnh Danh Mục</label>
        <input type="file" name="image" class="form-control border" id="image">
      </div>
      <div class="mb-3">
        <div class="form-check">
          <input class="form-check-input" name="is_active" type="checkbox" checked id="is_active" value="1">
          <label class="form-check-label" for="is_active">
            Is Active
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
  </form>
@endsection
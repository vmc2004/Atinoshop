@extends('admin.layout')


@section('title')
    Danh mục sản phẩm
@endsection

@section('content')
<h2 class="text-center">Danh mục sản phẩm</h2>
<a href="{{route('admin.categories.create')}}" class="btn btn-primary">Thêm danh mục sản phẩm</a>
<table class="table  table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Logo</th>
        <th scope="col">Is Active</th>
        <th scope="col">Create At</th>
        <th scope="col">Update At</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($data as $da)
    <tr>
        <th scope="row">{{$da->id}}</th>
        <td>{{$da->name}}</td>
        <td><img src="{{ Storage::url($da->image)}}" alt="" width="50px"></td>
        <td>
          {!! $da->is_active ? '<span class="badge bg-success">Yes</span>' : '<span class="badge bg-danger">No</span>' !!}
      </td>
      
        <td>{{$da->created_at}}</td>
        <td>{{$da->updated_at}}</td>
        <td>
          <a class="btn btn-primary"  href="{{route('admin.categories.edit', $da->id)}}">Sửa</a>
        <form action="{{route('admin.categories.destroy',$da->id)}}">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger"  onclick="return confirm('Bạn có chắc chắn xóa không ?')">Xóa</button>
        </form>
        </td>
      </tr>
    @endforeach
      
    </tbody>
  </table>
  <div class="d-flex justify-content-center">
    {{$data->links()}}
  </div>
@endsection
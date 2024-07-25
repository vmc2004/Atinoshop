@extends('client.layout')

@section('title')
    Thông tin cá nhân
@endsection

@section('content')
<main class="main" style="min-height:150vh;">
    <div class="container mt-5">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 mb-4">
                <div class="list-group">
                    <h2 class="list-group-item list-group-item-action active">
                        Cài Đặt
                    </h2>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fa-solid fa-user me-2"></i> Cài đặt tài khoản
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fa-solid fa-shield-halved me-2"></i> Đăng nhập và bảo mật
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fa-solid fa-bell me-2"></i> Cài đặt thông báo
                    </a>
                </div>
            </div>

            <!-- Profile Information -->
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Thông tin cá nhân</h2>
                    </div>
                    <div class="card-body">
                        <form action="?act=update-profile" method="POST" enctype="multipart/form-data" onsubmit="return validateImage()">
                            @csrf
                            <div class="mb-3">
                                <label for="name_user" class="form-label">Họ và tên</label>
                                <input type="text" name="name_user" class="form-control" value="" />
                                <div class="form-text">Tên của bạn xuất hiện trên trang cá nhân và bên cạnh các bình luận của bạn.</div>
                            </div>

                            <div class="mb-3">
                                <label for="avatar" class="form-label">Avatar</label>
                                <input name="avatar" type="file" class="form-control" id="avatar"/>
                                <img src="" alt="avatar user" class="img-thumbnail mt-2" />
                                <div class="form-text text-danger">Nên là ảnh vuông, chấp nhận các tệp: JPG, PNG hoặc GIF.</div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" value="" />
                            </div>

                            <div class="mb-3">
                                <label for="sdt" class="form-label">Số Điện Thoại</label>
                                <input type="text" name="sdt" class="form-control" value="" placeholder="Nhập số điện thoại" />
                                <div class="form-text">Điện thoại liên kết với VietNamHistory</div>
                            </div>

                            <div class="mb-3">
                                <label for="diachi" class="form-label">Địa chỉ</label>
                                <input name="diachi" type="text" class="form-control" value="" />
                            </div>

                            {{-- Uncomment this block if you want to add gender selection --}}
                            {{-- <div class="mb-3">
                                <label for="gender" class="form-label">Chọn giới tính của bạn</label>
                                <select name="gender" class="form-select">
                                    <option value="" selected>Chọn giới tính</option>
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                    <option value="Khác">Khác</option>
                                </select>
                            </div> --}}

                            <button type="submit" name="btn-save" class="btn btn-success">Lưu thông tin</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    function validateImage() {
        var fileInput = document.querySelector('input[type="file"]');
        var filePath = fileInput.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
        if (!allowedExtensions.exec(filePath)) {
            alert('Vui lòng chọn file ảnh có định dạng JPG hoặc PNG.');
            fileInput.value = '';
            return false;
        }
        return true;
    }
</script>
@endsection

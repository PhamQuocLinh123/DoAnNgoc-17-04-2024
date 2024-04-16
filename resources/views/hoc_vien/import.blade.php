<form action="{{ route('hoc_vien.import') }}" method="POST" enctype="multipart/form-data">

    @csrf
    <div class="mb-3">
        <label for="file" class="form-label">Chọn tệp Excel</label>
        <input type="file" class="form-control" id="file" name="file">
    </div>
    <button type="submit" class="btn btn-primary">Nhập Dữ Liệu</button>
</form>

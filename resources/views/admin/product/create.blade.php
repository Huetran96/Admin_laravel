<!DOCTYPE html>
<html>
<head>
    <title>input-product </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center"> Nhập thông tin sản phâm</h2>
        </div>
        <div class="panel-body">
            <form method="post" action="{{ route('product-post') }}">
                {{csrf_field()}}
                <input style="display: none" type="text" class="form-control" name="id"  value="">
                <div class="form-group">
                    <label for="name">Tên:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="nhập tên sản phẩm" value="">
                    @error('name')<small style="color: red">{{$message}}</small> @enderror
                </div>
                <div class="form-group">
                    <label for="price">Giá:</label>
                    <input  type="number" class="form-control" id="price" name="price" placeholder="nhập giá" value="">
                    @error('price')<small style="color: red">{{$message}}</small> @enderror
                </div>

                <div class="form-group">
                    <label for="size">Kích thước:</label>
                    <input type="text" class="form-control" id="size" name="size" placeholder="nhập kích thước" value="">
                    @error('size')<small style="color: red">{{$message}}</small> @enderror
                </div>
                <div class="form-group">
                    <label for="unit">Đơn vị tính:</label>
                    <input type="text" class="form-control" id="unit" name="unit" placeholder="nhập dvt" value="">
                    @error('unit')<small style="color: red">{{$message}}</small> @enderror
                </div>
                <div class="form-group">
                    <label for="producer">Nhà sản xuất:</label>
                    <input type="text" class="form-control" id="producer" name="producer" placeholder="nhập nhà sản xuất" value="">
                    @error('producer')<small style="color: red">{{$message}}</small> @enderror
                </div>
                <div class="form-group">
                    <label for="quanity">Số lượng:</label>
                    <input type="text" class="form-control" id="quanity" name="quanity" placeholder="nhập số lượng" value="">
                    @error('quanity')<small style="color: red">{{$message}}</small> @enderror
                </div>
                <div class="form-group">
                    <label for="">Trạng thái</label> <br>
                    <label class="radio-inline"><input type="radio" name="status" value="1" checked>Hàng có sẵn</label>
                    <label class="radio-inline"><input type="radio" name="status" value="0">Hàng đợi </label>
                </div>
                <button class="btn btn-success">Thêm mới</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

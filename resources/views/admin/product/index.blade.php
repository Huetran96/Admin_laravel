@extends('admin.master')
@section('name-page','QUẢN LÝ SẢN PHẨM')
@section('main-content')
    <section class="content">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        <!-- Default box -->
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="{{ route('product-input') }}" class="btn btn-success">+Thêm mới sản phẩm</a>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Giá</th>
                            <th>Kích Thước</th>
                            <th>ĐVT</th>
                            <th>Nhà sản xuat</th>
                            <th>Số lượng</th>
                            <th>Trạng thái</th>
                            <th></th>

                        </tr>
                        @foreach($products as $pro)
                        <tr>
                            <td>{{ $pro->id }}</td>
                            <td>{{ $pro->name }}</td>
                            <td>{{ $pro->price }}</td>
                            <td>{{ $pro->size }}</td>
                            <td>{{ $pro->unit }}</td>
                            <td>{{ $pro->producer }}</td>
                            <td>{{ $pro->quanity }}</td>
                            <td>{{ $pro->status==0?'Hàng đợi':'Hàng có sẵn' }}</td>
                            <td>
                                <a href="{{ route('product.edit',$pro->id) }}" class="btn btn-success">Sửa</a>
                            </td>
                            <td>
                                <form action="{{ route('product.destroy', $pro->id) }}" method="POST" type="button" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pull-right pagination">
                        {{ $products->links() }}
                    </div>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.box -->

    </section>
@endsection

@extends('admin_layout')
@section('admin_content')

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm thương hiệu sản phẩm
                </header>
                <div class="panel-body">

                    <div class="position-center">
                        <form role="form" action="{{URL::to('/save-brand-product')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên thương hiệu</label>
                                <input type="text" name="brand_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên thương hiệu">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả thương hiệu</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="brand_product_desc" id="exampleInputPassword1" placeholder="Mô tả thương hiệu"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Trạng thái</label>
                                <select name="brand_product_status" class="form-control input m-bot15">
                                    <option value="0">Ẩn</option>
                                    <option value="1">Hiện</option>
                                </select>
                            </div>

                            <button type="submit" name="add_brand_product" class="btn btn-info">Thêm danh mục</button>
                        </form>
                    </div>

                </div>
            </section>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.13.0/sweetalert2.all.js" integrity="sha512-xyQB/ddHP6Oc0QtRFlyVsnBAOJhlxhLin3LXIjw3Ho9RnjppbCJOeb0OUXQ5HgIijMnzNxuCElb5FLkZLN+SSg==" crossorigin="anonymous"></script>
            <script>
                $(document).ready(function (){
                    $('#submit').click(function (e){
                        e.preventDefault();
                        swal({
                            title: "Are you sure?",
                            text: "123",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        })
                            .then(willDelete)=>{
                            if(willDelete){
                                swal("Poof!", {
                                    icon: "success",
                                })
                            }
                        }
                    })
                })
            </script>
        </div>
@endsection

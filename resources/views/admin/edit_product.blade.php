@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Updated
                </header>
                <?php
                $message = Session::get('message');
                if ($message) {
                   echo '<span class="text-alert">'.$message. '</span>';
                   Session::put('message',null);
                }
              ?>
                <div class="panel-body">

                    <div class="position-center">
                        @foreach($edit_product as $key => $pro)
                        <form role="form" action="{{ URL::to('update-product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product name</label>
                                <input type="text" name="product_name" class="form-control"
                                    id="exampleInputEmail1" value="{{$pro->product_name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description </label>
                                <textarea style="resize: none" rows="10" class="form-control" name="product_desc" id="exampleInputPassword1">{{$pro->product_desc}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Product price</label>
                                <input type="number" name="unit_price" class="form-control" id="exampleInputEmail1"
                                    value="{{$pro->unit_price}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Category </label>
                                <select name="product_cate" class="form-control input-sm m-bot15">
                                @foreach($cate_product as $key =>$cate)
                                @if ($cate->category_id==$pro->category_id)
                                <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                @else
                                <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                @endif
                                 @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Brand</label>
                                <select name="brand_product" class="form-control input-sm m-bot15">
                                @foreach($brand_product as $key =>$brand)
                                @if ($brand->brand_id==$pro->brand_id)
                                 <option selected value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                 @else
                                 <option value="{{$brand->brand_name}}">{{$brand->brand_id}}</option>
                                 @endif
                                 @endforeach
                                </select>
                            </div>
                            {{-- <div class="form-group">
                                        <label for="exampleInputFile">Origin</label>
                                        <select name="origin" class="form-control input-sm m-bot15">
                                            @foreach ($origin_product as $key => $origin)
                                            @if ($origin->origin_id==$pro->origin_id)
                                            <option value="{{ $origin->origin_id}}">{{ $origin->name }}</option>
                                            @else
                                            <option value="{{$origin->origin_id}}">{{$origin->name}}</option>
                                            @endif
                                        @endforeach
                                        </select>
                                    </div> --}}

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Show</label>
                                <select name="product_status" class="form-control input-sm m-bot15">
                                    <option value="0">Hide</option>
                                    <option value="1">Show</option>
                                </select>
                            </div>
                            <button type="submit" name="update_product" class="btn btn-info">Update product </button>
                        </form>
                        @endforeach
                    </div>

                </div>
            </section>

        </div>
    @endsection

@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Add product
                </header>
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo '<span class="text-alert">' . $message . '</span>';
                    Session::put('message', null);
                }
                ?>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('save-product') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product name</label>
                                <input type="text" name="product_name" class="form-control" id="exampleInputEmail1"
                                    placeholder="Song category name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description of the product</label>
                                <textarea style="resize: none" rows="10" class="form-control" name="product_desc" id="exampleInputPassword1"
                                    placeholder="Description Product"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product price</label>
                                <input type="number" name="unit_price" class="form-control" id="exampleInputEmail1"
                                    placeholder="Product price">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Images product</label>
                                <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Category product</label>
                                <select name="product_cate" class="form-control input-sm m-bot15">
                                    @foreach ($cate_product as $key => $cate)
                                        <option value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Brand</label>
                                <select name="product_brand" class="form-control input-sm m-bot15">
                                    @foreach ($brand_product as $key => $brand)
                                        <option value="{{ $brand->brand_id }}">{{ $brand->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Origin</label>
                                <select name="origin" class="form-control input-sm m-bot15">
                                    @foreach ($origin_product as $key => $origin)
                                    <option value="{{ $origin->origin_id}}">{{ $origin->name }}</option>
                                @endforeach
                                </select>
                            </div>

                            <button type="submit" name="add_product" class="btn btn-info">Add product</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    @endsection

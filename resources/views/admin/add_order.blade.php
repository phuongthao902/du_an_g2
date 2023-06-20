@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Add order
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
                        <form role="form" action="{{ URL::to('save-order-product') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Quantity</label>
                                <input type="text" name="quantity" class="form-control" id="exampleInputEmail1"
                                    placeholder="quantity">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Address</label>
                                <textarea style="resize: none" rows="10" class="form-control" name="address" id="exampleInputPassword1"
                                    placeholder="Address"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Total price</label>
                                <input type="number" name="total_price" class="form-control" id="exampleInputEmail1"
                                    placeholder="total price">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Status</label>
                                <select name="status" class="form-control input-sm m-bot15">
                                    <option value="0">Hide</option>
                                    <option value="1">Show</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Bill info</label>
                                <input type="text" name="bill_info" class="form-control" id="exampleInputEmail1"
                                    placeholder="bill info">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Product</label>
                                <select name="product_id" class="form-control input-sm m-bot15">
                                    @foreach ($pro_product as $key => $pro)
                                    <option value="{{ $pro->product_id}}">{{ $product->product_name }}</option>
                                @endforeach
                                </select>
                            </div>
                            <button type="submit" name="add_order" class="btn btn-info">Add order</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    @endsection

@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Updated order product
                </header>
                <?php
                $message = Session::get('message');
                if ($message) {
                   echo '<span class="text-alert">'.$message. '</span>';
                   Session::put('message',null);
                }
              ?>
                <div class="panel-body">
                    @foreach($edit_order_product as $key => $edit_value)
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('update-order-product/'.$edit_value->order_id) }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Quantity</label>
                                <input type="text" value="{{ $edit_value->quantity}}" name="quantity" class="form-control"
                                    id="exampleInputEmail1" placeholder="order quantity">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" value="{{ $edit_value->order_address}}" name="address" class="form-control"
                                    id="exampleInputEmail1" placeholder="order address">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Total Price</label>
                                <input type="text" value="{{ $edit_value->order_total_price}}" name="total_price" class="form-control"
                                    id="exampleInputEmail1" placeholder="total price">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Bill Info</label>
                                <input type="text" value="{{ $edit_value->order_bill_info}}" name="bill_info" class="form-control"
                                    id="exampleInputEmail1" placeholder="order bill info">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Product </label>
                                <select name="pro_product" class="form-control input-sm m-bot15">
                                @foreach($pro_product as $key =>$pro)
                                @if ($pro->product_id==$pro->product_id)
                                <option selected value="{{$pro->product_id}}">{{$pro->product_name}}</option>
                                @else
                                <option value="{{$pro->product_id}}">{{$pro->product_name}}</option>
                                @endif
                                 @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">User </label>
                                <select name="pro_product" class="form-control input-sm m-bot15">
                                @foreach($pro_user as $key =>$pro)
                                @if ($pro->id==$pro->id)
                                <option selected value="{{$pro->id}}">{{$pro->name}}</option>
                                @else
                                <option value="{{$pro->id}}">{{$pro->name}}</option>
                                @endif
                                 @endforeach
                                </select>
                            </div>
                            <button type="submit" name="update_order_product" class="btn btn-info">Update order</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </section>

        </div>
    @endsection

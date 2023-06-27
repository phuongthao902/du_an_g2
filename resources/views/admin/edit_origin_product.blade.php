@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Updated origin product
                </header>
                <?php
                $message = Session::get('message');
                if ($message) {
                   echo '<span class="text-alert">'.$message. '</span>';
                   Session::put('message',null);
                }
              ?>
                <div class="panel-body">
                    @foreach($edit_origin_product as $key => $edit_value)
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('update-origin-product/'.$edit_value->origin_id) }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Origin name</label>
                                <input type="text" value="{{ $edit_value->name}}" name="origin_product_name" class="form-control"
                                    id="exampleInputEmail1" placeholder="origin name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Code</label>
                                <input type="text" value="{{ $edit_value->code}}" name="origin_product_code" class="form-control"
                                    id="exampleInputEmail1" placeholder="origin code">
                            </div>

                            <button type="submit" name="update_origin_product" class="btn btn-info">Update origin</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </section>

        </div>
    @endsection

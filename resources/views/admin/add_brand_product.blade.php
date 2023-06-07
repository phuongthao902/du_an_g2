@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Add brand product
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
                        <form role="form" action="{{ URL::to('save-brand-product') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Brand name</label>
                                <input type="text" name="brand_product_name" class="form-control"
                                    id="exampleInputEmail1" placeholder="Brand name">
                            </div>

                            <button type="submit" name="add_brand_product" class="btn btn-info">Add brand</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    @endsection

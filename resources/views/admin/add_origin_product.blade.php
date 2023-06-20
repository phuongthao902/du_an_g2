@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Add origin
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
                        <form role="form" action="{{ URL::to('save-origin-product') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product origin name</label>
                                <input type="text" name="origin_product_name" class="form-control"
                                    id="exampleInputEmail1" placeholder="Song origin name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Code</label>
                                <input type="text" name="origin_product_code" class="form-control"
                                    id="exampleInputEmail1" placeholder="Product origin code">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Show</label>
                                <select name="origin_product_status" class="form-control input-sm m-bot15">
                                    <option value="0">Hide</option>
                                    <option value="1">Show</option>
                                </select>
                            </div>

                    <button type="submit" name="add_origin_product" class="btn btn-info">Add origin</button>
                </form>
            </div>

                </div>
            </section>

        </div>
    @endsection

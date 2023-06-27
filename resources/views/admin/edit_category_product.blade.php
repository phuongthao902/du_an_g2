@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Updated product catalog
                </header>
                <?php
                $message = Session::get('message');
                if ($message) {
                   echo '<span class="text-alert">'.$message. '</span>';
                   Session::put('message',null);
                }
              ?>
                <div class="panel-body">
                    @foreach($edit_category_product as $key => $edit_value)
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('update-category-product/'.$edit_value->category_id) }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Song category name</label>
                                <input type="text" name="category_product_name" class="form-control"
                                    id="exampleInputEmail1" placeholder="Song category name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description of the song list</label>
                                <textarea style="resize: none" rows="10" class="form-control" name="category_product_desc" id="exampleInputPassword1"
                                    placeholder="Description of the song list"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Taxable</label>
                                <textarea style="resize: none" rows="10" class="form-control" name="category_product_taxable" id="exampleInputPassword1"
                                    placeholder="taxable of the song list"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Sort order</label>
                                <input type="text" name="category_product_sort_order" class="form-control"
                                    id="exampleInputEmail1" placeholder="Song category name">
                            </div>

                            <button type="submit" name="update_category_product" class="btn btn-info">Update product catalog</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </section>

        </div>
    @endsection

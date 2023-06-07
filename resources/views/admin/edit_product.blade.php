@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Updated music
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
                                <label for="exampleInputEmail1">Song product name</label>
                                <input type="text" name="product_name" class="form-control"
                                    id="exampleInputEmail1" value="{{$pro->product_name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Song product singer</label>
                                <input type="text" name="product_singer" class="form-control"
                                    id="exampleInputEmail1" value="{{$pro->product_singer}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <input type="file" name="product_image" id="exampleInputFile">
                                <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" height="100" width="100">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Product composer</label>
                                <input type="text" name="product_composer" class="form-control"
                                    id="exampleInputEmail1" value="{{$pro->product_composer}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description song</label>
                                <textarea style="resize: none" rows="10" class="form-control" name="product_desc" id="exampleInputPassword1">{{$pro->product_desc}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Lyrics song</label>
                                <textarea style="resize: none" rows="10" class="form-control" name="product_lyrics" id="exampleInputPassword1">{{$pro->product_lyrics}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Price songs</label>
                                <input type="text" value="{{$pro->product_price}}" name="product_price" class="form-control"
                                    id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Category music</label>
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
                                <select name="product_brand" class="form-control input-sm m-bot15">
                                @foreach($brand_product as $key =>$brand)
                                @if ($cate->category_id==$pro->category_id)
                                 <option selected value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                 @else
                                 <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                 @endif
                                 @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Audio input</label>
                                <input type="file" name="product_audio" id="exampleInputFile">
                                <audio controls style="height: 100px; width: 100px;">
                                    <source src="{{URL::to('public/product_audio/'.$pro->product_audio)}}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                  </audio>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Show</label>
                                <select name="product_status" class="form-control input-sm m-bot15">
                                    <option value="0">Hide</option>
                                    <option value="1">Show</option>
                                </select>
                            </div>
                            <button type="submit" name="update_product" class="btn btn-info">Update music </button>
                        </form>
                        @endforeach
                    </div>

                </div>
            </section>

        </div>
    @endsection

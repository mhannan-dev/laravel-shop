
@extends('admin.layout.master')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                       

                            <div class="col-lg-7">
                             @include ('admin.partials.error')

                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Product</h3></div>
                                    <div class="card-body">
                                        <form action="{{route('product_update', $product->id)}}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mb-1" for="title">Title</label>
                                                        <input name="title" class="form-control py-4" id="title" type="text" value="{{$product->title}}">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1" for="description">Description</label>
                                                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$product->description}}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label class="mb-1" for="product_image">Image</label>
                                                
                                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                                                <input type="file" class="form-control" name="product_image[]" id="product_image" >
                                                
                                            </div>



                                            
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="price">Price</label>
                                                        <input name="price" class="form-control py-4" id="price" type="number" value="{{$product->price}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="quantity">Quantity</label>
                                                        <input name="quantity" class="form-control py-4" id="quantity" type="number" value="{{$product->quantity}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                                <button type="submit" class="btn btn-primary btn-block">Update</button>
                                            </div>

                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@endsection

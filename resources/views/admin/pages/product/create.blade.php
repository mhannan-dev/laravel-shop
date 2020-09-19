
@extends('admin.layout.master')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                       

                            <div class="col-lg-10">
                            @include ('admin.partials.message')

                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Product</h3></div>
                                    <div class="card-body">
                                        <form action="{{route('product__store')}}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mb-1" for="title">Title</label>
                                                        <input name="title" class="form-control py-4" id="title" type="text" placeholder="Enter title">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1" for="description">Description</label>
                                                <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
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
                                                        <input name="price" class="form-control py-4" id="price" type="number" placeholder="Enter Price">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="quantity">Quantity</label>
                                                        <input name="quantity" class="form-control py-4" id="quantity" type="number" placeholder="Enter Quantity">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                                <button type="submit" class="btn btn-primary btn-block">Save</button>
                                            </div>

                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@endsection

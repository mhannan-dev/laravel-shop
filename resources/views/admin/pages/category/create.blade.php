
@extends('admin.layout.master')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                       

                            <div class="col-lg-10">
                            @include ('admin.partials.message')

                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Category</h3></div>
                                    <div class="card-body">
                                        <form action="{{route('category_store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf  
                                            
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mb-1" for="name">Name</label>
                                                        <input name="name" class="form-control py-4" id="name" type="text" placeholder="Enter name">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1" for="description">Description</label>
                                                <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label class="mb-1" for="description">Parent Category</label>
                                                <select class="form-control" name="parent_id">
                                                    @foreach($main_categories as $catt)
                                                        <option value="{{$cat->id}}">{{$catt->name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <label class="mb-1" for="cat_image">Category Image</label>
                                                
                                                <input type="file" class="form-control" name="image" id="cat_image" >
                                               
                                                
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

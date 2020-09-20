
@extends('admin.layout.master')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                       

                            <div class="col-lg-10">
                            @include ('admin.partials.message')

                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Category</h3></div>
                                    <div class="card-body">
                                        <form action="{{route('category_update', $category->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf  
                                            
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mb-1" for="name">Name</label>
                                                        <input name="name" class="form-control py-4" id="name" type="text" value="{{$category->name}}">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="mb-1" for="description">Description</label>
                                                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$category->description}}</textarea>
                                            </div>

                                            <div class="form-group">
                                            <label for="exampleInputPassword1">Parent Category (optional)</label>
                                            <select class="form-control" name="parent_id">
                                                <option value="">Please select a Primary category</option>
                                                @foreach ($main_categories as $cat)
                                                <option value="{{ $cat->id }}" {{ $cat->id == $category->parent_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                                                @endforeach
                                            </select>

                                            </div>


                                           <div class="form-group">
                                            <label for="oldimage">Category Old Image</label> <br>

                                            <img src="{{asset('uploaded_img/categories/'.$cat->image)}}" width="100"> <br>

                                            <label for="image">Category New  Image (optional)</label>

                                            <input type="file" class="form-control" name="image" id="image" >
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

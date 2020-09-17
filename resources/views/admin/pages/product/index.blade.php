
@extends('admin.layout.master')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Product Table</h1>
                        
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <svg class="svg-inline--fa fa-table fa-w-16 mr-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM224 416H64v-96h160v96zm0-160H64v-96h160v96zm224 160H288v-96h160v96zm0-160H288v-96h160v96z"></path></svg><!-- <i class="fas fa-table mr-1"></i> -->
                                Product DataTable
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
                                        <thead>
                                            <tr role="row">
                                           <th rowspan="1" colspan="1">Product Title</th>
                                            <th rowspan="1" colspan="1">Price</th>
                                            <th rowspan="1" colspan="1">Quantity</th>
                                            <th rowspan="1" colspan="1">Actions</th>
                                           </tr>
                                        </thead>
                                        <tfoot>
                                            
                                             <tr role="row">
                                           <th rowspan="1" colspan="1">Product Title</th>
                                            <th rowspan="1" colspan="1">Price</th>
                                            <th rowspan="1" colspan="1">Quantity</th>
                                            <th rowspan="1" colspan="1">Actions</th>
                                           </tr>
                                            
                                        </tfoot>
                                        <tbody>
                                   @foreach ($products as $product)
                                        <tr role="row" class="odd">
                                                <td class="sorting_1">{{ $product->title }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->quantity }}</td>
                                                <td>
                                                <a href="{{route('product_edit', $product->id)}}" class="btn btn-success">Edit</a> 
                                                <a href="#" class="btn btn-danger">Delete</a>
                                                </td>
                                                
                                        </tr>

                                    @endforeach 
                                            
                                            
                                            
                                            </tbody>
                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                
           
                
@endsection

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <ul>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </ul>


    </div>
@endif

@if (Session::has('success'))
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <p>{{ Session::get('success') }}</p>
  </div>
@endif

@if (Session::has('errors'))
  <div class="alert alert-danger ">
    <p>{{ Session::get('errors') }}</p>
  </div>
@endif

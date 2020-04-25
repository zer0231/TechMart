@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
                  <form method="post" action="{{ url('/create')}}" enctype="multipart/form-data">
                    @csrf
                  <div class="input-group mb-3" style="display:flow-root;">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                    </div>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="text" name="product_name" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    <br>
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
                    </div>
                    <input type="text" name="product_price" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    <input type="file" name="image">
                    <input type="submit" class="form-control" name="upload" value="upload">
                  </div>
</form>
</div>

@endsection

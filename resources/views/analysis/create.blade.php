@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mt-3">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Insert Stats</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('analysis.store') }}" method="POST">
                @csrf
                <div class="card-body row">
                    @foreach($nutritions as $nutritions)
                        <div class="form-group col-4">
                            <label for="nutritions[{{$nutritions->id}}]">{{$nutritions->name}}</label>
                            <input type="number" step="0.01" class="form-control" name="nutritions[{{$nutritions->id}}]" placeholder="Minerals">
                        </div>
                    @endforeach
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
@endsection

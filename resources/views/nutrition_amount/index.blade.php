@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-6 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Vitamins and Mineral needs</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Vitamins and Minerals</th>
                                <th style="width: 40px">Value</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($analyses as $analysis)
                                <tr>
                                    <td>{{$analysis->id}}</td>
                                    <td>{{$analysis->name}}</td>

                                    <td class="{{$analysis->bg_type}}"><span
                                            >{{$analysis->pivot->amount}}</span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection

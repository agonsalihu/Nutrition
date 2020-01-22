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
                            <tr>
                                <td>1</td>
                                <td>Potassium</td>
                                
                                <td><span class="badge bg-danger">2</span></td>
                            </tr>
                            
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row ">
        <div class="col-md-3 mt-3">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-warning">
                <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="{{asset('/img/fish.jpg')}}" style="width: 100px;" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Fish</h3>
                <h5 class="widget-user-desc">Meat</h5>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Vitamin C <span class="float-right badge bg-primary">300 mg/kg</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Copper <span class="float-right badge bg-info">500 mg/kg</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Calcium <span class="float-right badge bg-success">0.7%</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Vitamin A <span class="float-right badge bg-danger">22500</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Vitamin D3 <span class="float-right badge bg-danger">2500</span>
                    </a>
                  </li>
                  
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
            
          </div>
        </div>
    </div>
@endsection

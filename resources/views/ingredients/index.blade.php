@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row ">
            @foreach($ingredients as $ingredient)
                <div class="col-md-3 mt-3">

                    <div class="card card-widget widget-user-2">
                        <div class="widget-user-header bg-warning text-center">
                            {{--                <div class="widget-user-image">--}}
                            {{--                  <img class="img-circle elevation-2" src="{{asset('/img/fish.jpg')}}" style="width: 100px;" alt="User Avatar">--}}
                            {{--                </div>--}}
                            <h3>{{$ingredient->name}}</h3>
                            <h5>{{$ingredient->description}}</h5>
                        </div>
                        <div class="card-footer p-0">
                            <ul class="nav flex-column">
                                @foreach($ingredient->nutritions as $nutrition)
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            {{$nutrition->name}} <span class="float-right badge {{$analyses->where('id', $nutrition->id)->first()->bg_type}}">{{$nutrition->pivot->amount}} mg/kg</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
@endsection

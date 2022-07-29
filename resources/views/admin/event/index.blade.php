@extends('layouts.admin')

@section('main-content')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                @include('message.message')
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-success " href="{{route('event.create')}}" role="button" style="border-radius: 50%">
                                <i class="fa fa-plus"></i> Add Event
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Simple Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Event Lists</h4>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                        <tr>
                            <th>S.N.</th>
                            <th class="table-plus datatable-nosort">Event Title</th>
                            <th>Event Date</th>
                            <th>Image</th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($events as $key=>$event)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td class="table-plus">{{$event->title}}</td>
                                <td class="table-plus">{{$event->event_date}}</td>
                                <td class="table-plus">
                                    <img src="{{asset('uploads/event/'.$event->image)}}" alt="" height="80px" width="80px">
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="{{route('event.show',$event->id)}}"><i class="dw dw-eye"></i> View</a>
                                            <a class="dropdown-item" href="{{route('event.edit',$event->id)}}"><i class="dw dw-edit2"></i> Edit</a>
                                            {{Form::open(['url'=>route('event.destroy',$event->id),'onsubmit'=>"return confirm('Are you sure you want to delete this?')",'class'=>"form pull-left"])}}
                                            @method('delete')
                                            <button class="dropdown-item"><i class="dw dw-delete-3"></i> Delete</button>
                                            {{Form::close()}}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Simple Datatable End -->
        </div>
    </div>
@endsection

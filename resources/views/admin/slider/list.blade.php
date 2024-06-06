@extends('admin.layouts.app')

 @section('content')
<div class="pagetitle">
    <h1>Slides</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-24">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                    <a href="{{ url('admin/sliders/add')}}" class="btn btn-primary">Add New Slider</a>
                     </h5>
                     <table class="table datatable">
                        <thead>
                        <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Slider Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image </th>
                                
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($getRecord as $value)
                            <tr>
                            <th scope="row">{{$value->id}}</th>
                            <td>{{$value->title}}</td>
                               
                                <td>{{$value->text}}</td>
                                <td> <img src="{{ asset($value->image)}}" style="height: 40px; width: 70px;" alt=""></td>
                                
        
                                <td>{{ date('d-m-Y H:i:s',strtotime($value->created_at))}}</td>

                                <td>
                                        <div class="btn-group">
                                            <a href="{{url('admin/sliders/edit/'.$value->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{url('admin/sliders/delete/'.$value->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                        </div>
                                    </td>
                                
                            </tr>
                            @endforeach
                        </tbody>

                     </table>
                </div>
            </div>
        </div>
    </div>
</section>






 @endsection
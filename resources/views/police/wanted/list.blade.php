@extends('police.layouts.app')


@section('content')
<div class="pagetitle">
    <h1>Wanted</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-24">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                    <a href="{{ url('police/wanted/add')}}" class="btn btn-primary">Add New Wanted</a>
                     </h5>
                     <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Wanted Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image </th>
                                
                                <th scope="col">Created At</th>
                               
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
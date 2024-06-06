@extends('police.layouts.app')

 @section('content')
<div class="pagetitle">
    <h1>Suspects</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-24">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                    <a href="{{ url('police/suspects/add')}}" class="btn btn-primary">Add New Suspects</a>
                     </h5>
                     <table class="table datatable">
                        <thead>
                        <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Image</th>
                                <th scope="col">Location</th>
                                <th scope="col"> Crime</th>
                                <th scope="col"> Offended</th>
                                <th scope="col">Description</th>
                                <th scope="col">Time</th>
                                <th scope="col">Date</th>
                               
                               
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($getRecord as $value)
                            <tr>
                            <th scope="row">{{$value->id}}</th>
                            <td>{{$value->name}}</td>
                                
                                <td>{{$value->age}}</td>
                                <td> <img src="{{ asset($value->image)}}" style="height: 40px; width: 70px;" alt=""></td>
                                <td>{{$value->location}}</td>
                                <td>{{ !empty($value->getCrimeType->crime_type) ? $value->getCrimeType->crime_type: '' }}</td>
                                <td>{{$value->offender_name}}</td>
                                <td>{{$value->description}}</td>
                                
                                <td>{{$value->time}}</td>
                                <td>{{$value->date}}</td>
        
                                
                               
                                
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
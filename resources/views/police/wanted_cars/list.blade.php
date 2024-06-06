@extends('police.layouts.app')


@section('content')
<div class="pagetitle">
    <h1>Wanted Cars</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-24">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ url('police/wanted_cars/add')}}" class="btn btn-primary">Add Wanted Car</a>
                    </h5>
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Car Name</th>
                                <th scope="col">Number Plate</th>
                                <th scope="col">Image </th>
                                <th scope="col">Description</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($getRecord as $value)
                                <tr>
                                    <th scope="row">{{$value->id}}</th>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->number}}</td>
                                    <td> <img src="{{ asset($value->image)}}" style="height: 40px; width: 70px;" alt="">
                                    </td>
                                    <td>{{$value->description}}</td>

                                    

                                   

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
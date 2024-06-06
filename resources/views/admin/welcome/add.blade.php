@extends('admin.layouts.app')

@section('content')

<div class="col-lg-12">
     <div class="card card-default">
          <div class="card-header card-header-border-bottom">
               <h2>Create Welcome</h2>
          </div>
          <div class="card-body">
               <form action="{{ url('admin/welcome/add')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                         <label for="exampleFormControlInput1">Welcome Title </label>
                         <input type="text" name="title" class="form-control" id="exampleFormControlInput1"
                              placeholder="Welcome Title">

                    </div>



                    <div class="form-group">
                         <label for="exampleFormControlTextarea1">Welcome Description</label>
                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text">

 </textarea>
                    </div>
                    <div class="form-group">
                         <label for="exampleFormControlFile1">Welcome Image</label>
                         <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                         <button type="submit" class="btn btn-primary btn-default">Submit</button>

                    </div>
               </form>
          </div>
     </div>



     @endsection
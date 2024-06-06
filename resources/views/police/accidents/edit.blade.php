@extends('police.layouts.app')

 @section('content')
 <div class="pagetitle">
    <h1>Edit Accidents</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Accidents</h5>

                    <form action=" {{ url('police/accidents/update/'.$cases->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        <input type="hidden" name="old_image" value="{{ $cases->image}}">

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Victim Name <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="victim_name" class="form-control" required  value="{{ $cases->victim_name}}">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Offender Name <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="offender_name" class="form-control" required value="{{ $cases->offender_name}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Image <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control"  value="{{ $cases->image}}">
                            </div>
                        </div>
                        <div  class="form-group">
                            <img src="{{ asset($cases->image)}}" style="width: 400px; Height: 200px;" alt="">

                        </div>
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Description <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="description" class="form-control" required value="{{ $cases->description}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Location <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="location" class="form-control" required value="{{ $cases->location}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Time <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="time" name="time" class="form-control" required value="{{ $cases->time}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Date <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="date" name="date" class="form-control" required value="{{ $cases->date}}">
                            </div>
                        </div>
                      



                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label"> 
                            </label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</section>






 @endsection
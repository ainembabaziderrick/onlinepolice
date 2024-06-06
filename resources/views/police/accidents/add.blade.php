@extends('police.layouts.app')

 @section('content')
 <div class="pagetitle">
    <h1>Add Accidents</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Accidents</h5>

                    <form action=" {{ url('police/accidents/add')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Victim Name <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="victim_name" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Offender Name <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="offender_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Image <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Description <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="description" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Location <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="location" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Time <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="time" name="time" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Date <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="date" name="date" class="form-control" required>
                            </div>
                        </div>
                      

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label"> 
                            </label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</section>






 @endsection
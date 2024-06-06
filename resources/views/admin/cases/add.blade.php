@extends('admin.layouts.app')

 @section('content')
 <div class="pagetitle">
    <h1>Add Cases</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cases</h5>

                    <form action=" {{ url('admin/cases/add')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Victim Name <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="victim_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Crime <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                            <select name="crime" id="" class="form-control" required>
                                    <option value="">Select Crime Type</option>
                                    @foreach($getRecord as $value)
                                    <option value="{{ $value->id}}">{{ $value->crime_type}}</option>
                                    @endforeach
                                </select>
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
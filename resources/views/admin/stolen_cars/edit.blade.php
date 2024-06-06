@extends('admin.layouts.app')


@section('content')
 <div class="pagetitle">
    <h1>Edit Stolen Cars</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Stolen Cars</h5>

                    <form action=" {{ url('admin/stolen_cars/update/'.$cases->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}

                        <input type="hidden" name="old_image" value="{{ $cases->image}}">
                                               
                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Car Name <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" required value="{{ $cases->name}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Number Plate <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="number" class="form-control" required value="{{ $cases->number}}">
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

                        <div class="form-group">
                    <label for="exampleFormControlTextarea1">Car Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"  >
                    {{ $cases->description}}
 </textarea>
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
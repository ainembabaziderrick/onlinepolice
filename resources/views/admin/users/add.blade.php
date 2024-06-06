@extends('admin.layouts.app')


@section('content')
 <div class="pagetitle">
    <h1>Add Users</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>

                    <form action=" {{ url('admin/user/add')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Full Names <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Email <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="email" class="form-control" required>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Password <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Confirm Password <span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="password" name="c_password" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class = "col-sm-2 col-form-label">Role<span style="color: red;"> *</span>
                            </label>
                            <div class="col-sm-10">
                                <select name="is_role" id="" class="form-control" required>
                                    <option value="1">Admin</option>
                                    <option value="2">Police</option>
                                    <option value="3">Citizen</option>
                                </select>
                               
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
@extends('admin.master')

@section('title')
    Add New Teacher | sholla School & College
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="page-header">Sholl School & College Management</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row bg">
        <div class="col-md-12">
            <div class="panel">
                @if($message=Session::get('message'))
                    <h3 class="text-success text-center"> {{$message}} </h3>
                @endif
                <div class="panel-heading">
                    <h3><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New Administrator</h3>
                </div>
                <div class="panel-body">
                    <form class="" action="{{url('/new-administrator')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="personal-info">
                            <h3 class="text-primary">Administrator personal Information</h3><hr/>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Name <sup>*</sup></label>
                                        <input type="text" name="name" class="form-control" required />
                                        <span class="text-danger">
                                            {{$errors->has('name')?$errors->first('name'):''}}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Father's Name <sup>*</sup></label>
                                        <input type="text" name="father_name" class="form-control"  required />
                                        <span class="text-danger">
                                            {{$errors->has('father_name')?$errors->first('father_name'):''}}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Mother's Name <sup>*</sup></label>
                                        <input type="text" name="mother_name" class="form-control" required />
                                        <span class="text-danger">
                                            {{$errors->has('mother_name')?$errors->first('mother_name'):''}}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Gender<sup>*</sup></label>
                                        <select name="gender" class="form-control" required>
                                            <option></option>
                                            <option value="Male">Male</option>
                                            <option value="Femal">Femal</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!--end row =====================-->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">  Blood Group </label>
                                        <input type="text" name="blood_group" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Religion <sup>*</sup></label>
                                        <select class="form-control" name="religion" required>
                                            <option></option>
                                            <option value="Islam">Islam</option>
                                            <option value="Hinduism">Hinduism</option>
                                            <option value="Buddhist">Buddhist</option>
                                            <option value="Christian">Christian</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">  Marital Status <sup>*</sup></label>
                                        <select class="form-control" name="marital_status" required>
                                            <option></option>
                                            <option value="Married">married</option>
                                            <option value="Unmarried">Unmarried</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Mobile <sup>*</sup></label>
                                        <input type="number" name="mobile" class="form-control" required />
                                        <span class="text-danger">
                                            {{$errors->has('mobile')?$errors->first('mobile'):''}}
                                        </span>
                                    </div>
                                </div>
                            </div><!--end row =====================-->
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Administrator Type <sup>*</sup></label>
                                        <select name="administrator_type" class="form-control">
                                            <option></option>
                                            <option value="Teacher">Teacher</option>
                                            <option value="Managing-Committee">Managing-Committee</option>
                                        </select>
                                        <span class="text-danger">
                                            {{$errors->has('administrator_type')?$errors->first('administrator_type'):''}}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Designation <sup>*</sup></label>
                                        {{Form::select('designation_id',$designations,[],['class'=>'form-control select','placeholder'=>'Select one','required'=>true])}}
                                        <span class="text-danger">
                                            {{$errors->has('designation_id')?$errors->first('designation_id'):''}}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Highest Education <sup>*</sup></label>
                                        <select name="education" class="form-control">
                                            <option></option>
                                            <option value="Masters">Masters</option>
                                            <option value="Graduation">Graduation</option>
                                            <option value="HSC">HSC</option>
                                            <option value="SSC">SSC</option>

                                        </select>
                                        <span class="text-danger">
                                            {{$errors->has('education')?$errors->first('education'):''}}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Email <sup>*</sup></label>
                                        <input type="email" name="email" class="form-control" required />
                                        <span class="text-danger">
                                            {{$errors->has('email')?$errors->first('email'):''}}
                                        </span>
                                    </div>
                                </div>
                            </div><!--end row =====================-->

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Date of Birth </label>
                                        <input type="text" name="date_of_birth" class="form-control datepicker" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"> Select Image <sup>*</sup></label>
                                        <input type="file" name="image" class="form-control"  accept="image/*" required />
                                        <span class="text-danger">
                                            {{$errors->has('image')?$errors->first('image'):''}}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Administrator Status <sup>*</sup></label>
                                        <select name="aministrator_status" class="form-control" required>
                                            <option></option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!--end row =====================-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Present Address </label>
                                        <textarea name="present_address" class="form-control" rows="3"></textarea>
                                        <span class="text-danger">
                                            {{$errors->has('present_address')?$errors->first('present_address'):''}}
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Permanent Address <sup>*</sup></label>
                                        <textarea name="parmanent_address" class="form-control" rows="3" required></textarea>
                                        <span class="text-danger">
                                            {{$errors->has('parmanent_address')?$errors->first('parmanent_address'):''}}
                                        </span>
                                    </div>
                                </div>
                            </div><!--end row =====================-->
                        </div><!--personal-info==========-->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label></label>
                                    <input type="submit" name="submit"  value="Save Administrator Information" class="btn btn-warning btn-lg btn-block" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
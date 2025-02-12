@extends('admin.master')

@section('title')
    College Student Info | Sholla School and College
@endsection

@section('content')
    <div class="container">
        <div class="well">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">SHOLLA HIGH SCHOOL AND COLLEGE Management</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row teacher" id="personal-info">
                        <div class="col-md-3 ">
                            <img src="{{asset($detailsCollegeIStudent->student_image)}}" class="img-responsive" alt="Sholla School & College">
                        </div>

                        <div class="col-md-6  table-responsive">
                            <table class="table  table-striped  table-hover ">
                                <tr>
                                    <td><strong><i class="fa fa-address-book" aria-hidden="true"></i> Student Name </strong></td>
                                    <td> : {{$detailsCollegeIStudent->student_name}} </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-user-o" aria-hidden="true"></i> Father Name </strong></td>
                                    <td> : {{$detailsCollegeIStudent->father_name}}</td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-user-o" aria-hidden="true"></i> Mother Name </strong></td>
                                    <td> : {{$detailsCollegeIStudent->mother_name}}</td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-mobile" aria-hidden="true"></i> Gardian Mobile </strong></td>
                                    <td> : {{$detailsCollegeIStudent->guardian_mobile}}</td>
                                </tr>

                                <tr>
                                    <td><strong><i class="fa fa-user-circle" aria-hidden="true"></i> Gender </strong></td>
                                    <td> : {{$detailsCollegeIStudent->gender}}</td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-book" aria-hidden="true"></i> Religion </strong></td>
                                    <td> : {{$detailsCollegeIStudent->religion}}</td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Birth Cirtificate Number </strong></td>
                                    <td> : {{$detailsCollegeIStudent->birth_reg_number}} </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-map-marker" aria-hidden="true"></i> Address </strong></td>
                                    <td> : {{$detailsCollegeIStudent->village}}</td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-envelope" aria-hidden="true"></i> Post Office </strong></td>
                                    <td> : {{$detailsCollegeIStudent->post_office}} </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Thana / Upajila </strong></td>
                                    <td> : {{$detailsCollegeIStudent->thana}} </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Grate Point </strong></td>
                                    <td> : {{$detailsCollegeIStudent->district}} </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Student as  </strong></td>
                                    <td> : {{$detailsCollegeIStudent->student_as}} </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-graduation-cap" aria-hidden="true"></i> Student ID </strong></td>
                                    <td> : {{$detailsCollegeIStudent->student_id}} </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Student Roll </strong></td>
                                    <td> : {{$detailsCollegeIStudent->student_roll}} </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Class Name </strong></td>
                                    <td> : {{$detailsCollegeIStudent->classOfSchool->class_name}} </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Section Name </strong></td>
                                    <td> : {{$detailsCollegeIStudent->sectionOfClass->section_name}} </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Study group </strong></td>
                                    <td> : {{$detailsCollegeIStudent->study_group}} </td>
                                </tr>
                                <tr>
                                    <td><strong><i class="fa fa-star" aria-hidden="true"></i> Session </strong></td>
                                    <td> : {{$detailsCollegeIStudent->session_year}} </td>
                                </tr>
                            </table>
                            <a href="{{url('/manage-college-student')}}" class="btn btn-warning "><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Back </a>
                        </div>

                    </div><!-- end  personal info-->

                </div><!-- end col-md-12-->
            </div><!-- end row -->

        </div>
    </div>

@endsection
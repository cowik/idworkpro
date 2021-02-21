@extends('layouts.master')

@section('page-heading')
<div class="page-heading">
    <h3>Job Seekers</h3>
</div>
<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-outline-primary"
                    data-bs-toggle="modal" data-bs-target="#primary">
                    Add Job Seeker
                </button>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="jobseekers">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="modal fade text-left" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title white" id="myModalLabel160">
                            Add Jobseeker
                        </h5>
                        <button type="button" class="close"
                            data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form action="/jobseekers/insert" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="row">
                            <h5 class="modal-title" id="myModalLabel160">
                                Personal Information
                            </h5>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label>Place Birth</label>
                                        <input type="text" class="form-control" name="placebirth">
                                    </div>
                                    <div class="form-group">
                                        <label>ID Number</label>
                                        <input type="text" class="form-control" name="idnumber">
                                    </div>
                                    <div class="form-group">
                                        <label>Profile Photo</label>
                                        <input class="form-control" type="file" name="profilephoto">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" name="phonenumber"> 
                                    </div>
                                    <div class="form-group">
                                        <label>Religion</label>
                                        <select class="form-select" name="religion">
                                            <option>Select</option>
                                            <option>Islam</option>
                                            <option>Kristen</option>
                                            <option>Katholik</option>
                                            <option>Hindu</option>
                                            <option>Budah</option>
                                            <option>Konghucu</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Date Birth</label>
                                        <input type="date" class="form-control" name="datebirth">
                                    </div>
                                    <div class="form-group">
                                        <label>ID Photo</label>
                                        <input class="form-control" type="file" name="idphoto">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Current Address</label>
                                        <textarea class="form-control" name="currentaddress" rows="3"></textarea>
                                    </div>
                                </div>
                                <h5 class="modal-title" id="myModalLabel160">
                                    Education Information
                                </h5>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Latest Degree</label>
                                        <input type="text" class="form-control" name="latestdegree">
                                    </div>
                                    <div class="form-group">
                                        <label>Contract Type</label>
                                        <input type="text" class="form-control" name="contracttype">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Job Experience</label>
                                        <textarea class="form-control" name="jobexperience" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Latest Degree Cert</label>
                                        <input type="text" class="form-control" name="latestdegreecert">
                                    </div>
                                    <div class="form-group">
                                        <label>Available Date</label>
                                        <input type="date" class="form-control" name="availabledate">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Job Interest</label>
                                        <textarea class="form-control" name="jobinterest" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" class="btn btn-primary ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Add</span>
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

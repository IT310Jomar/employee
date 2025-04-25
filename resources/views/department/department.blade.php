@extends('layouts.app')
@include('modals.addDepartment')

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0 fs-5">Department List</h3>
                            </div>
                            <div class="text-right">
                                <button type="button" class="btn btn-primary addDept">Add Department</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="table-responsive">
                            <table class="table dt-responsive nowrap w-100 align-items-center" id="employeeTable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th class="text-center">Department</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id='departmentTableBody'>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

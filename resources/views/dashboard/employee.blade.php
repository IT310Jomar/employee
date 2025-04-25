@extends('layouts.app')

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Employee List</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="table-responsive">
                            <table class="table dt-responsive nowrap w-100 align-items-center" id="employeeTable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>User Name</th>
                                        <th>Department ID</th>
                                        <th>Location ID</th>
                                        <th>Employment Status</th>
                                        <th>Employment Type</th>
                                        <th>Title</th>
                                        <th>Payroll Type</th>
                                    </tr>
                                </thead>
                                <tbody id="employeeTableBody">
                                    {{-- @foreach($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->id }}</td>
                                        <td>{{ $employee->user->name ?? 'N/A' }}</td>
                                        <td>{{ $employee->department_id }}</td>
                                        <td>{{ $employee->location_id }}</td>
                                        <td>{{ $employee->employment_status_id }}</td>
                                        <td>{{ $employee->employment_types_id }}</td>
                                        <td>{{ $employee->title }}</td>
                                        <td>{{ $employee->payroll_type }}</td>
                                    </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

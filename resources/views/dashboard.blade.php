@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>
                    Dashboard</strong></div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
  
                    <div class="row">
                        <div class="col">
                            <button class="btn">
                                <a href="{{ route('employee.create') }}">Add Employee</a>
                            </button>
                        </div>
                        <div class="col">
                            <button class="btn">
                                <a href="{{ route('department.create') }}">Add Department</a>
                            </button>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <table>
                                <tr>
                                    <th>No</th>
                                    <th>Employee name</th>
                                    <th>Department</th>
                                    <th>Age</th>
                                    <th>Salary</th>
                                </tr>
                                <tbody>
                                    <tr>
                                        @foreach ($employee as $emp)
                                            <td>{{$emp->id}}</td>
                                            <td>{{$emp->emp_name}}</td>
                                            <td>{{$emp->department}}</td>
                                            <td>{{$emp->age}}</td>
                                            <td>{{$emp->salary}}</td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layout')
  
@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Department</div>
                    <div class="card-body">

                        <form action="{{ route('department.store') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="dept_name" class="col-md-4 col-form-label text-md-right">Employee name
                                    </label>
                                <div class="col-md-6">
                                    <input type="text" id="dept_name" class="form-control" name="dept_name"
                                        >
                                    @if ($errors->has('dept_name'))
                                        <span class="text-danger">{{ $errors->first('dept_name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <br>    
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

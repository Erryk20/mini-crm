@extends('layouts.crm')

@section('content')
    <section class="content-header">
        <h1>
            Employees
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::open(['route' => 'employees.store']) !!}

                    @include('employees.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

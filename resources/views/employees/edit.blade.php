@extends('layouts.crm')

@section('content')
    <section class="content-header">
        <h1>
            Employee
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               {!! Form::model($employees, ['route' => ['employees.update', $employees->id], 'method' => 'patch']) !!}

                    @include('employees.fields')

               {!! Form::close() !!}
            </div>
       </div>
   </div>
@endsection
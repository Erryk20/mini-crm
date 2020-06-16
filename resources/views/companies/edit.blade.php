@extends('layouts.crm')

@section('content')
    <section class="content-header">
        <h1>
            Company
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::model($companies, ['route' => ['companies.update', $companies->id], 'enctype'=>"multipart/form-data", 'method' => 'patch']) !!}

                    @include('companies.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
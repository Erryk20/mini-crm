@extends('layouts.crm')

@section('content')
    <section class="content-header">
        <h1>
            Companies
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::open(['route' => 'companies.store', 'enctype'=>"multipart/form-data"]) !!}

                    @include('companies.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

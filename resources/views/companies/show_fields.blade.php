<!-- Logo Field -->
<div class="form-group col-sm-12">
    {!! Form::label('logo', 'Logo:') !!}
    <img src="{{ asset('storage/'. $companies->logo) }}" style="width: 100px;">
</div>
<!-- Email Field -->
<div class="form-group col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <b>{{ $companies->email }}</b>
</div>


<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <b>{{ $companies->name }}</b>
</div>

<!-- Website Field -->
<div class="form-group col-sm-12">
    {!! Form::label('website', 'Website:') !!}
    <b>{{ $companies->website }}</b>
</div>


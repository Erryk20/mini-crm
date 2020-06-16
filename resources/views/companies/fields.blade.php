<div class="row">
    <!-- Name Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Email Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Website Field -->
    <div class="form-group col-sm-4">
        {!! Form::label('website', 'Website:') !!}
        {!! Form::text('website', null, ['class' => 'form-control']) !!}
    </div>

</div>

<div class="row">
    <!-- Logo Field -->
        {!! csrf_field() !!}
        <div class="form-group col-sm-12" >
            {!! Form::label('logo', 'Logo:') !!}
            <div class="file-loading">
                <input id="logo" type="file" name="logo" accept="image/*">
            </div>
        </div>
</div>

<div class="row">
    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('companies.index') }}" class="btn btn-default">Cancel</a>
    </div>
</div>

@push('lines-scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $("#logo").fileinput({
                // uploadUrl: "/image-view",
                uploadExtraData: function () {
                    return {
                        _token: $("input[name='_token']").val(),
                    };
                },
                allowedFileTypes: ['image'],
                allowedFileExtensions: ['jpg', 'png', 'gif'],
                showRemove: false,
                showUpload : false,
                fileActionSettings: {
                    "showDrag": false,
                    "showUpload": false,
                    "showRemove": false
                },
                initialPreviewAsData: true,
                initialPreviewFileType: 'image',
                overwriteInitial: false,

                @if ($companies->logo ?? false)
                    initialPreview: ['{{asset('storage/'. $companies->logo)}}'],
                @else
                    initialPreview: false,
                @endif


                slugCallback: function (filename) {
                    return filename.replace('(', '_').replace(']', '_');
                }
            })
        });
    </script>
@endpush

@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>
@endpush

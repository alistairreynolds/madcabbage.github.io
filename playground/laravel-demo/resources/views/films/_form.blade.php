<div class="form-group">
    {!! Form::label('name', 'Film Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('released', 'Year Released:') !!}
    {!! Form::selectRange('released', '1800', (date('Y')) + 1, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('imdb', 'IMDB Link:') !!}
    {!! Form::text('imdb', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('trailer', 'Trailer link:') !!}
    {!! Form::text('trailer', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('summary', 'Summary:') !!}
    {!! Form::text('summary', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('summary_full', 'Synposis:') !!}
    {!! Form::textarea('summary_full', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image', ['class' => 'form-control']) !!}
    <br/>
    Or enter a URL
    {!! Form::url('image-url', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('genre_list', 'Genres:') !!}
            <!-- need to set genres to an array, so adding [] at the end of the control name -->
    {!! Form::select('genre_list[]', $genres, null, ['class' => 'form-control',  'multiple', 'id' => 'genre_list']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

@section('footer')
    <script>
        $('#genre_list').select2({
            placeholder: 'Add some genres'
        });
    </script>
@endsection

@if ($errors->any())

    <ul class="alert alert-danger">Some errors occured

        @foreach($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

    </ul>

@endif
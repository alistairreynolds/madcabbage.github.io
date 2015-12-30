@if (Session::has('flash_message'))

    <!-- echoing out a flash message if it exists -->
    <div class="
				alert
				alert-{{ Session::has('flash_message_class') ? Session::get('flash_message_class') : 'success' }}">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('flash_message') }}
    </div>

@endif
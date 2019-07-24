@foreach (['info', 'danger', 'warning', 'success'] as $key)
    @if (Session::has($key))
        <div class="flash-message">
            <div class="alert alert-{{ $key }}">
                {{ Session::get($key) }}
            </div>
        </div>
    @endif
@endforeach
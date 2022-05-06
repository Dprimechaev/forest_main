@foreach($handbooks as $handbook)
    {{ $handbook->key }} // {{ $handbook->value }}
    <br>
@endforeach

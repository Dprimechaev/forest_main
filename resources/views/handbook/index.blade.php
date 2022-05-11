@foreach($handbooks as $handbook)

    {{ $loop->iteration }} // {{ $handbook->key }} // {{ $handbook->value }}
    <br>
@endforeach
<form action="{{ route('handbook.store') }}" method="post">
    @csrf
    <input type="text" name="key">
    <input type="text" name="value">
    <button type="submit">Сохранить</button>
</form>

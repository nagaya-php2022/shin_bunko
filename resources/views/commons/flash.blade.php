<link rel="stylesheet" href="/css/flash-style.css">

@if ($errors->count())
<ul class="alart">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
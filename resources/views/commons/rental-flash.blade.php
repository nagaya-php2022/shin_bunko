<link rel="stylesheet" href="/css/flash-style.css">

@if (isset($rentalErrors))
    <ul class="alart">
        @foreach ($rentalErrors as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
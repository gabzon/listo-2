@if ($errors->any())
<div class="kirby-errors">
    <ul>
        @foreach ($errors->all() as $er)
        <li>{{ $er }}</li>
        @endforeach
    </ul>
</div>
@endif
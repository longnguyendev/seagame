<h1>Chi tiết mùa giải {{ $season->year }}</h1>

@foreach ($season->countries as $country)
<h2>Quốc gia: {{ $country->name }}</h2>
<ul>
    <li>Huy chương và số lượng:</li>
    <ul>
        @foreach ($country->medals as $medal)
        <li>{{ $medal->name }}: {{ $medal->pivot->total }}</li>
        @endforeach
    </ul>
</ul>
@endforeach
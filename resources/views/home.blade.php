@extends('layouts.app')

@section('title','Home')

@section('content')
    <div>
        {{ $nama }}

        <ul>
            @foreach($mapel as $item)
                <li>{{ $item['nama'] }} : {{ $item['guru'] }}</li>
            @endforeach
        </ul>

        @if($nilai > 70)
            <p>Nilai Bagus</p>
        @else
            <p>Nilai Jelek</p>
        @endif
    </div>
@endsection

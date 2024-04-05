@extends('home.master')

@section('content')

<div class="title-section">
    <h1>Academic</h1>
    <h2>File Compendium</h2>
</div>
</div>
{{-- arrow head here --}}

<div class="card-list" style="background-color: #f0f0f0;">
    @foreach ($processes as $process)
    <a href="{{route('home.steps', $process->id)}}" class="card-item">
        <img src="{{ asset('images/pdf.png') }}" alt="Classroom Management">
        <span class="developer">I</span>
        <h3>{{$process->title}}</h3>
        <div class="arrow">
            <i class="fas fa-arrow-right card-icon"></i>
        </div>
    </a>
    @endforeach
</div>

@endsection

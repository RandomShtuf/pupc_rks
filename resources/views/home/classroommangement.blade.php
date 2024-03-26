@extends('home.master')

@section('content')

  <div class="title-section">
    <h1>Classroom Management</h1>
    <h2>File Compendium</h2>
  </div>
</div>

{{-- arrow head here --}}

<div class="card-list" style="background-color: #f0f0f0;">
  <a href="{{url("/file")}}" class="card-item">
    <img src="{{ asset('img/pdf.png') }}" alt="Classroom Management">
      <span class="developer">I</span>
      <h3>Teaching Assignment</h3>
      <div class="arrow">
          <i class="fas fa-arrow-right card-icon"></i>
      </div>
  </a>
  <a href="#" class="card-item">
    <img src="{{ asset('img/pdf.png') }}" alt="Classroom Management">
      <span class="designer">II</span>
      <h3>Syllabus</h3>
      <div class="arrow">
          <i class="fas fa-arrow-right card-icon"></i>
      </div>
  </a>
  <a href="#" class="card-item">
    <img src="{{ asset('img/pdf.png') }}" alt="Classroom Management">
      <span class="editor">III</span>
      <h3>Class List</h3>
      <div class="arrow">
          <i class="fas fa-arrow-right card-icon"></i>
      </div>
  </a>
  <a href="#" class="card-item">
    <img src="{{ asset('img/pdf.png') }}" alt="Classroom Management">
      <span class="developer">IV</span>
      <h3>Registration & Certification</h3>
      <div class="arrow">
          <i class="fas fa-arrow-right card-icon"></i>
      </div>
  </a>
  <a href="#" class="card-item">
    <img src="{{ asset('img/pdf.png') }}" alt="Classroom Management">
      <span class="designer">V</span>
      <h3>Instructional Materials</h3>
      <div class="arrow">
          <i class="fas fa-arrow-right card-icon"></i>
      </div>
  </a>
  <a href="#" class="card-item">
    <img src="{{ asset('img/pdf.png') }}" alt="Classroom Management">
      <span class="editor">VI</span>
      <h3>Class Record</h3>
      <div class="arrow">
          <i class="fas fa-arrow-right card-icon"></i>
      </div>
  </a>
  <a href="#" class="card-item">
    <img src="{{ asset('img/pdf.png') }}" alt="Classroom Management">
      <span class="developer">VII</span>
      <h3>Grade Sheet</h3>
      <div class="arrow">
          <i class="fas fa-arrow-right card-icon"></i>
      </div>
  </a>
  <a href="#" class="card-item">
    <img src="{{ asset('img/pdf.png') }}" alt="Classroom Management">
      <span class="designer">VIII</span>
      <h3>Faculty Evaluation</h3>
      <div class="arrow">
          <i class="fas fa-arrow-right card-icon"></i>
      </div>
  </a>
</div>

@endsection

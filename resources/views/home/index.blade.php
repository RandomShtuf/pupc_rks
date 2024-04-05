@extends('home.master')

@section('content')

<div class="title-section">
    <h1>POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</h1>
    <h2>Calauan Campus</h2>
</div>
</div>
{{-- arrow head here --}}
<div class="image-block" style="width: 100%;">
    <img src="{{ asset('images/iso.png') }}" alt="Classroom Management">
</div>
<section class="about-us">
    <div class="about">
        <img src="{{ asset('home/images/queriar.jpg') }}" alt="Director's image" class="pic">
        <div class="text">
            <h2>Message from the director</h2>
            <h5>Arlene R. Queri & <span>Campus Director</span></h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita natus ad sed harum itaque ullam enim
                quas, veniam accusantium, quia animi id eos adipisci iusto molestias asperiores explicabo cum vero atque
                amet corporis! Soluta illum facere consequuntur magni. Ullam dolorem repudiandae cumque voluptate
                consequatur consectetur, eos provident necessitatibus reiciendis corrupti!</p>
            <div class="data">
                <!-- <a href="#" class="hire">Hire Me</a>-->
            </div>
        </div>
    </div>
</section>
</body>

</html>

@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUP - Calauan Branch</title>
    <link rel="stylesheet" href="{{ asset('home/css/display.css') }}">

</head>
<style>
    .card {
        display: none;
        position: fixed;
        top: 1%;
        left: 55%;
        /* Adjust the left property to move the card to the right */
        background-color: white;
        border: 1px solid #ccc;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 5px;
        z-index: 9999;
    }


    .card-content {
        text-align: center;
    }

    .image-container,
    .file-container {
        max-width: 100%;
        max-height: 100%;
        overflow: hidden;
        display: flex;
        /* Use flexbox layout */
        justify-content: center;
        /* Center content horizontally */
        align-items: center;
        /* Center content vertically */
    }

    .image-container img,
    .file-container embed {
        width: 100%;
        /* Ensure the image/file takes up the full width of the container */
        height: auto;
        /* Maintain aspect ratio */
    }

    .close {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }

    .close:hover {
        color: red;
    }

    .file-container {
        width: 100%;
        /* Ensure the file takes up the full width of the container */
        height: 300px;
        /* Set a custom height for the file */
    }
</style>

<body>
    <div class="pup">
        <img src="{{ asset('img/pup.jpg') }}" alt="Classroom Management" style="width: 100%; height: 100%; " />
    </div>
    <div class="container">
        <nav>
            <ul class="mcd-menu">
                <li>
                    <a href="{{route('home.processes')}}">
                        <i class="fa fa-home"></i>
                        <strong>GO BACK</strong>
                        <small> </small>
                    </a>
                </li>
                @foreach ($processes as $process)
                <li>
                    <a href="" class="active">
                        <i class="fa fa-edit"></i>
                        <strong>{{$process->title}}</strong>
                        <small>HOVER FOR SUPPORTING FILES</small>
                    </a>
                </li>

                @foreach ($process->steps as $step)
                <li>
                    <a href="">
                        <i class="fa fa-gift"></i>
                        <strong>STEP {{$step->id}} </strong>
                        <small>{{$step->displayTitle()}}</small>

                    </a>
                    <ul>
                        <li><a href="#"><i class="fa fa-globe"></i>IMAGE</a>
                            <ul>
                                <li>
                                    <a href="#" id="img1-link" class="image-link"><i class="fa fa-female"></i>img1</a>
                                    <img src="{{ asset('img/iso.png') }}" alt="Image" class="image-preview"
                                        style="display: none;">
                                </li>
                                <li>
                                    <a href="#" id="img2-link" class="image-link"><i class="fa fa-female"></i>img2</a>
                                    <img src="{{ asset('img/queriar.jpg') }}" alt="Image" class="image-preview"
                                        style="display: none;">
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-group"></i>DOCUMENTS</a>
                            <ul>
                                <li>
                                    <a href="#" id="student-file-link" class="file-link"><i
                                            class="fa fa-female"></i>Student file</a>
                                    <embed src="{{ asset('pdf/test.pdf') }}" type="application/pdf" class="file-preview"
                                        style="display: none; width: 100%; height: 100%;">
                                </li>
                                <li>
                                    <a href="#" id="process-file-link" class="file-link"><i
                                            class="fa fa-female"></i>Process file</a>
                                    <embed src="{{ asset('path/to/process_file.pdf') }}" type="application/pdf"
                                        class="file-preview" style="display: none; width: 100%; height: 100%;">
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-trophy"></i>PROCESS DECRIPTION</a>
                            <ul>
                                <li><a href="#"><i class="fa fa-female"></i>Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Maxime mollitia,
                                        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                                        numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                                        optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                                        obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                                        nihil</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                @endforeach

                @endforeach

                <li class="float">
                    <a class="search">
                        <input type="text" value="search ...">
                        <button><i class="fa fa-search"></i></button>
                    </a>
                    <a href="" class="search-mobile">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="card" id="card">
        <span class="close" id="close">&times;</span>
        <div class="card-content">
            <div class="image-container">
                <img src="#" alt="Image" id="card-image">
            </div>
            <embed src="#" type="application/pdf" id="card-pdf" class="file-container"
                style="width: 600px; height: 600px;">
        </div>
    </div>


</body>

</html>
<script>
    document.querySelectorAll('.image-link').forEach(function(link) {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        var imageSrc = this.nextElementSibling.src;
        showCard(imageSrc, 'image');
    });
});

document.querySelectorAll('.file-link').forEach(function(link) {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        var fileSrc = this.nextElementSibling.src;
        showCard(fileSrc, 'file');
    });
});

document.getElementById('close').addEventListener('click', function() {
    document.getElementById('card').style.display = 'none';
});

function showCard(src, type) {
    var card = document.getElementById('card');
    var cardContent = document.querySelector('.card-content');
    var cardImage = document.getElementById('card-image');
    var cardPdf = document.getElementById('card-pdf');

    if (type === 'image') {
        cardPdf.style.display = 'none';
        cardImage.style.display = 'block';
        cardImage.src = src;
    } else if (type === 'file') {
        cardImage.style.display = 'none';
        cardPdf.style.display = 'block';
        cardPdf.src = src;
    }

    card.style.display = 'block';
}

</script>

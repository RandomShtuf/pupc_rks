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
        left: 39%;
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
        max-height: 100%;
        overflow: hidden;
        display: flex;
        /* Use flexbox layout */
        justify-content: center;
        /* Center content horizontally */
        align-items: center;
        /* Center content vertically */
        width: 770px !important;
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
    p {
        text-align: justify;
    }
</style>

<body>

    <div class="pup">
        <img src="{{ asset('images/pup.jpg') }}" alt="Classroom Management" style="width: 100%; height: 100%; " />
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

                        @foreach ($process->steps as $step)
                            <li>
                                <a href="">
                                    <i class="fa fa-gift"></i>
                                    <strong>STEP {{$step->id}} </strong>
                                    <small>{{$step->displayTitle()}}</small>
                                </a>
                                <ul>
                                    <li>
                                        <h4>Attachments</h4>
                                        @foreach ($step->attachments as $attachment)
                                            <p><a href="{{ asset('attachments/' . $attachment->file) }}" data-src="{{ asset('attachments/' . $attachment->file) }}" target="_blank" class="file-link">{{$attachment->file}}</a></p>
                                        @endforeach
                                    </li>
                                    <li>
                                        <h4>Description</h4>
                                        <p>{{$step->description}}</p>
                                    </li>
                                    <li>
                                        <h4>Note</h4>
                                        <p>{{$attachment->note}}</p>
                                    </li>
                                </ul>


                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach



            </ul>
        </nav>
    </div>

    <div class="card" id="card">
        <span class="close" id="close">&times;</span>
        <div class="card-content">
            <div class="image-container">
                <img src="#" alt="Image" id="card-image">
            </div>
            <embed src="#" type="application/pdf" id="card-pdf" class="file-container" style="width: 600px; height: 600px;">
        </div>
    </div>

    <script>
        document.querySelectorAll('.file-link').forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                var fileSrc = this.getAttribute('data-src');
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

<div class=""></div>

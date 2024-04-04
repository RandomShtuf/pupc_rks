<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($attachments as $attachment)
    <div class="card">
        <div class="card-content">
            <iframe src="{{ asset('attachments/' . $attachment->processStepAttachment->file) }} " target="_blank" width="100%"
                height="610"></iframe>
        </div>
    </div>
    @endforeach
</body>

</html>

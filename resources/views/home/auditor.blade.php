<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- App Css-->
    <link href="{{ asset('admin_panel/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_panel/libs/twitter-bootstrap-wizard/prettify.css') }}" id="app-style" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin_panel/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
</head>

<body>
    {{-- @foreach ($attachments as $attachment)
    <div class="card">
        <div class="card-content">
            <iframe src="{{ asset('attachments/' . $attachment->processStepAttachment->file) }} " target="_blank"
                width="70%" height="610"></iframe>
        </div>
    </div>
    @endforeach --}}
    <br>
    <div class="container-fluid">
        <div class="col-xl-12">
            <div class="card" style="border-radius: 20px">
                <div class="card-body" style="height: 660px; overflow-y: auto;">

                    <h4 class="card-title">Attachments</h4>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                @foreach ($attachments as $index => $attachment)
                                <a class="mb-2 nav-link{{ $index === 0 ? ' active' : '' }}" href="javascript:void(0);"
                                    onclick="loadAttachment('{{ asset('attachments/' . $attachment->processStepAttachment->file) }}')">
                                    {{ $index + 1 }}. {{$attachment->displayTitle()}}
                                </a>
                                @endforeach

                            </div>
                        </div>

                        {{-- VIEWER --}}
                        <div class="col-md-9" id="attachmentViewer">

                        </div>

                        <div class="col-md-9">
                            <div class="mt-4 tab-content text-muted mt-md-0" id="attachment-sections">
                                @foreach ($attachments as $index => $attachment)
                                <div class="tab-pane{{ $index === 0 ? ' active' : '' }} fade show attachment-section"
                                    id="attachment-section-{{ $attachment->id }}" role="tabpanel"
                                    aria-labelledby="attachment-{{ $attachment->id }}">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript to handle attachment preview and dynamic loading -->

    <script>
        function loadAttachment(src) {
            // Create an iframe element
            var iframe = document.createElement('iframe');
            iframe.setAttribute('src', src);
            iframe.setAttribute('width', '100%');
            iframe.setAttribute('height', '610');
            iframe.setAttribute('frameborder', '0');

            // Clear any existing content in attachmentViewer div
            var attachmentViewer = document.getElementById('attachmentViewer');
            attachmentViewer.innerHTML = '';

            // Append the iframe to attachmentViewer div
            attachmentViewer.appendChild(iframe);
        }
    </script>
</body>

</html>

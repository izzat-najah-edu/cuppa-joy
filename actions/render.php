<?php namespace html;

function imageOverlay(string $backgroundImageURL, string $title, string $content = ""): string {
    return <<<OVERLAY
        <div class="image-overlay d-flex align-items-center justify-content-center text-center mb-5"
             style="background-image: url($backgroundImageURL);">
             <div class="container-fluid">
                 <h2 class="card-title display-2 font-title mb-5">$title</h2>
                 $content
             </div>
        </div>
    OVERLAY;
}

function gallery(string $directory): string {
    $directory = rtrim($directory, "/") . "/";
    $gallery = array_diff(scandir($directory), array(".", ".."));

    $html = '<div class="row row-cols-1 row-cols-md-3 g-4">';
    foreach ($gallery as $image) {
        $sanitizedImage = htmlspecialchars($image, ENT_QUOTES, 'UTF-8');
        $html .= <<<IMAGE
            <div class="col">
                <div class="card">
                    <img src="$directory$image" alt="$sanitizedImage"
                         class="card-img-top border border-dark rounded gallery-image">
                </div>
            </div>
        IMAGE;
    }
    return $html . '</div>';
}

function alert(string $message, string $strong = ""): string {
    return <<<ALERT
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>$strong</strong>$message
        </div>
    ALERT;
}

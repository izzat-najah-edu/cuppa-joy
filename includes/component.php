<?php namespace html;

function renderNavbar(): void {
    require_once "components/navbar.php";
}

function renderFooter(): void {
    require_once "components/footer.php";
}

function imageOverlay(string $backgroundImageURL, string $title, string $content = ""): string {
    return <<<OVERLAY
        <div class="image-overlay d-flex align-items-center justify-content-center text-center mb-5"
             style="background-image: url($backgroundImageURL);">
            <h2 class="card-title display-2 font-title">$title</h2>
            $content
        </div>
    OVERLAY;
}

function alert(string $message, string $strong = ""): string {
    return <<<ALERT
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>$strong</strong>$message
        </div>
    ALERT;
}

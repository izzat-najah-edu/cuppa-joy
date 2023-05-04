<?php namespace html;

function renderNavbar(): void {
    require_once "components/navbar.php";
}

function renderFooter(): void {
    require_once "components/footer.php";
}

function imageOverlay($backgroundImage, $title, $height = "40vh"): string {
    return <<<OVERLAY
        <div class="image-overlay d-flex align-items-center justify-content-center text-center"
             style="background-image: url($backgroundImage); height: $height;">
            <h2 class="card-title display-2 font-title">$title</h2>
        </div>
    OVERLAY;
}

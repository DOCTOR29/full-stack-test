<?php
require_once 'config.php';
// Fetch all sections grouped by type
$types = ['learning', 'technology', 'communication'];
$sections = [];
foreach ($types as $type) {
    $stmt = $pdo->prepare('SELECT * FROM sections WHERE type = ? ORDER BY id ASC');
    $stmt->execute([$type]);
    $sections[$type] = $stmt->fetchAll();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DelphianLogic in Action</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container-fluid" id="main-content">
        <!-- Main content will go here -->
    </div>
    <div class="container py-5 d-none d-md-block">
        <h2 class="text-center mb-2">DelphianLogic in Action</h2>
        <p class="text-center mb-4 small text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo</p>
        <div class="row justify-content-center align-items-stretch" style="min-height: 500px;">
            <!-- Column 1: Tabs -->
            <div class="col-md-3">
                <div class="nav flex-column nav-pills gap-3" id="dlTab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active d-flex align-items-center" id="tab-learning" data-bs-toggle="pill" data-bs-target="#tabContent-learning" type="button" role="tab" aria-controls="tabContent-learning" aria-selected="true">
                        <img src="files/images/DL-learning.svg" alt="Learning" class="me-2" width="32"> Learning
                    </button>
                    <button class="nav-link d-flex align-items-center" id="tab-technology" data-bs-toggle="pill" data-bs-target="#tabContent-technology" type="button" role="tab" aria-controls="tabContent-technology" aria-selected="false">
                        <img src="files/images/DL-technology.svg" alt="Technology" class="me-2" width="32"> Technology
                    </button>
                    <button class="nav-link d-flex align-items-center" id="tab-communication" data-bs-toggle="pill" data-bs-target="#tabContent-communication" type="button" role="tab" aria-controls="tabContent-communication" aria-selected="false">
                        <img src="files/images/DL-communication.svg" alt="Communication" class="me-2" width="32"> Communication
                    </button>
                </div>
            </div>
            <!-- Column 2: Slider -->
            <div class="col-md-5">
                <div class="tab-content h-100" id="dlTabContent">
                    <!-- Learning Tab Pane -->
                    <div class="tab-pane fade show active h-100" id="tabContent-learning" role="tabpanel" aria-labelledby="tab-learning">
                        <div id="carouselLearningWeb" class="carousel slide h-100" data-bs-ride="carousel">
                            <div class="carousel-inner h-100">
                                <?php foreach ($sections['learning'] as $i => $slide): ?>
                                <div class="carousel-item <?= $i === 0 ? 'active' : '' ?> h-100">
                                    <div class="dl-web-slide d-flex flex-column justify-content-center align-items-center h-100">
                                        <span class="badge bg-info mb-2"><?= htmlspecialchars($slide['badge']) ?></span>
                                        <h3 class="text-white text-center"><?= htmlspecialchars($slide['title']) ?></h3>
                                        <a href="<?= htmlspecialchars($slide['link']) ?>" class="btn btn-link text-white">Learn More <img src="files/images/arrow-right.svg" alt="arrow"></a>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="carousel-indicators">
                                <?php foreach ($sections['learning'] as $i => $slide): ?>
                                <button type="button" data-bs-target="#carouselLearningWeb" data-bs-slide-to="<?= $i ?>" class="<?= $i === 0 ? 'active' : '' ?>" aria-current="<?= $i === 0 ? 'true' : 'false' ?>" aria-label="Slide <?= $i+1 ?>"></button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <!-- Technology Tab Pane -->
                    <div class="tab-pane fade h-100" id="tabContent-technology" role="tabpanel" aria-labelledby="tab-technology">
                        <div id="carouselTechnologyWeb" class="carousel slide h-100" data-bs-ride="carousel">
                            <div class="carousel-inner h-100">
                                <?php foreach ($sections['technology'] as $i => $slide): ?>
                                <div class="carousel-item <?= $i === 0 ? 'active' : '' ?> h-100">
                                    <div class="dl-web-slide d-flex flex-column justify-content-center align-items-center h-100">
                                        <span class="badge bg-info mb-2"><?= htmlspecialchars($slide['badge']) ?></span>
                                        <h3 class="text-white text-center"><?= htmlspecialchars($slide['title']) ?></h3>
                                        <a href="<?= htmlspecialchars($slide['link']) ?>" class="btn btn-link text-white">Learn More <img src="files/images/arrow-right.svg" alt="arrow"></a>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="carousel-indicators">
                                <?php foreach ($sections['technology'] as $i => $slide): ?>
                                <button type="button" data-bs-target="#carouselTechnologyWeb" data-bs-slide-to="<?= $i ?>" class="<?= $i === 0 ? 'active' : '' ?>" aria-current="<?= $i === 0 ? 'true' : 'false' ?>" aria-label="Slide <?= $i+1 ?>"></button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <!-- Communication Tab Pane -->
                    <div class="tab-pane fade h-100" id="tabContent-communication" role="tabpanel" aria-labelledby="tab-communication">
                        <div id="carouselCommunicationWeb" class="carousel slide h-100" data-bs-ride="carousel">
                            <div class="carousel-inner h-100">
                                <?php foreach ($sections['communication'] as $i => $slide): ?>
                                <div class="carousel-item <?= $i === 0 ? 'active' : '' ?> h-100">
                                    <div class="dl-web-slide d-flex flex-column justify-content-center align-items-center h-100">
                                        <span class="badge bg-info mb-2"><?= htmlspecialchars($slide['badge']) ?></span>
                                        <h3 class="text-white text-center"><?= htmlspecialchars($slide['title']) ?></h3>
                                        <a href="<?= htmlspecialchars($slide['link']) ?>" class="btn btn-link text-white">Learn More <img src="files/images/arrow-right.svg" alt="arrow"></a>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="carousel-indicators">
                                <?php foreach ($sections['communication'] as $i => $slide): ?>
                                <button type="button" data-bs-target="#carouselCommunicationWeb" data-bs-slide-to="<?= $i ?>" class="<?= $i === 0 ? 'active' : '' ?>" aria-current="<?= $i === 0 ? 'true' : 'false' ?>" aria-label="Slide <?= $i+1 ?>"></button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column 3: 1:1 Image -->
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <div class="dl-web-image-wrapper ratio ratio-1x1 w-100" style="max-width: 350px;">
                    <img src="<?php echo isset($sections['learning'][0]['image']) ? htmlspecialchars($sections['learning'][0]['image']) : 'files/images/DL-Learning-1.jpg'; ?>" alt="Learning Image" class="img-fluid rounded dl-web-image" id="dlWebMainImage">
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4 d-block d-md-none">
        <h2 class="text-center mb-2">DelphianLogic in Action</h2>
        <p class="text-center mb-4 small text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo</p>
        <div class="accordion" id="dlAccordion">
            <!-- Learning Accordion Item -->
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="headingLearning">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLearning" aria-expanded="true" aria-controls="collapseLearning">
                        <img src="files/images/DL-learning.svg" alt="Learning" class="me-2" width="32"> Learning
                    </button>
                </h2>
                <div id="collapseLearning" class="accordion-collapse collapse show" aria-labelledby="headingLearning" data-bs-parent="#dlAccordion">
                    <div class="accordion-body p-0">
                        <div id="carouselLearning" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php foreach ($sections['learning'] as $i => $slide): ?>
                                <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
                                    <div class="dl-slide" style="background-image: url('<?= htmlspecialchars($slide['image']) ?>');">
                                        <div class="dl-slide-content text-white text-center p-4">
                                            <span class="badge bg-info mb-2"><?= htmlspecialchars($slide['badge']) ?></span>
                                            <h4><?= htmlspecialchars($slide['title']) ?></h4>
                                            <a href="<?= htmlspecialchars($slide['link']) ?>" class="btn btn-link text-white">Learn More <img src="files/images/arrow-right.svg" alt="arrow"></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="carousel-indicators">
                                <?php foreach ($sections['learning'] as $i => $slide): ?>
                                <button type="button" data-bs-target="#carouselLearning" data-bs-slide-to="<?= $i ?>" class="<?= $i === 0 ? 'active' : '' ?>" aria-current="<?= $i === 0 ? 'true' : 'false' ?>" aria-label="Slide <?= $i+1 ?>"></button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Technology Accordion Item -->
            <div class="accordion-item mb-3">
                <h2 class="accordion-header" id="headingTechnology">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTechnology" aria-expanded="false" aria-controls="collapseTechnology">
                        <img src="files/images/DL-technology.svg" alt="Technology" class="me-2" width="32"> Technology
                    </button>
                </h2>
                <div id="collapseTechnology" class="accordion-collapse collapse" aria-labelledby="headingTechnology" data-bs-parent="#dlAccordion">
                    <div class="accordion-body p-0">
                        <div id="carouselTechnology" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php foreach ($sections['technology'] as $i => $slide): ?>
                                <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
                                    <div class="dl-slide" style="background-image: url('<?= htmlspecialchars($slide['image']) ?>');">
                                        <div class="dl-slide-content text-white text-center p-4">
                                            <span class="badge bg-info mb-2"><?= htmlspecialchars($slide['badge']) ?></span>
                                            <h4><?= htmlspecialchars($slide['title']) ?></h4>
                                            <a href="<?= htmlspecialchars($slide['link']) ?>" class="btn btn-link text-white">Learn More <img src="files/images/arrow-right.svg" alt="arrow"></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="carousel-indicators">
                                <?php foreach ($sections['technology'] as $i => $slide): ?>
                                <button type="button" data-bs-target="#carouselTechnology" data-bs-slide-to="<?= $i ?>" class="<?= $i === 0 ? 'active' : '' ?>" aria-current="<?= $i === 0 ? 'true' : 'false' ?>" aria-label="Slide <?= $i+1 ?>"></button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Communication Accordion Item -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingCommunication">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCommunication" aria-expanded="false" aria-controls="collapseCommunication">
                        <img src="files/images/DL-communication.svg" alt="Communication" class="me-2" width="32"> Communication
                    </button>
                </h2>
                <div id="collapseCommunication" class="accordion-collapse collapse" aria-labelledby="headingCommunication" data-bs-parent="#dlAccordion">
                    <div class="accordion-body p-0">
                        <div id="carouselCommunication" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php foreach ($sections['communication'] as $i => $slide): ?>
                                <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
                                    <div class="dl-slide" style="background-image: url('<?= htmlspecialchars($slide['image']) ?>');">
                                        <div class="dl-slide-content text-white text-center p-4">
                                            <span class="badge bg-info mb-2"><?= htmlspecialchars($slide['badge']) ?></span>
                                            <h4><?= htmlspecialchars($slide['title']) ?></h4>
                                            <a href="<?= htmlspecialchars($slide['link']) ?>" class="btn btn-link text-white">Learn More <img src="files/images/arrow-right.svg" alt="arrow"></a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="carousel-indicators">
                                <?php foreach ($sections['communication'] as $i => $slide): ?>
                                <button type="button" data-bs-target="#carouselCommunication" data-bs-slide-to="<?= $i ?>" class="<?= $i === 0 ? 'active' : '' ?>" aria-current="<?= $i === 0 ? 'true' : 'false' ?>" aria-label="Slide <?= $i+1 ?>"></button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile View -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
</body>
</html> 
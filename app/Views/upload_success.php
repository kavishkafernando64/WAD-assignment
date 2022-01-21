<!DOCTYPE html>
<html lang="en">

<head>
    <title>Upload Form</title>
    <link rel="stylesheet" href="<?php echo base_url('css/common.css'); ?>">
</head>

<body>

    <h3>Your file was successfully uploaded!</h3>

    <ul>
        <li>name: <?= esc($uploaded_flleinfo->getBasename()) ?></li>
        <li>size: <?= esc($uploaded_flleinfo->getSizeByUnit('kb')) ?> KB</li>
    </ul>

    <p class="button"><?= anchor('upload', 'Upload Another File!') ?></p>
    <p class="button"><?= anchor('viewimages', 'View Uploaded Images') ?></p>

</body>

</html>
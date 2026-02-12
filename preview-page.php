<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Preview</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-gray-100">

    <?php
    // Get the project name from the URL (?project=rudra-tech)
    $project = isset($_GET['project']) ? $_GET['project'] : '';

    // Define which image belongs to which project
    $imagePath = "";
    if ($project == 'nova') {
        $imagePath = "/asset/software/nova.png";
    } elseif ($project == 'weconnect') {
        $imagePath = "/asset/software/weconnect.png";
    } elseif ($project == 'pranaa') {
        $imagePath = "/asset/software/pranna.png";
    } elseif ($project == 'snackita') {
        $imagePath = "/asset/software/snackita.png";
    }
    elseif ($project == 'kesarbaug') {
        $imagePath = "/asset/software/keserbg.png";
    }

     elseif ($project == 'anubhuti') {
        $imagePath = "/asset/software/anubhuti.png";
    }
     elseif ($project == 'armahealthcare') {
        $imagePath = "/asset/software/arma.png";
    }
     elseif ($project == 'laxmikamal') {
        $imagePath = "/asset/software/laxmikamal.png";
    }
     elseif ($project == 'saptam') {
        $imagePath = "/asset/software/saptam-full.png";
    }
    ?>

    <?php if ($imagePath != ""): ?>
        <div class="w-full flex flex-col items-center">
            <img src="<?php echo $imagePath; ?>" alt="Full Site Preview" class="w-full h-auto block shadow-2xl">
        </div>
    <?php else: ?>
        <div class="flex items-center justify-center h-screen">
            <p class="text-gray-500 text-xl font-bold">Project Not Found.</p>
        </div>
    <?php endif; ?>

    <button onclick="window.close()" class="fixed top-5 right-5 bg-black/50 hover:bg-black text-white px-6 py-2 rounded-full backdrop-blur-md transition z-50">
        Close Preview
    </button>

</body>

</html>
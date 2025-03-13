<?php
$site_title = "NetMirror - Watch Movies & Series for Free";
$meta_description = "Discover NetMirror - Your Ultimate Streaming App for Movies & Series. Stream content from Netflix, Prime Video, Disney+ Hotstar, and more.";
$meta_keywords = "NetMirror, streaming app, watch movies, free streaming, Netflix alternative";
$netmirror_link = "http://netmirror-apk.com/";
$watch_movies_link = "https://wasaplusofficial.github.io/netmirrorofficial/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <title><?php echo $site_title; ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #121212;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }

        /* Header */
        .header {
            background: linear-gradient(90deg, #ff7b00, #ff5200);
            padding: 20px;
            font-size: 28px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #fff;
            border-radius: 8px;
        }

        /* Main Container */
        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background: #1e1e1e;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(255, 255, 255, 0.1);
            text-align: center;
        }

        h1 {
            font-size: 26px;
            margin-bottom: 15px;
            color: #ff7b00;
        }

        p {
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 20px;
            text-align: justify;
            padding: 0 20px;
        }

        /* Call-to-Action Buttons */
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .btn {
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
            padding: 12px 20px;
            border-radius: 5px;
            transition: 0.3s ease-in-out;
            display: inline-block;
            text-align: center;
        }

        /* Button Styles */
        .btn-netmirror {
            background: #ff7b00;
            color: #ffffff;
            border: none;
            cursor: pointer;
        }

        .btn-netmirror:hover {
            background: #ff5200;
            transform: scale(1.05);
        }

        .btn-watch {
            background: #00c851;
            color: #ffffff;
            border: none;
            cursor: pointer;
        }

        .btn-watch:hover {
            background: #007e33;
            transform: scale(1.05);
        }

        /* Ad Section */
        .ad-container {
            margin-top: 30px;
            padding: 15px;
            background: #222;
            border-radius: 8px;
            text-align: center;
            font-size: 16px;
            color: #ff7b00;
        }

        /* Footer */
        .footer {
            margin-top: 40px;
            padding: 10px;
            font-size: 14px;
            color: #999;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <div class="header"><?php echo $site_title; ?></div>

    <!-- Main Content Section -->
    <div class="container">
        <h1>Watch Unlimited Movies & Series with NetMirror</h1>
        <p><strong>NetMirror</strong> is the best streaming platform that lets you watch movies, TV series, and web shows from platforms like <b>Netflix, Prime Video, and Disney+ Hotstar</b>—all for FREE! Whether you're using <b>Android, iOS, PC, or Smart TV</b>, NetMirror ensures high-quality streaming without ads or interruptions.</p>

        <p>With <b>NetMirror</b>, you can enjoy the best entertainment without the need for subscriptions. Just <b>download, install, and start watching instantly!</b></p>

        <p>🔹 <b>No Ads</b> - Watch content without annoying interruptions.  
           🔹 <b>High-Quality Streaming</b> - 720p, 1080p, and even 4K Ultra HD.  
           🔹 <b>Multi-Platform Support</b> - Works on Android, iOS, PC, and Smart TVs.  
           🔹 <b>No VPN Required</b> - Access global content without restrictions.</p>

        <p>Start streaming now and explore unlimited entertainment!</p>

        <!-- Buttons -->
        <div class="btn-container">
            <a href="<?php echo $netmirror_link; ?>" class="btn btn-watch">NetMirror - Watch Movies & Series on Mobile</a>
            <a href="<?php echo $watch_movies_link; ?>" class="btn btn-netmirror">NetMirror</a>
        </div>

        <!-- Ad Section -->
        <div class="ad-container">
            🎥 Looking for the best <b>Free Streaming App?</b> Download <b>NetMirror</b> now and watch unlimited movies & shows! 🎬
        </div>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        © <?php echo date("Y"); ?> NetMirror | All rights reserved.
    </div>

</body>
</html>

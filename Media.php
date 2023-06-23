<!DOCTYPE html>
<html>
<head>
  <title>Media</title>
  <script src="script.js"></script>
</head>
<body>
  <nav>
    <img src="https://c1.wallpaperflare.com/preview/158/143/665/summer-resting-book-relaxing.jpg" alt="Media">
  </nav>

  <h1>Media Resources</h1>
  <p>Welcome to our media resources page. When you're ready, you can click on either an article or video to explore further.</p>

  <div id="relaxed-section">
    <h2>Relaxed</h2>
    <?php
      echo '<p>';
      echo 'In this section, immerse yourself in tranquility and find inner peace with our selection of relaxing melodies. Let the soothing tunes wash away the stress and bring a sense of calmness to your mind and soul. Unwind, breathe deeply, and let the gentle rhythms transport you to a state of pure relaxation. Explore the curated collection of peaceful music that will help you unwind, meditate, or simply create a serene ambiance. Whether you prefer reading or watching, we have both an article and a video to further enhance your experience.';
      echo '</p>'; 
      if (isset($_POST['button1'])) {
      header("Location: https://www.popsci.com/story/science/soothing-stories-news-distraction/");
      exit;
      };
      ?>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/6MYGaUipOR4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>

  <div id="uplifted-section">
    <h2>Uplifted</h2>
    <?php      
      echo '<p>';   
      echo 'In the uplifting section, discover energetic and uplifting tracks that will elevate your mood and fill you with positivity. Let the vibrant beats and inspiring melodies ignite your spirit and bring a sense of joy and motivation. Whether you\'re looking for upbeat tunes to dance to or motivational anthems to uplift your spirits, this collection has something for everyone. Take a moment to explore the articles and videos available for a more immersive experience.';
      echo '</p>'; 
    ?>
    <button onclick="window.location.href='https://atlantamission.org/stories-of-success/?c_src=GGRANTMW2307&utm_medium=cpc&utm_campaign=MW_AM_865-47912_fy24-google-grant_20230701_GGRANTMW2307&utm_content=community-care_homelessness_nil_nil&utm_source=google&d_creative=599866358771&mwsc=AM-865-GGRANTMW2307&gclid=CjwKCAjw-b-kBhB-EiwA4fvKrEp5zTX6VxE0ErPLr2W9A0nEH1EyAQsbgS2jETmgvS8GAL1yc70dBBoC8CIQAvD_BwE'">Click for article</button>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/6Jk0zgNmXZ4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

  <div id="inspired-section">
    <h2>Inspired</h2>
    <?php
      echo '<p>';
      echo 'Get ready to be inspired with our collection of music that uplifts and fuels creativity. This section is dedicated to music that sparks imagination, motivates action, and evokes a sense of wonder. Let the melodies and lyrics take you on a journey of inspiration and discovery. Whether youre seeking music for artistic pursuits, personal growth, or simply to reignite your passion, this curated selection will provide the perfect soundtrack to fuel your inspiration. Explore the articles and videos below to dive deeper into the world of inspiration.';
      echo '</p>';
    ?>
    <button onclick="window.location.href='https://www.nytimes.com/spotlight/inspiring-stories'">Click for article</button>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/8jiZsg8xYcs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
   
    <?php
    // PHP code for mood videos \\
    $videoLinks = array(
      'relaxed' => 'https://www.youtube.com/watch?v=6MYGaUipOR4',
      'uplifted' => 'https://youtu.be/6Jk0zgNmXZ4',
      'inspired' => 'https://youtu.be/8jiZsg8xYcs'
    );  
    ?>
    </body>
    </html>

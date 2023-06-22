<?php
$host = "localhost"; // Replace with your MySQL server host
$username = "root"; // Replace with your MySQL username
$password = "root"; // Replace with your MySQL password
$database = "Mood_Parks"; // Replace with your database name

// Create a connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
// Retrieve data from the database
$query = "SELECT * FROM parks";
$result = mysqli_query($conn, $query);

// Check if query was successful
if ($result) {
    // Loop through the data and display it
    while ($row = mysqli_fetch_assoc($result)) {
        $parkName = $row['name'];
        $parkImage = $row['image'];
        $parkQuote = $row['quote'];
        $parkDescription = $row['description'];

        // Display the park details
        echo "<h2>$parkName</h2>";
        echo "<img src='$parkImage' alt='State Park Image'>";
        echo "<p>$parkQuote</p>";
        echo "<div class='park-description'>$parkDescription</div>";
    }

    // Free the result set
    mysqli_free_result($result);
} else {
    echo "Error retrieving data: " . mysqli_error($conn);
}
?>

<?php
// Close the connection
mysqli_close($conn);
?>p

<!DOCTYPE html>
<html>
<head>
  <title>MoodLifting Journeys</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>MoodLifting Journeys</h1>
  <button id="generate-button" class="button">Generate Random Park</button>
  <h2 id="park-name"></h2>
  <img id="park-image" src="" alt="State Park Image">
  <p id="quote"></p>
  <div id="park-description" class="park-description"></div>

  <script>
    function generateRandomPark() {
      var parkNames = [
        "Sleeping Giant State Park",
        "Yellowstone National Park",
        "Grand Canyon National Park",
        "Giuffrida Park",
        "Zion National Park"
        // Add more park names here
      ];
      
      var parkImages = [
        "sleepinggiant.jpeg",
        "yellowstone.jpeg",
        "grandcanyon.jpeg",
        "Giuffrida.jpeg",
        "zion.jpeg"
        // Add more image URLs here
      ];
      
      var parkQuotes = [
        "Keep close to Nature's heart... and break clear away, once in a while, and climb a mountain or spend a week in the woods. Wash your spirit clean. - John Muir",
        "The best remedy for those who are afraid, lonely or unhappy is to go outside, somewhere where they can be quiet, alone with the heavens, nature and God. Because only then does one feel that all is as it should be and that God wishes to see people happy, amidst the simple beauty of nature. I firmly believe that nature brings solace in all troubles. - Anne Frank",
        "The greatest adventure is what lies ahead. - JRR Tolkien",
        "Life is full of beauty. Notice it. Notice the bumble bee, the small child, and the smiling faces. Smell the rain, and feel the wind. Live your life to the fullest potential, and fight for your dreams. - Ashley Smith",
        "In all things of nature there is something of the marvellous. - Aristotle"
        // Add more quotes here
      ];
      
      var parkDescriptions = [
        "Yosemite National Park is located in California. It is known for its stunning granite cliffs, waterfalls, clear streams, and giant sequoia groves. You can go hiking, rock climbing, and camping. Must-see attractions include Yosemite Valley, Half Dome, and Glacier Point.",
        "Yellowstone National Park spans across Wyoming, Montana, and Idaho. It features geysers, hot springs, canyons, and wildlife. You can explore the famous Old Faithful, go wildlife spotting, enjoy hiking and camping, and visit iconic sites like Yellowstone Lake and Grand Prismatic Spring.",
        "Grand Canyon National Park is situated in Arizona. It showcases the majestic Grand Canyon, carved by the Colorado River. You can marvel at the breathtaking views, hike along the rim, go rafting on the river, and explore various trails. Don't miss the South Rim, Bright Angel Trail, and Havasu Falls.",
        "Great Smoky Mountains National Park is located in Tennessee and North Carolina. It offers scenic mountain views, diverse wildlife, and lush forests. Activities include hiking, fishing, camping, and wildlife spotting. Cades Cove, Clingmans Dome, and Chimney Tops are popular attractions.",
        "Zion National Park is situated in Utah. It boasts stunning red rock formations, deep canyons, and diverse plant and animal life. Popular activities include hiking, canyoneering, rock climbing, and wildlife watching. Be sure to visit Angels Landing, The Narrows, and Emerald Pools."
        // Add more park descriptions here
      ];
      
      var randomIndex = Math.floor(Math.random() * parkNames.length);
      var parkName = parkNames[randomIndex];
      var parkImage = parkImages[randomIndex];
      var parkQuote = parkQuotes[randomIndex];
      var parkDescription = parkDescriptions[randomIndex];
      
      document.getElementById("park-name").textContent = parkName;
      document.getElementById("park-image").src = parkImage;
      document.getElementById("quote").textContent = parkQuote;
      document.getElementById("park-description").innerHTML = parkDescription;
    }

    var generateButton = document.getElementById("generate-button");
    generateButton.addEventListener("click", generateRandomPark);
  </script>
</body>
</html>
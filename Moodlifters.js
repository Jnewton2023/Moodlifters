<script>
  function displayVideo(videoId) 
  {
    var videoSection = document.getElementById('video-section');
    videoSection.innerHTML = '<iframe width="560" height="315" src="https://www.youtube.com/embed/' + videoId + '" frameborder="0" allowfullscreen></iframe>';
  }

</script>


// Array to store video data
let allVideos = [];

// Function to fetch videos using AJAX
function fetchVideos() {
    fetch('fetch_videos.php')
        .then(response => response.json())
        .then(data => {
            // Populate the allVideos array
            for (let i = 0; i < data.length; i++) {
                allVideos.push({
                    name: data[i].title,
                    src: data[i].filename.split('.')[0], // Remove file extension
                    id: "vid_" + (i + 1) // Increment ID
                });
            }

            // Log the populated allVideos array to the console
            console.log(allVideos);

            // Call the loadMusic function with the first video index
            loadMusic(1, allVideos);
        })
        .catch(error => console.error('Error fetching videos:', error));
}

// Call the fetchVideos function to initiate fetching
fetchVideos();

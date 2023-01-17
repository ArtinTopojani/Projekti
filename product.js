var images = ["/image/p-2.jpg", "/image/p-3.jpg", "/image/p-4.jpg"];
  var index = 0;

  document.getElementById("nextBtn").onclick = function() {
    index++;
    if (index == images.length) {
      index = 0;
    }
    document.getElementById("image").src = images[index];
  }

  document.getElementById("prevBtn").onclick = function() {
    index--;
    if (index < 0) {
      index = images.length - 1;
    }
    document.getElementById("image").src = images[index];
  }
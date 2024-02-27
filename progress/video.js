function scrollToThumbnail(thumbnailIndex) {
  const thumbnails = document.querySelectorAll(".thumbnail");
  if (thumbnailIndex >= 0 && thumbnailIndex < thumbnails.length) {
    thumbnails[thumbnailIndex].scrollIntoView({ behavior: "smooth" });
  }
}

const searchInput = document.querySelector('input[type="text"]');
searchInput.addEventListener("keyup", (event) => {
  const searchString = event.target.value.toLowerCase();
  const thumbnailCaptions = document.querySelectorAll(".thumnail-caption");

  thumbnailCaptions.forEach((caption, index) => {
    const captionText = caption.textContent.toLowerCase();
    if (captionText.includes(searchString)) {
      scrollToThumbnail(index);
    }
  });
});

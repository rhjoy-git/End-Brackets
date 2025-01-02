document.getElementById('chatbot').addEventListener('click', function() {
    alert('Chatbot clicked! Add your chatbot logic here.');
});

// JavaScript for Play Button and Video
const video = document.getElementById('video');
const playButton = document.getElementById('play-button');

// Event listener to play video on button click
playButton.addEventListener('click', () => {
    video.play();
    playButton.style.display = 'none'; // Hide the play button when video starts
});
////// ===================== //////
// document.addEventListener("DOMContentLoaded", () => {
//   const filterButtons = document.querySelectorAll('.filter-btn');
//   const cards = document.querySelectorAll('.portfolio-card');

//   filterButtons.forEach(button => {
//       button.addEventListener('click', () => {
//           // Remove active class from all buttons
//           filterButtons.forEach(btn => btn.classList.remove('active'));
//           button.classList.add('active');

//           const filter = button.dataset.filter;

//           // Filter cards
//           cards.forEach(card => {
//               if (filter === 'all' || card.dataset.category.includes(filter)) {
//                   card.classList.remove('hidden');
//                   card.classList.add('block');
//               } else {
//                   card.classList.add('hidden');
//                   card.classList.remove('block');
//               }
//           });
//       });
//   });
// });

////// ===================== //////

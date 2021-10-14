const photoInput = document.querySelector('.photo-input');
const userPhoto = document.querySelector('.user-photo');

photoInput.addEventListener('change', (e) => {
  const reader = new FileReader();

  reader.onload = (e) => {
    userPhoto.src = e.target.result;
  };

  reader.readAsDataURL(e.target.files[0]);
});

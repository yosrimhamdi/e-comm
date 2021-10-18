<script>
  const fileInput = document.getElementById('{{ $fileInputId }}');
  const userPhoto = document.getElementById('{{ $previewLocationId }}');

  fileInput.onchange = () => {
    const reader = new FileReader();
    reader.readAsDataURL(fileInput.files[0]);
    reader.addEventListener('load', e => {
      userPhoto.src = reader.result;
    });
  }
</script>

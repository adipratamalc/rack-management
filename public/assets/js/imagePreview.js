function imageCreateFile() {
  const fileInput = document.getElementById("fileCreate");
  let filePath = fileInput.value;
  let allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;

  if (!allowedExtensions.exec(filePath)) {
    alert("Please upload file having extensions .jpeg/.jpg/.png/.gif only.");
    fileInput.value = "";
    return false;
  } else {
    //Image preview
    if (fileInput.files && fileInput.files[0]) {
      let reader = new FileReader();
      reader.onload = function (e) {
        document.getElementById("imageCreatePreview").innerHTML =
          '<img src="' +
          e.target.result +
          '" class="img-thumbnail" id="gambar"/>';
      };
      reader.readAsDataURL(fileInput.files[0]);
    }
  }
}

function imageEditFile() {
  const fileInput = document.getElementById("fileEdit");
  let filePath = fileInput.value;
  let allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;

  if (!allowedExtensions.exec(filePath)) {
    alert("Please upload file having extensions .jpeg/.jpg/.png/.gif only.");
    fileInput.value = "";
    return false;
  } else {
    //Image preview
    if (fileInput.files && fileInput.files[0]) {
      let reader = new FileReader();
      reader.onload = function (e) {
        document.getElementById("imageEditPreview").innerHTML =
          '<img src="' +
          e.target.result +
          '" class="img-thumbnail" id="gambar"/>';
      };
      reader.readAsDataURL(fileInput.files[0]);
    }
  }
}

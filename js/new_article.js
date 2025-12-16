previewImg = document.getElementById("previewImage");
imgInput = document.getElementById("submit_image_input"); 

imgInput.addEventListener("change", () => {
    const [file] = imgInput.files
    if (file) {
        previewImg.src = URL.createObjectURL(file)
    }
});
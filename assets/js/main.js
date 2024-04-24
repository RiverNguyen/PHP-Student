let upLoadBtn = document.getElementById('upload-btn');
let chooseImg = document.getElementById('choose-image');
let fileName = document.getElementById('file-name');

upLoadBtn.onchange = () => {
    let reader = new FileReader();
    reader.readAsDataURL(upLoadBtn.files[0]);
    console.log(upLoadBtn.files[0]);
    reader.onload = () => {
        chooseImg.setAttribute('src', reader.result);
    }
    fileName.textContent = upLoadBtn.files[0].name;
}


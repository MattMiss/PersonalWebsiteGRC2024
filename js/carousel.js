const imgModalXL = $('#image-modal-xl');
const imgModalXLImage = $('#image-modal-img-xl');
const imgModalLG = $('#image-modal-lg');
const imgModalLGImage = $('#image-modal-img-lg');



function openImageXL(src){
    imgModalXLImage.attr('src', src);

    imgModalXL.modal('show');
}

function openImageLG(src){
    imgModalLGImage.attr('src', src);

    imgModalLG.modal('show');
}
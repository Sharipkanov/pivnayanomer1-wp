function getFileExtension(filename) {
    var ext = /^.+\.([^.]+)$/.exec(filename);
    return ext == null ? "" : ext[1];
}


$("#resumeFile").change(function (e) {
    if(e.target.files) {
        var fileName = e.target.files[0].name,
            fileExt = getFileExtension(fileName),
            fileTexts = $('.file-text'),
            successFileText = $('.success-file-text'),
            errorFileText = $('.error-file-text'),
            fileTypes = ["jpeg", "jpg", "png", "pdf", "txt", "doc", "docx"];

        if(fileTypes.indexOf(fileExt) > -1) {
            errorFileText.removeClass('active');
            successFileText.addClass('active');
        } else {
            successFileText.removeClass('active');
            errorFileText.addClass('active');
        }
    }
});
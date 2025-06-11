
//image input
function handleFileSelection(event) {
    const files = event.target.files;
    const fileList = document.getElementById('fileList');
    fileList.innerHTML = '';
    for (let i = 0; i < files.length && i < 2; i++) {
        fileList.innerHTML += `<p>${files[i].name}</p>`;
    }
    if (files.length > 2) {
        alert('You can only upload up to 2 files.');
        event.target.value = ''; // Clear selection
        fileList.innerHTML = '';
    }
}
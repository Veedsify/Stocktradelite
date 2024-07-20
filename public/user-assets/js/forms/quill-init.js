function imageHandler() {
    const input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');
    input.click();

    input.onchange = () => {
        const file = input.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                const base64ImageSrc = e.target.result;
                const range = this.quill.getSelection();
                this.quill.insertEmbed(range.index, 'image', base64ImageSrc);
            };
            reader.readAsDataURL(file);
        }
    };
}


if (document.getElementById("editor")){
    var quill = new Quill("#editor", {
        theme: "snow",
        height: 500,
        modules: {
            toolbar: {
                container: [
                    [{
                        font: []
                    }],
                    [{ header: [1, 2, 3, 4, 5, 6, false] }],
                    ["bold", "italic", "underline"],
                    [{ list: "ordered" }, { list: "bullet" }],
                    ["link"],
                    ["clean"],
                    ["code-block"],
                    ["blockquote"],
                    ["image", "video", "formula"]
                ],
                handlers: {
                    image: imageHandler
                }
            }
        }
    });

    var textarea = document.getElementById('textareaMail');
    quill.root.innerHTML = textarea.value;

    // Sync Quill content with the textarea on change
    quill.on('text-change', function () {
        textarea.value = quill.root.innerHTML;
    });
}
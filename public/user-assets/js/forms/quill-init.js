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

var quill = new Quill("#editor", {
    theme: "snow",
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
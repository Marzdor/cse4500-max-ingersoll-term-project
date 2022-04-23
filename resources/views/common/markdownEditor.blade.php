<section class="w-full">
    <form class="w-full px-6" action="" method="post" enctype="multipart/form-data">
        @csrf

        <textarea class="input " name="noteTextField" id="noteTextField"></textarea>

        <div class="w-full text-right pa-3 mb-6">
            <input type="submit" value="Save Note">
            <input type="file" name="uploadFile" id="uploadFile" accept=".txt">

        </div>
    </form>
</section>

{{-- Import CSS and JS for SimpleMDE editor --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

<script>
    // Initialise editors
    const noteTextFieldEditor = new SimpleMDE({
        element: document.getElementById("noteTextField")
    });

    // file upload listener
    var input = document.getElementById("uploadFile");

    input.addEventListener("change", function() {
        if (this.files && this.files[0]) {
            var myFile = this.files[0];
            var reader = new FileReader();

            reader.addEventListener('load', function(e) {
                noteTextFieldEditor.value(e.target.result);
            });

            reader.readAsBinaryString(myFile);
        }
    });
</script>

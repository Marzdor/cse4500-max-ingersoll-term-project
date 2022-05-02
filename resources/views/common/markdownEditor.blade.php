<section class="w-full">
    <form class="w-full px-6" method="post" enctype="multipart/form-data" action="{{ route('notes.store') }}">
        @csrf

        <textarea class="input " name="note_text" id="note_text"></textarea>

        <div class="w-full text-right pa-3 mb-6">
            <input type="Submit" value="Save Note">
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
        element: document.getElementById("note_text")
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

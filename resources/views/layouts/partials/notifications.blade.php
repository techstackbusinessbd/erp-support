@if(session('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            toastr.success("{{ session('success') }}");
        });
    </script>
@endif

@if(session('error'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            toastr.error("{{ session('error') }}");
        });
    </script>
@endif

@if(session('warning'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            toastr.warning("{{ session('warning') }}");
        });
    </script>
@endif

@if(session('info'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            toastr.info("{{ session('info') }}");
        });
    </script>
@endif

@if($errors->any())
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            @foreach($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        });
    </script>
@endif

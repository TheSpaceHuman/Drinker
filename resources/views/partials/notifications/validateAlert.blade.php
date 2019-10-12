@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script type="text/javascript">
          setTimeout(function () {
            $.growl.error({ title: "", message: "{{ $error }}" });
          }, 2000);
        </script>
    @endforeach
@endif
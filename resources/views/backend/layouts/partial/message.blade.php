@if (session()->has('success'))
{{-- <div class="alert alert-info alert-dismissible fade show " role="alert">
    {{ session()->get('success'); }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span class="fa fa-times"></span>
</button>
</div> --}}

<script>
    new Noty({
        timeout:3000,
        theme: 'sunset',
        type: 'success',
    layout: 'topRight',
text: "{{ session()->get('success'); }}",

}).show();

</script>
@endif

@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show " role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span class="fa fa-times"></span>
        </button>
    </ul>

    <script>
        new Noty({

        timeout:3000,
        theme: 'sunset',
        type: 'error',
        layout: 'topRight',
        text: 'Change a few things up and try submitting again!',

        }).show();

    </script>
</div>



@endif

@if (session()->has('error'))
{{-- <div class="alert alert-info alert-dismissible fade show " role="alert">
    {{ session()->get('success'); }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span class="fa fa-times"></span>
</button>
</div> --}}

<script>
    new Noty({
        timeout:3000,
        theme: 'sunset',
        type: 'error',
    layout: 'topRight',
text: "{{ session()->get('error'); }}",

}).show();

</script>
@endif
@include('admin.layouts.header')
@include('admin.layouts.sidebar')
@include('admin.layouts.content')


@section('content_admin')

<h1>TEST</h1>

<p> JS test!</p>

@endsection




@include('admin.layouts.footer')

@section('script_admin')

<script type="text/javascript">
    $(document).ready(function(){
        $("p").click(function(){
            $(this).hide();   // test javascript
        });
    });
</script>

@endsection

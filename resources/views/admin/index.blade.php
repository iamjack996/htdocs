@extends('admin.layouts.content')

@section('content_admin')

<h1>TEST</h1>

<p> JS test!</p>

@endsection


@section('script_admin')

<script type="text/javascript">
    $(document).ready(function(){
        $("p").click(function(){
            $(this).hide();   // test javascript
        });
    });
</script>

@endsection

@extends('admin.layouts.content')

@section('content_admin')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">管理後台頁</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>使用者狀態</p>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

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

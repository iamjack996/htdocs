@extends('admin.layouts.content')

@section('content_admin')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">文章類別管理</div>
                <div class="panel-body">
                    <table style="width:100%">
                        <thead>
                            <tr>
                                <th>分類名稱</th>
                                <th>文章數量</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($Categorys as $Category)
                                <tr>
                                    <td style="padding: 10px;"><span data-filter="{{ $Category->id }}" data-name="{{ $Category->name }}" id="btn_edit_category">{{ $Category->name }}　<i class="fa fa-pencil margin-r-5"></i></span></td>
                                    <td style="padding: 10px;">{{ count($Category->posts) }}</td>
                                </tr>
                            @empty
                                None
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">新增分類</h3>
                    <a class="label label-default" id="btn_get_add_category"> + </a>
                </div>
              <!-- /.box-header -->
              <!-- form start -->
                <form role="form" action="{{ url('/add_category') }}" method="POST" id="form_add_category">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="box-body">
                        <div class="form-group">
                            <label>分類名稱</label>
                            <input type="text" class="form-control" name="name" placeholder="輸入新的分類名稱" required>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">新 增</button>
                        <button type="button" class="btn btn-default" id="btn_cancel_add">取 消</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection

@section('script_admin')

<script type="text/javascript">
    $(document).ready(function(){
        $("#form_add_category").hide();
        $("#btn_cancel_add").click(function(){
            $("#form_add_category").fadeOut();
            $("#btn_get_add_category").toggle();
        });
        $("#btn_get_add_category").click(function(){
            $("#form_add_category").fadeIn();
            $("#btn_get_add_category").toggle();
        });
        $("#btn_edit_category").click(function(){
            var item =
            '<input type="text" class="form-control" name="name" value="'+$(this).attr('data-name')+'" required>';
            $(this).replaceWith(item);
        });


    });
</script>

@endsection

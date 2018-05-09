@extends('adminLTE.layouts.adminYD')

@section('headjs')
<link rel="stylesheet" href="{{ asset('themes/admin_lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    待备案商品管理
    <small>成都关<i class="fa fa-arrows-h"></i>韩国</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> 仪表盘</a></li>
    <li><a href="#">备案管理</a></li>
    <li class="active">待备案</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
		<div class="box">
			<div class="box-header">
			  <h3 class="box-title">待备案商品管理</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <table id="example1" class="table table-bordered table-striped">
			    <thead>
			    <tr>
		    	  <th style="width: 10px;">ID</th>
			      <th>商品名称</th>
			      <th>品牌</th>
			      <th>规格</th>
			      <th>导入批次</th>
			    </tr>
			    </thead>
			    <tbody>
			    <tr>
			      <td>1.</td>
			      <td>Internet
			        Explorer 4.0
			      </td>
			      <td>Win 95+</td>
			      <td> 4</td>
			      <td>2018_0403001</td>
			    </tr>
			    <tr>
			      <td>2.</td>
			      <td>Internet
			        Explorer 5.0
			      </td>
			      <td>Win 95+</td>
			      <td>2018_0403</td>
			      <td>2018_0403001</td>
			    </tr>
			    <tr>
			      <td>3.</td>
			      <td>Internet
			        Explorer 5.5
			      </td>
			      <td>Win 95+</td>
			      <td>5.5</td>
			      <td>2018_0403001</td>
			    </tr>
			    <tr>
			      <td>4.</td>
			      <td>Internet
			        Explorer 6
			      </td>
			      <td>Win 98+</td>
			      <td>6</td>
			      <td>2018_0403001</td>
			    </tr>
			    <tr>
			      <td>5.</td>
			      <td>Internet Explorer 7</td>
			      <td>Win XP SP2+</td>
			      <td>7</td>
			      <td>2018_0403001</td>
			    </tr>
			    <tr>
			      <td>6.</td>
			      <td>AOL browser (AOL desktop)</td>
			      <td>Win XP</td>
			      <td>6</td>
			      <td>2018_0403001</td>
			    </tr>
			    <tr>
			      <td>Gecko</td>
			      <td>Firefox 1.0</td>
			      <td>Win 98+ / OSX.2+</td>
			      <td>1.7</td>
			      <td>2018_0403002</td>
			    </tr>
			    <tr>
			      <td>Gecko</td>
			      <td>Firefox 1.5</td>
			      <td>Win 98+ / OSX.2+</td>
			      <td>1.8</td>
			      <td>2018_0403002</td>
			    </tr>
			    <tr>
			      <td>Gecko</td>
			      <td>Firefox 2.0</td>
			      <td>Win 98+ / OSX.2+</td>
			      <td>1.8</td>
			      <td>2018_0403002</td>
			    </tr>
			    <tr>
			      <td>Gecko</td>
			      <td>Firefox 3.0</td>
			      <td>Win 2k+ / OSX.3+</td>
			      <td>1.9</td>
			      <td>2018_0403002</td>
			    </tr>
			    <tr>
                  <td>Presto</td>
                  <td>Nintendo DS browser</td>
                  <td>Nintendo DS</td>
                  <td>8.5</td>
                  <td>C/A<sup>1</sup></td>
                </tr>
                <tr>
                  <td>KHTML</td>
                  <td>Konqureror 3.1</td>
                  <td>KDE 3.1</td>
                  <td>3.1</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>KHTML</td>
                  <td>Konqureror 3.3</td>
                  <td>KDE 3.3</td>
                  <td>3.3</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>KHTML</td>
                  <td>Konqureror 3.5</td>
                  <td>KDE 3.5</td>
                  <td>3.5</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Tasman</td>
                  <td>Internet Explorer 4.5</td>
                  <td>Mac OS 8-9</td>
                  <td>-</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Tasman</td>
                  <td>Internet Explorer 5.1</td>
                  <td>Mac OS 7.6-9</td>
                  <td>1</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>Tasman</td>
                  <td>Internet Explorer 5.2</td>
                  <td>Mac OS 8-X</td>
                  <td>1</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>Misc</td>
                  <td>NetFront 3.1</td>
                  <td>Embedded devices</td>
                  <td>-</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>Misc</td>
                  <td>NetFront 3.4</td>
                  <td>Embedded devices</td>
                  <td>-</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Misc</td>
                  <td>Dillo 0.8</td>
                  <td>Embedded devices</td>
                  <td>-</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Misc</td>
                  <td>Links</td>
                  <td>Text only</td>
                  <td>-</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Misc</td>
                  <td>Lynx</td>
                  <td>Text only</td>
                  <td>-</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Misc</td>
                  <td>IE Mobile</td>
                  <td>Windows Mobile 6</td>
                  <td>-</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>Misc</td>
                  <td>PSP browser</td>
                  <td>PSP</td>
                  <td>-</td>
                  <td>C</td>
                </tr>
			    <tr>
			      <td>Gecko</td>
			      <td>Camino 1.0</td>
			      <td>OSX.2+</td>
			      <td>1.8</td>
			      <td>A</td>
			    </tr>
			    <tr>
			      <td>Gecko</td>
			      <td>Camino 1.5</td>
			      <td>OSX.3+</td>
			      <td>1.8</td>
			      <td>A</td>
			    </tr>
			    </tbody>
			    <tfoot>
			    <tr>
			      <th>#</th>
			      <th>商品名称</th>
			      <th>品牌</th>
			      <th>规格</th>
			      <th>CSS grade</th>
			    </tr>
			    </tfoot>
			  </table>
			</div>
			<!-- /.box-body -->
			</div>
		<!-- /.box -->
		</div>
	</div>
</section>
@endsection

@section('js')

<!-- DataTables -->
<script src="{{ asset('themes/admin_lte//bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('themes/admin_lte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('themes/admin_lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>


<script>
var dataTable  = {
    language: {
        "sProcessing": "处理中...",
        "sLengthMenu": "显示 _MENU_ 项结果",
        "sZeroRecords": "没有匹配结果",
        "sInfo": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
        "sInfoEmpty": "显示第 0 至 0 项结果，共 0 项",
        "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
        "sInfoPostFix": "",
        "sSearch": "搜索:",
        "sUrl": "",
        "sEmptyTable": "表中数据为空",
        "sLoadingRecords": "载入中...",
        "sInfoThousands": ",",
        "oPaginate": {
            "sFirst": "首页",
            "sPrevious": "上页",
            "sNext": "下页",
            "sLast": "末页"
        },
        "oAria": {
            "sSortAscending": ": 以升序排列此列",
            "sSortDescending": ": 以降序排列此列"
        }
    },
    "aoColumns": [
    		{ "orderSequence": [ "asc" ] },
            { "orderSequence": [ "desc", "asc", "asc" ] },
            { "orderSequence": [ "desc", "asc", "asc" ] },
            { "orderSequence": [ "desc", "asc", "asc" ] },
            { "orderSequence": [ "desc", "asc", "asc" ] },
    ],
    "processing": true,
    "serverSide": true,
    "ajax": "/test_server_processing.php",
    "deferLoading": 57
} );
};
$(function () {
$('#example1').DataTable(dataTable)
})
</script>
@endsection
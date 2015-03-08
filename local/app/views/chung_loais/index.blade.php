@extends('admin.newmain')

@section('title')
Chủng loại sản phẩm
@stop

@section('content')
 <h1>Chủng Loại Sản Phẩm <small>Tất cả chủng loại</small></h1>
            <ol class="breadcrumb">
              <li><a href="{{asset('admin')}}"><i class="icon-dashboard"></i> Trang Chủ</a></li>
              <li class="active"><i class="icon-file-alt"></i>Tất cả chủng loại</li>
            </ol>

<p>{{link_to_route('chung_loais.create', 'Thêm mới') }}</p>
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
                <th>ID</th>
				<th>Tên chủng loại</th>
			</tr>
		</thead>
		<tbody>
				<tr>
			 		<td></td>   
					<td></td>
                    <td></td>
                    <td></td>
				</tr>
		</tbody>
	</table>
@stop

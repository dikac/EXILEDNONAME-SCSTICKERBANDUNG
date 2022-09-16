@extends('layouts.default')
@push('title', 'Documentation')

@push('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card card-custom gutter-b" data-card="true" id="kt_card_1">
			<div class="card-header">
				<div class="card-title">
					<h3 class="card-label"> {{ trans('default.label.documentation') }} </h3>
				</div>
				<div class="card-toolbar">
					<a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"><i class="fas fa-caret-down"></i></a>
				</div>
			</div>
			<div class="card-body">
				<table width="100%" class="table table-row-bordered table-hover">
					<tbody>
						<tr>
							<td width="250px"> Name </td>
							<td width="1px"> : </td>
							<td> {{ env('APP_NAME') }} </td>
						</tr>
						<tr>
							<td> Email </td>
							<td> : </td>
							<td> {{ env('APP_EMAIL') }} </td>
						</tr>
						<tr>
							<td> Phone </td>
							<td> : </td>
							<td> {{ env('APP_PHONE') }} </td>
						</tr>
						<tr>
							<td> Application Version </td>
							<td> : </td>
							<td> {{ env('APP_VERSION') }} </td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endpush

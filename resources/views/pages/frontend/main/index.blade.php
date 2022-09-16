@extends('layouts.frontend-table', ['page' => 'home'])
@push('title', 'Home')

@push('content')
<div class="alert alert-custom alert-outline-1x alert-primary fade show" role="alert">
  <div class="alert-icon"><i class="flaticon-warning"></i></div>
  <div class="alert-text">
    Hi there, welcome <br>
  </div>
  <div class="alert-close">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true"><i class="ki ki-close"></i></span>
    </button>
  </div>
</div>

<div class="row">
  <div class="col-xl-12">
    <div class="card card-custom gutter-b" data-card="true" id="kt_card_1">
      <div class="card-header">
        <h4 class="card-title">
          <span class="card-label font-weight-bolder text-dark"> {{ trans('default.label.graphs') }} </span>
        </h4>
        <div class="card-toolbar">
          <a href="#" class="btn btn-icon btn-sm btn-hover-light-primary mr-1" data-card-tool="toggle"><i class="fas fa-caret-down"></i></a>
          <div class="collapse" id="toolbar_delete"><a data-url="" class="delete-all btn btn-sm btn-icon btn-clean btn-icon-md" data-toggle="tooltip" title="{{ trans('default.label.delete-selected') }}"><i class="text-danger fas fa-trash"></i></a></div>
        </div>
      </div>
      <div class="card-body">

        <div class="accordion accordion-toggle-arrow" id="accordionExample1">
					<div class="card">
						<div class="card-header">
							<div class="card-title" data-toggle="collapse" data-target="#collapseOne1">
								Latest Orders
							</div>
						</div>
						<div id="collapseOne1" class="collapse show" data-parent="#accordionExample1">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header">
							<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo1">
								Product Updates
							</div>
						</div>
						<div id="collapseTwo1" class="collapse" data-parent="#accordionExample1">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header">
							<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree1">
								Pending Items
							</div>
						</div>
						<div id="collapseThree1" class="collapse" data-parent="#accordionExample1">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
				</div>
        
      </div>
    </div>
  </div>
</div>
@endpush

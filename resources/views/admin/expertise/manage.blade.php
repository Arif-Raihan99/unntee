@extends('admin.layouts.app')

@section('title', 'Expertise')

@section('style')
    <link href="{{ asset('/') }}assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
@endsection

@section('body')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6">
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0 mb-3">
                    Manage Expertise
                </h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">
                        Expertise
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">
                        Manage
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--begin::Content-->
    <div id="kt_app_content" class="app-content  flex-column-fluid ">
        <div id="kt_app_content_container" class="app-container  container-xxl ">

            <div class="card card-flush">
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                <span class="path1"></span><span class="path2"></span>
                            </i>
                            <input type="text" data-kt-ecommerce-category-filter="search"
                                   class="form-control form-control-solid w-250px ps-12"
                                   placeholder="Search Service"/>
                        </div>
                    </div>
                    <div class="card-toolbar">
                        <a class="btn btn-primary" id="add_service_button" data-bs-toggle="modal"
                           data-bs-target="#kt_modal_new_address">
                            Add Service
                        </a>
                    </div>
                </div>

                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
                        <thead>
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th class="w-10px pe-2">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                                           data-kt-check-target="#kt_ecommerce_category_table .form-check-input" value="1"/>
                                </div>
                            </th>
                            <th class="min-w-150px ps-5">Name</th>
                            <th class="min-w-100px">From Year</th>
                            <th class="min-w-100px">From Month</th>
                            <th class="min-w-100px">To Year</th>
                            <th class="min-w-100px">To Month</th>
                            <th class="min-w-100px">Status</th>
                            <th class="text-end min-w-70px pe-5">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                        @foreach($expertises as $expertise)
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <div class="ms-5">
                                            <span class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1"
                                                  data-kt-ecommerce-category-filter="category_name">
                                                {{ $expertise->name }}
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ json_decode($expertise->from)->year }}</td>
                                <td>{{ json_decode($expertise->from)->month }}</td>
                                <td>{{ json_decode($expertise->to)->year }}</td>
                                <td>{{ json_decode($expertise->to)->month }}</td>
                                <td>
                                    <a href="{{ route('expertises.show', $expertise->id) }}">
                                        @if($expertise->status == 1)
                                            <div class="badge badge-light-success">Active</div>
                                        @else
                                            <div class="badge badge-light-danger">Deactivated</div>
                                        @endif
                                    </a>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center"
                                       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i>
                                    </a>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                        <div class="menu-item px-3 mb-1" onclick="pushTypeOnEditModal({{ $expertise }})">
                                            <a class="menu-link px-3 bg-light-primary text-primary" id="edit_service_button" data-bs-toggle="modal"
                                               data-bs-target="#kt_modal_new_address_edit">
                                                <i class="fa fa-edit me-2 text-primary"></i>Edit
                                            </a>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" onclick="deleteItem({{ $expertise->id }})" class="menu-link px-3 bg-light-danger text-danger">
                                                <i class="fa fa-trash text-danger me-2"></i>Delete
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!--being::Form - Delete Type -->
            <form id="delete_form" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
            </form>
        </div>
    </div>
@endsection

@section('modal')
    <!--begin::Modal - Add Service-->
    <div class="modal fade" id="kt_modal_new_address" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <form class="form" action="{{ route('expertises.store') }}" method="POST" id="kt_modal_new_address_form">
                    @csrf
                    <div class="modal-header" id="kt_modal_new_address_header">
                        <h3 class="text-center mx-auto">Add New Expertise</h3>
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <i class="ki-duotone ki-cross fs-1">
                                <span class="path1"></span><span class="path2"></span>
                            </i>
                        </div>
                    </div>
                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div
                            class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll"
                            data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                            data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header"
                            data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">

                            <!--begin::Input group-->
                            <div class="row mb-5">
                                <div class="col-12 fv-row">
                                    <label for="name" class="required fs-5 fw-semibold mb-2">Expertise name</label>
                                    <input id="name" value="{{ old('name') }}" type="text" class="form-control form-control-solid" placeholder="Expertise name" name="name" autofocus/>
                                </div>
                                @error('name')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--begin::Input Form group-->
                            <div class="row mb-5">
                                <label for="from" class="required fs-5 fw-semibold mb-2">From</label>

                                <div class="col-6 fv-row">
                                    <label for="fromYear" class=" fs-5 fw-semibold mb-2">Select Year:</label>
                                    <select id="fromYear" name="fromYear" class="form-select">
                                        <option value="" selected><-- Select Year --></option>
                                        <option value="1" {{ (old('fromYear') == '1' ? 'selected' : '') }} >1 years</option>
                                        <option value="2" {{ (old('fromYear') == '2' ? 'selected' : '') }} >2 years</option>
                                        <option value="3" {{ (old('fromYear') == '3' ? 'selected' : '') }} >3 years</option>
                                        <option value="4" {{ (old('fromYear') == '4' ? 'selected' : '') }} >4 years</option>
                                        <option value="5" {{ (old('fromYear') == '5' ? 'selected' : '') }} >5 years</option>
                                        <option value="6" {{ (old('fromYear') == '6' ? 'selected' : '') }} >6 years</option>
                                        <option value="7" {{ (old('fromYear') == '7' ? 'selected' : '') }} >7 years</option>
                                        <option value="8" {{ (old('fromYear') == '8' ? 'selected' : '') }} >8 years</option>
                                        <option value="8+"{{ (old('fromYear') == '8+' ? 'selected' : '') }} >8+ years</option>
                                    </select>
                                    @error('fromYear')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-6 fv-row">
                                    <label for="fromMonth" class=" fs-5 fw-semibold mb-2">Select Month:</label>
                                    <select id="fromMonth" name="fromMonth" class="form-select">
                                        <option value="" selected><-- Select Month --></option>
                                        <option value="1" {{ (old('fromMonth') == '1' ? 'selected' : '') }} >1 Month</option>
                                        <option value="2" {{ (old('fromMonth') == '2' ? 'selected' : '') }} >2 Month</option>
                                        <option value="3" {{ (old('fromMonth') == '3' ? 'selected' : '') }} >3 Month</option>
                                        <option value="4" {{ (old('fromMonth') == '4' ? 'selected' : '') }} >4 Month</option>
                                        <option value="5" {{ (old('fromMonth') == '5' ? 'selected' : '') }} >5 Month</option>
                                        <option value="6" {{ (old('fromMonth') == '6' ? 'selected' : '') }} >6 Month</option>
                                        <option value="7" {{ (old('fromMonth') == '7' ? 'selected' : '') }} >7 Month</option>
                                        <option value="8" {{ (old('fromMonth') == '8' ? 'selected' : '') }} >8 Month</option>
                                        <option value="9" {{ (old('fromMonth') == '9' ? 'selected' : '') }} >9 Month</option>
                                        <option value="10" {{ (old('fromMonth') == '10' ? 'selected' : '') }} >10 Month</option>
                                        <option value="11" {{ (old('fromMonth') == '11' ? 'selected' : '') }}>11 Month</option>
                                    </select>
                                    @error('fromMonth')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <!--begin::Input To group-->
                            <div class="row mb-5">
                                <label for="from" class="required fs-5 fw-semibold mb-2">To</label>
                                <div class="col-6 fv-row">
                                    <label for="toYear" class=" fs-5 fw-semibold mb-2">Select Year:</label>
                                    <select id="toYear" name="toYear" class="form-select">
                                        <option value="" selected><-- Select Year --></option>
                                        <option value="1" {{ (old('toYear') == '1' ? 'selected' : '') }} >1 years</option>
                                        <option value="2" {{ (old('toYear') == '2' ? 'selected' : '') }} >2 years</option>
                                        <option value="3" {{ (old('toYear') == '3' ? 'selected' : '') }} >3 years</option>
                                        <option value="4" {{ (old('toYear') == '4' ? 'selected' : '') }} >4 years</option>
                                        <option value="5" {{ (old('toYear') == '5' ? 'selected' : '') }} >5 years</option>
                                        <option value="6" {{ (old('toYear') == '6' ? 'selected' : '') }} >6 years</option>
                                        <option value="7" {{ (old('toYear') == '7' ? 'selected' : '') }} >7 years</option>
                                        <option value="8" {{ (old('toYear') == '8' ? 'selected' : '') }} >8 years</option>
                                        <option value="8+"{{ (old('toYear') == '8+' ? 'selected' : '') }} >8+ years</option>
                                    </select>
                                    @error('toYear')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-6 fv-row">
                                    <label for="toMonth" class=" fs-5 fw-semibold mb-2">Select Month:</label>
                                    <select id="toMonth" name="toMonth" class="form-select">
                                        <option value="" selected><-- Select Month --></option>
                                        <option value="1" {{ (old('toMonth') == '1' ? 'selected' : '') }} >1 Month</option>
                                        <option value="2" {{ (old('toMonth') == '2' ? 'selected' : '') }} >2 Month</option>
                                        <option value="3" {{ (old('toMonth') == '3' ? 'selected' : '') }} >3 Month</option>
                                        <option value="4" {{ (old('toMonth') == '4' ? 'selected' : '') }} >4 Month</option>
                                        <option value="5" {{ (old('toMonth') == '5' ? 'selected' : '') }} >5 Month</option>
                                        <option value="6" {{ (old('toMonth') == '6' ? 'selected' : '') }} >6 Month</option>
                                        <option value="7" {{ (old('toMonth') == '7' ? 'selected' : '') }} >7 Month</option>
                                        <option value="8" {{ (old('toMonth') == '8' ? 'selected' : '') }} >8 Month</option>
                                        <option value="9" {{ (old('toMonth') == '9' ? 'selected' : '') }} >9 Month</option>
                                        <option value="10" {{ (old('toMonth') == '10' ? 'selected' : '') }} >10 Month</option>
                                        <option value="11" {{ (old('toMonth') == '11' ? 'selected' : '') }}>11 Month</option>
                                    </select>
                                    @error('toMonth')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                        </div>
                    </div>

                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <button type="submit" id="kt_modal_new_address_submit1" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--begin::Modal - Edit Service-->
    <div class="modal fade" id="kt_modal_new_address_edit" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <form class="form" method="POST" id="kt_modal_new_address_form">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="modal-header" id="kt_modal_new_address_header">
                        <h3 class="text-center mx-auto">Edit This Expertise</h3>
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <i class="ki-duotone ki-cross fs-1">
                                <span class="path1"></span><span class="path2"></span>
                            </i>
                        </div>
                    </div>
                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17" id="edit_modal">
                        <!--begin::Scroll-->
                        <div
                            class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll"
                            data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                            data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header"
                            data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">

                            <!--begin::Input group-->
                            <div class="row mb-5">
                                <div class="col-12 fv-row">
                                    <label for="edit_name" class="required fs-5 fw-semibold mb-2 required">Service name</label>
                                    <input id="edit_name" value="{{ old('edit_name') }}" type="text" class="form-control form-control-solid" placeholder="service name" name="edit_name" autofocus/>
                                </div>
                                @error('edit_name')
                                <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--begin::Input Form group-->
                            <div class="row mb-5">
                                <label for="from" class="required fs-5 fw-semibold mb-2">From</label>

                                <div class="col-6 fv-row">
                                    <label for="fromYear" class=" fs-5 fw-semibold mb-2">Select Year:</label>
                                    <select id="edit_fromYear" name="edit_fromYear" class="form-select">
                                        <option value="" selected><-- Select Year --></option>
                                        <option value="1" {{ (old('edit_fromYear') == '1' ? 'selected' : '') }} >1 years</option>
                                        <option value="2" {{ (old('edit_fromYear') == '2' ? 'selected' : '') }} >2 years</option>
                                        <option value="3" {{ (old('edit_fromYear') == '3' ? 'selected' : '') }} >3 years</option>
                                        <option value="4" {{ (old('edit_fromYear') == '4' ? 'selected' : '') }} >4 years</option>
                                        <option value="5" {{ (old('edit_fromYear') == '5' ? 'selected' : '') }} >5 years</option>
                                        <option value="6" {{ (old('edit_fromYear') == '6' ? 'selected' : '') }} >6 years</option>
                                        <option value="7" {{ (old('edit_fromYear') == '7' ? 'selected' : '') }} >7 years</option>
                                        <option value="8" {{ (old('edit_fromYear') == '8' ? 'selected' : '') }} >8 years</option>
                                        <option value="8+"{{ (old('edit_fromYear') == '8+' ? 'selected' : '') }} >8+ years</option>
                                    </select>
                                    @error('edit_fromYear')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-6 fv-row">
                                    <label for="fromMonth" class=" fs-5 fw-semibold mb-2">Select Month:</label>
                                    <select id="edit_fromMonth" name="edit_fromMonth" class="form-select">
                                        <option value="" selected><-- Select Month --></option>
                                        <option value="1" {{ (old('edit_fromMonth') == '1' ? 'selected' : '') }} >1 Month</option>
                                        <option value="2" {{ (old('edit_fromMonth') == '2' ? 'selected' : '') }} >2 Month</option>
                                        <option value="3" {{ (old('edit_fromMonth') == '3' ? 'selected' : '') }} >3 Month</option>
                                        <option value="4" {{ (old('edit_fromMonth') == '4' ? 'selected' : '') }} >4 Month</option>
                                        <option value="5" {{ (old('edit_fromMonth') == '5' ? 'selected' : '') }} >5 Month</option>
                                        <option value="6" {{ (old('edit_fromMonth') == '6' ? 'selected' : '') }} >6 Month</option>
                                        <option value="7" {{ (old('edit_fromMonth') == '7' ? 'selected' : '') }} >7 Month</option>
                                        <option value="8" {{ (old('edit_fromMonth') == '8' ? 'selected' : '') }} >8 Month</option>
                                        <option value="9" {{ (old('edit_fromMonth') == '9' ? 'selected' : '') }} >9 Month</option>
                                        <option value="10" {{ (old('edit_fromMonth') == '10' ? 'selected' : '') }} >10 Month</option>
                                        <option value="11" {{ (old('edit_fromMonth') == '11' ? 'selected' : '') }}>11 Month</option>
                                    </select>
                                    @error('edit_fromMonth')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <!--begin::Input To group-->
                            <div class="row mb-5">
                                <label for="from" class="required fs-5 fw-semibold mb-2">To</label>
                                <div class="col-6 fv-row">
                                    <label for="toYear" class=" fs-5 fw-semibold mb-2">Select Year:</label>
                                    <select id="edit_toYear" name="edit_toYear" class="form-select">
                                        <option value="" selected><-- Select Year --></option>
                                        <option value="1" {{ (old('edit_toYear') == '1' ? 'selected' : '') }} >1 years</option>
                                        <option value="2" {{ (old('edit_toYear') == '2' ? 'selected' : '') }} >2 years</option>
                                        <option value="3" {{ (old('edit_toYear') == '3' ? 'selected' : '') }} >3 years</option>
                                        <option value="4" {{ (old('edit_toYear') == '4' ? 'selected' : '') }} >4 years</option>
                                        <option value="5" {{ (old('edit_toYear') == '5' ? 'selected' : '') }} >5 years</option>
                                        <option value="6" {{ (old('edit_toYear') == '6' ? 'selected' : '') }} >6 years</option>
                                        <option value="7" {{ (old('edit_toYear') == '7' ? 'selected' : '') }} >7 years</option>
                                        <option value="8" {{ (old('edit_toYear') == '8' ? 'selected' : '') }} >8 years</option>
                                        <option value="8+"{{ (old('edit_toYear') == '8+' ? 'selected' : '') }} >8+ years</option>
                                    </select>
                                    @error('edit_toYear')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-6 fv-row">
                                    <label for="toMonth" class=" fs-5 fw-semibold mb-2">Select Month:</label>
                                    <select id="edit_toMonth" name="edit_toMonth" class="form-select">
                                        <option value="" selected><-- Select Month --></option>
                                        <option value="1" {{ (old('edit_toMonth') == '1' ? 'selected' : '') }} >1 Month</option>
                                        <option value="2" {{ (old('edit_toMonth') == '2' ? 'selected' : '') }} >2 Month</option>
                                        <option value="3" {{ (old('edit_toMonth') == '3' ? 'selected' : '') }} >3 Month</option>
                                        <option value="4" {{ (old('edit_toMonth') == '4' ? 'selected' : '') }} >4 Month</option>
                                        <option value="5" {{ (old('edit_toMonth') == '5' ? 'selected' : '') }} >5 Month</option>
                                        <option value="6" {{ (old('edit_toMonth') == '6' ? 'selected' : '') }} >6 Month</option>
                                        <option value="7" {{ (old('edit_toMonth') == '7' ? 'selected' : '') }} >7 Month</option>
                                        <option value="8" {{ (old('edit_toMonth') == '8' ? 'selected' : '') }} >8 Month</option>
                                        <option value="9" {{ (old('edit_toMonth') == '9' ? 'selected' : '') }} >9 Month</option>
                                        <option value="10" {{ (old('edit_toMonth') == '10' ? 'selected' : '') }} >10 Month</option>
                                        <option value="11" {{ (old('edit_toMonth') == '11' ? 'selected' : '') }}>11 Month</option>
                                    </select>
                                    @error('edit_toMonth')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                        </div>
                    </div>

                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <button type="submit" id="kt_modal_new_address_submit1" class="btn btn-primary">
                            <span class="indicator-label">Update</span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @error('name')
    <script>
        document.querySelector('#add_service_button').click();
    </script>
    @enderror
    @error('edit_name')
    <script>
        document.querySelector('#edit_service_button').click();
        document.querySelector("[name='edit_name']").value = "{{ $errors->first('edit_name') }}";
        document.querySelector("[name='edit_fromYear']").value = "{{ $errors->first('edit_fromYear') }}";
        document.querySelector("[name='edit_fromMonth']").value = "{{ $errors->first('edit_fromMonth') }}";
        document.querySelector("[name='edit_toYear']").value = "{{ $errors->first('edit_toYear') }}";
        document.querySelector("[name='edit_toMonth']").value = "{{ $errors->first('edit_toMonth') }}";
    </script>
    @enderror

    <script>

        function pushTypeOnEditModal(item){
            document.querySelector('#edit_modal').parentElement.action = '/expertises/' + item.id;
            document.querySelector("[name='edit_name']").value = item.name;

            document.querySelector("[name='edit_fromYear']").value = JSON.parse(item.from).year;
            document.querySelector("[name='edit_fromMonth']").value = JSON.parse(item.from).month;
            document.querySelector("[name='edit_toYear']").value = JSON.parse(item.to).year;
            document.querySelector("[name='edit_toMonth']").value = JSON.parse(item.to).month;
        }



        function deleteItem(id){
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    let form = document.querySelector('#delete_form');
                    form.action = '/expertises/' + id;
                    form.submit();
                }
            })
        }
    </script>


    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('/') }}assets/plugins/custom/datatables/datatables.bundle.js"></script>


    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('/') }}assets/js/custom/apps/ecommerce/catalog/categories.js"></script>
    <script src="{{ asset('/') }}assets/js/widgets.bundle.js"></script>
    <script src="{{ asset('/') }}assets/js/custom/widgets.js"></script>
    <script src="{{ asset('/') }}assets/js/custom/apps/chat/chat.js"></script>
    <script src="{{ asset('/') }}assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="{{ asset('/') }}assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="{{ asset('/') }}assets/js/custom/utilities/modals/new-address.js"></script>
    <script src="{{ asset('/') }}assets/js/custom/utilities/modals/users-search.js"></script>

@endsection


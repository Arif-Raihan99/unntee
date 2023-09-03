@extends('admin.layouts.app')

@section('title', 'Profile')

@section('style')
    <link href="{{ asset('/') }}assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
@endsection

@section('body')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">

            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">

                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                    Account Settings
                </h1>

                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="../index.html" class="text-muted text-hover-primary">
                            Dashboard </a>
                    </li>

                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">
                        Profile
                    </li>


                </ul>

            </div>

        </div>
        <!--end::Toolbar container-->
    </div>


    <!--begin::Content-->
    <div id="kt_app_content" class="app-content  flex-column-fluid ">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-xxl ">

            <!--begin::Navbar-->
            <div class="card mb-5 mb-xl-10">
                <div class="card-body pt-9 pb-0">
                    <div class="d-flex flex-wrap flex-sm-nowrap">
                        <div class="me-7 mb-4">
                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                <img src="{{ asset('/') }}assets/media/avatars/300-1.jpg" alt="image"/>
                                <div
                                    class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                            </div>
                        </div>

                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-2">
                                        <a href="#"
                                           class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{ Auth::user()->name }}</a>
                                        <a href="#"><i class="ki-duotone ki-verify fs-1 text-primary">
                                                <span class="path1"></span><span class="path2"></span></i>
                                        </a>
                                    </div>

                                    <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                        <a href="#"
                                           class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                            <i class="ki-duotone ki-profile-circle fs-4 me-1"><span
                                                    class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span></i>
                                            Developer
                                        </a>
                                        <a href="#"
                                           class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                            <i class="ki-duotone ki-geolocation fs-4 me-1"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            SF, Bay Area
                                        </a>
                                        <a href="#"
                                           class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                            <i class="ki-duotone ki-sms fs-4 me-1"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            max@kt.com
                                        </a>
                                    </div>

                                </div>



                            </div>



                            <div class="d-flex flex-wrap flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column flex-grow-1 pe-8">

                                </div>


                                <!--begin::Progress-->
                                <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                        <span class="fw-semibold fs-6 text-gray-400">Profile Compleation</span>
                                        <span class="fw-bold fs-6">50%</span>
                                    </div>

                                    <div class="h-5px mx-3 w-100 bg-light mb-3">
                                        <div class="bg-success rounded h-5px" role="progressbar"
                                             style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>


                </div>
            </div>

            <!--begin::Basic info-->
            <div class="card mb-5 mb-xl-10">

                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                     data-bs-target="#kt_account_profile_details" aria-expanded="true"
                     aria-controls="kt_account_profile_details">

                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">Profile Details</h3>
                    </div>

                </div>


                <div id="kt_account_settings_profile_details" class="collapse show">

                    <!--begin::Form-->
                    <form action="{{ route('update-userProfile') }}" method="post" class="form"
                          enctype="multipart/form-data">
                    @csrf

                        <div class="card-body border-top p-9">

                            <div class="row mb-6">

                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Profile Image</label>



                                <div class="col-lg-8">

                                    <div class="image-input image-input-outline"
                                         data-kt-image-input="true"
                                         style="background-image: url('{{asset('/')}}assets/media/svg/avatars/blank.svg')">

                                        <div class="image-input-wrapper w-125px h-125px"
                                             style="background-image: url({{asset('/')}}assets/media/avatars/300-1.jpg)"></div>



                                        <label
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                            title="Change avatar">
                                            <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span
                                                    class="path2"></span></i>

                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg"/>
                                            <input type="hidden" name="avatar_remove"/>

                                        </label>



                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                            title="Cancel avatar">
                                       <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                               class="path2"></span></i>
                                        </span>

                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                            title="Remove avatar">
                                        <i class="ki-duotone ki-cross fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        </span>

                                    </div>



                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>

                                </div>

                            </div>


                            <!--begin::Input group Name-->
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>

                                <div class="col-lg-8">

                                    <input type="text" name="name"
                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                           placeholder="Full name" value="{{ Auth::user()->name }}"/>

                                </div>

                            </div>


                            <!--begin::Input group Contact number-->
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Contact Number</label>
                                <div class="col-lg-8 fv-row">
                                    <input type="number" name="contact_number"
                                           class="form-control form-control-lg form-control-solid"
                                           placeholder="Contact Number"
                                           value="{{ old('contact_number') ?? $profile->contact_number }}"/>
                                    @error('contact_number')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>



                            <!--begin::Input group Age-->
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Date Of Birth</label>

                                <div class="col-lg-8 fv-row">
                                    <input type="date" name="age"
                                           class="form-control form-control-lg form-control-solid"
                                           value="{{ old('age') ?? $profile->age }}"/>
                                    @error('age')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <!--begin::Input group Gender-->
                            <div class="row mb-6">

                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span class="required">Gender</span>
                                    <span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"></i>
                                    </span>
                                </label>
                                <div class="col-lg-8 fv-row">
                                    <select name="gender" aria-label="Select a Gender" data-control="select2"
                                            data-placeholder="Select a Gender..."
                                            class="form-select form-select-solid form-select-lg fw-semibold">
                                        <option value="">Select a Gender...</option>
                                        <option value="male" {{ old('gender') ?? $profile->gender == 'male' ? 'selected' : '' }} >Male</option>
                                        <option value="female" {{ old('gender') ?? $profile->gender == 'female' ? 'selected' : '' }}>Female</option>
                                        <option value="others" {{ old('gender') ?? $profile->gender == 'others' ? 'selected' : '' }}>Others</option>
                                    </select>
                                    @error('gender')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>


                            </div>


                            <!--begin::Input group Location-->
                            <div class="row mb-6">

                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Location</label>

                                <div class="col-lg-8 fv-row">

                                    <input type="text" name="location"
                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                           placeholder="Location" value="{{ old('location') ?? $profile->location }}"/>

                                    @error('location')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!--end::Col-->
                            </div>


                            <!--begin::Input group Work Status-->
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Work Status</label>
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="work_status"
                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                           placeholder="Work Status" value="{{ old('work_status') ?? $profile->work_status }}"/>

                                    @error('work_status')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!--begin::Input group Job Complete-->
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Job Complete</label>

                                <div class="col-lg-8 fv-row">

                                    <input type="text" name="job_complete"
                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                           placeholder="Complete Job" value="{{ old('job_complete') ?? $profile->job_complete }}"/>
                                    @error('job_complete')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!--end::Col-->
                            </div>


                            <!--begin::Input group Job Experience-->
                            <div class="row mb-6">

                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Experience</label>

                                <div class="col-lg-8 fv-row">

                                    <input type="text" name="experience"
                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                           placeholder="Experience" value="{{ old('experience') ?? $profile->experiences }}"/>

                                    @error('experience')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!--end::Col-->
                            </div>

                            <!--begin::Input group Referable-->
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Referable</label>

                                <div class="col-lg-8 fv-row">

                                    <input type="text" name="referable"
                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                           placeholder="Referable" value="{{ old('referable') ?? $profile->referable }}"/>

                                    @error('referable')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!--end::Col-->
                            </div>

                            <!--begin::Input group CRP Certificate-->
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">CPR Certificate</label>

                                <div class="col-lg-8 fv-row">

                                    <input type="text" name="cpr_certificate"
                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                           placeholder="CPR Certificate" value="{{  old('cpr_certificate') ??  $profile->cpr_certificate }}"/>

                                    @error('cpr_certificate')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!--end::Col-->
                            </div>

                            <!--begin::Input group Driving License-->
                            <div class="row mb-6">

                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Driving license</label>



                                <div class="col-lg-8 fv-row">

                                    <input type="text" name="driving_license"
                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                           placeholder="Driving License" value="{{ old('driving_licence') ?? $profile->driving_licence }}"/>

                                    @error('driving_license')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>


                            </div>

                            <!--begin::Input group Verified Document-->
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Verified
                                    Documents</label>
                                <div class="col-lg-8 fv-row">

                                    <input type="text" name="verified_documents"
                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                           placeholder="Verified Document" value="{{ old('verified_documents') ?? $profile->verified_documents }}"/>

                                    @error('verified_documents')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>


                            </div>

                            <!--begin::Input group Star ratting-->
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label required fw-semibold fs-6">Star Ratting</label>
                                <div class="col-lg-8 fv-row">

                                    <input type="text" name="star_ratting"
                                           class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                           placeholder="star Ratting" value="{{ old('star_ratting') ?? $profile->star_ratting }}"/>

                                    @error('star_ratting')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>



                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            {{--                            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>--}}
                            <button type="submit" class="btn btn-primary" id="">Save Changes</button>
                        </div>

                    </form>
                    <!--end::Form-->
                </div>

            </div>
            <!--end::Basic info-->

        </div>
        <!--end::Content-->

    @endsection

    @section('modal')
        {{--    <!--begin::Modal - Add Service-->--}}
        {{--    <div class="modal fade" id="kt_modal_new_address" tabindex="-1" aria-hidden="true">--}}
        {{--        <div class="modal-dialog modal-dialog-centered mw-650px">--}}
        {{--            <div class="modal-content">--}}
        {{--                <form class="form" action="{{ route('services.store') }}" method="POST" id="kt_modal_new_address_form">--}}
        {{--                    @csrf--}}
        {{--                    <div class="modal-header" id="kt_modal_new_address_header">--}}
        {{--                        <h3 class="text-center mx-auto">Add New Service</h3>--}}
        {{--                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">--}}
        {{--                            <i class="ki-duotone ki-cross fs-1">--}}
        {{--                                <span class="path1"></span><span class="path2"></span>--}}
        {{--                            </i>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <!--begin::Modal body-->--}}
        {{--                    <div class="modal-body py-10 px-lg-17">--}}
        {{--                        <!--begin::Scroll-->--}}
        {{--                        <div--}}
        {{--                            class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll"--}}
        {{--                            data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"--}}
        {{--                            data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header"--}}
        {{--                            data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">--}}

        {{--                            <!--begin::Input group-->--}}
        {{--                            <div class="row mb-5">--}}
        {{--                                <div class="col-12 fv-row">--}}
        {{--                                    <label for="name" class="required fs-5 fw-semibold mb-2">Service name</label>--}}
        {{--                                    <input id="name" value="{{ old('name') }}" type="text" class="form-control form-control-solid" placeholder="service name" name="name" autofocus/>--}}
        {{--                                </div>--}}
        {{--                                @error('name')--}}
        {{--                                <div class="text-danger mt-1">{{ $message }}</div>--}}
        {{--                                @enderror--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}

        {{--                    <!--begin::Modal footer-->--}}
        {{--                    <div class="modal-footer flex-center">--}}
        {{--                        <button type="submit" id="kt_modal_new_address_submit1" class="btn btn-primary">--}}
        {{--                            <span class="indicator-label">Submit</span>--}}
        {{--                            <span class="indicator-progress">--}}
        {{--                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>--}}
        {{--                            </span>--}}
        {{--                        </button>--}}
        {{--                    </div>--}}
        {{--                </form>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--    </div>--}}

        {{--    <!--begin::Modal - Edit Service-->--}}
        {{--    <div class="modal fade" id="kt_modal_new_address_edit" tabindex="-1" aria-hidden="true">--}}
        {{--        <div class="modal-dialog modal-dialog-centered mw-650px">--}}
        {{--            <div class="modal-content">--}}
        {{--                <form class="form" method="POST" id="kt_modal_new_address_form">--}}
        {{--                    @csrf--}}
        {{--                    <input type="hidden" name="_method" value="PUT">--}}
        {{--                    <div class="modal-header" id="kt_modal_new_address_header">--}}
        {{--                        <h3 class="text-center mx-auto">Edit This Service</h3>--}}
        {{--                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">--}}
        {{--                            <i class="ki-duotone ki-cross fs-1">--}}
        {{--                                <span class="path1"></span><span class="path2"></span>--}}
        {{--                            </i>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <!--begin::Modal body-->--}}
        {{--                    <div class="modal-body py-10 px-lg-17" id="edit_modal">--}}
        {{--                        <!--begin::Scroll-->--}}
        {{--                        <div--}}
        {{--                            class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll"--}}
        {{--                            data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"--}}
        {{--                            data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header"--}}
        {{--                            data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">--}}

        {{--                            <!--begin::Input group-->--}}
        {{--                            <div class="row mb-5">--}}
        {{--                                <div class="col-12 fv-row">--}}
        {{--                                    <label for="edit_name" class="required fs-5 fw-semibold mb-2 required">Service name</label>--}}
        {{--                                    <input id="edit_name" value="{{ old('edit_name') }}" type="text" class="form-control form-control-solid" placeholder="service name" name="edit_name" autofocus/>--}}
        {{--                                </div>--}}
        {{--                                @error('edit_name')--}}
        {{--                                <div class="text-danger mt-1">{{ $message }}</div>--}}
        {{--                                @enderror--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}

        {{--                    <!--begin::Modal footer-->--}}
        {{--                    <div class="modal-footer flex-center">--}}
        {{--                        <button type="submit" id="kt_modal_new_address_submit1" class="btn btn-primary">--}}
        {{--                            <span class="indicator-label">Update</span>--}}
        {{--                            <span class="indicator-progress">--}}
        {{--                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>--}}
        {{--                            </span>--}}
        {{--                        </button>--}}
        {{--                    </div>--}}
        {{--                </form>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--    </div>--}}
    @endsection

    @section('js')
        {{--    @error('name')--}}
        {{--    <script>--}}
        {{--        document.querySelector('#add_service_button').click();--}}
        {{--    </script>--}}
        {{--    @enderror--}}
        {{--    @error('edit_name')--}}
        {{--    <script>--}}
        {{--        document.querySelector('#edit_service_button').click();--}}
        {{--        document.querySelector("[name='edit_name']").value = "{{ $errors->first('edit_name') }}";--}}
        {{--    </script>--}}
        {{--    @enderror--}}

        {{--    <script>--}}
        {{--        function pushTypeOnEditModal(item){--}}
        {{--            document.querySelector('#edit_modal').parentElement.action = '/services/'+ item.id;--}}
        {{--            document.querySelector("[name='edit_name']").value = item.name;--}}
        {{--        }--}}

        {{--        function deleteItem(id){--}}
        {{--            Swal.fire({--}}
        {{--                title: 'Are you sure?',--}}
        {{--                text: "You won't be able to revert this!",--}}
        {{--                icon: 'warning',--}}
        {{--                showCancelButton: true,--}}
        {{--                confirmButtonColor: '#3085d6',--}}
        {{--                cancelButtonColor: '#d33',--}}
        {{--                confirmButtonText: 'Yes, delete it!'--}}
        {{--            }).then((result) => {--}}
        {{--                if (result.isConfirmed) {--}}
        {{--                    let form = document.querySelector('#delete_form');--}}
        {{--                    form.action = '/services/'+ id;--}}
        {{--                    form.submit();--}}
        {{--                }--}}
        {{--            })--}}
        {{--        }--}}
        {{--    </script>--}}


        <!--begin::Vendors Javascript(used for this page only)-->
            <script src="{{ asset('/') }}assets/plugins/custom/datatables/datatables.bundle.js"></script>
            <!--end::Vendors Javascript-->

            <!--begin::Custom Javascript(used for this page only)-->
            <script src="{{ asset('/') }}assets/js/custom/account/settings/signin-methods.js"></script>
            <script src="{{ asset('/') }}assets/js/custom/account/settings/profile-details.js"></script>
            <script src="{{ asset('/') }}assets/js/custom/account/settings/deactivate-account.js"></script>
            <script src="{{ asset('/') }}assets/js/custom/pages/user-profile/general.js"></script>
            <script src="{{ asset('/') }}assets/js/widgets.bundle.js"></script>
            <script src="{{ asset('/') }}assets/js/custom/widgets.js"></script>
            <script src="{{ asset('/') }}assets/js/custom/apps/chat/chat.js"></script>
            <script src="{{ asset('/') }}assets/js/custom/utilities/modals/upgrade-plan.js"></script>
            <script src="{{ asset('/') }}assets/js/custom/utilities/modals/create-app.js"></script>
            <script src="{{ asset('/') }}assets/js/custom/utilities/modals/offer-a-deal/type.js"></script>
            <script src="{{ asset('/') }}assets/js/custom/utilities/modals/offer-a-deal/details.js"></script>
            <script src="{{ asset('/') }}assets/js/custom/utilities/modals/offer-a-deal/finance.js"></script>
            <script src="{{ asset('/') }}assets/js/custom/utilities/modals/offer-a-deal/complete.js"></script>
            <script src="{{ asset('/') }}assets/js/custom/utilities/modals/offer-a-deal/main.js"></script>
            <script src="{{ asset('/') }}assets/js/custom/utilities/modals/two-factor-authentication.js"></script>
            <script src="{{ asset('/') }}assets/js/custom/utilities/modals/users-search.js"></script>
            <!--end::Custom Javascript-->
@endsection


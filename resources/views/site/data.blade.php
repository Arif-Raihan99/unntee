@extends('admin.layouts.app')

@section('title')
    home
@endsection

@section('style')
    <link href="{{ asset('/') }}assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
@endsection

@section('body')
    <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 mb-2 flex-column justify-content-center my-0">
                    Site Data
                </h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('home') }}" class="text-muted text-hover-primary">Home </a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">
                        Site Data
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--begin::Content-->
    <div id="kt_app_content" class="app-content  flex-column-fluid ">
        <div id="kt_app_content_container" class="app-container  container-xxl ">

            <!--begin::Maintenance Mood-->
            @if(isset($siteData->status))
                <div class="card mb-5 mb-xl-10">
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Maintenance Mood</h3>
                        </div>
                    </div>
                    <div id="kt_account_settings_deactivate" class="collapse show">
                        <form action="{{ route('site.status') }}" id="statusSubmit" method="POST" class="form">
                            @csrf
                            <div class="card-body border-top p-9">
                                @if($siteData->status == 1)
                                    <div class="notice d-flex bg-light-success rounded border-success border border-dashed mb-9 p-6">
                                        <i class="ki-duotone ki-information fs-2tx text-success me-4">
                                            <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                        </i>
                                        <div class="d-flex flex-stack flex-grow-1 ">
                                            <div class=" fw-semibold">
                                                <h4 class="text-gray-900 fw-bold">Your site is Active</h4>
                                                <div class="fs-6 text-gray-700 ">For extra security, this requires you to confirm your email or phone number when you reset yousignr password.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                                        <i class="ki-duotone ki-information fs-2tx text-warning me-4">
                                            <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                        </i>
                                        <div class="d-flex flex-stack flex-grow-1 ">
                                            <div class=" fw-semibold">
                                                <h4 class="text-gray-900 fw-bold">Your site is under Maintenance</h4>
                                                <div class="fs-6 text-gray-700 ">For extra security, this requires you to confirm your email or phone number when you reset yousignr password.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                @if($siteData->status == 1)
                                    <input type="button" onclick="moodSubmit('On')" class="btn btn-danger fw-semibold" value="On Maintenance Mood">
                                @else
                                    <input type="button" onclick="moodSubmit('Off')" class="btn btn-success fw-semibold" value="Off Maintenance Mood">
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            @endif


            <!--begin::Debugger Status-->
            <div class="card mb-5 mb-xl-10">
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">Debugger Status</h3>
                    </div>
                </div>
                <div id="kt_account_settings_deactivate" class="collapse show">
                    <div class="card-body border-top p-9">
                        @if(!env('app_debug'))
                            <div class="notice d-flex bg-light-success rounded border-success border border-dashed mb-9 p-6">
                                <i class="ki-duotone ki-information fs-2tx text-success me-4">
                                    <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                </i>
                                <div class="d-flex flex-stack flex-grow-1 ">
                                    <div class=" fw-semibold">
                                        <h4 class="text-gray-900 fw-bold">Debugger Is Off</h4>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                                <i class="ki-duotone ki-information fs-2tx text-warning me-4">
                                    <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                </i>
                                <div class="d-flex flex-stack flex-grow-1 ">
                                    <div class=" fw-semibold">
                                        <h4 class="text-gray-900 fw-bold">Debugger Is Active</h4>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>


            <!--begin::Basic info-->
            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">Site All Data</h3>
                    </div>
                </div>
                <!--begin::Content-->
                <div  class="collapse show">
                    <form action="{{ route('site.data') }}" id="infoFormSubmit" method="POST" enctype="multipart/form-data" class="form">
                        @csrf
                        <div class="card-body border-top p-9">
                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Logo</label>

                                <div class="col-lg-8">
                                    <div class="image-input image-input-outline" data-kt-image-input="true">
                                        <div class="image-input-wrapper w-125px h-125px"
                                             style="background-image: url({{ isset($siteData->logo) ? $siteData->logo : '' }})">
                                        </div>
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" title="Change Logo" data-kt-image-input-action="change" data-bs-toggle="tooltip">
                                            <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span class="path2"></span></i>
                                            <input type="file" name="logo" accept="image/*"/>

                                        </label>
                                        @error('logo')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Favicon</label>

                                <div class="col-lg-8">
                                    <div class="image-input image-input-outline" data-kt-image-input="true">
                                        <div class="image-input-wrapper w-125px h-125px"
                                             style="background-image: url({{ isset($siteData->favicon) ? $siteData->favicon : '' }})">
                                        </div>
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" title="Change Favicon" data-kt-image-input-action="change" data-bs-toggle="tooltip">
                                            <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span class="path2"></span></i>
                                            <input type="file" name="favicon" accept="image/*"/>
                                        </label>
                                        @error('favicon')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                </div>
                            </div>

                            <div class="row mb-6">
                                <label for="copyright" class="col-lg-4 col-form-label fw-semibold fs-6"><span class="required">Footer copyright text</span></label>
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="footer_copyright" class="form-control form-control-lg form-control-solid"
                                           placeholder="Footer copyright text" value="{{ old('footer_copyright') ? old('footer_copyright')
                                           : (isset($siteData->footer_copyright) ? $siteData->footer_copyright : '') }}" id="copyright"/>
                                    @error('footer_copyright')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <input type="submit" class="btn btn-primary" onclick="infoSubmit()" value="Save Changes">
                        </div>
                    </form>
                </div>
            </div>


            <!--begin::Connected Accounts-->
{{--            <div class="card mb-5 mb-xl-10">--}}
{{--                <!--begin::Card header-->--}}
{{--                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"--}}
{{--                     data-bs-target="#kt_account_connected_accounts" aria-expanded="true"--}}
{{--                     aria-controls="kt_account_connected_accounts">--}}
{{--                    <div class="card-title m-0">--}}
{{--                        <h3 class="fw-bold m-0">Connected Accounts</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!--end::Card header-->--}}

{{--                <!--begin::Content-->--}}
{{--                <div id="kt_account_settings_connected_accounts" class="collapse show">--}}
{{--                    <!--begin::Card body-->--}}
{{--                    <div class="card-body border-top p-9">--}}

{{--                        <!--begin::Notice-->--}}
{{--                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">--}}
{{--                            <!--begin::Icon-->--}}
{{--                            <i class="ki-duotone ki-design-1 fs-2tx text-primary me-4"></i>--}}
{{--                            <!--end::Icon-->--}}

{{--                            <!--begin::Wrapper-->--}}
{{--                            <div class="d-flex flex-stack flex-grow-1 ">--}}
{{--                                <!--begin::Content-->--}}
{{--                                <div class=" fw-semibold">--}}

{{--                                    <div class="fs-6 text-gray-700 ">Two-factor authentication adds an--}}
{{--                                        extra layer of security to your account. To log in, in you'll--}}
{{--                                        need to provide a 4 digit amazing code. <a href="#"--}}
{{--                                                                                   class="fw-bold">Learn--}}
{{--                                            More</a></div>--}}
{{--                                </div>--}}
{{--                                <!--end::Content-->--}}

{{--                            </div>--}}
{{--                            <!--end::Wrapper-->--}}
{{--                        </div>--}}
{{--                        <!--end::Notice-->--}}

{{--                        <!--begin::Items-->--}}
{{--                        <div class="py-2">--}}
{{--                            <!--begin::Item-->--}}
{{--                            <div class="d-flex flex-stack">--}}
{{--                                <div class="d-flex">--}}
{{--                                    <img src="../assets/media/svg/brand-logos/google-icon.svg"--}}
{{--                                         class="w-30px me-6" alt=""/>--}}

{{--                                    <div class="d-flex flex-column">--}}
{{--                                        <a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Google</a>--}}
{{--                                        <div class="fs-6 fw-semibold text-gray-400">Plan properly your--}}
{{--                                            workflow--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex justify-content-end">--}}
{{--                                    <div class="form-check form-check-solid form-check-custom form-switch">--}}
{{--                                        <input class="form-check-input w-45px h-30px" type="checkbox"--}}
{{--                                               id="googleswitch" checked/>--}}
{{--                                        <label class="form-check-label" for="googleswitch"></label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--end::Item-->--}}

{{--                            <div class="separator separator-dashed my-5"></div>--}}

{{--                            <!--begin::Item-->--}}
{{--                            <div class="d-flex flex-stack">--}}
{{--                                <div class="d-flex">--}}
{{--                                    <img src="../assets/media/svg/brand-logos/github.svg"--}}
{{--                                         class="w-30px me-6" alt=""/>--}}

{{--                                    <div class="d-flex flex-column">--}}
{{--                                        <a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Github</a>--}}
{{--                                        <div class="fs-6 fw-semibold text-gray-400">Keep eye on on your--}}
{{--                                            Repositories--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex justify-content-end">--}}
{{--                                    <div class="form-check form-check-solid form-check-custom form-switch">--}}
{{--                                        <input class="form-check-input w-45px h-30px" type="checkbox"--}}
{{--                                               id="githubswitch" checked/>--}}
{{--                                        <label class="form-check-label" for="githubswitch"></label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--end::Item-->--}}

{{--                            <div class="separator separator-dashed my-5"></div>--}}

{{--                            <!--begin::Item-->--}}
{{--                            <div class="d-flex flex-stack">--}}
{{--                                <div class="d-flex">--}}
{{--                                    <img src="../assets/media/svg/brand-logos/slack-icon.svg"--}}
{{--                                         class="w-30px me-6" alt=""/>--}}

{{--                                    <div class="d-flex flex-column">--}}
{{--                                        <a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Slack</a>--}}
{{--                                        <div class="fs-6 fw-semibold text-gray-400">Integrate Projects--}}
{{--                                            Discussions--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex justify-content-end">--}}
{{--                                    <div class="form-check form-check-solid form-check-custom form-switch">--}}
{{--                                        <input class="form-check-input w-45px h-30px" type="checkbox"--}}
{{--                                               id="slackswitch"/>--}}
{{--                                        <label class="form-check-label" for="slackswitch"></label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!--end::Item-->--}}
{{--                        </div>--}}
{{--                        <!--end::Items-->--}}
{{--                    </div>--}}
{{--                    <!--end::Card body-->--}}

{{--                    <!--begin::Card footer-->--}}
{{--                    <div class="card-footer d-flex justify-content-end py-6 px-9">--}}
{{--                        <button class="btn btn-light btn-active-light-primary me-2">Discard</button>--}}
{{--                        <button class="btn btn-primary">Save Changes</button>--}}
{{--                    </div>--}}
{{--                    <!--end::Card footer-->--}}
{{--                </div>--}}
{{--                <!--end::Content-->--}}
{{--            </div>--}}
        </div>
    </div>

@endsection

@section('js')

    <script>
        function infoSubmit(){
            event.preventDefault();
            Swal.fire({
                title: 'Do you want to change site data?' ,
                showCancelButton: true,
                icon: 'question',
                confirmButtonText: 'Change',
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#infoFormSubmit').submit();
                }
            })
        }

        function moodSubmit(str){
            event.preventDefault();
            Swal.fire({
                title: 'Do you want to turn' + str + ' maintenance mood?' ,
                showCancelButton: true,
                icon: 'question',
                confirmButtonText: str,
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#statusSubmit').submit();
                }
            })
        }
    </script>

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
@endsection

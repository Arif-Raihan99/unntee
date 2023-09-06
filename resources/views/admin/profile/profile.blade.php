@extends('admin.layouts.app')

@section('title', 'Profile')

@section('style')
    <link href="{{ asset('/') }}assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
@endsection

@section('body')
    <!--being::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">My Profile</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">
                        Account
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--begin::Content-->
    <div id="kt_app_content" class="app-content  flex-column-fluid ">
        <div id="kt_app_content_container" class="app-container  container-xxl">
            <!--begin::Navbar-->
            <div class="card mb-5 mb-xl-10">
                <div class="card-body pt-9 pb-0">
                    <div class="d-flex flex-wrap flex-sm-nowrap">
                        <!--begin: Pic-->
                        <div class="me-7 mb-4">
                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                <img src="../assets/media/avatars/300-1.jpg" alt="image"/>
                                <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                            </div>
                        </div>
                        <!--begin::Info-->
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-2">
                                        <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">
                                            {{ $profile->user->name }}
                                        </a>
                                        <i class="ki-duotone ki-verify fs-1 text-primary">
                                            <span class="path1"></span><span class="path2"></span>
                                        </i>
                                    </div>

                                    <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                            <i class="ki-duotone ki-profile-circle fs-4 me-1">
                                                <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                            </i>{{ $profile->user->account_role == 'job' ? 'Job Seeker' : 'Service Seeker' }}
                                        </a>
                                        @if($profile->location)
                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                            <i class="ki-duotone ki-geolocation fs-4 me-1">
                                                <span class="path1"></span><span class="path2"></span>
                                            </i>{{ $profile->location }}
                                        </a>
                                        @endif
                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                            <i class="ki-duotone ki-sms fs-4 me-1">
                                                <span class="path1"></span><span class="path2"></span>
                                            </i>{{ $profile->user->email }}
                                        </a>
                                    </div>
                                </div>

                                <!--begin::Actions-->
                                <div class="d-flex my-4">
                                    <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal"
                                       data-bs-target="#kt_modal_offer_a_deal">Hire Me
                                    </a>
                                </div>
                            </div>

                            <div class="d-flex flex-wrap flex-stack">
                                <div class="d-flex flex-column flex-grow-1 pe-8">
                                    <div class="d-flex flex-wrap">
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <div class="d-flex align-items-center text-center">
                                                <div class="fs-2 fw-bold mx-auto" data-kt-countup="true" data-kt-countup-value="{{ $profile->job_complete }}">
                                                    0
                                                </div>
                                            </div>
                                            <div class="fw-semibold fs-6 text-gray-500">Job Complete</div>
                                        </div>
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <div class="d-flex align-items-center">
                                                <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
                                                    <span class="path1"></span><span class="path2"></span>
                                                </i>
                                                <div class="fs-2 fw-bold" data-kt-countup="true"
                                                     data-kt-countup-value="80">0
                                                </div>
                                            </div>
                                            <div class="fw-semibold fs-6 text-gray-400">Projects</div>
                                        </div>
                                        <!--begin::Stat-->
                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                            <div class="d-flex align-items-center">
                                                <div class="fs-2 fw-bold mx-auto" data-kt-countup="true"
                                                     data-kt-countup-value="60"
                                                     data-kt-countup-prefix="%">0
                                                </div>
                                            </div>
                                            <div class="fw-semibold fs-6 text-gray-500 text-center">Referable</div>
                                        </div>
                                    </div>
                                </div>
                                <!--begin::Progress-->
                                <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                    <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                        <span class="fw-semibold fs-6 text-gray-400">Profile Compleation</span>
                                        <span class="fw-bold fs-6">60%</span>
                                    </div>

                                    <div class="h-5px mx-3 w-100 bg-light mb-3">
                                        <div class="bg-success rounded h-5px" role="progressbar"
                                             style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--begin::Navs-->
                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="">Overview </a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="">Settings </a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="">Security </a>
                        </li>
{{--                        <li class="nav-item mt-2">--}}
{{--                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="">Activity </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item mt-2">--}}
{{--                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="">Billing </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item mt-2">--}}
{{--                            <a class="nav-link text-active-primary ms-0 me-10 py-5" href="">Statements </a>--}}
{{--                        </li>--}}
                        <li class="nav-item mt-2">
                            <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="">Referrals </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!--begin::details View-->
            <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                <div class="card-header cursor-pointer">
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">Profile Details</h3>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="btn btn-sm btn-primary align-self-center">Edit Profile</a>
                </div>

                <!--begin::Card body-->
                <div class="card-body p-9">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row mb-7 mt-7">
                                <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">{{ $profile->user->name }}</span>
                                </div>
                            </div>
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Company</label>
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-semibold text-gray-800 fs-6">Keenthemes</span>
                                </div>
                            </div>
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Contact Phone</label>
                                <div class="col-lg-8 d-flex align-items-center">
                                    <span class="fw-bold fs-6 text-gray-800 me-2">{{ $profile->phone }}</span>
                                </div>
                            </div>
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Company Site</label>
                                <div class="col-lg-8">
                                    <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">keenthemes.com</a>
                                </div>
                            </div>
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">
                                    Country
                                    <span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
                                <i class="ki-duotone ki-information fs-7">
                                    <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                </i>
                            </span>
                                </label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">Germany</span>
                                </div>
                            </div>
                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <label class="col-lg-4 fw-semibold text-muted">Communication</label>
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-gray-800">Email, Phone</span>
                                </div>
                            </div>
                            <!--begin::Input group-->
                            <div class="row mb-10">
                                <label class="col-lg-4 fw-semibold text-muted">Allow Changes</label>
                                <div class="col-lg-8">
                                    <span class="fw-semibold fs-6 text-gray-800">Yes</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-flush h-lg-100">
                                        <!--begin::Body-->
                                        <div class="card-body pt-0 ps-6">
                                            <div id="kt_charts_widget_5" class="min-h-auto"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Content container-->
    </div>

@endsection


@section('js')

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

    <!--begin::Custom Javascript(used for this page only)-->
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
    <script src="{{ asset('/') }}assets/js/custom/utilities/modals/users-search.js"></script>
@endsection

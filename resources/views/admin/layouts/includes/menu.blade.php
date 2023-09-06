<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
        <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
            <!--begin:Dashboard Menu link-->
            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-element-11 fs-2">
                            <span class="path1"></span><span class="path2"></span>
                            <span class="path3"></span><span class="path4"></span>
                        </i>
                    </span>
                    <span class="menu-title">Dashboards</span>
                </span>
            </div>

            <!--begin:Services Menu link-->
            <div class="menu-item menu-accordion">
                <a href="{{ route('services.index') }}">
                    <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-files-tablet fs-2">
                            <span class="path1"></span><span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title">Services</span>
                </span>
                </a>
            </div>
            <!--begin:Expertise Menu link-->
            <div class="menu-item menu-accordion">
                <a href="{{ route('expertises.index') }}">
                    <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-courier-express fs-2">
                            <span class="path1"></span><span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title">Expertise</span>
                </span>
                </a>
            </div>

{{--            <div class="menu-item pt-5">--}}
{{--                <div class="menu-content">--}}
{{--                    <span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
{{--                <span class="menu-link">--}}
{{--                    <span class="menu-icon">--}}
{{--                        <i class="ki-duotone ki-address-book fs-2">--}}
{{--                            <span class="path1"></span><span class="path2"></span><span class="path3"></span>--}}
{{--                        </i>--}}
{{--                    </span>--}}
{{--                    <span class="menu-title">User Profile</span>--}}
{{--                    <span class="menu-arrow"></span>--}}
{{--                </span>--}}
{{--                <div class="menu-sub menu-sub-accordion">--}}
{{--                    <div class="menu-item">--}}
{{--                        <a class="menu-link" href="">--}}
{{--                            <span class="bullet bullet-dot"></span><span class="menu-title">Overview</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="menu-item">--}}
{{--                        <a class="menu-link" href="">--}}
{{--                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>--}}
{{--                            <span class="menu-title">Projects</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}

{{--                    <!--begin:Menu item-->--}}
{{--                    <div class="menu-item">--}}
{{--                        <a class="menu-link" href="">--}}
{{--                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>--}}
{{--                            <span class="menu-title">Campaigns</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}

{{--                    <div class="menu-item">--}}
{{--                        <a class="menu-link" href="">--}}
{{--                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>--}}
{{--                            <span class="menu-title">Documents</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    --}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Followers</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Activity</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item-->--}}
{{--            <!--begin:Menu item-->--}}
{{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
{{--                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i--}}
{{--                            class="ki-duotone ki-element-plus fs-2"><span class="path1"></span><span--}}
{{--                                class="path2"></span><span class="path3"></span><span class="path4"></span><span--}}
{{--                                class="path5"></span></i></span><span class="menu-title">Account</span><span--}}
{{--                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->--}}
{{--                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Overview</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Settings</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Security</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Activity</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Billing</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Statements</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Referrals</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="bullet bullet-dot"></span><span--}}
{{--                                class="menu-title">API Keys</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Logs</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item-->--}}
{{--            <!--begin:Menu item-->--}}
{{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
{{--                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i--}}
{{--                            class="ki-duotone ki-user fs-2"><span class="path1"></span><span--}}
{{--                                class="path2"></span></i></span><span class="menu-title">Authentication</span><span--}}
{{--                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->--}}
{{--                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->--}}
{{--                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
{{--                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span--}}
{{--                                    class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Corporate Layout</span><span--}}
{{--                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->--}}
{{--                        <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Sign-in</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Sign-up</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Two-Factor</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span class="menu-title">Reset Password</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span class="menu-title">New Password</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub-->--}}
{{--                    </div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
{{--                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span--}}
{{--                                    class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Overlay Layout</span><span--}}
{{--                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->--}}
{{--                        <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Sign-in</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Sign-up</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Two-Factor</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span class="menu-title">Reset Password</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span class="menu-title">New Password</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub-->--}}
{{--                    </div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
{{--                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span--}}
{{--                                    class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Creative Layout</span><span--}}
{{--                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->--}}
{{--                        <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Sign-in</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Sign-up</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Two-Factor</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span class="menu-title">Reset Password</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span class="menu-title">New Password</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub-->--}}
{{--                    </div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
{{--                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span--}}
{{--                                    class="bullet bullet-dot"></span></span><span class="menu-title">Fancy Layout</span><span--}}
{{--                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->--}}
{{--                        <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Sign-in</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link menu-bullet" href=""><span--}}
{{--                                        class="bullet bullet-dot"></span><span class="menu-title">Sign-up</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Two-Factor</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span class="menu-title">Reset Password</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span class="menu-title">New Password</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub-->--}}
{{--                    </div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
{{--                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span--}}
{{--                                    class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Email Templates</span><span--}}
{{--                                class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->--}}
{{--                        <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span class="menu-title">Welcome Message</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span class="menu-title">Reset Password</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span class="menu-title">Subscription Confirmed</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span class="menu-title">Credit Card Declined</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Promo 1</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Promo 2</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Promo 3</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub-->--}}
{{--                    </div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Multi-steps Sign-up</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Welcome Message</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Verify Email</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Coming Soon</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Password Confirmation</span></a><!--end:Menu link-->--}}
{{--                    </div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Account Deactivation</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Error 404</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Error 500</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item-->--}}
{{--            <!--begin:Menu item-->--}}
{{--            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"--}}
{{--                 data-kt-menu-placement="right-start"--}}
{{--                 class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention">--}}
{{--                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i--}}
{{--                            class="ki-duotone ki-file fs-2"><span class="path1"></span><span--}}
{{--                                class="path2"></span></i></span><span class="menu-title">Corporate</span><span--}}
{{--                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->--}}
{{--                <div--}}
{{--                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-2 py-4 w-200px mh-75 overflow-auto">--}}
{{--                    <!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""> class="menu-bullet"><span--}}
{{--                                class="bullet bullet-dot"></span><span--}}
{{--                                class="menu-title">About</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Our Team</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Contact Us</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Licenses</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Sitemap</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item-->--}}
            <!--begin:Menu item-->



{{--            <div data-kt-menu-trigger="click" class="menu-item menuaccordion"><span class="menu-link"><span--}}
{{--                        class="menu-icon"><i--}}
{{--                            class="ki-duotone ki-abstract-39 fs-2"><span class="path1"></span><span--}}
{{--                                class="path2"></span></i></span><span class="menu-title">Social</span><span--}}
{{--                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->--}}
{{--                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Feeds</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Activty</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Followers</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Settings</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item-->--}}
{{--            <!--begin:Menu item-->--}}
{{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
{{--                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i--}}
{{--                            class="ki-duotone ki-bank fs-2"><span class="path1"></span><span--}}
{{--                                class="path2"></span></i></span><span class="menu-title">Blog</span><span--}}
{{--                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->--}}
{{--                <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Blog Home</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Blog Post</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item-->--}}
{{--            <!--begin:Menu item-->--}}
{{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
{{--                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i--}}
{{--                            class="ki-duotone ki-chart-pie-3 fs-2"><span class="path1"></span><span--}}
{{--                                class="path2"></span><span class="path3"></span></i></span><span--}}
{{--                        class="menu-title">FAQ</span><span--}}
{{--                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->--}}
{{--                <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">FAQ Classic</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">FAQ Extended</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item-->--}}
{{--            <!--begin:Menu item-->--}}
{{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
{{--                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i--}}
{{--                            class="ki-duotone ki-bucket fs-2"><span class="path1"></span><span--}}
{{--                                class="path2"></span><span class="path3"></span><span--}}
{{--                                class="path4"></span></i></span><span class="menu-title">Pricing</span><span--}}
{{--                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->--}}
{{--                <div class="menu-sub menu-sub-accordion menu-active-bg"><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Column Pricing</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Table Pricing</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item-->--}}
{{--            <!--begin:Menu item-->--}}
{{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
{{--                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i--}}
{{--                            class="ki-duotone ki-call fs-2"><span class="path1"></span><span--}}
{{--                                class="path2"></span><span class="path3"></span><span class="path4"></span><span--}}
{{--                                class="path5"></span><span class="path6"></span><span class="path7"></span><span--}}
{{--                                class="path8"></span></i></span><span class="menu-title">Careers</span><span--}}
{{--                        class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->--}}
{{--                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Careers List</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Careers Apply</span></a><!--end:Menu link--></div>--}}
{{--                    <!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item-->--}}
{{--            <!--begin:Menu item-->--}}
{{--            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
{{--                <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i--}}
{{--                            class="ki-duotone ki-color-swatch fs-2"><span class="path1"></span><span--}}
{{--                                class="path2"></span><span class="path3"></span><span class="path4"></span><span--}}
{{--                                class="path5"></span><span class="path6"></span><span class="path7"></span><span--}}
{{--                                class="path8"></span><span class="path9"></span><span class="path10"></span><span--}}
{{--                                class="path11"></span><span class="path12"></span><span class="path13"></span><span--}}
{{--                                class="path14"></span><span class="path15"></span><span class="path16"></span><span--}}
{{--                                class="path17"></span><span class="path18"></span><span class="path19"></span><span--}}
{{--                                class="path20"></span><span class="path21"></span></i></span><span--}}
{{--                        class="menu-title">Utilities</span><span class="menu-arrow"></span></span>--}}
{{--                <!--end:Menu link--><!--begin:Menu sub-->--}}
{{--                <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->--}}
{{--                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
{{--                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span--}}
{{--                                    class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Modals</span><span class="menu-arrow"></span></span>--}}
{{--                        <!--end:Menu link--><!--begin:Menu sub-->--}}
{{--                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->--}}
{{--                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
{{--                                <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">General</span><span--}}
{{--                                        class="menu-arrow"></span></span><!--end:Menu link-->--}}
{{--                                <!--begin:Menu sub-->--}}
{{--                                <div class="menu-sub menu-sub-accordion menu-active-bg">--}}
{{--                                    <!--begin:Menu item-->--}}
{{--                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                                class="menu-title">Invite Friends</span></a>--}}
{{--                                        <!--end:Menu link--></div><!--end:Menu item-->--}}
{{--                                    <!--begin:Menu item-->--}}
{{--                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                                class="menu-title">View Users</span></a><!--end:Menu link-->--}}
{{--                                    </div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                                class="menu-title">Select Users</span></a>--}}
{{--                                        <!--end:Menu link--></div><!--end:Menu item-->--}}
{{--                                    <!--begin:Menu item-->--}}
{{--                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                                class="menu-title">Upgrade Plan</span></a>--}}
{{--                                        <!--end:Menu link--></div><!--end:Menu item-->--}}
{{--                                    <!--begin:Menu item-->--}}
{{--                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                                class="menu-title">Share & Earn</span></a>--}}
{{--                                        <!--end:Menu link--></div><!--end:Menu item--></div>--}}
{{--                                <!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
{{--                                <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Forms</span><span--}}
{{--                                        class="menu-arrow"></span></span><!--end:Menu link-->--}}
{{--                                <!--begin:Menu sub-->--}}
{{--                                <div class="menu-sub menu-sub-accordion menu-active-bg">--}}
{{--                                    <!--begin:Menu item-->--}}
{{--                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                                class="menu-title">New Target</span></a><!--end:Menu link-->--}}
{{--                                    </div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                                class="menu-title">New Card</span></a><!--end:Menu link-->--}}
{{--                                    </div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                                class="menu-title">New Address</span></a>--}}
{{--                                        <!--end:Menu link--></div><!--end:Menu item-->--}}
{{--                                    <!--begin:Menu item-->--}}
{{--                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                                class="menu-title">Create API Key</span></a>--}}
{{--                                        <!--end:Menu link--></div><!--end:Menu item-->--}}
{{--                                    <!--begin:Menu item-->--}}
{{--                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                                class="menu-title">Bidding</span></a><!--end:Menu link-->--}}
{{--                                    </div><!--end:Menu item--></div><!--end:Menu sub--></div>--}}
{{--                            <!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
{{--                                <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Wizards</span><span--}}
{{--                                        class="menu-arrow"></span></span><!--end:Menu link-->--}}
{{--                                <!--begin:Menu sub-->--}}
{{--                                <div class="menu-sub menu-sub-accordion menu-active-bg">--}}
{{--                                    <!--begin:Menu item-->--}}
{{--                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                                class="menu-title">Create App</span></a><!--end:Menu link-->--}}
{{--                                    </div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                                class="bullet bullet-dot"></span><span--}}
{{--                                                class="menu-title">Create Campaign</span></a>--}}
{{--                                        <!--end:Menu link--></div><!--end:Menu item-->--}}
{{--                                    <!--begin:Menu item-->--}}
{{--                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                                class="menu-title">Create Business Acc</span></a>--}}
{{--                                        <!--end:Menu link--></div><!--end:Menu item-->--}}
{{--                                    <!--begin:Menu item-->--}}
{{--                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                                class="menu-title">Create Project</span></a>--}}
{{--                                        <!--end:Menu link--></div><!--end:Menu item-->--}}
{{--                                    <!--begin:Menu item-->--}}
{{--                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                                class="menu-title">Top Up Wallet</span></a>--}}
{{--                                        <!--end:Menu link--></div><!--end:Menu item-->--}}
{{--                                    <!--begin:Menu item-->--}}
{{--                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                                class="menu-title">Offer a Deal</span></a>--}}
{{--                                        <!--end:Menu link--></div><!--end:Menu item-->--}}
{{--                                    <!--begin:Menu item-->--}}
{{--                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                                class="menu-title">Two Factor Auth</span></a>--}}
{{--                                        <!--end:Menu link--></div><!--end:Menu item--></div>--}}
{{--                                <!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
{{--                                <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Search</span><span--}}
{{--                                        class="menu-arrow"></span></span><!--end:Menu link-->--}}
{{--                                <!--begin:Menu sub-->--}}
{{--                                <div class="menu-sub menu-sub-accordion menu-active-bg">--}}
{{--                                    <!--begin:Menu item-->--}}
{{--                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                                class="menu-title">Users</span></a><!--end:Menu link-->--}}
{{--                                    </div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
{{--                                                class="menu-title">Select Location</span></a>--}}
{{--                                        <!--end:Menu link--></div><!--end:Menu item--></div>--}}
{{--                                <!--end:Menu sub--></div><!--end:Menu item--></div><!--end:Menu sub-->--}}
{{--                    </div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
{{--                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span--}}
{{--                                    class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Search</span><span class="menu-arrow"></span></span>--}}
{{--                        <!--end:Menu link--><!--begin:Menu sub-->--}}
{{--                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link menu-bullet" href=""><span--}}
{{--                                        class="bullet bullet-dot"></span><span class="menu-title">Horizontal</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Vertical</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Users</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Location</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub-->--}}
{{--                    </div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">--}}
{{--                        <!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span--}}
{{--                                    class="bullet bullet-dot"></span></span><span--}}
{{--                                class="menu-title">Wizards</span><span class="menu-arrow"></span></span>--}}
{{--                        <!--end:Menu link--><!--begin:Menu sub-->--}}
{{--                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="bullet bullet-dot"></span><span class="menu-title">Horizontal</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Vertical</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span class="menu-title">Two Factor Auth</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span--}}
{{--                                        class="menu-title">Create App</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span class="menu-title">Create Campaign</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span class="menu-title">Create Account</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span class="menu-title">Create Project</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href=""><span--}}
{{--                                        class="menu-bullet"><span--}}
{{--                                            class="bullet bullet-dot"></span></span><span class="menu-title">Top Up Wallet</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->--}}
{{--                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="">--}}
{{--                                    class="menu-bullet"><span--}}
{{--                                        class="bullet bullet-dot"></span><span--}}
{{--                                        class="menu-title">Offer a Deal</span></a>--}}
{{--                                <!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub-->--}}
{{--                    </div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item-->--}}


            @if(Auth::user()->role == 2)
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-setting-2 fs-2">
                            <span class="path1"></span><span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title">Setting</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('site.data') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Site Data</span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link" href="">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Setting 2</span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link" href="">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Setting 3</span>
                        </a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link" href="">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Setting 4</span>
                        </a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

@php use App\View\Widgets\BreadcrumbWidget; @endphp
@extends('layout.main')
@section('title_page')
    Department
@endsection
@section('content_page')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                {{--            <x-breadcrumb-widget item_breadcrumb={{ $item_breadcrumb }} />--}}
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                     data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                     class="page-title d-flex align-items-center me-3 flex-wrap lh-1">
                    <!--begin::Breadcrumb-->

                    {!! BreadcrumbWidget::render() !!}
                    <!--end::Breadcrumb-->
                </div>

                <!--begin::Actions-->
                <div class="d-flex align-items-center py-1">
                    <!--begin::Wrapper-->
                    <div class="me-4">
                        <!--begin::Menu-->
                        <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bold"
                           data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                           data-kt-menu-flip="top-end">
                            <i class="ki-outline ki-filter fs-5 text-gray-500 me-1"></i>Filter</a>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                             id="kt_menu_6606605c2804f">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid select2-hidden-accessible"
                                                multiple="" data-kt-select2="true" data-close-on-select="false"
                                                data-placeholder="Select option"
                                                data-dropdown-parent="#kt_menu_6606605c2804f"
                                                data-allow-clear="true" data-select2-id="select2-data-7-jf6h"
                                                tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select><span
                                            class="select2 select2-container select2-container--bootstrap5"
                                            dir="ltr" data-select2-id="select2-data-8-ztxw"
                                            style="width: 100%;"><span class="selection"><span
                                                    class="select2-selection select2-selection--multiple form-select form-select-solid"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="-1" aria-disabled="false"><ul
                                                        class="select2-selection__rendered"
                                                        id="select2-ky4z-container"></ul><span
                                                        class="select2-search select2-search--inline"><textarea
                                                            class="select2-search__field" type="search"
                                                            tabindex="0" autocorrect="off" autocapitalize="none"
                                                            spellcheck="false" role="searchbox"
                                                            aria-autocomplete="list" autocomplete="off"
                                                            aria-label="Search"
                                                            aria-describedby="select2-ky4z-container"
                                                            placeholder="Select option"
                                                            style="width: 100%;"></textarea></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label
                                            class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1">
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label
                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2"
                                                   checked="checked">
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div
                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value=""
                                               name="notifications" checked="checked">
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset"
                                            class="btn btn-sm btn-light btn-active-light-primary me-2"
                                            data-kt-menu-dismiss="true">Reset
                                    </button>
                                    <button type="submit" class="btn btn-sm btn-primary"
                                            data-kt-menu-dismiss="true">Apply
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Button-->
                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                       data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>
                    <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <div id="kt_content_container" class="container-xxl">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Title</h3>
                                    {{--                                <div class="card-toolbar">--}}
                                    {{--                                    <button type="button" class="btn btn-sm btn-light">--}}
                                    {{--                                        Action--}}
                                    {{--                                    </button>--}}
                                    {{--                                </div>--}}
                                </div>
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-12 mb-5">
                                            <div class="form-group">
                                                <label for="date-range" class="form-label">Date Range</label>
                                                <input type="text" class="form-control" id="date-range"
                                                       name="date_range" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-12 mb-5">
                                            <div class="form-group">
                                                <label for="search" class="form-label">Search</label>
                                                <input type="text" class="form-control" id="search"
                                                       name="search" placeholder="Search..." value="">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-12 mb-5">
                                            <div class="form-group">
                                                <label for="campaign" class="form-label">Campaign</label>
                                                <select
                                                    class="form-select select2-search select2-hidden-accessible"
                                                    id="campaign" name="campaign"
                                                    data-select2-id="select2-data-campaign" tabindex="-1"
                                                    aria-hidden="true">
                                                    <option value="" data-select2-id="select2-data-2-es0s">
                                                        Select Campaign
                                                    </option>
                                                    <option value="205">
                                                        🟢 766596
                                                        | test offers 25.03
                                                    </option>
                                                    <option value="204">
                                                        🟢 469891
                                                        | [Test] Game
                                                    </option>
                                                    <option value="203">
                                                        🟢 187671
                                                        | Casino - T4
                                                    </option>
                                                    <option value="202">
                                                        🟢 575743
                                                        | AI Sex Chat - T4
                                                    </option>
                                                    <option value="201">
                                                        🟢 010533
                                                        | Test Landing Pages
                                                    </option>
                                                    <option value="188">
                                                        🟢 075426
                                                        | [CPAmatica] Dating - WW (comick)
                                                    </option>
                                                    <option value="186">
                                                        🟢 747565
                                                        | [CPAmatica] FantasyGF
                                                    </option>
                                                    <option value="185">
                                                        🟢 357580
                                                        | Kaito test 12.03
                                                    </option>
                                                </select><span
                                                    class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr" data-select2-id="select2-data-1-vztg"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single form-select"
                                                            role="combobox" aria-haspopup="true"
                                                            aria-expanded="false" tabindex="0"
                                                            aria-disabled="false"
                                                            aria-labelledby="select2-campaign-container"
                                                            aria-controls="select2-campaign-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-campaign-container" role="textbox"
                                                                aria-readonly="true" title="Select "><span
                                                                    class="select2-selection__placeholder">Select </span></span><span
                                                                class="select2-selection__arrow"
                                                                role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper"
                                                        aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-12 mb-5">
                                            <div class="form-group">
                                                <label for="grouping" class="form-label">Grouping</label>
                                                <select
                                                    class="form-select select2-search select2-hidden-accessible"
                                                    id="grouping" name="grouping[]" multiple=""
                                                    data-select2-id="select2-data-grouping" tabindex="-1"
                                                    aria-hidden="true">
                                                    <option value="date" selected=""
                                                            data-select2-id="select2-data-4-5jif">Date
                                                    </option>
                                                    <option value="creative_campaign_id">
                                                        Campaign
                                                    </option>
                                                    <option value="creative_offer_id">
                                                        Offer
                                                    </option>
                                                </select><span
                                                    class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr" data-select2-id="select2-data-3-jb99"
                                                    style="width: 100%;"><span class="selection"><span
                                                            class="select2-selection select2-selection--multiple form-select select2-selection--clearable"
                                                            role="combobox" aria-haspopup="true"
                                                            aria-expanded="false" tabindex="-1"
                                                            aria-disabled="false"><button type="button"
                                                                                          class="select2-selection__clear"
                                                                                          tabindex="-1"
                                                                                          title="Remove all items"
                                                                                          aria-label="Remove all items"
                                                                                          aria-describedby="select2-grouping-container"
                                                                                          data-select2-id="select2-data-6-2vm5"><span
                                                                    aria-hidden="true">×</span></button><ul
                                                                class="select2-selection__rendered"
                                                                id="select2-grouping-container"><li
                                                                    class="select2-selection__choice" title="Date
                                    " data-select2-id="select2-data-5-8dlr"><button type="button"
                                                                                    class="select2-selection__choice__remove"
                                                                                    tabindex="-1" title="Remove item"
                                                                                    aria-label="Remove item"
                                                                                    aria-describedby="select2-grouping-container-choice-5i6r-date"><span
                                                                            aria-hidden="true">×</span></button><span
                                                                        class="select2-selection__choice__display"
                                                                        id="select2-grouping-container-choice-5i6r-date">Date
                                    </span></li></ul><span class="select2-search select2-search--inline"><textarea
                                                                    class="select2-search__field" type="search"
                                                                    tabindex="0" autocorrect="off"
                                                                    autocapitalize="none" spellcheck="false"
                                                                    role="searchbox" aria-autocomplete="list"
                                                                    autocomplete="off" aria-label="Search"
                                                                    aria-describedby="select2-grouping-container"
                                                                    placeholder=""
                                                                    style="width: 0.75em;"></textarea></span></span></span><span
                                                        class="dropdown-wrapper"
                                                        aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-12 mb-5">
                                            <div class="form-group">
                                                <label for="submit" class="form-label">&nbsp;</label>
                                                <div class="btn-actions">
                                                    <button type="submit" class="btn btn-primary">Submit
                                                    </button>
                                                    <a href="https://pop.diveinthebluesky.biz/creative-banner/creative-reports"
                                                       class="btn btn-secondary">Reset</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered" id="table-offers">
                                            <thead>
                                            <tr class="text-center">
                                                <th style="width: 100px;">Zone ID</th>
                                                <th>Name</th>
                                                <th style="width: 90px;">Status</th>
                                                <th class="stats">Ad Requests</th>
                                                <th class="stats">BG Imps</th>
                                                <th class="stats">BG Clicks</th>
                                                <th class="stats">CTR %</th>
                                                <th class="stats">Revenue</th>
                                                <th class="stats">Fill Rate (%)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="nukatu-row">
                                                <td class="text-center "><b>#469891</b></td>
                                                <td class="nukatu_name">
                                                    [Test] Game
                                                    <span class="action-column">

                                                <a target="_blank"
                                                   href="https://pop.diveinthebluesky.biz/creative-banner/creative-reports?date_range=2025-03-29%20-%202025-03-29&amp;campaign=204&amp;grouping%5B0%5D=date&amp;grouping%5B1%5D=creative_offer_id"
                                                   class="text-blue-600 me-2" title="View Report">
                                                        <i class="fa fs-2 fa-line-chart" style="color:#0a6aa1;"></i>
                                                    </a>

                                                <a href="https://pop.diveinthebluesky.biz/creative-banner/campaigns/204/edit"
                                                   class="text-blue-600 me-2" title="Edit Campaign">
                                                    <i class="fa fs-2 fa-edit" style="color:#0a6aa1;"></i>
                                                </a>
                                                <a href="https://pop.diveinthebluesky.biz/creative-banner/campaigns/clone/204"
                                                   class="text-blue-600 me-2" title="Clone Campaign">
                                                     <i class="fa fs-2 fa-clone" style="color:#0a6aa1;"></i>
                                                </a>
                                                <form
                                                    action="https://pop.diveinthebluesky.biz/creative-banner/campaigns/204"
                                                    method="POST" class="d-inline" id="form-delete-campaign-204">
                                                    <input type="hidden" name="_token"
                                                           value="UeJ7XtZ7GY7uDZp6fhefHc2Afq47GWGTlskzhHnp"
                                                           autocomplete="off">                                                    <input
                                                        type="hidden" name="_method" value="DELETE">                                                    <button
                                                        type="submit" class="btn-delete" title="Delete Campaign"
                                                        style="background: transparent; border: none; color: #e63757;">
                                                        <i class="fa fs-2 fa-trash" style="color: #0a6aa1"></i>
                                                    </button>
                                                </form>

                                                <button class="btn-show-code"
                                                        style="background: transparent; border: none; color: #e63757;"
                                                        title="Show Code" data-id="204">
                                                    <i class="fa fs-2 fa-code me-1" style="color: #0a6aa1"></i>
                                                </button>
                                            </span>
                                                </td>
                                                <td>
                                                    <div
                                                        class="d-flex justify-content-center align-items-center">
                                                        <i class="fas fa-check-circle text-success fs-3"
                                                           title="Active"></i>
                                                    </div>
                                                </td>
                                                <td class="text-end">938,797</td>
                                                <td class="text-end">623,555</td>
                                                <td class="text-end">1,561</td>
                                                <td class="text-end">0.25</td>
                                                <td class="text-end">-</td>
                                                <td class="text-end">66.42</td>

                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr class="text-center fw-bold">
                                                <td>Total</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td class="text-end">1,182,630</td>
                                                <td class="text-end">801,855</td>
                                                <td class="text-end">2,172</td>
                                                <td class="text-end">-</td>
                                                <td class="text-end">0.00</td>
                                                <td class="text-end">-</td>

                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="pagination-wrapper float-end">
                                        <ul class="pagination">
                                            <li class="page-item previous disabled"><a href="#"
                                                                                       class="page-link"><i
                                                        class="previous"></i></a></li>
                                            <li class="page-item "><a href="#" class="page-link">1</a></li>
                                            <li class="page-item active"><a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="page-item "><a href="#" class="page-link">3</a></li>
                                            <li class="page-item "><a href="#" class="page-link">...</a></li>
                                            <li class="page-item "><a href="#" class="page-link">5</a></li>
                                            <li class="page-item "><a href="#" class="page-link">6</a></li>
                                            <li class="page-item next"><a href="#" class="page-link"><i
                                                        class="next"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection

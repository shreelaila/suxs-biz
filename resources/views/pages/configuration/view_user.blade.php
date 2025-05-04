@extends('layouts.main')
@section('content')
    <div class="content">

        <x-breadcrumbs :bcdata="$breadcrumbs" />
        <main class="main" id="top">
            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="pb-9">
                <div class="container-small">
                    <div class="row align-items-center justify-content-between g-3 mb-4">
                        <div class="col-auto">
                        </div>

                    </div>
                    <div class="row g-3 mb-6">
                        <div class="col-12 col-lg-8">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="border-bottom border-dashed pb-4">
                                        <div class="row align-items-center g-3 g-sm-5 text-center text-sm-start">
                                            <div class="col-12 col-sm-auto">
                                                <input class="d-none" id="avatarFile" type="file" />
                                                <label class="cursor-pointer avatar avatar-5xl" for="avatarFile">
                                                    {{-- <img class="rounded-circle"
                                                        src="{{ Storage::disk('s3')->temporaryUrl($user->profile_picture, now()->addMinutes(2)) }}"
                                                        alt="" /> --}}
                                                </label>
                                            </div>
                                            <div class="col-12 col-sm-auto flex-1">
                                                {{-- <h3>{{ isset($user) ? $user->branch_name : '' }}</h3> --}}
                                                <p class="text-body-secondary">{{ isset($user) ? $user->firstname : '' }}
                                                </p>
                                                <div>
                                                    <a class="me-2" href="#!"><span
                                                            class="fab fa-linkedin-in text-body-quaternary text-opacity-75 text-primary-hover"></span></a><a
                                                        class="me-2" href="#!"><span
                                                            class="fab fa-facebook text-body-quaternary text-opacity-75 text-primary-hover"></span></a><a
                                                        href="#!"><span
                                                            class="fab fa-twitter text-body-quaternary text-opacity-75 text-primary-hover"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-between-center pt-4">
                                        <div>
                                            <h6 class="mb-2 text-body-secondary">Total Shipping</h6>
                                            <h4 class="fs-7 text-body-highlight mb-0">$894</h4>
                                        </div>
                                        <div class="text-end">
                                            <h6 class="mb-2 text-body-secondary">Last Order</h6>
                                            <h4 class="fs-7 text-body-highlight mb-0">1 week ago</h4>
                                        </div>
                                        <div class="text-end">
                                            <h6 class="mb-2 text-body-secondary">Total Orders</h6>
                                            <h4 class="fs-7 text-body-highlight mb-0">97</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="border-bottom border-dashed">
                                        <h4 class="mb-3">
                                            Default Address
                                            <button class="btn btn-link p-0" type="button">
                                                <span class="fas fa-edit fs-9 ms-3 text-body-quaternary"></span>
                                            </button>
                                        </h4>
                                    </div>
                                    <div class="pt-4">
                                        <div class="row justify-content-between">
                                            <div class="col-12">
                                                <p class="text-body-secondary">
                                                    <span>{{ isset($user) ? $user->address_line1 : '' }},</span><br>
                                                    <span>{{ isset($user) ? $user->address_line2 : '' }},</span><br>
                                                    <span>{{ isset($user) ? $user->cities->city_name : '' }},</span><br>
                                                    {{-- <span>{{ isset($user) ? $user->state->state_name : '' }},</span><br> --}}
                                                    <span>{{ isset($user) ? $user->countries->name : '' }}</span> -
                                                    {{ isset($user) ? $user->pin_code : '' }}.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top border-dashed pt-4">
                                        <div class="row flex-between-center mb-2">
                                            <div class="col-auto">
                                                <h5 class="text-body-highlight mb-0">Email</h5>
                                            </div>
                                            <div class="col-auto">
                                                <a class="lh-1"
                                                    href="mailto:{{ isset($user) ? $user->email : '' }}">{{ isset($user) ? $user->email : '' }}</a>
                                            </div>
                                        </div>
                                        <div class="row flex-between-center">
                                            <div class="col-auto">
                                                <h5 class="text-body-highlight mb-0">Phone</h5>
                                            </div>
                                            <div class="col-auto">
                                                <a
                                                    href="tel:{{ isset($branch) ? $branch->contact_number : '' }}">{{ isset($branch) ? $branch->contact_number : '' }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="scrollbar">
                            <ul class="nav nav-underline fs-9 flex-nowrap mb-3 pb-1" id="myTab" role="tablist">
                                <li class="nav-item me-3">
                                    <a class="nav-link text-nowrap active" id="orders-tab" data-bs-toggle="tab"
                                        href="#tab-orders" role="tab" aria-controls="tab-orders"
                                        aria-selected="true"><span class="fas fa-shopping-cart me-2"></span>Orders
                                        <span class="text-body-tertiary fw-normal"> (35)</span></a>
                                </li>
                                <li class="nav-item me-3">
                                    <a class="nav-link text-nowrap" id="reviews-tab" data-bs-toggle="tab"
                                        href="#tab-reviews" role="tab" aria-controls="tab-orders"
                                        aria-selected="true"><span class="fas fa-star me-2"></span>Reviews<span
                                            class="text-body-tertiary fw-normal">
                                            (24)</span></a>
                                </li>
                                <li class="nav-item me-3">
                                    <a class="nav-link text-nowrap" id="stores-tab" data-bs-toggle="tab"
                                        href="#tab-stores" role="tab" aria-controls="tab-stores"
                                        aria-selected="true"><span class="fas fa-home me-2"></span>Vendors</a>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content" id="profileTabContent">
                            <div class="tab-pane fade show active" id="tab-orders" role="tabpanel"
                                aria-labelledby="orders-tab">
                                <div class="border-top border-bottom border-translucent" id="profileOrdersTable"
                                    data-list='{"valueNames":["order","status","delivery","date","total"],"page":6,"pagination":true}'>
                                    <div class="table-responsive scrollbar">
                                        <table class="table fs-9 mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="sort white-space-nowrap align-middle pe-3 ps-0"
                                                        scope="col" data-sort="order"
                                                        style="width: 15%; min-width: 140px">
                                                        ORDER
                                                    </th>
                                                    <th class="sort align-middle pe-3" scope="col" data-sort="status"
                                                        style="width: 15%; min-width: 180px">
                                                        STATUS
                                                    </th>
                                                    <th class="sort align-middle text-start" scope="col"
                                                        data-sort="delivery" style="width: 20%; min-width: 160px">
                                                        DELIVERY METHOD
                                                    </th>
                                                    <th class="sort align-middle pe-0 text-end" scope="col"
                                                        data-sort="date" style="width: 15%; min-width: 160px">
                                                        DATE
                                                    </th>
                                                    <th class="sort align-middle text-end" scope="col"
                                                        data-sort="total" style="width: 15%; min-width: 160px">
                                                        TOTAL
                                                    </th>
                                                    <th class="align-middle pe-0 text-end" scope="col"
                                                        style="width: 15%"></th>
                                                </tr>
                                            </thead>
                                            <tbody class="list" id="profile-order-table-body">
                                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                    <td class="order align-middle white-space-nowrap py-2 ps-0">
                                                        <a class="fw-semibold text-primary" href="#!">#2453</a>
                                                    </td>
                                                    <td
                                                        class="status align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2">
                                                        <span class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                                                                class="badge-label">Shipped</span><span class="ms-1"
                                                                data-feather="check"
                                                                style="height: 12.8px; width: 12.8px"></span></span>
                                                    </td>
                                                    <td class="delivery align-middle white-space-nowrap text-body py-2">
                                                        Cash on delivery
                                                    </td>
                                                    <td class="total align-middle text-body-tertiary text-end py-2">
                                                        Dec 12, 12:56 PM
                                                    </td>
                                                    <td
                                                        class="date align-middle fw-semibold text-end py-2 text-body-highlight">
                                                        $87
                                                    </td>
                                                    <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                                                        <div class="btn-reveal-trigger position-static">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent">
                                                                <span class="fas fa-ellipsis-h fs-10"></span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                                <a class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                    <td class="order align-middle white-space-nowrap py-2 ps-0">
                                                        <a class="fw-semibold text-primary" href="#!">#2446</a>
                                                    </td>
                                                    <td
                                                        class="status align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2">
                                                        <span class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                                                                class="badge-label">shipped</span><span class="ms-1"
                                                                data-feather="check"
                                                                style="height: 12.8px; width: 12.8px"></span></span>
                                                    </td>
                                                    <td class="delivery align-middle white-space-nowrap text-body py-2">
                                                        Express
                                                    </td>
                                                    <td class="total align-middle text-body-tertiary text-end py-2">
                                                        Nov 12, 12:20 PM
                                                    </td>
                                                    <td
                                                        class="date align-middle fw-semibold text-end py-2 text-body-highlight">
                                                        $4116
                                                    </td>
                                                    <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                                                        <div class="btn-reveal-trigger position-static">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent">
                                                                <span class="fas fa-ellipsis-h fs-10"></span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                                <a class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                    <td class="order align-middle white-space-nowrap py-2 ps-0">
                                                        <a class="fw-semibold text-body-tertiary text-opacity-85 pointers-events-none text-decoration-none"
                                                            href="#!">#2445</a>
                                                    </td>
                                                    <td
                                                        class="status align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2">
                                                        <span class="badge badge-phoenix fs-10 badge-phoenix-success"><span
                                                                class="badge-label">fulfilled</span><span class="ms-1"
                                                                data-feather="check"
                                                                style="height: 12.8px; width: 12.8px"></span></span>
                                                    </td>
                                                    <td class="delivery align-middle white-space-nowrap text-body py-2">
                                                        Free shipping
                                                    </td>
                                                    <td class="total align-middle text-body-tertiary text-end py-2">
                                                        Oct 19, 1:20 PM
                                                    </td>
                                                    <td
                                                        class="date align-middle fw-semibold text-end py-2 text-body-tertiary text-opacity-85">
                                                        $4116
                                                    </td>
                                                    <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                                                        <div class="btn-reveal-trigger position-static">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent">
                                                                <span class="fas fa-ellipsis-h fs-10"></span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                                <a class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                                        <div class="col-auto d-flex">
                                            <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body"
                                                data-list-info="data-list-info"></p>
                                            <a class="fw-semibold" href="#!" data-list-view="*">View all<span
                                                    class="fas fa-angle-right ms-1"
                                                    data-fa-transform="down-1"></span></a><a class="fw-semibold d-none"
                                                href="#!" data-list-view="less">View Less<span
                                                    class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                                        </div>
                                        <div class="col-auto d-flex">
                                            <button class="page-link" data-list-pagination="prev">
                                                <span class="fas fa-chevron-left"></span>
                                            </button>
                                            <ul class="mb-0 pagination"></ul>
                                            <button class="page-link pe-0" data-list-pagination="next">
                                                <span class="fas fa-chevron-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="border-y" id="profileRatingTable"
                                    data-list='{"valueNames":["product","rating","review","status","date"],"page":6,"pagination":true}'>
                                    <div class="table-responsive scrollbar">
                                        <table class="table fs-9 mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="sort white-space-nowrap align-middle" scope="col"
                                                        style="min-width: 220px" data-sort="product">
                                                        PRODUCT
                                                    </th>
                                                    <th class="sort align-middle" scope="col" data-sort="rating"
                                                        style="max-width: 10%">
                                                        RATING
                                                    </th>
                                                    <th class="sort align-middle" scope="col" style="min-width: 480px"
                                                        data-sort="review">
                                                        REVIEW
                                                    </th>
                                                    <th class="sort align-middle" scope="col" style="max-width: 12%"
                                                        data-sort="status">
                                                        STATUS
                                                    </th>
                                                    <th class="sort text-end align-middle" scope="col"
                                                        style="max-width: 10%" data-sort="date">
                                                        DATE
                                                    </th>
                                                    <th class="sort text-end pe-0 align-middle" scope="col"
                                                        style="width: 7%"></th>
                                                </tr>
                                            </thead>
                                            <tbody class="list" id="profile-review-table-body">
                                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                    <td class="align-middle product pe-3">
                                                        <a class="fw-semibold line-clamp-1"
                                                            href="../../../apps/e-commerce/landing/product-details.html">Fitbit
                                                            Sense Advanced Smartwatch with Tools for
                                                            Heart Health, Stress Management &amp; Skin
                                                            Temperature Trends, Carbon/Graphite, One Size (S
                                                            &amp; L Bands)</a>
                                                    </td>
                                                    <td class="align-middle rating white-space-nowrap fs-10">
                                                        <span class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa-regular fa-star text-warning-light"
                                                            data-bs-theme="light"></span>
                                                    </td>
                                                    <td class="align-middle review pe-7">
                                                        <p class="fw-semibold text-body-highlight mb-0 line-clamp-2">
                                                            This Fitbit is fantastic! I was trying to be in
                                                            better shape and needed some motivation, so I
                                                            decided to treat myself to a new Fitbit.
                                                        </p>
                                                    </td>
                                                    <td class="align-middle status pe-9">
                                                        <span
                                                            class="badge badge-phoenix fs-10 badge-phoenix-success">Approaved<span
                                                                class="ms-1" data-feather="check"
                                                                style="height: 12.8px; width: 12.8px"></span></span>
                                                    </td>
                                                    <td class="align-middle text-end date white-space-nowrap">
                                                        <p class="text-body-tertiary mb-0">Just now</p>
                                                    </td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent">
                                                                <span class="fas fa-ellipsis-h fs-10"></span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                                <a class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                    <td class="align-middle product pe-3">
                                                        <a class="fw-semibold line-clamp-1"
                                                            href="../../../apps/e-commerce/landing/product-details.html">iPhone
                                                            13 pro max-Pacific Blue-128GB storage</a>
                                                    </td>
                                                    <td class="align-middle rating white-space-nowrap fs-10">
                                                        <span class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa-regular fa-star text-warning-light"
                                                            data-bs-theme="light"></span>
                                                    </td>
                                                    <td class="align-middle review pe-7">
                                                        <p class="fw-semibold text-body-highlight mb-0 line-clamp-2">
                                                            The order was delivered ahead of schedule. To give
                                                            us additional time, you should leave the packaging
                                                            sealed with plastic.
                                                        </p>
                                                    </td>
                                                    <td class="align-middle status pe-9">
                                                        <span
                                                            class="badge badge-phoenix fs-10 badge-phoenix-warning">Pending<span
                                                                class="ms-1" data-feather="clock"
                                                                style="height: 12.8px; width: 12.8px"></span></span>
                                                    </td>
                                                    <td class="align-middle text-end date white-space-nowrap">
                                                        <p class="text-body-tertiary mb-0">
                                                            Dec 9, 2:28 PM
                                                        </p>
                                                    </td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent">
                                                                <span class="fas fa-ellipsis-h fs-10"></span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                                <a class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                    <td class="align-middle product pe-3">
                                                        <a class="fw-semibold line-clamp-1"
                                                            href="../../../apps/e-commerce/landing/product-details.html">Apple
                                                            MacBook Pro 13 inch-M1-8/256GB-space</a>
                                                    </td>
                                                    <td class="align-middle rating white-space-nowrap fs-10">
                                                        <span class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star-half-alt star-icon text-warning"></span>
                                                    </td>
                                                    <td class="align-middle review pe-7">
                                                        <p class="fw-semibold text-body-highlight mb-0 line-clamp-2">
                                                            It's a Mac, after all. Once you've gone Mac,
                                                            there's no going back. My first Mac lasted over
                                                            nine years, and this is my second.
                                                        </p>
                                                    </td>
                                                    <td class="align-middle status pe-9">
                                                        <span
                                                            class="badge badge-phoenix fs-10 badge-phoenix-success">Approaved<span
                                                                class="ms-1" data-feather="check"
                                                                style="height: 12.8px; width: 12.8px"></span></span>
                                                    </td>
                                                    <td class="align-middle text-end date white-space-nowrap">
                                                        <p class="text-body-tertiary mb-0">
                                                            Dec 4, 12:56 PM
                                                        </p>
                                                    </td>
                                                    <td class="align-middle white-space-nowrap text-end pe-0">
                                                        <div class="btn-reveal-trigger position-static">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent">
                                                                <span class="fas fa-ellipsis-h fs-10"></span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                                <a class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                                        <div class="col-auto d-flex">
                                            <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body"
                                                data-list-info="data-list-info"></p>
                                            <a class="fw-semibold" href="#!" data-list-view="*">View all<span
                                                    class="fas fa-angle-right ms-1"
                                                    data-fa-transform="down-1"></span></a><a class="fw-semibold d-none"
                                                href="#!" data-list-view="less">View Less<span
                                                    class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                                        </div>
                                        <div class="col-auto d-flex">
                                            <button class="page-link" data-list-pagination="prev">
                                                <span class="fas fa-chevron-left"></span>
                                            </button>
                                            <ul class="mb-0 pagination"></ul>
                                            <button class="page-link pe-0" data-list-pagination="next">
                                                <span class="fas fa-chevron-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-stores" role="tabpanel" aria-labelledby="wishlist-tab">
                                <div class="border-y border-translucent mb-6" id="profileStoreTable"
                                    data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":5,"pagination":true}'>
                                    <div class="table-responsive scrollbar">
                                        <table class="table table-sm fs-9 mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="sort white-space-nowrap align-middle fs-10" scope="col"
                                                        style="width: 7%; min-width: 80px"></th>
                                                    <th class="sort white-space-nowrap align-middle" scope="col"
                                                        style="width: 20%; min-width: 150px" data-sort="products">
                                                        VENDOR
                                                    </th>
                                                    <th class="sort align-middle" scope="col" data-sort="color"
                                                        style="width: 15%; min-width: 150px">
                                                        STORE RATING
                                                    </th>
                                                    <th class="sort align-middle text-end" scope="col"
                                                        data-sort="price" style="width: 12%; min-width: 150px">
                                                        ORDERS
                                                    </th>
                                                    <th class="sort align-middle text-end" scope="col"
                                                        data-sort="size" style="width: 15%; min-width: 150px">
                                                        TOTAL SPENT
                                                    </th>
                                                    <th class="sort align-middle text-end" scope="col"
                                                        data-sort="price" style="width: 15%; min-width: 150px">
                                                        LAST ORDER
                                                    </th>
                                                    <th class="sort align-middle text-end pe-0" scope="col"
                                                        style="width: 30%; min-width: 150px"></th>
                                                </tr>
                                            </thead>
                                            <tbody class="list" id="profile-stores-table-body">
                                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                    <td class="align-middle white-space-nowrap ps-0 py-0">
                                                        <a href="#!">
                                                            <img src="../../../assets/img//brand2/dell.png" alt=""
                                                                width="53" /></a>
                                                    </td>
                                                    <td class="products align-middle">
                                                        <a class="fw-semibold mb-0" href="#!">Dell Technologies</a>
                                                    </td>
                                                    <td class="color align-middle white-space-nowrap fs-9 text-body">
                                                        <span class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span>
                                                    </td>
                                                    <td
                                                        class="size align-middle white-space-nowrap text-primary fs-9 fw-bold text-end">
                                                        3
                                                    </td>
                                                    <td class="price align-middle text-end text-body fw-semibold">
                                                        $ 23987
                                                    </td>
                                                    <td class="price align-middle text-body-tertiary fs-9 text-end">
                                                        Dec 12, 12:56 PM
                                                    </td>
                                                    <td class="total align-middle fw-bold text-body-highlight text-end">
                                                        <div class="btn-reveal-trigger position-static">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent">
                                                                <span class="fas fa-ellipsis-h fs-10"></span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                                <a class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                    <td class="align-middle white-space-nowrap ps-0 py-0">
                                                        <a href="#!">
                                                            <img src="../../../assets/img//brand2/intel-2.png"
                                                                alt="" width="53" /></a>
                                                    </td>
                                                    <td class="products align-middle">
                                                        <a class="fw-semibold mb-0" href="#!">Intel</a>
                                                    </td>
                                                    <td class="color align-middle white-space-nowrap fs-9 text-body">
                                                        <span class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa fa-star text-warning"></span><span
                                                            class="fa-regular fa-star text-warning-light"
                                                            data-bs-theme="light"></span>
                                                    </td>
                                                    <td
                                                        class="size align-middle white-space-nowrap text-primary fs-9 fw-bold text-end">
                                                        2
                                                    </td>
                                                    <td class="price align-middle text-end text-body fw-semibold">
                                                        $65
                                                    </td>
                                                    <td class="price align-middle text-body-tertiary fs-9 text-end">
                                                        Nov 21, 10:25 AM
                                                    </td>
                                                    <td class="total align-middle fw-bold text-body-highlight text-end">
                                                        <div class="btn-reveal-trigger position-static">
                                                            <button
                                                                class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent">
                                                                <span class="fas fa-ellipsis-h fs-10"></span>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2">
                                                                <a class="dropdown-item" href="#!">View</a><a
                                                                    class="dropdown-item" href="#!">Export</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item text-danger"
                                                                    href="#!">Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                                        <div class="col-auto d-flex">
                                            <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body"
                                                data-list-info="data-list-info"></p>
                                            <a class="fw-semibold" href="#!" data-list-view="*">View all<span
                                                    class="fas fa-angle-right ms-1"
                                                    data-fa-transform="down-1"></span></a><a class="fw-semibold d-none"
                                                href="#!" data-list-view="less">View Less<span
                                                    class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                                        </div>
                                        <div class="col-auto d-flex">
                                            <button class="page-link" data-list-pagination="prev">
                                                <span class="fas fa-chevron-left"></span>
                                            </button>
                                            <ul class="mb-0 pagination"></ul>
                                            <button class="page-link pe-0" data-list-pagination="next">
                                                <span class="fas fa-chevron-right"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->
            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->

            @include('includes.footer')
        </main>
    </div>
@endsection

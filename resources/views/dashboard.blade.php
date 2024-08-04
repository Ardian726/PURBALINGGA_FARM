@extends('layouts.app')

@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/dataTables.tailwindcss.css') }}"> --}}
@endsection
@section('contents')
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <h2 class="text-2xl font-bold md:text-4xl md:leading-tight">
            Data Pembeli
        </h2>
        <div class="flex flex-col mt-5">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="border rounded-lg overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                        Nama</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                        Nomor Telp</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                        Email</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                        Jenis Hewan Qurban</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                        Besar Tabungan</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($daftar as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            {{ $item->nama }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $item->no_hp }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $item->email }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $item->jenis_harga }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $item->besar_tabungan }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <button type="button"
                                                class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-teal-500 text-white hover:bg-teal-600 focus:outline-none focus:bg-teal-600 disabled:opacity-50 disabled:pointer-events-none"
                                                aria-haspopup="dialog" aria-expanded="false"
                                                aria-controls="modal-pembeli-{{ $item->id }}"
                                                data-hs-overlay="#modal-pembeli-{{ $item->id }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                                    <path
                                                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                                </svg>
                                            </button>
                                            <button type="button"
                                                class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                </svg>
                                            </button>
                                            <button type="button"
                                                class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:bg-red-600 disabled:opacity-50 disabled:pointer-events-none">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- <div id="hs-datatable-filter" class="flex flex-col --prevent-on-load-init"
                            data-hs-datatable='{
                            "pagingOptions": {
                              "pageBtnClasses": "min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none"
                            },
                            "selecting": true,
                            "rowSelectingOptions": {
                              "selectAllSelector": "#hs-datatable-select-all-rows",
                              "individualSelector": ".hs-datatable-select-row"
                            },
                            "language": {
                              "zeroRecords": "<div class=\"p-5 h-full flex flex-col justify-center items-center text-center\"><svg class=\"w-48 mx-auto mb-4\" width=\"178\" height=\"90\" viewBox=\"0 0 178 90\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"><rect x=\"27\" y=\"50.5\" width=\"124\" height=\"39\" rx=\"7.5\" fill=\"currentColor\" class=\"fill-white"/><rect x=\"27\" y=\"50.5\" width=\"124\" height=\"39\" rx=\"7.5\" stroke=\"currentColor\" class=\"stroke-gray-50"/><rect x=\"34.5\" y=\"58\" width=\"24\" height=\"24\" rx=\"4\" fill=\"currentColor\" class=\"fill-gray-50"/><rect x=\"66.5\" y=\"61\" width=\"60\" height=\"6\" rx=\"3\" fill=\"currentColor\" class=\"fill-gray-50"/><rect x=\"66.5\" y=\"73\" width=\"77\" height=\"6\" rx=\"3\" fill=\"currentColor\" class=\"fill-gray-50"/><rect x=\"19.5\" y=\"28.5\" width=\"139\" height=\"39\" rx=\"7.5\" fill=\"currentColor\" class=\"fill-white"/><rect x=\"19.5\" y=\"28.5\" width=\"139\" height=\"39\" rx=\"7.5\" stroke=\"currentColor\" class=\"stroke-gray-100"/><rect x=\"27\" y=\"36\" width=\"24\" height=\"24\" rx=\"4\" fill=\"currentColor\" class=\"fill-gray-100"/><rect x=\"59\" y=\"39\" width=\"60\" height=\"6\" rx=\"3\" fill=\"currentColor\" class=\"fill-gray-100"/><rect x=\"59\" y=\"51\" width=\"92\" height=\"6\" rx=\"3\" fill=\"currentColor\" class=\"fill-gray-100"/><g filter=\"url(#@@id)\"><rect x=\"12\" y=\"6\" width=\"154\" height=\"40\" rx=\"8\" fill=\"currentColor\" class=\"fill-white" shape-rendering=\"crispEdges\"/><rect x=\"12.5\" y=\"6.5\" width=\"153\" height=\"39\" rx=\"7.5\" stroke=\"currentColor\" class=\"stroke-gray-100" shape-rendering=\"crispEdges\"/><rect x=\"20\" y=\"14\" width=\"24\" height=\"24\" rx=\"4\" fill=\"currentColor\" class=\"fill-gray-200 \"/><rect x=\"52\" y=\"17\" width=\"60\" height=\"6\" rx=\"3\" fill=\"currentColor\" class=\"fill-gray-200"/><rect x=\"52\" y=\"29\" width=\"106\" height=\"6\" rx=\"3\" fill=\"currentColor\" class=\"fill-gray-200"/></g><defs><filter id=\"@@id\" x=\"0\" y=\"0\" width=\"178\" height=\"64\" filterUnits=\"userSpaceOnUse\" color-interpolation-filters=\"sRGB\"><feFlood flood-opacity=\"0\" result=\"BackgroundImageFix\"/><feColorMatrix in=\"SourceAlpha\" type=\"matrix\" values=\"0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0\" result=\"hardAlpha\"/><feOffset dy=\"6\"/><feGaussianBlur stdDeviation=\"6\"/><feComposite in2=\"hardAlpha\" operator=\"out\"/><feColorMatrix type=\"matrix\" values=\"0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.03 0\"/><feBlend mode=\"normal\" in2=\"BackgroundImageFix\" result=\"effect1_dropShadow_1187_14810\"/><feBlend mode=\"normal\" in=\"SourceGraphic\" in2=\"effect1_dropShadow_1187_14810\" result=\"shape\"/></filter></defs></svg><div class=\"max-w-sm mx-auto\"><p class=\"mt-2 text-sm text-gray-600">No data</p></div></div>"
                            }
                          }'>
                            <div class="flex items-center space-x-2 mb-4">
                                <div class="flex-0">
                                    <div class="relative max-w-xs">
                                        <label for="hs-table-filter-search" class="sr-only">Search</label>
                                        <input type="text" name="hs-table-filter-search" id="hs-table-filter-search"
                                            class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                            placeholder="Search for items" data-hs-datatable-search="">
                                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                                            <svg class="size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <path d="m21 21-4.3-4.3"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-1 flex items-center justify-end space-x-2">
                                    <!-- Select -->
                                    <select class="hidden"
                                        data-hs-select='{
                                  "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                                  "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-2 px-3 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:inset-0 before:z-[1]",
                                  "dropdownClasses": "mt-2 z-50 w-20 max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300",
                                  "optionClasses": "py-2 px-3 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-md focus:outline-none focus:bg-gray-100",
                                  "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
                                  "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                                }'
                                        data-hs-datatable-page-entities="">
                                        <option value="10" selected="">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                    </select>
                                    <!-- End Select -->

                                    <div
                                        class="hs-dropdown [--auto-close:inside] [--placement:bottom-right] relative sm:inline-flex z-20">
                                        <button id="hs-dropdown-filter" type="button"
                                            class="hs-dropdown-toggle py-2 px-3 inline-flex items-center gap-x-2 text-sm rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                            Filter
                                            <svg class="hs-dropdown-open:rotate-180 size-2.5" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                            </svg>
                                        </button>

                                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden bg-white border border-gray-200 shadow-md rounded-lg p-2 mt-2"
                                            aria-labelledby="hs-dropdown-filter">
                                            <div class="max-w-sm flex gap-x-2">
                                                <input id="hs-input-number-min-age" type="number"
                                                    class="py-1 px-2.5 block w-20 border-gray-200 rounded-md text-[13px] focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
                                                    placeholder="Min age" style="-moz-appearance: textfield;">
                                                <input id="hs-input-number-max-age" type="number"
                                                    class="py-1 px-2.5 block w-20 border-gray-200 rounded-md text-[13px] focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
                                                    placeholder="Max age" style="-moz-appearance: textfield;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="overflow-x-auto min-h-[521px] ">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full">
                                            <thead class="border-y border-gray-200">
                                                <tr>
                                                    <th scope="col" class="py-1 ps-3 --exclude-from-ordering">
                                                        <div class="flex items-center h-5">
                                                            <input id="hs-datatable-select-all-rows" type="checkbox"
                                                                class="border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                                            <label class="sr-only">Checkbox</label>
                                                        </div>
                                                    </th>

                                                    <th scope="col"
                                                        class="py-1 group text-start font-normal focus:outline-none">
                                                        <div
                                                            class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md hover:border-gray-200">
                                                            Name
                                                            <svg class="size-3.5 ms-1 -me-0.5 text-gray-400"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path class="hs-datatable-ordering-asc:text-blue-600"
                                                                    d="m7 15 5 5 5-5"></path>
                                                                <path class="hs-datatable-ordering-desc:text-blue-600"
                                                                    d="m7 9 5-5 5 5"></path>
                                                            </svg>
                                                        </div>
                                                    </th>

                                                    <th scope="col"
                                                        class="py-1 group text-start font-normal focus:outline-none">
                                                        <div
                                                            class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md hover:border-gray-200">
                                                            Age
                                                            <svg class="size-3.5 ms-1 -me-0.5 text-gray-400"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path class="hs-datatable-ordering-asc:text-blue-600"
                                                                    d="m7 15 5 5 5-5"></path>
                                                                <path class="hs-datatable-ordering-desc:text-blue-600"
                                                                    d="m7 9 5-5 5 5"></path>
                                                            </svg>
                                                        </div>
                                                    </th>

                                                    <th scope="col"
                                                        class="py-1 group text-start font-normal focus:outline-none">
                                                        <div
                                                            class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md hover:border-gray-200">
                                                            Address
                                                            <svg class="size-3.5 ms-1 -me-0.5 text-gray-400"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path class="hs-datatable-ordering-asc:text-blue-600"
                                                                    d="m7 15 5 5 5-5"></path>
                                                                <path class="hs-datatable-ordering-desc:text-blue-600"
                                                                    d="m7 9 5-5 5 5"></path>
                                                            </svg>
                                                        </div>
                                                    </th>

                                                    <th scope="col"
                                                        class="py-2 px-3 text-end font-normal text-sm text-gray-500 --exclude-from-ordering">
                                                        Action</th>
                                                </tr>
                                            </thead>

                                            <tbody class="divide-y divide-gray-200">
                                                <tr>
                                                    <td class="py-3 ps-3">
                                                        <div class="flex items-center h-5">
                                                            <input id="hs-table-filter-checkbox-1" type="checkbox"
                                                                class="hs-datatable-select-row border-gray-300 rounded text-blue-600 focus:ring-blue-500"
                                                                data-hs-datatable-row-selecting-individual="">
                                                            <label for="hs-table-filter-checkbox-1"
                                                                class="sr-only">Checkbox</label>
                                                        </div>
                                                    </td>
                                                    <td class="p-3 whitespace-nowrap text-sm font-medium text-gray-800">
                                                        Christina Bersh</td>
                                                    <td class="p-3 whitespace-nowrap text-sm text-gray-800">45</td>
                                                    <td class="p-3 whitespace-nowrap text-sm text-gray-800">4222 River Rd,
                                                        Columbus</td>
                                                    <td class="p-3 whitespace-nowrap text-end text-sm font-medium">
                                                        <button type="button"
                                                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center mt-4">
                                <div class="flex items-center space-x-1 hidden" data-hs-datatable-paging="">
                                    <button type="button"
                                        class="p-2.5 min-w-[40px] inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                                        data-hs-datatable-paging-prev="">
                                        <span aria-hidden="true">«</span>
                                        <span class="sr-only">Previous</span>
                                    </button>
                                    <div class="flex items-center space-x-1 [&>.active]:bg-gray-100"
                                        data-hs-datatable-paging-pages=""></div>
                                    <button type="button"
                                        class="p-2.5 min-w-[40px] inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none"
                                        data-hs-datatable-paging-next="">
                                        <span class="sr-only">Next</span>
                                        <span aria-hidden="true">»</span>
                                    </button>
                                </div>
                                <div class="text-xs text-gray-500 ms-auto" data-hs-datatable-info="">
                                    Showing
                                    <span data-hs-datatable-info-from=""></span>
                                    to
                                    <span data-hs-datatable-info-to=""></span>
                                    of
                                    <span data-hs-datatable-info-length=""></span>
                                    users
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($daftar as $item)
        <div id="modal-pembeli-{{ $item->id }}"
            class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
            role="dialog" tabindex="-1" aria-labelledby="modal-pembeli-{{ $item->id }}-label">
            <div
                class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 lg:max-w-4xl lg:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                <div class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
                    <div class="flex justify-between items-center py-3 px-4 border-b">
                        <h3 id="modal-pembeli-{{ $item->id }}-label" class="font-bold text-gray-800">
                            Detail Pembeli
                        </h3>
                        <button type="button"
                            class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                            aria-label="Close" data-hs-overlay="#modal-pembeli-{{ $item->id }}">
                            <span class="sr-only">Close</span>
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">
                                <div class="overflow-hidden">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <tbody class="divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                    Nama
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    {{ $item->nama }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray">
                                                    Alamat
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    {{ $item->alamat }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray">
                                                    No. Telepon
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    {{ $item->no_hp }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray">
                                                    Email
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    {{ $item->email }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray">
                                                    Jenis harga
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    {{ $item->jenis_harga }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray">
                                                    Jangka Waktu
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    {{ $item->jangka_waktu }} bulan
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray">
                                                    Besar Tabungan/bln
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    {{ $item->besar_tabungan }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray">
                                                    Tanggal Pembayaran
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    {{ $item->tanggal_pembayaran }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray">
                                                    Alamat Pengiriman
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    {{ $item->alamat_pengiriman }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                        <button type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                            data-hs-overlay="#modal-pembeli-{{ $item->id }}">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
@section('scripts')
    {{-- <script src="{{ asset('assets/js/jquery-3.7.1.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.tailwindcss.js') }}"></script>
    <script>
        let table = new DataTable('#tableDaftar');
    </script> --}}
    <script>
        window.addEventListener('load', () => {
            const inputs = document.querySelectorAll('.dt-container thead input');

            inputs.forEach((input) => {
                input.addEventListener('keydown', function(evt) {
                    if ((evt.metaKey || evt.ctrlKey) && evt.key === 'a') this.select();
                });
            });
        });
    </script>
    <script>
        (function() {
            const minEl = document.querySelector('#hs-input-number-min-age');
            const maxEl = document.querySelector('#hs-input-number-max-age');
            const {
                dataTable
            } = new HSDataTable('#hs-datatable-filter');

            dataTable.search.fixed('range', function(searchStr, data, index) {
                const min = parseInt(minEl.value, 10);
                const max = parseInt(maxEl.value, 10);
                const age = parseFloat(data[2]) || 0;

                if (
                    (isNaN(min) && isNaN(max)) ||
                    (isNaN(min) && age <= max) ||
                    (min <= age && isNaN(max)) ||
                    (min <= age && age <= max)
                ) return true;

                return false;
            });

            minEl.addEventListener('input', () => dataTable.draw());
            maxEl.addEventListener('input', () => dataTable.draw());
        })();
    </script>
@endsection

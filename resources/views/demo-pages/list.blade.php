@extends('layouts.app', [
'bodyId' => 'demo-pages'
])

@section('header')
@include('sections.logo-menu')
@endsection

@section('content')
<div>
    @include('sections.refines')
    @php
    $fields = [
    (object)[
    'name'=>'job_number',
    'sortField'=>true,
    'title'=>'Job Number',
    'dataClass'=>'-data-Job-Number'
    ],
    (object)[
    'name'=>'title',
    'sortField'=>true,
    'title'=>'Title',
    'dataClass'=>'-data-Title'
    ],
    (object)[
    'name'=>'client',
    'sortField'=>true,
    'title'=>'Client',
    'dataClass'=>'-data-Client'
    ],
    (object)[
    'name'=>'location',
    'sortField'=>true,
    'title'=>'Location',
    'dataClass'=>'-data-Location'
    ],
    (object)[
    'name'=>'amount',
    'sortField'=>true,
    'title'=>'Amount',
    'dataClass'=>'-data-Amount'
    ],
    (object)[
    'name'=>'status',
    'sortField'=>true,
    'title'=>'Status',
    'dataClass'=>'-data-Status'
    ],
    (object)[
    'name'=>'actions',
    'sortField'=>false,
    'title'=>'',
    'dataClass'=>'actions'
    ],
    ];@endphp
    <base-table get-url="{{ route('styleguide.api.table-demo') }}" :fields="{{json_encode($fields)}}"></base-table>
    <p><br></p>
    <hr>
    <p><br></p>
    <h3>CSS settings</h3>
    <code-block code-content='@\use "dcode/sass-lib/sass/layouts.scss" as *;
@\use "dcode/sass-lib/sass/admin-features/helpers.scss" as *;
@\use "dcode/sass-lib/sass/layouts.scss" as *;

@\use "~/sass/config/variables.scss" as *;
@\use "~/sass/config/palette.scss" as *;
@\use "~/sass/config/typography.scss" as *;
@\use "~/sass/config/mixins.scss" as *;

@\include bg-text-colors($palette);
margin: 0;
#app {
    @\include space-between;
    align-items: flex-start;
    background-color: map-get($palette, "off-white");
    section{
        width: 100%;
        > header {
            padding: 1rem 0;
            > div {
                @\include space-between-center;
                margin: auto;
                max-width: $body-max-width;
                h1 {
                    margin:0;
                    span {
                        display: none;
                    }
                }
                nav ul li a {
                    color: map-get($palette, "tertiary");
                }
            }
        }
        > main {
            min-height: 100vh;
            padding: 1rem 0;
            > div {
                margin: auto;
                max-width: $body-max-width;
                header.refine {
                    @\include space-between-center;
                    margin-bottom: 2rem;
                    .form  {
                        @\include space-between;
                        > * {
                            margin-right: .5rem;
                        }
                        .checkbox-btn span {
                            padding: 0.65rem 1rem;
                        }
                        .checkbox-btn,
                        p {
                            margin-bottom: 0;
                        }
                        &:first-of-type {
                            > div {
                                margin-right: 2rem;
                            }
                        }
                        .select-filter-input p {
                            background-color: map-get($palette, "whitest");
                        }
                    }
                }
            }
        }
    }
}
'></code-block>
    <p><br></p>
    <h3>HTML markup</h3>
    <code-block code-content='<div id="app">
    <section>
        <header>
            <div>
                <h1><img src="/imgs/logos/dcode.svg" alt="Dcode logo" width="40">
                    <span>Project Name</span></h1>
                <nav>
                    <ul>
                        <li><a href="">Jobs</a></li>
                        <li><a href="">Tasks</a></li>
                        <li><a href="">Quotes</a></li>
                        <li><a href="">Invoices</a></li>
                        <li><a href="">Users</a></li>
                        <li><a href="">Settings</a></li>
                    </ul>
                </nav>
                <nav>
                    <ul>
                        <li><button>Joe Bloggs</button>
                            <ul class="right">
                                <li><a href="">Account</a></li>
                                <li><a href="">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <div>
                <header class="refine">
                    <div class="form">
                        <div><a href="#" class="button white">View Tasks</a> <a href="#" class="button white">Add New
                                Team</a></div> <label for="day" class="checkbox-btn btn-whitest"><input type="checkbox"
                                id="day"> <span>Day</span></label> <label for="week"
                            class="checkbox-btn btn-whitest"><input type="checkbox" id="week"> <span>Week</span></label>
                        <label for="month" class="checkbox-btn btn-whitest"><input type="checkbox" id="month">
                            <span>Month</span></label>
                    </div>
                    <div class="form">
                        <div class="select-filter-input">
                            <div><label for="sort_by">Sort:</label> <span>Date</span> <input type="hidden"
                                    name="sort_by" id="sort_by" value="Date"> <button type="button"><svg
                                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        class="svg-inline--fa fa-chevron-down fa-w-14">
                                        <path fill="currentColor"
                                            d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                                        </path>
                                    </svg></button></div>
                            <ul>
                                <li><button>Date</button></li>
                                <li><button>Title</button></li>
                                <li><button>Location</button></li>
                            </ul>
                        </div>
                        <div class="select-filter-input">
                            <div>
                                <label for="filter_by">Fiter:</label> <span>Urgent</span>
                                <input type="hidden" name="filter_by" id="filter_by" value="Urgent">
                                <button type="button">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        class="svg-inline--fa fa-chevron-down fa-w-14">
                                        <path fill="currentColor"
                                            d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <ul>
                                <li><button>Urgent</button></li>
                                <li><button>Critical</button></li>
                                <li><button>Important</button></li>
                            </ul>
                        </div>
                        <div class="select-filter-input">
                            <div><label for="dates">Date:</label> <span>Mon 22 - Tue 23</span>
                                <input type="hidden" name="dates" id="dates" value="Mon 22 - Tue 23"> <button
                                    type="button">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                        class="svg-inline--fa fa-chevron-down fa-w-14">
                                        <path fill="currentColor"
                                            d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <ul>
                                <li><button>Mon 22 - Tue 23</button></li>
                                <li><button>Tue 15 - Sun 21</button></li>
                                <li><button>Sat 11 - Tue 15</button></li>
                            </ul>
                        </div>
                    </div>
                </header>
                <base-table get-url="{\{ route("styleguide.api.table-demo") }\}" :fields="{\{ json_encode($fields) }\}">
                </base-table>
            </div>
        </main>
    </section>
</div>'></code-block>
</div>
@endsection



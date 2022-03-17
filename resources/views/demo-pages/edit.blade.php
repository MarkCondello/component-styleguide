@extends('layouts.app', [
'bodyId' => 'demo-pages'
])

@section('header')
@include('sections.logo-menu')
@endsection
@php
$job = (object) [
    "job_number" => "123",
    "title"=> "Lorem ipsum dolor sit.",
    "client"=> "Joe Bloggs",
    "description"=> "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas quo esse explicabo.",
    "active" => true
];
@endphp
@section('content')
<div>
    <header>
        <h2>{{ $job ? __('Edit job') : __('Create job') }}</h2>
    </header>
    <form action="{{ $job ? 'job-update-route' : 'job-save-route' }}">
        <!-- method="post" -->
            @csrf
            @if($job)
                @method('put')
            @endif
            <fieldset>
                <x-field-wrapper fieldName="title" labelName="Title">
                    <input type="text" name="title" placeholder="" value="{{ old('title', $job->title) }}">
                </x-field-wrapper>
                <x-field-wrapper fieldName="abstract" labelName="Client">
                    <input type="text" name="client" value="{{ old('client', $job->client) }}" >
                </x-field-wrapper>
                <x-field-wrapper fieldName="description" labelName="Description">
                    <textarea rows="10" name="description">{{ old('description', $job->description) }}</textarea>
                </x-field-wrapper>
            </fieldset>
            <fieldset>
                <label class="checkbox" for="active">
                    <input type="hidden" name="active" value="0" />
                    <input type="checkbox" name="active" id="active" value="1"
                        @if(old('active', $job->active))checked="" @endif
                    >
                    <span>Active</span>
                </label>
            </fieldset>
            <footer>
                <a href="#" class="button">{{ __('Cancel') }}</a>
                <input type="submit" value="{{ __('Save') }}" class="button success">
            </footer>
        </form>
    <p><br></p>
    <hr>
    <p><br></p>
    <h3>CSS settings</h3>
    <code-block code-content='@\use "dcode/sass-lib/sass/layouts.scss" as *;
@\use "dcode/sass-lib/sass/admin-features/mixins/cards" as *;
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
                > header {
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
                > form {
                    max-width: 50%;
                    > fieldset {
                        @\include cards($card-bg, $card-border-radius, $card-header-color, $card-header-f-size);
                        padding: 1.25rem 1.5rem;
                        margin-bottom: 2rem;
                    }
                    > fieldset > div,
                    > div {
                        display: grid;
                        grid-template-columns: 200px 1fr;
                        grid-gap: .5rem;
                        .stretch {
                            grid-column: 1 / span 2;
                        }
                        > label {
                            color: map-get($palette, "dark-gray");
                            margin: .75rem 0 0;
                        }
                        > small {
                            grid-column-start: 2;
                            grid-column-end: 3;
                        }
                    }
                }
            }
        }
    }
}'></code-block>
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
                <header>
                    <h2>{\{ $job ? __("Edit job") : __("Create job") }\}</h2>
                </header>
                <form action="{\{ $job ? job-update-route : job-save-route }\}"  method="post">
                    @\csrf
                    @\if($job)
                        @\method("put")
                    @\endif
                    <fieldset>
                        <!-- Use the x-field-wrapper component for inputs with labels -->

                        <x-field-wrapper fieldName="title" labelName="Title" >
                            <input type="text" name="title" placeholder="" value="{\{ old("title", $job->title) }\}">
                        </x-field-wrapper>
                        <!-- Use the x-field-wrapper component for inputs with labels -->
                        
                        <x-field-wrapper fieldName="abstract" labelName="Client">
                            <input type="text" name="client" value="{\{ old(client, $job->client) }\}" >
                        </x-field-wrapper>
                        <!-- Use the x-field-wrapper component for inputs with labels -->

                        <x-field-wrapper fieldName="description" labelName="Description">
                            <textarea rows="10" name="description">{\{ old(description, $job->description) }\}</textarea>
                        </x-field-wrapper>

                    </fieldset>
                    <fieldset>
                        <label class="checkbox" for="active">
                            <input type="hidden" name="active" value="0" />
                            <input type="checkbox" name="active" id="active" value="1"
                                @\if(old(active, $job->active))checked="" @\endif
                            >
                            <span>Active</span>
                        </label>
                    </fieldset>
                    <footer>
                        <a href="#" class="button">{\{__(Cancel) }\}</a>
                        <input type="submit" value="{\{ __(Save) }\}" class="button success">
                    </footer>
                </form>
            </div>
        </main>
    </section>
</div>'></code-block>
</div>
@endsection



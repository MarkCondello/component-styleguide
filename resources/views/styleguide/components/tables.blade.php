@extends('layouts.styleguide')

@section('content')
<div >
    <h3>Generic Tables</h3>
    <p>Generic tables should not need additional classes.</p>
    <p>To cater for responsive layouts, a data-header attribute is included to <code>&lt;td&gt;</code> elements with a reference to its assoicated header column name.</p>
    <hr>
    <h3>HTML Demo</h3>
    <div class="demo">
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>User</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th>Last Record</th>
            <th>Active</th>
            <th>Last Modified By</th>
            <th>Created At</th>
            <th>Notes</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-header="Name">123abc</td>
            <td data-header="User">John Doe</td>
            <td data-header="Latitude"> -37.123309</td>
            <td data-header="Longitude"> 140.354676</td>
            <td data-header="Last Record">26/08/2021 11:39</td>
            <td data-header="Active">Y</td>
            <td data-header="Last Modified By">Jane Doe</td>
            <td data-header="Created At">02/03/2020 20:30</td>
            <td data-header="Notes">Notes</a></td>
            <td class="actions"> ... </td>
          </tr>
          <tr>
            <td data-header="Name">abc123</td>
            <td data-header="User">Jane Doe</td>
            <td data-header="Latitude"> -37.123309</td>
            <td data-header="Longitude"> 140.354676</td>
            <td data-header="Last Record">26/08/2021 11:39</td>
            <td data-header="Active">Y</td>
            <td data-header="Last Modified By">John Doe</td>
            <td data-header="Created At">02/03/2020 20:30</td>
            <td data-header="Notes">Notes</a></td>
            <td class="actions"> ... </td>
          </tr>
        </tbody>
      </table>
    </div>
    <hr>
    <h3>Code Example</h3>
    <code-block code-content='<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>User</th>
      <th>Latitude</th>
      <th>Longitude</th>
      <th>Last Record</th>
      <th>Active</th>
      <th>Last Modified By</th>
      <th>Created At</th>
      <th>Notes</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-header="Name">123abc</td>
      <td data-header="User">John Doe</td>
      <td data-header="Latitude"> -37.123309</td>
      <td data-header="Longitude"> 140.354676</td>
      <td data-header="Last Record">26/08/2021 11:39</td>
      <td data-header="Active">Y</td>
      <td data-header="Last Modified By">Jane Doe</td>
      <td data-header="Created At">02/03/2020 20:30</td>
      <td data-header="Notes">Notes</a></td>
      <td class="actions"> ... </td>
    </tr>
    <tr>
      <td data-header="Name">abc123</td>
      <td data-header="User">Jane Doe</td>
      <td data-header="Latitude"> -37.123309</td>
      <td data-header="Longitude"> 140.354676</td>
      <td data-header="Last Record">26/08/2021 11:39</td>
      <td data-header="Active">Y</td>
      <td data-header="Last Modified By">John Doe</td>
      <td data-header="Created At">02/03/2020 20:30</td>
      <td data-header="Notes">Notes</a></td>
      <td class="actions"> ... </td>
    </tr>
  </tbody>
</table>'></code-block>
  <hr>
  <h3>Striped Tables</h3>
  <p>Striped tables are set by adding the <code>.striped</code> class to the table element.</p>
  <hr>
  <h3>HTML Demo</h3>
  <div class="demo">
    <table class="striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>User</th>
          <th>Latitude</th>
          <th>Longitude</th>
          <th>Last Record</th>
          <th>Active</th>
          <th>Last Modified By</th>
          <th>Created At</th>
          <th>Notes</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-header="Name">123abc</td>
          <td data-header="User">John Doe</td>
          <td data-header="Latitude"> -37.123309</td>
          <td data-header="Longitude"> 140.354676</td>
          <td data-header="Last Record">26/08/2021 11:39</td>
          <td data-header="Active">Y</td>
          <td data-header="Last Modified By">Jane Doe</td>
          <td data-header="Created At">02/03/2020 20:30</td>
          <td data-header="Notes">Notes</a></td>
          <td class="actions"> ... </td>
        </tr>
        <tr>
          <td data-header="Name">abc123</td>
          <td data-header="User">Jane Doe</td>
          <td data-header="Latitude"> -37.123309</td>
          <td data-header="Longitude"> 140.354676</td>
          <td data-header="Last Record">26/08/2021 11:39</td>
          <td data-header="Active">Y</td>
          <td data-header="Last Modified By">John Doe</td>
          <td data-header="Created At">02/03/2020 20:30</td>
          <td data-header="Notes">Notes</a></td>
          <td class="actions"> ... </td>
        </tr>
        <tr>
          <td data-header="Name">1a2b3c</td>
          <td data-header="User">Joe Bloggs</td>
          <td data-header="Latitude"> -32.123309</td>
          <td data-header="Longitude"> 125.6346</td>
          <td data-header="Last Record">26/08/2021 11:39</td>
          <td data-header="Active">N</td>
          <td data-header="Last Modified By">Jane Doe</td>
          <td data-header="Created At">02/03/2020 20:30</td>
          <td data-header="Notes">Notes</a></td>
          <td class="actions"> ... </td>
        </tr>
      </tbody>
    </table>
  </div>
  <hr>
  <h3>Background Row Tables</h3>
  <p>background row tables are set by adding the <code>.bg-rows</code> class to the table element.</p>
  <p>To change the background or text colour for a specific row, we can add the <code>.bg-COLOR</code> or <code>.text-COLOR</code> classes to a row element.</p>
  <hr>
  <h3>HTML Demo</h3>
  <div class="demo">
      <table class="bg-rows">
        <thead>
          <tr>
            <th>Job Title</th>
            <th>Client</th>
            <th>Location</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Account</th>
            <th>Amount</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
            @for($i = 0; $i < 4; $i++)
          <tr @if($i === 0) class="bg-warning text-danger" @endif>
            <td data-header="Job Title">123abc</td>
            <td data-header="Client">John Doe</td>
            <td data-header="Location">2/112 Rokeby Street Collingwood VIC</td>
            <td data-header="Start Date">29.07.2021</td>
            <td data-header="End Date">15.08.2021</td>
            <td data-header="Account">Premium</td>
            <td data-header="Amount">$110.00</td>
            <td data-header="Status">
                <span class="tag @if($i === 0) text-warning bg-danger @else bg-success @endif">Job Status</span>
            </td>
            <td class="actions"> 
                <nav>
                    <ul>
                        <li>
                            <button>...</button>
                            <ul class="right">
                                <li>
                                    <a href="#">menu 1a</a>
                                </li>
                                <li>
                                    <a href="#">menu 1b</a>
                                </li>
                                <li>
                                    <a href="#">menu 1c</a>
                                </li>
                            </ul>
                        </li> 
                    </ul>
                </nav>   
            </td>
          </tr>
          @endfor
        </tbody>
    </table>
  </div>
  <hr>
  <h3>Vue 3 Tables</h3>
  <p>The base table component requires 2 props. A get url for receiving the resource data from and a fields prop, which populates the header column items.</p>
  <p>To cater for responsive layouts, a dataClass array key is included in the fields array prop so <code>&lt;td&gt;</code> elements have a cotenxtual label.</p>
  <hr>
  <h3>HTML Demo</h3>
  <div class="demo">
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
  </div>
  <h3>Configuration options</h3>
  <table>
    <thead>
      <tr>
        <th>Option</th>
        <th width="180">Values</th>{{-- what type we need --}}
        <th>Comment</th>{{-- explanation for what it does, is required etc --}}
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>get-url</td>
        <td>String</td>
        <td>Required to populate the table td elements with data.</td>
      </tr>
      <tr>
        <td>fields</td>
        <td>Array</td>
        <td>Required to populate the table head elements with columns settings.<br>See below for fields example code.</td>
      </tr>
    </tbody>
  </table>
<p><br></p>

<code-block code-content='//fields
[
  {"name":"job_number","sortField":true,"title":"Job Number","dataClass":"-data-Job-Number"},
  {"name":"title","sortField":true,"title":"Title","dataClass":"-data-Title"},
  {"name":"client","sortField":true,"title":"Client","dataClass":"-data-Client"},
  {"name":"location","sortField":true,"title":"Location","dataClass":"-data-Location"},
  {"name":"amount","sortField":true,"title":"Amount","dataClass":"-data-Amount"},
  {"name":"status","sortField":true,"title":"Status","dataClass":"-data-Status"},
  {"name":"actions","sortField":false,"title":"","dataClass":"actions"}
]'></code-block>
<p><br></p>
    <hr>
    <p><br></p>
    <h3>CSS settings</h3>
    <p>For generic table styles, the tables mixin can be used.</p>
    <code-block code-content='@\use "dcode/sass-lib/sass/admin-features/mixins/tables.scss" as *;
@\use "../../config/palette.scss" as *;
@\use "../../config/variables.scss" as *;

table:not(.mx-table-date){
    @\include tables(
        $table-bg, 
        $table-border,
        $palette,
        $table-header-color
    );
}'></code-block>
<p>For the vue table 3 styles which includes pagination and sorting, the following css settings can be applied:</p>
<code-block code-content='@\use "dcode/sass-lib/sass/layouts.scss" as *;

@\use "../palette.scss" as *;
@\use "../mixins.scss" as *;
@\use "../variables.scss" as *;

.vtable-w-pagination {
    padding-bottom: 3rem;
    .vuetable {
        thead {
            th {
                &.sortable {
                    &:hover {
                        color: map-get($palette, "tertiary");
                    }
                    .sort-icon {
                        // float: none !important;
                        font-style: normal;
                        margin-left: .5rem;
                        &:after {
                          content: url("/imgs/icon/sort.svg");
                          display: block;
                          opacity: .5;
                          width: 10px;
                        }
                        &.chevron.up {
                          &:after {
                              content: url("/imgs/icon/sort-up.svg");
                              display: block;
                              opacity: .5;

                              width: 10px;
                          }
                        }
                        &.chevron.down {
                          &:after {
                              content: url("/imgs/icon/sort-down.svg");
                              display: block;
                              opacity: .5;
                              width: 10px;
                          }
                        }
                    }
                }
            }
        }
    }
    .ui.pagination.menu {
        margin: 0;
        display: inline-flex;
        vertical-align: middle;
        margin: 2rem 0;
        margin: 1rem 0;
        background: $white;
        font-weight: 400;
        border: none;
        border-radius: 6px;
        min-height: 1.25rem;
        .item:last-child {
            border-radius: 0 6px 6px 0
        }
        .item:last-child:before {
            display: none
        }
        .item {
            min-width: 3em;
            text-align: center;
            align-items: center;
            display: flex;
            justify-content: center;
            cursor: pointer;
            position: relative;
            vertical-align: middle;
            line-height: 1;
            text-decoration: none;
            -webkit-tap-highlight-color: transparent;
            flex: 0 0 auto;
            font-size: 13px;
            user-select: none;
            background: 0 0;
            padding: .5rem;
            text-transform: none;
            color: rgba(87, 87, 87, 0.87);
            font-weight: 400;
            transition: background .1s ease,color .1s ease;
            &:first-child {
                border-radius: 6px 0 0 6px
            }
            &::before {
                position: absolute;
                content: "";
                top: 0;
                right: 0;
                height: 100%;
                width: 1px;
                background: rgba(34,36,38,.1)
            }
        
        }
        .icon.item i.icon {
            vertical-align: top
        }
        .active.item {
          cursor: not-allowed!important;
          border-top: none;
          background-color: rgba(0,0,0,.05);
          color: rgba(0,0,0,.95);
          box-shadow: none
        }
        .item.disabled,
        .item.disabled:hover {
            cursor: not-allowed!important;
            background-color: transparent!important;
            color: rgba(40,40,40,.3)!important
        }
        i.disabled.icon {
            opacity: .45!important
        }
        i.icon.hover {
            opacity: 1!important
        }
        i.icon.active {
            opacity: 1!important
        }
        i.icon {
            display: inline-block;
            width: 1.18em;
            font-style: normal;
            text-decoration: inherit;
            text-align: center;
            speak: none;
            font-smoothing: antialiased;
            backface-visibility: hidden;
            opacity: .9;
            float: none;
            margin: 0 ;
            &::before {
                background: 0 0!important
            }
        }
        .item .icon::after {
            font-size: 14px;
            vertical-align: middle;
            display: inline-block;
        }
        .item .left.double.icon::after{
          content: url("/imgs/icon/chevron-double-left.svg");
          display: block;
          opacity: .5;
          width: 7px;
        }
        .item .left.chevron.icon::after {
          content: url("/imgs/icon/chevron-left.svg");
          display: block;
          opacity: .5;
          width: 5px;
        }
        .item .right.double.icon::after {
          content: url("/imgs/icon/chevron-double-right.svg");
          display: block;
          opacity: .5;
          width: 7px;
        }
        .item .right.chevron.icon::after {
          content: url("/imgs/icon/chevron-right.svg");
          display: block;
          opacity: .5;
          width: 5px;
        }
        &:after {
            content: "";
            display: block;
            height: 0;
            clear: both;
            visibility: hidden
        }
        &:first-child {
            margin-top: 0
        }
        &:last-child {
            margin-bottom: 0
        }
    }
}'></code-block>
</div>
@endsection

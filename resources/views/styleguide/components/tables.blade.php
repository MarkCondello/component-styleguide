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
            @for($i = 0; $i < 14; $i++)
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
  <p>Generic Vue 3 tables should not need additional classes.</p>
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
</div>
@endsection
<aside>
  <ul>
      <li>
          <button>Dcode Preset</button>
          {{-- ToDo: Add details about the Dcode Preset ron. --}}
      </li>
      <li>
          <button>Globals</button>
          <ul>
              <li>
                  <a href="{{ route('styleguide.globals.colours') }}" @if(request()->is('globals/colours')) class="active" @endif>Colours</a>
              </li>
              <li>
                  <a href="{{ route('styleguide.globals.typo') }}" @if(request()->is('globals/typography')) class="active" @endif>Typography</a>
              </li>
              <li>
                  <a href="{{ route('styleguide.globals.breakpoints') }}" @if(request()->is('globals/breakpoints')) class="active" @endif>Breakpoints</a>
              </li>
              <li>
                  <a href="{{ route('styleguide.globals.flex') }}" @if(request()->is('globals/flex')) class="active" @endif>Flex Columns</a>
              </li>
              <li>
                  <a href="{{ route('styleguide.globals.grids') }}" @if(request()->is('globals/grids')) class="active" @endif>CSS Grids</a>
              </li>
          </ul>
      </li>
      <li>
          <button>Components</button>
          <ul>
              <li>
                  <a href="{{ route('styleguide.components.datepicker') }}" @if(request()->is('components/datepicker')) class="active" @endif>Datepicker</a>
              </li>
              <li>
                  <a href="{{ route('styleguide.components.modals') }}" @if(request()->is('components/modals')) class="active" @endif>Modals</a>
              </li>
              <li>
                  <a href="{{ route('styleguide.components.multi-select') }}" @if(request()->is('components/multi-selects')) class="active" @endif>Vue Multiselects</a>
              </li>
              <li>
                  <a href="{{ route('styleguide.components.side-panels') }}" @if(request()->is('components/side-panels')) class="active" @endif>Side Panels</a>
              </li>
              <li>
                  <a href="{{ route('styleguide.components.tables') }}" @if(request()->is('components/tables')) class="active" @endif>Tables</a>
              </li>
          
          </ul>
      </li>
      <li>
          <button>Mixins</button>
          <ul>
              <li>
                  <a href="{{ route('styleguide.mixins.alerts') }}" @if(request()->is('mixins/alerts')) class="active" @endif>Alerts</a>
              </li>
              <li>
                  <a href="{{ route('styleguide.mixins.badges') }}" @if(request()->is('mixins/badges')) class="active" @endif>Badges</a>
              </li>
              <li>
                  <a href="{{ route('styleguide.mixins.buttons') }}" @if(request()->is('mixins/buttons')) class="active" @endif>Buttons</a>
              </li> 
              <li>
                  <a href="{{ route('styleguide.mixins.cards') }}" @if(request()->is('mixins/cards')) class="active" @endif>Cards</a>
              </li>
              <li>
                  <a href="{{ route('styleguide.mixins.checkboxes') }}" @if(request()->is('mixins/checkboxes')) class="active" @endif>Checkboxes</a>
              </li>
              <li>
                  <a href="{{ route('styleguide.mixins.checkbox-btns') }}" @if(request()->is('mixins/checkbox-buttons')) class="active" @endif>Checkbox Buttons</a>
              </li>
              <li>
                  <a href="{{ route('styleguide.mixins.checkbox-toggles') }}" @if(request()->is('mixins/checkbox-toggles')) class="active" @endif>Checkbox Toggles</a>
              </li>
              <li>
                  <a href="{{ route('styleguide.mixins.checkbox-btn-groups') }}" @if(request()->is('mixins/checkbox-button-groups')) class="active" @endif>Checkbox Button Groups</a>
              </li>
              <li>
                  <a href="{{ route('styleguide.mixins.forms') }}" @if(request()->is('mixins/forms')) class="active" @endif>Forms</a> 
              </li>
              <li>
                  <a href="{{ route('styleguide.mixins.menus') }}" @if(request()->is('mixins/menus')) class="active" @endif>Menus</a>
              </li>
              <li>
                  <a href="{{ route('styleguide.mixins.search-inputs') }}" @if(request()->is('mixins/search-inputs')) class="active" @endif>Search Inputs</a>
              </li>
              <li>
                  <a href="{{ route('styleguide.mixins.select-filters') }}" @if(request()->is('mixins/select-filters')) class="active" @endif>Select Filters</a>
              </li>
              <li>
                  <a href="{{ route('styleguide.mixins.tabs') }}" @if(request()->is('mixins/tabs')) class="active" @endif>Tabs</a>
              </li>
              <li>
                  <a href="{{ route('styleguide.mixins.tags') }}" @if(request()->is('mixins/tags')) class="active" @endif>Tags</a>
              </li>
              <li>
                  <a href="{{ route('styleguide.mixins.tiles') }}" @if(request()->is('mixins/tiles')) class="active" @endif>Tiles</a>
              </li>
           
          </ul>
      </li>
      <li>
          <button>Layouts</button>
          <ul>
              <li><a href="{{ route('layouts.list') }}" @if(request()->is('layouts/list')) class="active" @endif>List</a></li>
              {{-- ToDo --}}
              <li><a href="#">Show</a></li>
              {{-- <li><a href="{{ route('layouts.list') }}">Show</a></li> --}}
              <li><a href="#">Edit</a></li>
          </ul>
      </li>  
      <li><a href="{{ route('kitchen-sink') }}">Kitchen Sink</a></li>
  </ul>
</aside>
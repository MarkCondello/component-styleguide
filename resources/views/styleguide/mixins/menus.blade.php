@extends('layouts.styleguide')

@section('content')
    <div >
        <h3>Generic Menus</h3>
        <p>All <code>ul</code> elements contained within a <code>nav</code> or <code>menu</code> element will have the menu styles applied to it. Currently the generic menu supports sub menu items, not sub subs or deeper nestings.</p>
        <p>Top level menus with sub menus which are not navigation links should be <code>button</code> elements rather than <code>a</code> tags which link to nothing. Menus which are not part of the main navigation like ellipsis menus, should use the <code>menu</code> element rather than the <code>nav</code> element.</p>   
        <p>There is no JS applied to the <code>button</code> menu items at this stage.</p>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <nav>
                <ul>
                    <li><a href="">menu 1</a></li>  
                    <li><a href="">menu 2</a></li>
                    <li>
                        <button onclick="toggleActive(this)">menu 3</button>
                        <ul>
                            <li>
                                <a href="#">menu 3a</a>
                            </li>
                            <li>
                                <a href="#">menu 3b</a>
                            </li>
                            <li>
                                <a href="#">menu 3c</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">menu 4</a></li>
                    <li>
                        <a href="#" onclick="toggleActive(this)">menu 5</a>
                        <ul class="right">
                            <li>
                                <a href="#">menu 5a</a>
                            </li>
                            <li>
                                <a href="#">menu 5b</a>
                            </li>
                            <li>
                                <a href="#">menu 5c</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <hr>
        <h3>Dropdown Menu Helpers</h3>
        <p>Dropdown <code>ul</code> element can include a <code>.left</code> or <code>.right</code> class to absolutely position the dropdown left or right.</p>
        <hr>
        <h3>Code Example</h3>
        <code-block 
            code-content='<nav>
    <ul>
        <li><a href="">menu 1</a></li>  
        <li><a href="">menu 2</a></li>
        <li>
            <button>menu 3</button>
            <ul>
                <li>
                    <a href="#">menu 3a</a>
                </li>
                <li>
                    <a href="#">menu 3b</a>
                </li>
                <li>
                    <a href="#">menu 3c</a>
                </li>
            </ul>
        </li>
        <li><a href="">menu 4</a></li>
        <li>
            <a href="#">menu 5</a>
            <ul class="right">
                <li>
                    <a href="#">menu 5a</a>
                </li>
                <li>
                    <a href="#">menu 5b</a>
                </li>
                <li>
                    <a href="#">menu 5c</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>'>
</code-block>

        <hr>
        <h3>Vertical Menus</h3>
        <p>Vertical menu styling can be included by adding the <code>.vertical</code> css class to the <code>ul</code> element.</p>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <nav>
                <ul class="vertical">
                    <li><a href="">menu 1</a></li>  
                    <li><a href="">menu 2</a></li>
                    <li>
                        <button onclick="toggleActive(this)">menu 3</button>
                        <ul>
                            <li>
                                <a href="#">menu 3a</a>
                            </li>
                            <li>
                                <a href="#">menu 3b</a>
                            </li>
                            <li>
                                <a href="#">menu 3c</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="">menu 4</a></li>
                    <li>
                        <a href="#" onclick="toggleActive(this)">menu 5</a>
                        <ul>
                            <li>
                                <a href="#">menu 5a</a>
                            </li>
                            <li>
                                <a href="#">menu 5b</a>
                            </li>
                            <li>
                                <a href="#">menu 5c</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <hr>
        <h3>Code Example</h3>
        <code-block 
        code-content='<nav>
    <ul class="vertical">
        <li><a href="">menu 1</a></li>  
        <li><a href="">menu 2</a></li>
        <li>
            <button>menu 3</button>
            <ul>
                <li>
                    <a href="#">menu 3a</a>
                </li>
                <li>
                    <a href="#">menu 3b</a>
                </li>
                <li>
                    <a href="#">menu 3c</a>
                </li>
            </ul>
        </li>
        <li><a href="">menu 4</a></li>
        <li>
            <a href="#">menu 5</a>
            <ul>
                <li>
                    <a href="#">menu 5a</a>
                </li>
                <li>
                    <a href="#">menu 5b</a>
                </li>
                <li>
                    <a href="#">menu 5c</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>'></code-block>
    </div>

@endsection
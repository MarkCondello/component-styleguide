@extends('layouts.styleguide')

@section('content')
    <div >
        <h3>Generic Forms</h3>
        <p>Forms should not have classes or styles applied to them and should be kept agnostic.</p>
        <p><code>&lt;div&gt;</code> tags should wrap a label and input as a container.</p>
        <p><code>&lt;fieldset&gt;</code> tags can also be used for a container of these div containers.</p> 
        <p>Labels should not wrap inputs and a for attribute needs to be added to the label and the associated id added to the input.</p>
        <p>The only exception for this rule is for the checkbox and radio input elements. Those inputs can have a <code>label</code> container with a class of <code>.checkbox</code> or <code>.radio</code> to provide the custom styles to the associated element.</p>
        <p>An component named &lt;x-field-wrapper&gt; is available to include the markup for the container div, the label and the error messages and state.</p>
        <p>This component takes a fieldname and a labelName as props. See below code example for more details.</p>
   
<code-block code-content='//field-wrapper.blade.php

<div @\error($fieldName)class="form-error"@\enderror>
    <label for="{\{ $fieldName }\}" @\isset($labelClass) class="{\{ $labelClass }\}" @\endisset>{\{ $labelName }\}</label>
    {\{ $slot ?? null }\}
    @\error($fieldName)
    <small><span>⚠</span>{\{ $message }\}</small>
    @\enderror
</div>'></code-block>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <form action="#" method="post">
                <div>
                    <label for="name">Enter your name: </label>
                    <input type="text" name="name" id="name" required placeholder="Add you name here.">
                    <small>The name field is required.</small>
                </div>
                <div>
                    <label for="email">Enter your email: </label>
                    <input type="email" name="email" id="email" required placeholder="Add you email here.">
                    <small>The email field is required.</small>
                </div>
                <label for="mail-me" class="checkbox">
                    <input type="checkbox" id="mail-me" />
                    <span>Include marketing</span>
                </label>
                <footer>
                    <input type="submit" value="Sign up!" class="button success">
                    <a href="#" class="button">Cancel</a>
                </footer>
            </form>
        </div>
        <hr>
        <h3>Code Example</h3>
        <code-block code-content='<form action="#" method="post">
    <div>
        <label for="name">Enter your name: </label>
        <input type="text" name="name" id="name" required placeholder="Add you name here.">
        <small>The name field is required.</small>
    </div>
    <div>
        <label for="email">Enter your email: </label>
        <input type="email" name="email" id="email" required placeholder="Add you email here."
        >
        <small>The email field is required.</small>
    </div>
    <label for="mail-me" class="checkbox">
        <input type="checkbox" id="mail-me" />
        <span>Include marketing</span>
    </label>
    <footer>
        <input type="submit" value="Sign up!" class="button success">
        <a href="#" class="button">Cancel</a>
    </footer>
</form>'></code-block>
        <hr>
        <h3>Error States</h3>
        <p>When form submissions does not pass validation, a generic error message should be presented to the user. In this example an alert component is added above the <code>form</code> element. Fields with an error should include the <code>.form-error</code> css class to the containing <code>div</code> tag.</p>
        <p>If there are errors for a form, the submit button should also be disabled until those errors are resolved.</p>
        <p>Error states are included in the &lt;x-field-wrapper&gt; component mentioned previously.</p>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <header class="alert danger">
                <div>
                    <span>&#9888;</span>
                    <small>There were issues with sending the form. Please see the errors below:</small>
                </div>
                <button>&#9747;</button>
            </header>
            <form action="#" method="post">
                <div class="form-error">
                    <label for="name">Enter your name: </label>
                    <input type="text" name="name" id="name" required placeholder="Add you name here.">
                    <small>The name field is required.</small>
                </div>
                <div>
                    <label for="email">Enter your email: </label>
                    <input type="email" name="email" id="email" required placeholder="Add you email here.">
                    <small>The email field is required.</small>
                </div>
                <label for="mail-me" class="checkbox">
                    <input type="checkbox" id="mail-me" />
                    <span>Include marketing</span>
                </label>
                <footer>
                    <input type="submit" value="Sign up!" class="button -success" disabled>
                    <a href="#" class="button">Cancel</a>
                </footer>
            </form>
        </div>
        <hr>
        <h3>CSS settings</h3>
        <p>The below are the standard settings used for styling forms and inputs.</p>
        <code-block code-content='@\use "dcode/sass-lib/sass/admin-features/mixins/forms.scss: as *;
@use "~/sass/config/variables.scss" as *;

#{$inputs}{
    @\include input-common($input-border, $input-radius, $input-padding, $placeholder-color, $input-bg);
}

form,
.form {
    @\include forms($form-error-color);
}

/* 
// the $inputs variable is required to style the genertic form elements.

$inputs: "[type="text"], [type="password"], [type="date"], [type="datetime"], [type="datetime-local"], [type="month"], [type="week"], [type="email"], [type="number"], [type="search"], [type="tel"], [type="time"], [type="url"], [type="phone"], [type="color"], select, textarea";
*/'
></code-block>
    </div>
@endsection
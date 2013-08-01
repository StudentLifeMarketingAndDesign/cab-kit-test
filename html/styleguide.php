<?php include 'inc/doctype.php'; ?>
<?php include 'inc/meta.php'; ?>
<title>Home | Acme Inc.</title>
<script type="text/javascript" src="//use.typekit.net/ivn3muh.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<!--[if lt IE 9]><script src="js/vendor/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="css/master.css">
<!--[if lt IE 9]><script src="js/vendor/respond.min.js"><![endif]-->
</head>

<body>
    <?php include 'inc/division-bar.php'; ?>

    <?php include 'inc/header.php'; ?>

    <div class="main-bg">
        
        <section class="container content-wrapper clearfix">
            <ul class="breadcrumbs">
                <li><a href="#">Home</a></li>
                <li><a href="#">Self Help</a></li>
                <li>How To Prepare For Exams</li>
            </ul>
            <section class="main-content">
                <section>
                    <h1>Typography</h1>
                    <div class="row-fluid">
                        <div class="span6">
                            <h1>H1. This is a very large header.</h1>
                            <p>The first paragraph directly after an H1 is the lede paragraph and is styled with a larger font size than other paragraphs.</p>
                            <h2>H2. This is a large header.</h2>
                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient.</p>
                            <h3>H3. This is a medium header.</h3>
                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh ut fermentum massa justo.</p>
                            <h4>H4. This is a moderate header.</h4>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl.</p>
                            <h5>H5. This is small header.</h5>
                            <p>Cum sociis natoque penatibus magnis parturient montes, nascetur ridiculus mus. Sed consectetur est.</p>
                            <h6>H6. This is very small header.</h6>            
                            <p>Donec id elit non mi porta gravida at eget metus. Curabitur blandit tempus porttitor.</p>
                        </div>
                        <div class="span6">
                            <h3>Link Styles</h3>
                            <p>Etiam porta sem malesuada <a href="#">magna mollis euismod</a>. Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra augue.</p>
                            <p>Text level <abbr title="HyperText Markup Language">HTML</abbr> elements may be used within other elements. They include: <em>em</em> and <strong>strong</strong> for semantic emphasis, <i>i</i> and <b>b</b> for presentational formatting, <abbr title="Abbreviation">abbr</abbr> abbreviations, <cite>cite</cite> citations, <code>code</code> example, <del>del</del>, <ins>ins</ins> for visibly deleted and inserted content, <dfn>dfn</dfn> definitions, <mark>mark</mark> for highlighted passages and <sup>sup</sup> superscript and <sub>sub</sub> subscript.</p>
                        </div>
                    </div>
                </section>
                <hr>
                <section>
                    <h1>Lists</h1>
                    <div class="row-fluid">
                        <div class="span3">
                			<h3>Unordered List</h3>
                			<p>A list of items in which the order does not explicitly matter.</p>
                            <ul>
                                <li>List item with a much longer description or more content.</li>
                                <li>List item</li>
                                <li>List item
                                    <ul>
                                        <li>Nested List Item</li>
                                        <li>Nested List Item</li>
                                        <li>Nested List Item</li>
                                    </ul>
                                </li>
                                <li>List item</li>
                                <li>List item</li>
                                <li>List item</li>
                            </ul>
                        </div>
                        <div class="span3">
                            <h3>Ordered List</h3>
                            <p>A list of items in which the order does explicitly matter.</p>
                            <ol>
                                <li>List item with a much longer description or more content.</li>
                                <li>List item</li>
                                <li>List item
                                    <ol>
                                        <li>Nested List Item</li>
                                        <li>Nested List Item</li>
                                        <li>Nested List Item</li>
                                    </ol>
                                </li>
                                <li>List item</li>
                                <li>List item</li>
                                <li>List item</li>
                            </ol>
                        </div>
                        <div class="span3">
                            <h3>Unstyled List</h3>
                            <p>A list of items with a class <code>.unstyled</code>.</p>
                            <ul class="unstyled">
                                <li>List item</li>
                                <li>List item</li>
                                <li>List item</li>
                                <li>List item</li>
                                <li>List item</li>
                                <li>List item</li>
                            </ul>
                        </div>
                        <div class="span3">
                            <h3>Inline List</h3>
                            <p>Place all list items on a single line with a class of <code>inline</code>.</p>
                            <ul class="inline">
                                <li>List item</li>
                                <li>List item</li>
                                <li>List item</li>
                                <li>List item</li>
                                <li>List item</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <hr>
                <section>
        			<h1>Blockquotes</h1>
        			<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        			<blockquote>
        				<p>I do not fear computers. I fear the lack of them.</p>
        				<small>Isaac Asimov</small>
        			</blockquote>
        			
        			<h4>Pull-Right</h4>
        			<p>Use <code>.pull-right</code> for a floated, right-aligned blockquote.</p>
        			<blockquote class="pull-right">
        				<p>This blockquote is using a class of "pull-right"</p>
        				<small>Isaac Asimov</small>
        			</blockquote>
        			<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac vestibulum eros.</p>
                </section>
                <hr>
                <section>			
        			<h1>Tables</h1>
        			<h4>Default styles</h4>
                    <p>For basic styling&mdash;light padding and only horizontal dividers&mdash;add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.</p>

        			<table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
        			</table>
        			
        			<h3>Optional classes</h3>
                    <p>Add any of the follow classes to the <code>.table</code> base class.</p>
        	
                    <h3><code>.table-striped</code></h3>
                    <p>Adds zebra-striping to any table row within the <code>&lt;tbody&gt;</code> via the <code>:nth-child</code> CSS selector (not available in IE7-IE8).</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
        	          
                    <h3><code>.table-bordered</code></h3>
                    <p>Add borders and rounded corners to the table.</p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2">1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@TwBootstrap</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
        	          
                    <h3><code>.table-hover</code></h3>
                    <p>Enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
        	          
                    <h3><code>.table-condensed</code></h3>
                    <p>Makes tables more compact by cutting cell padding in half.</p>
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </section>
                <hr>
                <section>
                    <h1>Carousels</h1>
                    <div class="row-fluid">
                        <div class="span6">
                            <h3>Flexslider</h3>
                            <h5>CSS</h5>
                            <p>import the following scss file in site.scss</p>
                            <textarea rows="1" style="width:100%;">
        @import "imports/flexslider.scss";
                            </textarea>
                            <h5>HTML</h5>
                            <textarea rows="10" style="width:100%;">
        <div class="flexslider">
            <ul class="slides">
                <li><img src="images/flexslider/slide1.jpg" alt="" /></li>
                <li>
                    <img src="images/flexslider/slide2.jpg" alt="" />
                    <p class="flex-caption">Caption Goes Here.</p>
                </li>
                <li><img src="images/flexslider/slide3.jpg" alt="" /></li>
            </ul>
        </div>
                            </textarea>
                            <h5>Javascript</h5>
                            <textarea rows="3" style="width:100%">
        $('.flexslider').flexslider({
            slideshow: false
        });
                            </textarea>
                        </div>
                        <div class="span6">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="images/slide1.jpg" alt="" />
                                    </li>
                                    <li>
                                        <img src="images/slide2.jpg" alt="" />
                                        <p class="flex-caption">Caption Goes Here.</p>
                                    </li>
                                    <li>
                                        <img src="images/slide3.jpg" alt="" />
                                    </li>
                                </ul>
                            </div>
                            <p>Advanced settings can be found <a href="http://www.woothemes.com/flexslider/">here</a></p>
                        </div>
                    </div>
                </section>
                <hr>
                <section>
        			<h1>Forms</h1>
        			<p>Individual form controls receive styling, but without any required base class on the <code>&lt;form&gt;</code> or large changes in markup. Results in stacked, left-aligned labels on top of form controls.</p>
        			<form>
        				<fieldset>
        					<legend>Legend</legend>
        					<label>Label name</label>
        					<input type="text" placeholder="Type something…">
        					<span class="help-block">Example block-level help text here.</span>
        					<label class="checkbox">
        						<input type="checkbox"> Check me out
        					</label>
        					<button type="submit" class="btn">Submit</button>
        				</fieldset>
        			</form>
        				
        			<h3>Inline form</h3>
        			<p>Add <code>.form-inline</code> for left-aligned labels and inline-block controls for a compact layout.</p>
                    <form class="form-inline">
                        <input type="text" class="input-small" placeholder="Email">
                        <input type="password" class="input-small" placeholder="Password">
                        <label class="checkbox">
                        <input type="checkbox"> Remember me
                        </label>
                        <button type="submit" class="btn">Sign in</button>
                    </form>

                    <h3>Horizontal form</h3>
                    <p>Right align labels and float them to the left to make them appear on the same line as controls. Requires the most markup changes from a default form:</p>
                    <ul>
                        <li>Add <code>.form-horizontal</code> to the form</li>
                        <li>Wrap labels and controls in <code>.control-group</code></li>
                        <li>Add <code>.control-label</code> to the label</li>
                        <li>Wrap any associated controls in <code>.controls</code> for proper alignment</li>
                    </ul>
                    <form class="form-horizontal">
                        <fieldset>
                            <legend>Legend</legend>
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Email</label>
                                <div class="controls">
                                    <input type="text" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">Password</label>
                                <div class="controls">
                                    <input type="password" id="inputPassword" placeholder="Password">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <label class="checkbox">
                                      <input type="checkbox"> Remember me
                                    </label>
                                    <button type="submit" class="btn">Sign in</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
              
                    <h3>Checkboxes and radios</h3>
                    <p>Checkboxes are for selecting one or several options in a list while radios are for selecting one option from many.</p>
                    <h4>Default (stacked)</h4>
                    <form>
                        <label class="checkbox">
                            <input type="checkbox" value="">
                        Option one is this and that&mdash;be sure to include why it's great
                        </label>
                        <br>
                        <label class="radio">
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Option one is this and that&mdash;be sure to include why it's great
                        </label>
                        <label class="radio">
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Option two can be something else and selecting it will deselect option one
                        </label>
                    </form>

                    <h4>Inline checkboxes</h4>
                    <p>Add the <code>.inline</code> class to a series of checkboxes or radios for controls appear on the same line.</p>
                    <form>
                        <label class="checkbox inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                        </label>
                        <label class="checkbox inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                        </label>
                        <label class="checkbox inline">
                            <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                        </label>
                    </form>
              
                    <h4>Buttons instead of text</h4>
                    <p>Instead of a <code>&lt;span&gt;</code> with text, use a <code>.btn</code> to attach a button (or two) to an input.</p>
                    <form>
                        <div class="input-append">
                            <input class="span2" id="appendedInputButton" size="16" type="text">
                            <button class="btn" type="button">Go!</button>
                        </div>
                        <br>
                        <div class="input-append">
                            <input class="span2" id="appendedInputButtons" size="16" type="text">
                            <button class="btn" type="button">Search</button>
                            <button class="btn" type="button">Options</button>
                        </div>
                    </form>

                    <h3>Control sizing</h3>
                    <p>Use relative sizing classes like <code>.input-large</code> or match your inputs to the grid column sizes using <code>.span*</code> classes.</p>
                    <h4>Relative sizing</h4>
                    <form style="padding-bottom: 15px;">
                        <input class="input-mini" type="text" placeholder=".input-mini"><br>
                        <input class="input-small" type="text" placeholder=".input-small"><br>
                        <input class="input-medium" type="text" placeholder=".input-medium"><br>
                        <input class="input-large" type="text" placeholder=".input-large"><br>
                        <input class="input-xlarge" type="text" placeholder=".input-xlarge"><br>
                        <input class="input-xxlarge" type="text" placeholder=".input-xxlarge"><br>
                    </form>
                </section>
                <hr>
                <section>
                    <h1>Buttons</h1>
                    <p>Button styles can be applied to anything with the <code>.btn</code> class applied. However, typically you'll want to apply these to only <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> elements for the best rendering.</p>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Button</th>
                                <th>class=""</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><button type="button" class="btn">Default</button></td>
                                <td><code>btn</code></td>
                                <td>Standard gray button with gradient</td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-primary">Primary</button></td>
                                <td><code>btn btn-primary</code></td>
                                <td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-success">Success</button></td>
                                <td><code>btn btn-success</code></td>
                                <td>Indicates a successful or positive action</td>
                            </tr>
                            <tr>
                                <td><button type="button" class="btn btn-inverse">Inverse</button></td>
                                <td><code>btn btn-inverse</code></td>
                                <td>Alternate dark gray button, not tied to a semantic action or use</td>
                            </tr>
                        </tbody>
                    </table>

                    <h3>Button sizes</h3>
                    <p>Fancy larger or smaller buttons? Add <code>.btn-large</code>, <code>.btn-small</code>, or <code>.btn-mini</code> for additional sizes.</p>
                    <p>
                        <button type="button" class="btn btn-large btn-primary">Large button</button>
                        <button type="button" class="btn btn-large">Large button</button>
                    </p>
                    <p>
                        <button type="button" class="btn btn-primary">Default button</button>
                        <button type="button" class="btn">Default button</button>
                    </p>
                    <p>
                        <button type="button" class="btn btn-small btn-primary">Small button</button>
                        <button type="button" class="btn btn-small">Small button</button>
                    </p>
                    <p>
                        <button type="button" class="btn btn-mini btn-primary">Mini button</button>
                        <button type="button" class="btn btn-mini">Mini button</button>
                    </p>
                </section>
                <hr>
                <section>
                    <h1>Grid</h1>
                    <div class="row-fluid">
                        <div class="span1">
                            <div class="well">
                                1
                            </div>
                        </div>
                        <div class="span11">
                            <div class="well">
                                11
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span2">
                            <div class="well">
                                2
                            </div>
                        </div>
                        <div class="span10">
                            <div class="well">
                                10
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span3">
                            <div class="well">
                                3
                            </div>
                        </div>
                        <div class="span9">
                            <div class="well">
                                9
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span4">
                            <div class="well">
                                4
                            </div>
                        </div>
                        <div class="span8">
                            <div class="well">
                                8
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span5">
                            <div class="well">
                                5
                            </div>
                        </div>
                        <div class="span7">
                            <div class="well">
                                7
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="well">
                                6
                                <div class="row-fluid">
                                    <div class="span6"><div class="well">Nested 6</div></div>
                                    <div class="span6"><div class="well">Nested 6</div></div>
                                </div>
                            </div>
                        </div>
                        <div class="span6"><div class="well">6</div></div>
                    </div>
                    <div class="row-fluid">
                        <div class="span4">
                            <div class="well">
                                <h5>Span4</h5>
                                <p>Vestibulum id ligula porta felis euismod semper.</p>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="well">
                                <h5>Span4</h5>
                                <p>Vestibulum id ligula porta felis euismod semper.</p>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="well">
                                <h5>Span4</h5>
                                <p>Vestibulum id ligula porta felis euismod semper.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span4">
                            <div class="well">
                                <h5>Span4</h5>
                                <p>Vestibulum id ligula porta felis euismod semper.</p>
                            </div>
                        </div>
                        <div class="span4 offset4">
                            <div class="well">
                                <h5>Span4 Offset4</h5>
                                <p>Vestibulum id ligula porta felis euismod semper.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="well">
                                <h5>Span12</h5>
                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                            </div>
                        </div>
                    </div>
                </section>

            </section>
            <section class="sec-content">
                <h3 class="section-title">Section Title</h3>
                <nav class="sec-nav">
                    <ul>
                        <li><a href="#">Anxiety</a></li>
                        <li><a href="#">Assertiveness</a></li>
                        <li class="active"><a href="#">Career</a></li>
                        <li><a href="#">Change</a></li>
                        <li><a href="#">Confidentiality</a></li>
                        <li><a href="#">Conflict</a></li>
                        <li><a href="#">Counseling</a></li>
                        <li><a href="#">Disability</a></li>
                        <li><a href="#">Education</a></li>
                        <li><a href="#">Grief and Loss</a></li>
                    </ul>
                </nav>
                <aside>
                    <div class="mod photo">
                        <div>
                            <h3>Outreach Programs</h3>
                            <img src="images/home_outreach.jpg" alt="">
                        </div>
                        <p>Defining a nascent field of study with potential for broad impact.</p>
                    </div>

                     <div class="mod">
                        <h3>Module Name</h3>
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    </div>
                </aside>
            </section>
        </section>
    </div>

    <?php include 'inc/footer.php'; ?>

    <?php include 'inc/scripts.php'; ?>

</body>
</html>

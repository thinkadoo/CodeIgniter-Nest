<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Skeleton: Beautiful Boilerplate for Responsive, Mobile-Friendly Development</title>
    <meta name="description" content="Skeleton: Beautiful Boilerplate for Responsive, Mobile-Friendly Development">
    <meta name="author" content="Dave Gamache, hi@getskeleton.com">
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="stylesheets/base.css">
    <link rel="stylesheet" href="stylesheets/skeleton.css">
    <link rel="stylesheet" href="stylesheets/layout.css">
    <link rel="stylesheet" href="stylesheets/docs.css">

    <!-- Favicon
    ================================================== -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>

            <div class="container">
                <div class="three columns sidebar">
                    <nav>
                        <h3 id="logo">Skeleton</h3>
                        <ul>
                            <li><a href="#whatAndWhy">What &amp; Why</a></li>
                            <li><a href="#grid">Grid</a></li>
                            <li><a href="#typography">Typography</a></li>
                            <li><a href="#buttons">Buttons</a></li>
                            <li><a href="#tabs">Tabs</a></li>
                            <li><a href="#forms">Forms</a></li>
                            <li><a href="#mediaQueries">Media Queries</a></li>
                            <li><a href="#support">Support</a></li>
                            <li><a href="#examples">Examples</a></li>
                            <li><a href="#download">Download</a></li>
                        </ul>
                    </nav>
                    &nbsp;
                </div>
                <div class="twelve columns offset-by-one content">
                    <header>
                        <h1>A Beautiful Boilerplate for Responsive, Mobile-Friendly Development</h1>
                    </header>
                    <hr class="large" />
                    <div class="doc-section" id="whatAndWhy">
                        <h3>What Is It?</h3>
                        <p>Skeleton is a small collection of CSS &amp; JS files that can help you rapidly develop sites that look beautiful at any size, be it a 17" laptop screen or an iPhone. Skeleton is built on three core principles:</p>
                        <div class="row clearfix">
                            <div class="four columns alpha">
                                <img src="images/responsive.jpg" alt="responsive" width="220" height="113" />
                            </div>
                            <div class="eight columns omega">
                                <h5>Responsive Grid Down To Mobile</h5>
                                <p>Skeleton has a familiar, lightweight 960 grid as its base, but elegantly scales down to downsized browser windows, tablets, mobile phones (in landscape and portrait). <strong>Go ahead, resize this page!</strong></p>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="four columns alpha">
                                <img src="images/fast.jpg" alt="responsive" width="220" height="113" />
                            </div>
                            <div class="eight columns omega">
                                <h5>Fast to Start</h5>
                                <p>Skeleton is a tool for rapid development. Get started fast with CSS best practices, a well-structured grid that makes mobile consideration easy, an organized file structure and super basic UI elements like lightly styled forms, buttons, tabs and more.</p>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="four columns alpha">
                                <img src="images/foundation.jpg" alt="responsive" width="220" height="113" />
                            </div>
                            <div class="eight columns omega">
                                <h5>Style Agnostic</h5>
                                <p>Skeleton is not a UI framework. It's a development kit that provides the most basic styles as a foundation, but is ready to adopt whatever your design or style is.</p>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="doc-section clearfix" id="grid">
                        <h3>The Grid</h3>
                        <p>Skeleton's base grid is a variation of the 960 grid system. The syntax is simple and it's effective cross browser, but the awesome part is that it also has the flexibility to go mobile like a champ. <strong>Go ahead, resize the browser and watch as the layout reacts!</strong></p>
                        <div class="example-grid">
                            <div class="one column alpha">One</div>
                            <div class="eleven columns omega">Eleven</div>
                            <div class="two columns alpha">Two</div>
                            <div class="ten columns omega">Ten</div>
                            <div class="three columns alpha">Three</div>
                            <div class="nine columns omega">Nine</div>
                            <div class="four columns alpha">Four</div>
                            <div class="eight columns omega">Eight</div>
                            <div class="five columns alpha">Five</div>
                            <div class="seven columns omega">Seven</div>
                            <div class="six columns alpha">Six</div>
                            <div class="six columns omega">Six</div>
                            <div class="seven columns alpha">Seven</div>
                            <div class="five columns omega">Five</div>
                            <div class="eight columns alpha">Eight</div>
                            <div class="four  columns omega">Four</div>
                            <div class="nine columns alpha">Nine</div>
                            <div class="three columns omega">Three</div>
                            <div class="ten columns alpha">Ten</div>
                            <div class="two columns omega">Two</div>
                            <div class="eleven columns alpha">Eleven</div>
                            <div class="one column omega">One</div>
                        </div>
                        <div class="hidden-code">
                            <a href="">Code Example</a>
                            <script src="https://gist.github.com/959632.js?file=Skeleton%20Grid"></script>
                        </div>
                    </div>
                    <hr />
                    <div class="doc-section clearfix" id="typography">
                        <h3>Typography</h3>
                        <p>The typography of Skeleton is designed to create a strong hierarchy with basic styles. The primary font is the classic Helvetica Neue, but the font stack can be easily changed with just a couple adjustments. Regular paragraphs are set at a 14px base with 21px line height.</p>
                        <div class="row">
                            <div class="seven columns alpha headings">
                                <h1>Heading &lt;h1&gt;</h1>
                                <h2>Heading &lt;h2&gt;</h2>
                                <h3>Heading &lt;h3&gt;</h3>
                                <h4>Heading &lt;h4&gt;</h4>
                                <h5>Heading &lt;h5&gt;</h5>
                                <h6>Heading &lt;h6&gt;</h6>
                            </div>
                            <div class="five columns omega">
                                <blockquote>
                                    <p>This is a blockquote style example. It stands out, but is awesome</p>
                                    <cite>Dave Gamache, Skeleton Creator</cite>
                                </blockquote>
                            </div>
                        </div>
                        <div class="hidden-code">
                            <a href="">Code Example</a>
                            <script src="https://gist.github.com/973460.js?file=typography"></script>
                        </div>
                    </div>
                    <hr />
                    <div class="doc-section" id="buttons">
                        <h3>Buttons</h3>
                        <p>Buttons are intended for action and thus should have appropriate weight. The standard button is given that weight with a little bit of depth and a strong hover.</p>
                        <a href="#" class="button">Click Me For Action</a>
                        <div class="hidden-code">
                            <a href="">Code Example</a>
                            <script src="https://gist.github.com/973448.js?file=buttons"></script>
                        </div>
                    </div>
                    <hr />
                    <div class="doc-section" id="tabs">
                        <h3>Tabs</h3>
                        <p>Some very simple tabs that have dead simple jQuery that hook them up to their corresponding content.</p>
                        <ul class="tabs">
                            <li><a class="active" href="#simple">Simple</a></li>
                            <li><a href="#lightweight">Lightweight</a></li>
                            <li><a href="#mobileFriendly">Mobile</a></li>
                        </ul>
                        <ul class="tabs-content">
                            <li class="active" id="simple">The tabs are clean and simple unordered-list markup and basic CSS.</li>
                            <li id="lightweight">The tabs are cross-browser, but don't need a ton of hacky CSS or markup.</li>
                            <li id="mobileFriendly">The tabs work like a charm even on mobile devices. If there are too many they will stack (it's not completely awesome, but still retains functionality).</li>
                        </ul>
                        <div class="hidden-code">
                            <a href="">Code Example</a>
                            <script src="https://gist.github.com/973450.js?file=tabs"></script>
                        </div>
                    </div>
                    <hr />
                    <div class="doc-section clearfix" id="forms">
                        <h3>Forms</h3>
                        <p>Forms can be one of the biggest pains for web developers, but just use these dead simple styles and you should be good to go. </p>
                        <div class="four columns alpha">
                            <form>
                                <label for="regularInput">Regular Input</label>
                                <input type="text" id="regularInput" />
                                <label for="regularTextarea">Regular Textarea</label>
                                <textarea id="regularTextarea"></textarea>
                                <label for="selectList">Select List</label>
                                <select id="selectList">
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                    <option value="Option 3">Option 3</option>
                                    <option value="Option 4">Option 4</option>
                                </select>
                                <fieldset>
                                    <legend>Checkboxes</legend>
                                    <label for="regularCheckbox">
                                        <input type="checkbox" id="regularCheckbox" value="checkbox 1" />
                                        <span>Regular Checkbox</span>
                                    </label>
                                    <label for="secondRegularCheckbox">
                                        <input type="checkbox" id="secondRegularCheckbox" value="checkbox 2" />
                                        <span>Regular Checkbox</span>
                                    </label>
                                </fieldset>
                                <fieldset>
                                    <legend>Radio Buttons</legend>
                                    <label for="regularRadio">
                                        <input type="radio" name="radios" id="regularRadio" value="radio 1" />
                                        <span>Regular Radio</span>
                                    </label>
                                    <label for="secondRegularRadio">
                                        <input type="radio" name="radios" id="secondRegularRadio" value="radio 2" />
                                        <span>Regular Radio</span>
                                    </label>
                                </fieldset>
                                <button type="submit">Submit Form</button>
                            </form>
                        </div>
                        <br class="clear" />
                        <div class="hidden-code">
                            <a href="">Code Example</a>
                            <script src="https://gist.github.com/973455.js?file=forms"></script>
                        </div>
                    </div>
                    <hr />
                    <div class="doc-section" id="mediaQueries">
                        <h3>Media Queries</h3>
                        <p>Skeleton uses a <strong>lot</strong> of media queries to serve the scalable grid, but also for the convenience of styling your site on different size screens. Skeleton's media queries are almost exclusively targeted at max and min widths rather than device sizes or orientations. The advantage of this is browsers and future mobile devices that don't map to exact set dimensions will still benefit from the styles. That being said, all of the queries were written to be optimal on Apple iOS devices. The built in media queries include:</p>
                        <ul class="square">
                            <li><strong>Smaller than 960</strong>: Smaller than the standard base grid</li>
                            <li><strong>Tablet Portrait</strong>: Between 768px and 959px</li>
                            <li><strong>All Mobile Sizes</strong>: Less than 767px</li>
                            <li><strong>Just Mobile Landscape</strong>: Between 480px and 767px</li>
                            <li><strong>Just Mobile Portrait</strong>: Less than 479px</li>
                        </ul>
                        <div class="hidden-code">
                            <a href="">Code Example</a>
                            <script src="https://gist.github.com/973467.js?file=media%20queries"></script>
                        </div>
                    </div>
                    <hr />
                    <div class="doc-section" id="support">
                        <h3>Support for Skeleton</h3>
                        <p>Do you have feedback, questions or thoughts about Skeleton - email me at <em>hi@getskeleton.com</em> and I will get back to you as soon as I can :)</p>
                        <ul class="tabs">
                            <li><a class="active" href="#browsers">Browsers</a></li>
                            <li><a href="#changelog">Changelog</a></li>
                            <li><a href="#licensing">License</a></li>
                        </ul>
                        <ul class="tabs-content">
                            <li class="active" id="browsers">
                                <p>Skeleton has been tested across as many devices and browsers as I could get my hands on:</p>
                                <ul class="square add-bottom">
                                    <li>Latest Chrome (Mac/PC)</li>
                                    <li>Firefox 4.0, 3.6, 3.5, 3.0 (Mac/PC)</li>
                                    <li>Latest Safari</li>
                                    <li>IE9, IE8, IE7</li>
                                    <li>iPhone (Retina)</li>
                                    <li>Droid (Charge/Original)</li>
                                    <li>iPad</li>
                                </ul>
                                <p>There is a small hiccup though - older non-CSS3 browsers aren't going to respond to the media-queries and thus will be served the standard 960 grid even if they are resized. In the spirit of graceful degradation though, I'm going to let this be instead of trying to implement a JS solution.</p>
                                <p><strong>Notes on IE</strong>: We all know sometimes IE doesn't behave, so through the genius of conditional CSS I've added a class of "ie" to all versions of the browser, as well as specific targets for each (i.e. "ie6", "ie7", "ie8"). It's not a perfect world, but hopefully this will help make naughty IE behave.</p>
                            </li>
                            <li id="changelog">
                                <ul class="square">
                                    <li>
                                        <strong>V1.0.0</strong> <em>(5/15/2011)</em>: Initial release of Skeleton.
                                    </li>
                                    <li>
                                        <strong>V1.0.1</strong> <em>(5/19/2011)</em>: Made some quick changes based on input from Github and fellow designers.
                                            <ul class="square">
                                             <li>Refined the app.js to make faster and cleaner</li>
                                             <li>Added Apple touch icons</li>
                                             <li>Removed some bloated CSS lines from the base.css</li>
                                             <li>Added an :active button class</li>
                                             <li>Changed Skeleton favicon</li>
                                             <li>Added MIT licensing</li>
                                            </ul>
                                    </li>
                                    <li>
                                        <strong>V1.0.2</strong> <em>(5/20/2011)</em>: Added more input declarations to the .button styles and included legend in CSS
                                    </li>
                                    <li>
                                        <strong>V1.0.3</strong> <em>(7/17/2011)</em>: Fixed the issue of failed "zooming" on browsers.
                                    </li>
                                    <li>
                                        <strong>V1.1</strong> <em>(8/17/2011)</em>: A lot of cleanup changes. I finally feel comfortable throwing a 1.1 on this bad boy.
                                            <ul class="square">
                                             <li>App.js is now just tabs.js</li>
                                             <li>Tab CSS now works perfectly on IE7+</li>
                                             <li>Rewrote layout.css media-query spaces to be easier to understand</li>
                                             <li>Stripping some rogue whitespace and reformatting a bit</li>
                                             <li>Fixing broken doctype declaration</li>
                                            </ul>
                                    </li>
                                </ul>
                            </li>
                            <li id="licensing">
                                <p>All parts of Skeleton are free to use and abuse under the open-source MIT license. The full licensing language can be found here: <a href="http://www.opensource.org/licenses/mit-license.php">http://www.opensource.org/licenses/mit-license.php</a>. </p>
                                <p>More importantly, I would love to have a small community of contributors to Skeleton, so please feel free to jump over the <a href="https://github.com/dhgamache/Skeleton">Skeleton Github page</a> and contribute to make Skeleton a better boilerplate for everyone! <strong>I would also love to know if you built a site on Skeleton</strong> - I'm planning on tying a gallery into these docs, so just shoot me the URL at <em>hi@getskeleton.com</em></p>
                            </li>
                        </ul>
                    </div>
                    <hr />
                    <div class="doc-section" id="examples">
                        <h3>Examples &amp; Extensions</h3>
                        <p>Skeleton has been in the wild for quite a few months now and reception has been pretty awesome so far. Nothing pleases me more than receiving emails about projects using Skeleton or constructive feedback (this is really the reason Skeleton gets better). Here is a quick list of some of the most awesome sites using Skeleton:</p>
                        <div class="row clearfix">
                            <div class="four columns alpha">
                                <a href="http://www.eleventhedition.com/">
                                    <img src="images/eleventhedition.jpg" alt="eleventh edition" width="220" height="125" />
                                    <h6>The Eleventh Edition</h6>
                                </a>
                            </div>
                            <div class="four columns">
                                <a href="http://neighborhoods.blink182.com/">
                                    <img src="images/blink182.jpg" alt="blink 182 neighborhoods" width="220" height="125" />
                                    <h6>Blink 182 Neighborhoods</h6>
                                </a>
                            </div>
                            <div class="four columns omega">
                                <a href="http://artistic.ly/">
                                    <img src="images/artisticly.jpg" alt="artisticly" width="220" height="125" />
                                    <h6>Artistic.ly</h6>
                                </a>
                            </div>
                        </div>
                        <p>Skeleton also has been extended in a number of ways! These are the extensions I've heard of so far!</p>
                        <ul class="square">
                            <li><a href="https://github.com/wycks/WP-Skeleton-Theme"><strong>Skeleton Wordpress on Github</strong></a></li>
                            <li><a href="https://github.com/helios-technologies/skeleton-rails"><strong>Skeleton Rails Gem on Github</strong></a><small> or check it out on <a href=" https://rubygems.org/gems/skeleton-rails">Rubygems.org</a></small></li>
                        </ul>
                    </div>
                    <hr />
                    <div class="doc-section" id="download">
                        <h3>Downloads</h3>
                        <p>The Skeleton download is a zip file (~27kb) containing all the CSS groundwork and JS goodies to get started on any web project. </p>
                        <a href="https://github.com/dhgamache/Skeleton/zipball/master" class="remove-bottom button">Download Skeleton 1.1 from Github</a>
                        <div class="post-button-note half-bottom">or <a href="https://github.com/dhgamache/Skeleton">View Source on Github</a></div>
                        <a href="documentation-assets/Skeleton-Grid.psd.zip" class="button remove-bottom">Download Skeleton PSD Template</a>
                        <div class="post-button-note add-bottom">(A la <a href="http://www.960.gs">960.gs</a> PSD template)</div>
                        <p>The file structure for Skeleton is:</p>
                        <ul class="square">
                            <li><strong>index.html</strong>: The base html page that includes the necessary initial markup</li>
                            <li>
                                <strong>stylesheets</strong> <em>(folder)</em>
                                <ul class="circle">
                                    <li><strong>base.css</strong>: Basic styles of Skeleton</li>
                                    <li><strong>skeleton.css</strong>: The glorious Skeleton grid</li>
                                    <li><strong>layout.css</strong>: File with no specific styles, but a variety of useful media queries</li>
                                </ul>
                            </li>
                            <li>
                                <strong>javascripts</strong> <em>(folder)</em>
                                <ul class="circle">
                                    <li><strong>tabs.js</strong>: Contains code for activating tabs and should house your site's JS/jQuery (using Google's CDN to pull in jQuery as well)</li>
                                    <li><strong>plugins</strong> <em>(folder)</em>: An empty directory for your jQuery plugins</li>
                                </ul>
                            </li>
                            <li>
                                <strong>images</strong> <em>(folder):</em>
                                <ul class="circle">
                                    <li><strong>favicon.ico</strong>: Standard 16x16 favicon</li>
                                    <li><strong>apple-touch-icon (x3)</strong>: All three sizes of Apple touch icons for iPhone 3, iPad and iPhone 4 with retina.</li>
                                </ul>
                            </li>
                            <li><strong>robots.txt</strong>: SEO, search-crawler file. Don't need to touch it, just there for your own good</li>
                            <li><strong>404.html</strong>: Placeholder 404 page just to get you started</li>

                        </ul>
                    </div>
                    <hr />
                    <div class="doc-section" id="attribution">
                        <p class="remove-bottom"><small>Created by <a href="http://www.davegamache.com">Dave Gamache</a>, 2011 &copy;<br />
                        I want to thank <a href="http://twitter.com/#!/smileyj68">@smileyj68</a> for all the inspiration and for helping me get to a place to create Skeleton, <a href="http://twitter.com/#!/mdo">@mdo</a> for being a boss, giving awesome feedback and helping me get Skeleton out of the door, <a href="http://html5boilerplate.com/">the whole HTML5 Boilerplate project/team</a> that served as an indispensable resource, <a href="http://www.960.gs">960.gs</a> for a great starting point and their PSD template and <a href="http://twitter.com/#!/ashleybatz">@ashleybatz</a> for putting up with my late night coding and shenanigans.</small></p>
                    </div>
                </div><!-- content -->
            </div><!-- container -->

            <div class="resize"></div>






        <!-- JS
        ================================================== -->
        <script src="javascripts/jquery.min.js"></script>
        <script src="javascripts/tabs.js"></script>

        <script>
            $('.hidden-code').click(function(e) {
                e.preventDefault();
                $(this).children('.gist').slideToggle();
            })

            var originalText;
            $('.example-grid').children().hover(
                function() {
                    originalText = $(this).text();
                    $(this).html($(this).width()+'px');
                },
                function() {
                    $(this).html(originalText);
                })
        </script>

    </body>
</html>
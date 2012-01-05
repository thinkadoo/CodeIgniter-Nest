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

<h1>Modules</h1>
<p>There're currently four modules in this project every developer should know.</p>
<ol>
	<li>backend</li>
	<li>frontend</li>
	<li>api</li>
	<li>skmm</li>
</ol>
<h2>1. backend</h2>
<h3>1.1. Accessibility</h3>
<p>Any level of user may access this module except <strong>member</strong>.</p>
<p>Each level of user have specific development folder for controller and view. Example of folder structure in this module :</p>
<pre><code>backend
  _controller
    clusterlead
    developer
    financialcontroller
    operationmanager
    root
    shared
    sitemanager
  _template
  _view
    clusterlead
    developer
    financialcontroller
    operationmanager
    root
    shared
    sitemanager
</code></pre>
<h3>1.2. Base Uri</h3>
<p>Base uri for this module is : <strong>/dashboard</strong></p>
<h2>2. frontend</h2>
<h3>2.1. Accessibility</h3>
<p>This module is public facing one. Mean, it's accessible to anyone. However, number of the IRIS feature is accessible after user login.</p>
<h3>2.2. Base Uri</h3>
<p>Base uri for this module is : <strong>/</strong></p>
<p>However base uri for each microsite will be : <strong>/[:site-name]</strong></p>
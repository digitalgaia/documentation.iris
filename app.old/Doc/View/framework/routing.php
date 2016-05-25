<h1>Routing</h1>
<p>The main file for routing is located in <strong>/pim/apps/_structure/routes.php</strong></p>
<h2>1. Add new route</h2>
<p>Like many other router out there, routes are read by order. Top will be priotized than the bottom.</p>
<p>Below example, basically will check if the current uri matches <strong>dashboard/logout</strong>. 
And if it does, will execute the given handler by the <strong>second</strong> argument.</p>
<pre><code>$routes[] = array('dashboard/logout', 'controller=backend:auth@logout');
</code></pre>
<p>If you noticed on the handler argument, there're several informations about the <strong>module</strong>, <strong>controller</strong> and <strong>action</strong>.</p>
<ul>
	<li>1. controller : will look for a controller</li>
	<li>2. backend : will look for a module called <strong>backend</strong></li>
	<li>3. auth : will look for a controller called auth under <strong>backend</strong> module.</li>
	<li>4. logout : will look for an action called <strong>logout</strong> in this controller.</li>
</ul>
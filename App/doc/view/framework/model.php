<h1>Model</h1>
<p>Model is the place where major codebase and business logics is placed at.</p>
<p>It's located within <b>/pim/apps/_model/</b>.</p>
<h2>1. Loading model</h2>
<p>To load a model, consider below code:</p>
<pre><code>model::load('site/site');
</code></pre>
<p>This code will <b>load</b> and <b>instantiate</b> a class called <b>Site</b> in /pim/apps/_model/site/site.php</p>
<p>Then, you may use whatever the class' method is written there, for example.</p>
<pre><code>$site = model::load('site/site')->getSiteByMember($memberId);
</code></pre>
<h2>2. Writing a model</h2>
<h3>2.1. Convention</h3>
<p>- File name must all be lowercase.</p>
<p>- The class name must be first word uppercase.</p>
<p>- It's neccessary to know that each model is usually associated with a database table. For example, you may find a related logic for table site_request in, model <b>site/request</b>.</p>
<h2>3. ORM</h2>
<p>This feature is coming late to this project, so, you'll notice that most of the codes aren't really an ORM like code.</p>

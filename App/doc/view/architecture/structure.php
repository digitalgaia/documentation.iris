<h1>Structure</h1>
<p>1. Development codes begin in folder /pim. Below is how the structure looks like :</p>
<pre><code>apps
  _config
  _files
  _library
  _model
  _structure
  api
  backend
  frontend
  skmm
</code></pre>
<p>2. <strong>api, backend, frontend and skmm</strong> represent the main modules in IRIS.</p>
<p>3. _config folder store information about iris configuration</p>
<p>4. _files store private data of sites</p>
<p>5. _library places custom/library that's fetched through composer</p>
<p>6. <strong>_model</strong> is the main codebase where a lot of business logic and database related queries stored here.</p>
<p>7. _structure store schema.yml, and routes.php
<ul>
	<li>schema.yml [database schema]</li>
	<li>routes.php main application routes</li>
</ul>
</p>
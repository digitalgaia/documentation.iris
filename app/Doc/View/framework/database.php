<h1>Database</h1>
<p>Main component to handle database queries, insert, update and delete</p>
<h4>Class name : <b>DB</b></h4>
<h3>1. Query</h3>
<h4>1.1 from</h4>
<p>Select columns</p>
<pre><code>
db::from('user');
db::select('userID, userName');
$result = db::get()->result();
</code></pre>
<h4>1.2 where</h4>
<p>Where clause</p>
<pre><code>
// example
db::from('user');
db::where('userID', $userID);
$result = db::get()->result();
</code></pre>
<p>Where with parameterized statements</p>
<pre><code>
db::from('user');
db::where('userID = ? AND userStatus = ?', array($userID, 1));
db::get()->row();
</code></pre>
<h4>1.3 order_by</h4>
<pre><code>
db::from('user');
db::order_by('userCreatedDate', 'asc');
db::get()->result();
</code></pre>
<h4>1.4 join</h4>
<p>left join</p>
<pre><code>
db::from('user')
->join('user_profile', 'user.userID = user_profile.userID')
->get()->result();
</code></pre>
<p>inner join</p>
<pre><code>
db::from('user')
->innerJoin('user_profile', 'user.userID = user_profile.userID')
->get()->result();
</code></pre>
<h4>1.5 limit</h4>
<p>limit($limit)</p>
<pre><code>
db::from('user')
->limit(1)
->get()->result();
</code></pre>
<p>limit($limit, $offset)</p>
<pre><code>
db::from('user')
->limit(10, 0)
->get()->result();
</code></pre>
<h3>2. Execute and fetch results</h3>
<h4>2.1 get</h4>
<p>Execute query</p>
<pre><code>
db::from('user')
$result = db::get();
</code></pre>
<h4>2.2 fetch</h4>
<p>There're two type of fetching mode, by result, or fetch only one.</p>
<h5>2.2.1 result</h5>
<p>Fetch all found records.</p>
<p>@return array</p>
<pre><code>
db::from('user');
db::get()->result();
</code></pre>
<h5>2.2.2 row</h5>
<p>Fetch only one row of record</p>
<p>@return array</p>
<pre><code>
db::from('user');
db::get()->row();
</code></pre>
	<h1>{{ variable }}</h1>

	{{ array }}
		<p>id: {{ id }}</p>
	{{ /array }}

	{{ var2 }}
	<p>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
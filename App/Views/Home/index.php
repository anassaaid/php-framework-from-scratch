{% extends "base.html" %}

{% block title %}Posts{% endblock %}

{% block body %}
    <h1>Welcome <?php echo htmlspecialchars($name); ?></h1>
    <ul>
    	<?php foreach ($colors as $key => $value): ?>
    		<li><?php echo htmlspecialchars($value); ?></li>
    	<?php endforeach; ?>	
    </ul>
{% endblock %}
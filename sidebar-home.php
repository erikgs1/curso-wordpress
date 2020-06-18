<?php if(is_active_sidebar('sidebar-1')): ?>
    <aside class="sidebar col-md-4 h-100">
    <?php dynamic_sidebar('sidebar-1'); ?>
    </aside>
    <?php else: ?>
    <aside class="sidebar col-md-4 h-100">
        <p> Hey, falta um Widget aqui! </p>
    </aside>
<?php endif; ?>
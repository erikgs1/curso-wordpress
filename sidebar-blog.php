<?php if(is_active_sidebar('sidebar-2')): ?>
    <aside class="sidebar col-md-4 h-100">
    <?php dynamic_sidebar('sidebar-2'); ?>
    </aside>
<?php else: ?>
    <aside class="sidebar col-md-4 h-100">
        <p> Hey, falta um Widget aqui! </p>
    </aside>
<?php endif; ?>

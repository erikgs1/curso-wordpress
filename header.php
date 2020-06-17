<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de WordPress</title>
    <?php wp_head()  ?>
</head>
<body>
    <header>
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="social-media-icons col-xl-9 col-sm-7 col-6">Ícones Sociais</div>
                    <div class="search col-xl-3 col-sm-5 col-6 text-right">Pesquisa</div>
                </div>
            </div>
            
        </section>
        <section class="menu-area">
            <div class="container">
                <div class="row">
                    <section class="logo col-md-2 col-12 text-center">Logo</section>
                    <nav class="main-menu col-md-10 text-right">
                        <?php wp_nav_menu(
                            array('theme_location' => 'my_main_menu') 
                        ); ?></nav>
                </div>
            </div>
        </section>
    </header>
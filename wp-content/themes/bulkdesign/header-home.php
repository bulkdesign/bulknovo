<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- METAS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/materialize/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/js/vegas.min.css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300,400" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="keywords" content="Bulk Design, Bulk, Design, Web Design, Design Gráfico">
    <meta name="description" content="Design Clean e Responsivo">

    <!-- TÍTULO -->
    <title>
      <?php if ( is_category() ) {
        echo 'Categoria de &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
      } elseif ( is_tag() ) {
        echo 'Arquivo de &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
      } elseif ( is_archive() ) {
        wp_title(''); echo ' Arquivo | '; bloginfo( 'name' );
      } elseif ( is_search() ) {
        echo 'Buscar por &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
      } elseif ( is_home() || is_front_page() ) {
        bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
      }  elseif ( is_404() ) {
        echo 'Erro 404 - Não Encontrado | '; bloginfo( 'name' );
      } elseif ( is_single() ) {
        wp_title('');
      } else {
        echo wp_title( ' | ', false, right ); bloginfo( 'name' );
      } ?>
    </title>
    <!-- WP PINGBACK -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- WP HEAD -->
    <?php wp_head(); ?>
  </head>
  <body>
      <div class="navbar-fixed">
        <nav class="z-depth-0 navegacao">
          <div class="container">
            <div class="nav-wrapper">
              <a href="index.html" class="brand-logo"><img src="<?php bloginfo('template_url');?>/images/logo.png"></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#home" class="white-text">Home</a></li>
                <li><a href="Blog" class="white-text">Blog</a></li>
                <li><a href="#contato" class="white-text">Contato</a></li>
              </ul>
              <main class="hide-on-large-only">
                <a class="white-text toggle-overlay"><i class="small material-icons">menu</i></a>
              </main>
            </div>
          </div>
        </nav>
      </div>
      <!-- Mobile Menu -->
      <aside>
        <div class="outer-close toggle-overlay">
          <a class="white-text right close"><i class="margin-clear small material-icons">clear</i></a>
        </div>
        <nav class="mobile-menu">
          <ul>
            <li><a href="#home" class="white-text mobileoption">Home</a></li>
            <li><a href="Blog" class="white-text mobileoption">Blog</a></li>
            <li><a href="#contato" class="white-text mobileoption">Contato</a></li>
          </ul>
        </nav>
      </aside>
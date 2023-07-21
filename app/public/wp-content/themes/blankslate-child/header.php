<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>
<?php
$theme_directory = get_template_directory_uri();
?>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header id="header" role="banner">
            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
            
            <?php function afficherImage() {
                
    $cheminImage = 'Logo.png';
    $altText = 'Logo';

  $codeHTML = ' '. '<a href="#">'.' <img src="http://planty.local/wp-content/uploads/2023/07/Logo.png"' . esc_url( $cheminImage ) . '" alt="Logo'  . '" class="Logo"' . esc_attr( $altText ) . '"></a>';
  echo $codeHTML;
}
            ?>
            
<div class="header_position">
                <?php afficherImage(); wp_nav_menu(['theme_location' => 'main-menu']); ?>
</div>
            </nav>
        </header>
        <div id="container">
            <main id="content" role="main">
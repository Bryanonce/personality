<?php get_header(); ?>

<div class="container bg-1">

    <div class="page-center-vertical">
        <div class="hello-text">
            <p>HE</p>
            <p>LLO<span>, i'm</span></p>
        </div>
        <div class="perfil-container">
            
            <div class="perfil-texto-content">
                <p class="perfil-texto-1">Adrián Cedeño</p>
                <p class="perfil-texto-2">Web developer</p>
            </div>
            <div class="perfil-photo">
                <img style="width:100%;" src="<?php echo get_template_directory_uri() . "/assets/img/perfil.jpg" ?>" alt="perfil">
            </div>
        </div>
        <div style="width: 100%; height: 158px;"></div>
    </div>
</div>

<?php get_footer(); ?>
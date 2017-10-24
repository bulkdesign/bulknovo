<?php
/**
 * Template da página inicial.
 */

get_header('home'); ?>
	<section id="home" class="section scrollspy">
    <div class="conteudohome">
      <h1>SindGO</h1>
      <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica</p>
      <a href="Blog" class="btn">Ver mais</a>      
    </div>
    <div id="slides">
      <img src="<?php bloginfo('template_url');?>/images/example-slide-1.jpg">
      <img src="<?php bloginfo('template_url');?>/images/example-slide-2.jpg">
      <img src="<?php bloginfo('template_url');?>/images/example-slide-3.jpg">
      <img src="<?php bloginfo('template_url');?>/images/example-slide-4.jpg">
    </div>
	</section>
    <section id="contato" class="section scrollspy">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <h1>Entre em Contato conosco</h1>
            <hr>
            <form>
              <input type="text" name="usuarionome" placeholder="Nome Completo" required="required">
              <input type="text" name="usuarioeail" placeholder="E-mail" required="required">
              <input type="text" name="usuariotelefone" placeholder="Telefone" required="required">
              <input type="text" name="usuarioassunto" placeholder="Assunto" required="required">
              <textarea name="usuariomensagem" placeholder="Mensagem"></textarea><br>
              <input type="submit" name="enviarmensagem" class="btn">
            </form>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
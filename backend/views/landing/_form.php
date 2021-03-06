<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Landing */
/* @var $form yii\widgets\ActiveForm */

$this->registerCssFile("@web/editor/css/froala_editor.css");
$this->registerCssFile("@web/editor/css/froala_style.css");
$this->registerCssFile("@web/editor/css/plugins/code_view.css");
$this->registerCssFile("@web/editor/css/plugins/colors.css");
$this->registerCssFile("@web/editor/css/plugins/emoticons.css");
$this->registerCssFile("@web/editor/css/plugins/image_manager.css");
$this->registerCssFile("@web/editor/css/plugins/image.css");
$this->registerCssFile("@web/editor/css/plugins/line_breaker.css");
$this->registerCssFile("@web/editor/css/plugins/quick_insert.css");
$this->registerCssFile("@web/editor/css/plugins/table.css");
$this->registerCssFile("@web/editor/css/plugins/file.css");
$this->registerCssFile("@web/editor/css/plugins/char_counter.css");
$this->registerCssFile("@web/editor/css/plugins/video.css");
$this->registerCssFile("@web/editor/css/plugins/emoticons.css");
$this->registerCssFile("@web/editor/css/plugins/fullscreen.css");
$this->registerJsFile("https://code.jquery.com/ui/1.12.1/jquery-ui.js");
$this->registerCssFile("https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/froala_editor.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/align.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/code_beautifier.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/code_view.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/colors.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/emoticons.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/draggable.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/font_size.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/font_family.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/image.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/image_manager.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/line_breaker.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/quick_insert.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/link.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/lists.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/paragraph_format.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/paragraph_style.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/video.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/table.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/url.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/emoticons.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/file.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/entities.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/inline_style.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/save.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/plugins/fullscreen.min.js", ['depends' => 'yii\web\JqueryAsset']);
$this->registerJsFile("@web/editor/js/script.js", ['depends' => 'yii\web\JqueryAsset']);
?>
<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Image Library</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="save_image" action="#" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <input class="form-control" type="file" id="img_library" name="image">
          </div>
          <button type="submit" class="btn btn-primary">
            <i class="fa fa-cloud-upload" aria-hidden="true"></i> Upload file
          </button>
        </form>
        <div class="card_group row">

        </div>
      </div>
    </div>
    <div class="modal-footer">

    </div>
  </div>
</div>
<div class="modal" id="CopyLink" tabindex="-1" aria-labelledby="CopyLink" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enlace copiado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    </div>
  </div>
</div>
<input type="button" id="ver_codigo" value="Create landing" class="btn btn-success pull-right">
<div class="landing-form">
  <h3><i class="fa fa-cog" aria-hidden="true"></i> Options</h3>
  <?php $form = ActiveForm::begin(['enableAjaxValidation' => true]); ?>
  <div class="col-md-4"><i class="bi bi-align-bottom"></i>
    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]); ?>
  </div>
  <div class="col-md-4">
    <?= $form->field($model, 'dominio')->textInput(['maxlength' => true]); ?>
  </div>
  <div class="col-md-4">
    <?= $form->field($model, 'color')->textInput(['maxlength' => true, 'value'=>'#030658']); ?>
  </div>
  <div class="col-md-12">
    <?= $form->field($model, 'descripcion')->textarea(['rows' => 3]); ?>
  </div>
  <?= $form->field($model, 'codigo')->hiddenInput()->label(false); ?>
  <div class="text-center">
    <input type="button" id="disena" value="Design landing" class="btn btn-info">
  </div>
  <div class="row" id="disena_div">
    <h3><i class="fa fa-code" aria-hidden="true"></i> Landing</h3>
    <div class="col-md-2 left_dis">
      <div class="sticky-top">
        <h3 class="text-left marg_compo">Components</h3>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fa fa-picture-o" aria-hidden="true"></i> Image Library
        </button>
        <button type="button" class="btn btn-info my-md-3" data-bs-toggle="modal" data-bs-target="#legalModal">
          <i class="fa fa-file-o" aria-hidden="true"></i> Legal Warning
          <button type="button" class="btn btn-info my-md-3" data-bs-toggle="modal" data-bs-target="#cookiesModal">
            <i class="fa fa-file-o" aria-hidden="true"></i> Pol??tica Cookies
            <button type="button" class="btn btn-info my-md-3" data-bs-toggle="modal" data-bs-target="#privacidadModal">
              <i class="fa fa-file-o" aria-hidden="true"></i> Pol??tica privacidad
              <button type="button" class="btn btn-info my-md-3" data-bs-toggle="modal" data-bs-target="#garantiaModal">
                <i class="fa fa-file-o" aria-hidden="true"></i> Garant??a
                <button type="button" class="btn btn-info my-md-3" data-bs-toggle="modal" data-bs-target="#ventaModal">
                  <i class="fa fa-file-o" aria-hidden="true"></i> Condiciones venta

                </button>
                <h5 class="text-left my-md-3">Slide</h5>
                <div class="text-left my-md-3">
                  <img src="img/slide.png" id="c1" class="img-responsive" />
                </div>
                <div class="text-left my-md-3">
                  <img src="img/slide_2.png" id="c2" class="img-responsive" />
                </div>
                <div class="text-left my-md-3">
                  <img src="img/slide_3.png" id="c3" class="img-responsive" />
                </div>
                <h5 class="text-left my-md-3">T??tulo</h5>
                <div class="text-left my-md-3">
                  <img src="img/titulo.png" id="t1" style="border: 1px solid; cursor: pointer" class="img-responsive" />
                </div>
                <h5 class="text-left my-md-3">Contenido</h5>
                <div class="text-left my-md-3">
                  <img src="img/contenido.png" id="cn1" style="border: 1px solid; cursor: pointer" class="img-responsive" />
                </div>
                <div class="text-left my-md-3">
                  <img src="img/texto_doble.png" id="cn2" style="border: 1px solid; cursor: pointer" class="img-responsive" />
                </div>
                <div class="text-left my-md-3">
                  <img src="img/texto_imagen_1.png" id="cn3" style="border: 1px solid; cursor: pointer" class="img-responsive" />
                </div>
                <div class="text-left my-md-3">
                  <img src="img/texto_imagen_2.png" id="cn4" style="border: 1px solid; cursor: pointer" class="img-responsive" />
                </div>
                <div class="text-left my-md-3">
                  <img src="img/texto_imagen_3.png" id="cn5" style="border: 1px solid; cursor: pointer" class="img-responsive" />
                </div>
                <div class="text-left my-md-3">
                  <img src="img/c6.png" id="cn6" style="border: 1px solid; cursor: pointer" class="img-responsive" />
                </div>
                <div class="text-left my-md-3">
                  <img src="img/html_shopify.png" id="cn7" style="border: 1px solid; cursor: pointer" class="img-responsive" />
                </div>
                <h5 class="text-left my-md-3 text-center">Contacto</h5>
                <div class="text-left my-md-3">
                  <img src="img/contacto.png" id="cn8" style="border: 1px solid; cursor: pointer" class="img-responsive" />
                </div>
                <h5 class="text-left my-md-3">Title options</h5>
                <div class="text-left my-md-3">
                  <input type="text" id="titleOptions" class="form-control" placeholder="Title">
                  <button type="button" id="addTitle" class="btn btn-primary centrado my-md-2">Add</button>
                </div>
                <h5 class="text-left my-md-3">Add option</h5>
                <div class="text-left my-md-3">
                  <input type="text" id="newOption" class="form-control" placeholder="Option">
                  <input type="text" id="newValue" class="form-control my-md-2" placeholder="Value">
                  <button type="button" id="addOption" class="btn btn-primary centrado">Add</button>
                </div>
      </div>
    </div>
    <div class="col h-100 block-design" id="code_html">
      <div id="editH" class="row">
        <div class="col-md-12 text-center banner_head">
          <p>93 000 00 00</p>
        </div>
         <div class="col-4 col-sm-4 box_first_menu">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <div class="navbar-toggler-icon"></div>
              </a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mb-2 mb-lg-0">
                  <a href="#">Item</a>
                  <a href="#">Item</a>
                  <a href="#">Item</a>
                  <a href="#">Item</a>
                </ul>
              </div>
            </div>
          </nav>  
        </div>
        <div class="col-4 col-sm-4 box_second_menu">
          <a class="navbar-brand" href="#"><img src="img/no-logo.jpg" class="centrado"></a>
        </div>
        <div class="col-4 col-sm-4 box_third_menu">
          <a class="btn alpesan_button" href="#">Commander</a>
        </div> 
      </div>
      <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://cdn.shopify.com/s/files/1/0513/1747/3479/files/05-Banner-home-vibroflexPro_1512x.jpg?v=1608564639" class="bd-placeholder-img" width="100%" height="100%">
              <div class="container">
                <div class="carousel-caption text-start">
                  <h1>Example headline.</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="anexos" class="column">

        </div>
      </main>
      <footer id="editF">
        <div class="container">
          <div class="row">
            
            <div class="col-12 text-center">
              <nav class="nav flex-column">
                <a class="nav-link active" href="#ventaModal">Conditions g??n??rales de vente</a>
                <a class="nav-link" href="#garantiaModal">Garantie</a>
                <a class="nav-link" href="#privacidadModal">Informations clients et donn??es personnelles</a>
                <a class="nav-link" href="#cookiesModal">Informations sur les cookies et protection de la vie priv??e</a>
                <a class="nav-link" href="#legalModal">Mentions l??gales du site</a>
              </nav>
            </div>
            <div class="col-12 mb-3 text-center mt-5">
              <img src="img/no-logo.jpg" class="img-responsive mb-3 m-auto">
              <p class="my-auto">?? 2021. All Rights Reserved</p>
            </div>
          </div>

        </div>
      </footer>
      <div class="modal" id="legalModal" tabindex="-1" aria-labelledby="legalModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">

              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="editMb">
              <h2 class="modal-title text-center pb-2" id="legalModal">Mentions l??gales du site</h2>
              <p><strong>1. Informations l??gales</strong>&nbsp;</p>
              <p>Nom du site&nbsp;:&nbsp;http://vibroflex.fr/</p>
              <p>Nom de l?????diteur du site&nbsp;: ELITE TRADE AG</p>
              <p>Si??ge social&nbsp;: 40/54<br>AVENUE SAINTE MARGUERITE<br>06200 NICE</p>
              <p>Nom du responsable de la publication&nbsp;: ELITE TRADE AG</p>
              <p>Adresse postale de contact&nbsp;: ELITE TRADE AG</p>
              <p>40/54<br>AVENUE SAINTE MARGUERITE<br>06200 NICE</p>
              <p>Adresse courriel&nbsp;:<a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></p>
              <p>H??bergeur du site&nbsp;:</p>
              <p><strong>2. Acc??s au site</strong></p>
              <p>L'acc??s au site est r??serv?? aux personnes majeures. L'??diteur se r??serve le droit de demander toute justification de votre ??ge notamment si vous utilisez des services de commande en ligne.&nbsp;</p>
              <p><strong>3. Contenu du site</strong></p>
              <p>Toutes les marques, photographies, textes, commentaires, illustrations, images anim??es ou non, s??quences vid??o, sons, ainsi que toutes les applications informatiques qui pourraient ??tre utilis??es pour faire fonctionner ce site et plus g??n??ralement tous les ??l??ments reproduits ou utilis??s sur le site sont prot??g??s par les lois en vigueur au titre de la propri??t?? intellectuelle.</p>
              <p>Ils sont la propri??t?? pleine et enti??re de l'??diteur ou de ses partenaires. Toute reproduction, repr??sentation, utilisation ou adaptation, sous quelque forme que ce soit, de tout ou partie de ces ??l??ments, y compris les applications informatiques, sans l'accord pr??alable et ??crit de l'??diteur, sont strictement interdites. Le fait pour l'??diteur de ne pas engager de proc??dure d??s la prise de connaissance de ces utilisations non autoris??es ne vaut pas acceptation desdites utilisations et renonciation aux poursuites.&nbsp;</p>
              <p>En ce qui concerne les services de commande en ligne, l'ensemble des informations pr??sentes sur ce site sont valables pour la France m??tropolitaine (Corse incluse) exclusivement. Pour toute commande destin??e ?? d'autres destinations, vous devez demander<span>&nbsp;</span><em>via</em><span>&nbsp;</span>l'adresse e-mail de l'??diteur ci-dessous, les informations n??cessaires.&nbsp;</p>
              <p><strong>4. Gestion du site</strong></p>
              <p>Pour la bonne gestion du site, l'??diteur pourra ?? tout moment&nbsp;:</p>
              <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; suspendre, interrompre ou de limiter l'acc??s ?? tout ou partie du site, r??server l'acc??s au site, ou ?? certaines parties du site, ?? une cat??gorie d??termin??e d'internaute&nbsp;;</p>
              <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; supprimer toute information pouvant en perturber le fonctionnement ou entrant en contravention avec les lois nationales ou internationales, ou avec les r??gles de la N??tiquette&nbsp;;</p>
              <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; suspendre le site afin de proc??der ?? des mises ?? jour&nbsp;</p>
              <p><strong>5. Responsabilit??</strong></p>
              <p>La responsabilit?? de l'??diteur ne peut ??tre engag??e en cas de d??faillance, panne, difficult?? ou interruption de fonctionnement, emp??chant l'acc??s au site ou ?? une de ses fonctionnalit??s.</p>
              <p>Le mat??riel de connexion au site que vous utilisez est sous votre enti??re responsabilit??. Vous devez prendre toutes les mesures appropri??es pour prot??ger votre mat??riel et vos propres donn??es notamment d'attaques virales par Internet. Vous ??tes par ailleurs le seul responsable des sites et donn??es que vous consultez.</p>
              <p>L'??diteur ne pourra ??tre tenu responsable en cas de poursuites judiciaires ?? votre encontre :</p>
              <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; du fait de l'usage du site ou de tout service accessible<span>&nbsp;</span><em>via</em><span>&nbsp;</span>Internet&nbsp;;</p>
              <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; du fait du non-respect par vous des pr??sentes conditions g??n??rales.</p>
              <p>L'??diteur n'est pas responsable des dommages caus??s ?? vous-m??me, ?? des tiers et/ou ?? votre ??quipement du fait de votre connexion ou de votre utilisation du site et vous renoncez ?? toute action contre lui de ce fait.</p>
              <p>Si l'??diteur venait ?? faire l'objet d'une proc??dure amiable ou judiciaire ?? raison de votre utilisation du site, il pourra retourner contre vous pour obtenir indemnisation de tous les pr??judices, sommes, condamnations et frais qui pourraient d??couler de cette proc??dure.</p>
              <p>&nbsp;</p>
              <p><strong>6. Liens hypertextes</strong></p>
              <p>La mise en place par vous de tous liens hypertextes vers tout ou partie du site est strictement interdite, sauf autorisation pr??alable et ??crite de l'??diteur, sollicit??e par courriel ?? l'adresse suivante :&nbsp;<a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></p>
              <p>L'??diteur est libre de refuser cette autorisation sans avoir ?? justifier de quelque mani??re que ce soit sa d??cision. Dans le cas o?? l'??diteur accorderait son autorisation, celle-ci n'est dans tous les cas que temporaire et pourra ??tre retir??e ?? tout moment, sans obligation de justification ?? la charge de l'??diteur.</p>
              <p>Dans tous les cas, tout lien devra ??tre retir?? sur simple demande de l'??diteur.</p>
              <p>Toute information accessible<span>&nbsp;</span><em>via</em><span>&nbsp;</span>un lien vers d'autres sites n'est pas sous le contr??le de l'??diteur qui d??cline toute responsabilit?? quant ?? leur contenu.</p>
              <p>&nbsp;</p>
              <p><strong>7. Collecte des donn??es personnelles</strong></p>
              <p>Voir page sp??cifique&nbsp;:&nbsp;https://vibroflex.myshopify.com/pages/informations-clients-et-donnees-personnelles</p>
              <p><strong>8. Cookies</strong></p>
              <p>Voir page sp??cifique&nbsp;:&nbsp;https://vibroflex.myshopify.com/pages/informations-clients-et-donnees-personnelles</p>
              <p><strong>9. Photographies et repr??sentation des produits</strong></p>
              <p>Les photographies de produits, accompagnant leur description, ne sont pas contractuelles et n'engagent pas l'??diteur.</p>
              <p>&nbsp;</p>
              <p><strong>10. loi applicable</strong></p>
              <p>Les pr??sentes conditions d'utilisation du site sont r??gies par la loi fran??aise et le droit applicable est le droit fran??ais. La langue utilis??e durant les relations pr??contractuelles et contractuelles est le fran??ais.</p>
              <p>&nbsp;</p>
              <p><strong>11. R??clamations et r??glement amiable des litiges</strong></p>
              <p>En vertu de l'article L. 152-1 du Code de la consommation " Tout consommateur a le droit de recourir gratuitement ?? un m??diateur de la consommation en vue de la r??solution amiable du litige qui l'oppose ?? un professionnel. "&nbsp;</p>
              <p>Les litiges entrant dans le champ d'application de l'article L. 152-1 du Code de la consommation sont les litiges d??finis ?? l'article L. 151-1 du Code de la consommation ?? savoir les litiges de nature contractuelle, portant sur l'ex??cution d'un contrat de vente ou de fournitures de services, opposant un consommateur ?? un professionnel. Le texte couvre les litiges nationaux et les litiges transfrontaliers.</p>
              <p>Pour toute difficult??, nous vous invitons ?? nous contacter pr??alablement ou ?? contacter notre service apr??s-vente :&nbsp;</p>
              <p>ELITE TRADE AG</p>
              <p>40/54<br>AVENUE SAINTE MARGUERITE<br>06200 NICE</p>
              <p><a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></p>
              <p>Service apr??s-vente :</p>
              <p>ELITE TRADE AG</p>
              <p><a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></p>
              <p>Une plateforme de r??glement des litiges en ligne est ?? votre disposition : &nbsp;</p>
              <p>Centre europ??en des consommateurs France :&nbsp;</p>
              <p><a href="http://ec.europa.eu/consumers/odr/" target="_blank" rel="noopener noreferrer" aria-describedby="a11y-new-window-external-message">http://ec.europa.eu/consumers/odr/</a><span>.</span><span>&nbsp;</span></p>
              <p>Seules les r??clamations relatives ?? la Vente en Ligne des Articles seront prises en compte.&nbsp;</p>
              <p>Dans l'ann??e qui suivra votre demande aupr??s de nos services, en application de l'article R.156-1 du Code de la consommation, vous pourrez faire examiner votre demande par un m??diateur dont trouverez ci-dessous les coordonn??es, sachant qu'un litige ne pourra ??tre examin??, sauf exception, que par un seul m??diateur :&nbsp;</p>
              <p><em>M??diateur du commercer coop??ratif et associ??</em></p>
              <p><em>http://www.mcca-mediation.fr</em>&nbsp;</p>
              <p>Litiges transfrontaliers :&nbsp;</p>
              <p>Centre europ??en des consommateurs France :&nbsp;</p>
              <p>europe-consommateurs.eu</p>
              <p>&nbsp;Vous pouvez, ?? vos frais, vous faire assister par un conseil.&nbsp;</p>
              <p>&nbsp;</p>
              <p><strong>12. Contactez-nous</strong></p>
              <p>Pour toute question, information sur les produits pr??sent??s sur le site, ou concernant le site lui-m??me, vous pouvez laisser un message ?? l'adresse suivante&nbsp;:&nbsp;<a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></p>

            </div>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
      <div class="modal" id="cookiesModal" tabindex="-1" aria-labelledby="cookiesModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">

              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="editMb1">
              <h2 class="modal-title text-center pb-2" id="cookiesModal">Informations sur les cookies et protection de la vie priv??e</h2>
              <p>
              <p>La pr??sente page est d??di??e ?? la politique de protection de vie priv??e mise en ??uvre par&nbsp;ELITE TRADE AG</p>
              <p>La pr??sente information compl??te celles relative aux donn??es personnelles, ??tablie conform??ment ?? la la loi n??78-17 du 16 janvier 1978 dite ??&nbsp;Informatique et Libert??s&nbsp;??, disponible sous lien&nbsp;:</p>
              <p>https://vibroflex.myshopify.com/pages/informations-clients-et-donnees-personnelles</p>
              <p>COLLECTE DE DONNEES PAR&nbsp;http://vibroflex.fr/</p>
              <p><strong>A quoi servent vos donn??es&nbsp;?</strong></p>
              <p>Comme indiqu?? sur la page&nbsp;https://vibroflex.myshopify.com/pages/informations-clients-et-donnees-personnelles, les donn??es collect??es en vue de traitement informatique sont utilis??es afin de permettre la gestion du compte utilisateur</p>
              <p>&nbsp;</p>
              <p><strong>A qui sont destin??es vos donn??es&nbsp;?</strong></p>
              <p>Les donn??es collect??es sur ce site sont ?? destination de la soci??t?? ELITE TRADE AG , en sa qualit?? de responsable de traitement.<strong>&nbsp;</strong></p>
              <p><strong>Comment sont prot??g??es vos donn??es&nbsp;?</strong></p>
              <p>http://vibroflex.fr&nbsp;prend toutes les pr??cautions pour pr??server la s??curit?? de vos donn??es afin, notamment, d???emp??cher leur divulgation ?? des tiers non-autoris??s. A ce titre&nbsp;http://vibroflex.fr met en place toutes les mesures n??cessaires pour la s??curisation de ses dispositifs informatiques. Dans l???hypoth??se o?? vos donn??es font l???objet du transfert aupr??s de sous-traitants (notamment pour leur h??bergement), http://vibroflex.fr/&nbsp;veille ?? ce que ces derniers pr??sentent un niveau de s??curit?? conforme aux standards requis.&nbsp;</p>
              <p><strong>Quels sont vos droits&nbsp;?</strong></p>
              <p><strong></strong>Conform??ment aux dispositions des articles 38 et suivants de la loi du 6 Janvier 1978 dite ??&nbsp;Informatique et Libert??s&nbsp;??, vous disposez d???un droit d???acc??s, de rectification et d???opposition aux traitement de donn??es.</p>
              <p>Pour en connaitre les modalit??s, rendez-vous sur la page INFORMATIONS CLIENT ET DONNEES PERSONNELLE&nbsp;:&nbsp;https://vibroflex.myshopify.com/pages/informations-clients-et-donnees-personnelles</p>
              <p>&nbsp;</p>
              <p>ENREGISTREMENT DE DONNEES AU MOYEN DE COOKIES</p>
              <p>&nbsp;<strong>Qu???est-ce qu???un cookie&nbsp;?</strong></p>
              <p>Lorsque vous consultez un site Internet, l?????diteur du site peut ??tre amen?? ?? d??poser un fichier texte sur votre ordinateur. Ce fichier est d??pos?? par l???utilisation de votre logiciel de navigation&nbsp;: c???est ce fichier qui est appel?? ??&nbsp;cookie&nbsp;??. Les informations stock??es relatives ?? votre navigation sur notre site internet (http://vibroflex.fr/) concernent notamment les param??tres de langue, le temps de connexion, pages visit??es,</p>
              <p>Toutes les informations collect??es indirectement ne seront utilis??es que pour suivre le volume, le type et la configuration du trafic utilisant le site<span>&nbsp;http://vibroflex.fr/</span>, pour en d??velopper la conception et l'agencement et ?? d'autres fins administratives et de planification et plus g??n??ralement pour am??liorer le service que nous vous offrons.</p>
              <p>Nous attirons votre attention sur le fait que le partage de l???utilisation de votre terminal avec d???autres personnes est susceptible de modifier le caract??re personnalis?? de l???action des cookies.&nbsp;</p>
              <p><strong>Quels sont les types de cookies utilis??s par http://vibroflex.fr/&nbsp;?</strong></p>
              <p>http://vibroflex.fr utilise des&nbsp;??&nbsp;cookies&nbsp;?? visant ?? faciliter votre navigation. Il s???agit notamment des cookies suivants&nbsp;:</p>
              <ul>
                <li>les cookies utilis??s comme ??&nbsp;panier d???achat&nbsp;??</li>
                <li>les cookies de ??&nbsp;session utilisateur&nbsp;?? (SessionID)</li>
                <li>les cookies ayant pour finalit?? d???enregistrer la langue de l???utilisateur pour faciliter sa navigation</li>
                <li>les cookies flash contenant des ??l??ments strictement n??cessaires pour faire fonctionner un lecteur de m??dia (audio ou vid??o) correspondant ?? un contenu demand?? par l???utilisateur.</li>
              </ul>
              <p>&nbsp;</p>
              <p>http://vibroflex.fr peut ??galement ??tre amen?? ?? utiliser les cookies ayant pour finalit?? de nous renseigner sur les produits, services et pages que vous consultez. Ces cookies nous permettent de vous proposer un contenu personnalis?? et notamment d???afficher lors de votre connexion sur notre site des publicit??s cibl??es en rapport avec vos attentes.</p>
              <p>Ces cookies peuvent ??tre param??tr??s selon vos choix, tels que d??crits dans la section ci-dessous. En cas de refus des cookies nous permettant d???identifier les produits, services et pages que vous consultez, le contenu de votre navigation ne sera pas personnalis?? et les publicit??s affich??es pourront ??tre sans int??r??t pour vous.</p>
              <p>&nbsp;</p>
              <p><strong>http://vibroflex.fr permet-il ?? des tiers d???utiliser des Cookies lors de ma navigation&nbsp;?</strong></p>
              <p>Le site<span>&nbsp;http://vibroflex.fr/</span><span>&nbsp;</span>utilise Google Analytics???, un service d???analyse de site internet fourni par Google Inc. Google Analytics utilise des cookies, qui sont des fichiers texte plac??s sur votre terminal, pour aider le site internet ?? analyser l???utilisation du site par ses utilisateurs et ?? r??aliser des statistiques. Les donn??es g??n??r??es par les cookies concernant votre utilisation du site (y compris votre adresse IP ?? sont transmises et stock??es par Google sur des serveurs situ??s aux Etats-Unis. Google utilisera cette information dans le but d?????valuer votre utilisation du site, de compiler des rapports sur l???activit?? du site ?? destination de son ??diteur et de fournir d???autres services relatifs ?? l???activit?? du site et ?? l???utilisation d???internet. Google est susceptible de communiquer ces donn??es ?? des tiers en cas d???obligation l??gale ou lorsque ces tiers traitent ces donn??es pour le compte de Google, notamment l?????diteur de ce site. Google ne recoupera pas votre adresse IP avec toute autre donn??e d??tenue par Google. Vous pouvez d??sactiver l???utilisation de cookies en s??lectionnant les param??tres appropri??s de votre navigateur (cf.ci-dessous). Cependant, une telle d??sactivation pourrait emp??cher l???utilisation de certaines fonctionnalit??s de ce site. En utilisant ce site internet, vous consentez express??ment au traitement de vos donn??es nominatives par Google dans les conditions et pour les finalit??s d??crites ci-dessus. Pour consulter les R??gles de confidentialit?? Google&nbsp;<a href="http://www.google.com/intl/fr/policies/privacy/" aria-describedby="a11y-external-message">cliquez ici</a>.</p>
              <p>Google a adh??r?? aux principes relatifs ?? la protection des donn??es ??&nbsp;Safe Harbor Privacy&nbsp;Principles&nbsp;?? ??tablies par le d??partement du Commerce am??ricain. Ces principes, n??goci??s entre les autorit??s am??ricaines et la Commission europ??enne en 2001, sont essentiellement bas??s sur ceux de la Directive 95/46 du 24 octobre 1995 et assurent une protection ad??quate pour les transferts de donn??es en provenance de l???Union europ??enne vers des entreprises ??tablies aux Etats-Unis.</p>
              <p>&nbsp;</p>
              <p><strong>Comment exercer votre choix concernant les cookies&nbsp;?</strong></p>
              <p>Param??tres du navigateur et cons??quences de vos choix&nbsp;:</p>
              <p>Plusieurs possibilit??s vous sont offertes pour g??rer les cookies. A tout moment, vous pouvez exprimer et modifier vos souhaits en mati??re de cookies, via la section&nbsp;<strong>Aide&nbsp;</strong>de la barre d???outils de votre navigateur, Celle-ci vous indique comment refuser les nouveaux ??&nbsp;cookies&nbsp;?? ou obtenir un message qui vous signale leur r??ception ou encore comment d??sactiver les ??&nbsp;cookies&nbsp;?? soit syst??matiquement, soit selon leur ??metteur. Vous pouvez ??galement effacer les cookies manuellement.</p>
              <p>Vous pouvez aussi choisir de d??sactiver ou de supprimer des donn??es similaires utilis??es par des logiciels accessoires ?? votre navigateur, tels que les Flash cookies, en modifiant les param??tres de ces logiciels ou en visitant le site Internet de l?????diteur de ces logiciels.&nbsp;</p>
              <p>Attention, il est possible que cette configuration de votre navigateur vous emp??che l???acc??s ?? certains contenus ou perturbe significativement votre navigation et les services que vous attendez de la part de notre site.</p>
              <p>Dans pareille hypoth??se, ELITE TRADE AG&nbsp;d??cline toute responsabilit?? concernant les cons??quences li??es au comportement d??grad?? du site<span>&nbsp;http://vibroflex.fr/</span><span>&nbsp;</span>r??sultant de l???impossibilit?? d???utiliser les cookies n??cessaires ?? son fonctionnement.</p>
              <p>&nbsp;</p>
              <p><strong>Choix selon navigateur internet&nbsp;:</strong></p>
              <p>Pour la gestion des cookies, chaque navigateur propose un process diff??rent de configuration. Il est d??crit dans le menu d??? ??&nbsp;aide&nbsp;?? de votre navigateur, qui vous permettra de savoir comment exprimer vos choix concernant les cookies&nbsp;:</p>
              <ul>
                <li>
                  <strong>Pour Internet Explorer???</strong>&nbsp;: ouvrez le menu ??&nbsp;Outils&nbsp;??, puis s??lectionnez ??&nbsp;Options Internet&nbsp;??&nbsp;; cliquez sur l???onglet ??&nbsp;Confidentialit??&nbsp;?? puis l???onglet ??&nbsp;Avanc??&nbsp;?? choisissez le niveau souhait?? ou suivez&nbsp;<a href="http://windows.microsoft.com/fr-fr/windows-vista/block-or-allow-cookies" aria-describedby="a11y-external-message">ce lien</a>
                </li>
                <li>
                  <strong>Pour Firefox???&nbsp;</strong>: ouvrez le menu ??&nbsp;Outils&nbsp;??, puis s??lectionnez ??&nbsp;Options&nbsp;??&nbsp;; cliquiez sur l???onglet ??&nbsp;Vie priv??e&nbsp;?? puis choisissez les options souhait??es ou suivez&nbsp;<a href="https://support.mozilla.org/fr/kb/activer-desactiver-cookies" aria-describedby="a11y-external-message">ce lien</a>
                </li>
                <li>
                  <strong>Pour Chrome???&nbsp;:&nbsp;</strong>ouvrez le menu de configuration (logo cl?? ?? molette), puis s??lectionnez ??&nbsp;Options&nbsp;??&nbsp;; cliquez sur ??&nbsp;Options avanc??es&nbsp;?? puis dans la section ??&nbsp;Confidentialit??&nbsp;?? cliquez sur ??&nbsp;Param??tres de contenu&nbsp;?? et choisissez les options souhait??es ou suivez&nbsp;<a href="https://support.google.com/accounts/answer/61416?hl=fr" aria-describedby="a11y-external-message">ce lien</a>
                </li>
                <li>
                  <strong>Pour Safari???&nbsp;</strong>: choisissez ??&nbsp;Safari&nbsp;??, ??&nbsp;Pr??f??rences&nbsp;?? puis cliquez sur S??curit??&nbsp;??&nbsp;: Dans la section ??&nbsp;Accepter les cookies&nbsp;?? choisissez les options souhait??es ou suivez&nbsp;<a href="https://support.apple.com/fr-fr/HT1677" aria-describedby="a11y-external-message">ce lien</a>&nbsp;:
                </li>
                <li>
                  <strong>Pour Op??ra???&nbsp;</strong>: ouvrez le menu ??&nbsp;Outils&nbsp;?? ou ??&nbsp;R??glages&nbsp;??, puis s??lectionnez ??&nbsp;Supprimer les donn??es priv??es&nbsp;??&nbsp;; cliquez sur l???onglet ??&nbsp;Options d??taill??es&nbsp;??, puis choisissez les options souhait??es ou suivez&nbsp;<a href="http://help.opera.com/Windows/10.20/fr/cookies.html" aria-describedby="a11y-external-message">ce lien</a>
                </li>
              </ul>
              <p>&nbsp;</p>
              <p><strong>Votre choix sur mobile</strong></p>
              <ul>
                <li>Pour sp??cifier si Safari accepte ou non des cookies&nbsp;:</li>
              </ul>
              <ol>
                <li>Dans l?????cran principal, choisissez R??glages &gt; Safari</li>
                <li>Touchez ??&nbsp;Acceptez les cookies&nbsp;?? et choisissez ??&nbsp;Jamais&nbsp;??, ??&nbsp;Des sites visit??s&nbsp;?? ou ??&nbsp;Toujours&nbsp;??.</li>
              </ol>
              <ul>
                <li>Pour effacer tous les cookies dans Safari&nbsp;:
                  <ol>
                    <li>Dans l?????cran principal, choisissez R??glages &gt; Safari</li>
                    <li>Touchez &nbsp;effacer les cookies.</li>
                  </ol>
                </li>
                <li>Pour supprimer les cookies sur Android&nbsp;:</li>
                <li>Menu &gt; Param??tres &gt; Effacer tous les&nbsp;cookies</li>
              </ul>
              </p>
            </div>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
      <div class="modal" id="privacidadModal" tabindex="-1" aria-labelledby="privacidadModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">

              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="editMb2">
              <h2 class="modal-title text-center pb-2" id="privacidadModal">Informations clients et donn??es personnelles</h2>
              <p>
              <p>Identit?? : ELITE TRADE AG</p>
              <p>N?? Registre : 81539277400015</p>
              <p>Adresse Postale : 40/54<br>AVENUE SAINTE MARGUERITE<br>06200 NICE</p>
              <p>Courrier ??lectronique : <a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></p>
              <p><strong>&nbsp;OBJECTIFS</strong></p>
              <p><strong>ENVOI DES COMMANDES</strong></p>
              <p>1.- G??rer vos demandes d'information et vos commandes</p>
              <p>Nous utiliserons vos donn??es pour g??rer toute demande d'information que vous nous ferez et pour vous remettre les commandes que vous nous ferez.</p>
              <p><span>2. - Envoi d'information commerciale et de publicit?? de nos produits</span></p>
              <p>Nous utiliserons vos donn??es pour vous envoyer des communications commerciales sur nos produits dont nous pensons qu'ils peuvent vous int??resser par tout moyen, automatis?? ou non (courrier, SMS, MMS, fax, Internet, t??l??phone???), en utilisant l'information dont nous disposons sur vos transactions et vos pr??f??rences. Vous pouvez vous opposer ?? tout moment au traitement de vos donn??es ?? cet effet, selon ce qui est sp??cifi?? au paragraphe&nbsp;</p>
              <p><span>4. - Envoi d'information commerciale d'entreprises tierces.</span></p>
              <p>Nous demandons votre consentement pour l'utilisation de vos donn??es afin de vous envoyer des communications commerciales d'entreprises tierces dont nous pensons qu'elles peuvent vous int??resser par tout moyen, automatis?? ou non (courrier, SMS, MMS, fax, Internet, t??l??phone???).</p>
              <p>Vous pouvez vous opposer ?? tout moment au traitement de vos donn??es dans ce but, selon ce qui est sp??cifi?? au paragraphe.</p>
              <p>Les donn??es fournies seront conserv??es pendant la relation commerciale avec notre entreprise, tant que leur suppression ne sera pas demand??e par l'int??ress??.</p>
              <p>&nbsp;</p>
              <h4><strong>L??GITIMATION</strong></h4>
              <p>Le traitement de vos donn??es pour l'envoi de vos commandes se base sur l'ex??cution du contrat. L'offre prospective de nos produits se base sur l'int??r??t l??gitime et les entreprises tierces se base sur le consentement de l'int??ress??.</p>
              <p>&nbsp;</p>
              <h4><strong><a id="droits" name="droits"></a>DROITS</strong></h4>
              <p>Toute personne a le droit d'obtenir une confirmation pour savoir si ELITE TRADE AG traite ou non des donn??es personnelles qui la concernent.</p>
              <p>Les personnes int??ress??es ont le droit d???acc??der ?? leurs donn??es personnelles, et ?? demander la rectification des donn??es inexactes ou, le cas ??ch??ant, demander la suppression si, entre autres raisons, les donn??es ne sont plus n??cessaires pour les objectifs pour lesquels elles ont ??t?? recueillies.</p>
              <p>Dans certains cas, les int??ress??s pourront demander la limitation du traitement de leurs donn??es, cas dans lequel nous les conserverons uniquement pour l'exercice ou la d??fense de r??clamations. Dans certaines circonstances et pour des raisons concernant leur situation particuli??re, les int??ress??s pourront s'opposer au traitement de leurs donn??es.</p>
              <p>ELITE TRADE AG cessera de traiter les donn??es, sauf pour des motifs l??gitimes imp??rieux, ou pour exercer la d??fense de r??clamations ??ventuelles. Si vous exercez le droit d'opposition ?? l'envoi de publicit??, vos donn??es seront incluses dans un listing d'exclusion publicitaire qui est destin?? ?? diminuer la publicit?? que vous recevez.</p>
              <p>Les personnes int??ress??es ont le droit ?? la portabilit?? de leurs donn??es.</p>
              <p>L'int??ress?? a ??galement le droit de retirer ?? tout moment le consentement donn??.</p>
              <p>Pour exercer vos droits, nous vous demandons de nous communiquer la demande par ??crit ??&nbsp;Vibroflex&nbsp;en indiquant votre pr??nom, vos noms de famille, votre adresse, accompagn?? d'une copie de votre document officiel d'identification, par t??l??phone au n?? 02&nbsp;78 88&nbsp;00&nbsp;81 ou de nous envoyer un e-mail ?? :&nbsp;<a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></p>
              <p>&nbsp;Mineurs.</p>
              <p>Les moins de 14 ans doivent s'abstenir de nous indiquer leurs donn??es personnelles Vous pouvez consulter la politique de confidentialit?? sur</p>
              </p>
            </div>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
      <div class="modal" id="garantiaModal" tabindex="-1" aria-labelledby="garantiaModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">

              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="editMb3">
              <h2 class="modal-title text-center pb-2" id="garantiaModal">Garantie</h2>
              <p>
                Les articles vendus sur Vibroflex sont reconnus par les plus grandes entreprises du secteur. Nous garantissons des produits de haute qualit?? et restons ?? l'??coute de nos clients. Nous sommes convaincus que le VibroFlex fonctionnera pour vous, cependant, si vous n'??tes pas 100% satisfaits des r??sultats que vous obtenez, vous n'avez qu'?? le retourner dans les 90 jours et demander un remboursement.
              </p>
            </div>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
      <div class="modal" id="ventaModal" tabindex="-1" aria-labelledby="ventaModal" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">

              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="editMb4">
              <h2 class="modal-title text-center pb-2" id="ventaModal">Conditions g??n??rales de vente</h2>
              <p>Le pr??sent site Internet vibroflex.fr (le " Site Internet") est ??dit?? par la soci??t?? ELITE TRADE AG. 40/54<br>AVENUE SAINTE MARGUERITE<br>06200 NICE</p>
              <p>Email : <a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a>, num??ro de t??l??phone:01 86 65 00 05 (offre valable uniquement sur la France m??tropolitaine)&nbsp;</p>
              <p><strong>Pr??ambule</strong>&nbsp;</p>
              <p>Le Vendeur a pour activit?? la vente de biens ?? distance de produits de bien-??tre et de grande consommation.&nbsp;</p>
              <p>Le Vendeur assure notamment la commercialisation des biens et/ou services susmentionn??s par l'interm??diaire du site <span>vibroflex.fr</span>. La liste des biens et services propos??s ?? la vente en ligne par le Vendeur peut ??tre consult??e sur le site disponible ?? l'adresse <span>vibroflex.fr</span></p>
              <p>Les Parties conviennent que leurs relations seront r??gies exclusivement par le pr??sent contrat, ?? l'exclusion de toute condition pr??alablement disponible sur le site web du Vendeur.&nbsp;</p>
              <p>Le Vendeur se r??serve le droit de modifier ?? tout moment les pr??sentes conditions g??n??rales de vente en publiant une nouvelle version sur le Site. Les conditions g??n??rales de vente sont celles en vigueur ?? la date de validation de la commande. Les Parties conviennent que les photos des Biens en vente sur le site <span>vibroflex.fr</span><em><span>&nbsp;</span></em>n'ont aucune valeur contractuelle.&nbsp;</p>
              <p><strong>1. D??finitions</strong></p>
              <p>Les termes et expressions vis??s ci-apr??s signifient, lorsqu'ils sont pr??c??d??s d'une lettre majuscule, pour les besoins de l'interpr??tation et de l'ex??cution des pr??sentes :&nbsp;</p>
              <p>" Article " : le ou les Biens ayant fait l'objet de la Commande ;&nbsp;</p>
              <p>" Bien " : tout produit propos?? ?? la vente sur le Site ;&nbsp;</p>
              <p>" Commande " : demande de Biens ou Services r??alis??e par le Client aupr??s du Vendeur ;&nbsp;</p>
              <p>" Conditions G??n??rales de Vente " : les conditions g??n??rales de vente qui font l'objet des pr??sentes ;&nbsp;</p>
              <p>" Contrat " : le pr??sent acte, y compris son pr??ambule et ses annexes ainsi que tout amendement, substitution, extension ou renouvellement intervenu aux pr??sentes en vertu de la convention des Parties&nbsp;;&nbsp;</p>
              <p>" D??lai de Livraison " : p??riode entre la date de Validation de la Commande et la date de la Livraison de la Commande au Client ;</p>
              <p>&nbsp;" Frais de Livraison " : co??t des frais engag??s par le Vendeur pour acheminer la Commande ?? l'adresse de Livraison indiqu??e par le Client ;&nbsp;</p>
              <p>" Livraison " : exp??dition de l'Article au Client ;&nbsp;</p>
              <p>" Mode de Livraison " : d??signe tout mode de livraison standard ou express disponible sur le Site au moment de la Commande ;&nbsp;</p>
              <p>" Prix " : la valeur unitaire d'un Bien ou d'un Service ; cette valeur s'entend toutes taxes comprises et hors Frais de Livraison ;&nbsp;</p>
              <p>" Prix Total " : le montant total des Prix cumul??s des Biens et Services qui font l'objet de la Commande ; ce montant s'entend toutes taxes comprises ;&nbsp;</p>
              <p>" Prix Tout Compris " : le Prix Total auquel est ajout?? le prix des Frais de Livraison ; ce montant s'entend toutes taxes comprises ;&nbsp;</p>
              <p>" Service " : tout service propos?? ?? la vente sur le Site ;&nbsp;</p>
              <p>&nbsp;" Site " : site de Vente en Ligne "<span>vibroflex.fr</span> " utilis?? par le Vendeur pour la commercialisation de ses Biens / Services ;&nbsp;</p>
              <p>" Territoire " : a le sens donn?? ?? ce terme ?? l'Article 3 ;&nbsp;</p>
              <p>" Validation de la Commande " : a le sens donn?? ?? l'Article 5 ;&nbsp;</p>
              <p>" Vente en Ligne " : commercialisation des Biens et Services du Vendeur via le Site ;&nbsp;</p>
              <p>Les r??f??rences aux Articles sont des r??f??rences aux articles du pr??sent Contrat, ?? moins qu'il n'en soit dispos?? autrement.</p>
              <p>Toute r??f??rence au singulier inclut le pluriel et inversement.</p>
              <p>Toute r??f??rence ?? un genre inclut l'autre genre.&nbsp;</p>
              <p><strong>2. Objet</strong></p>
              <p>Le pr??sent Contrat a pour objet de d??finir les droits et obligations des Parties dans le cadre de la Vente en Ligne des Biens et Services propos??s ?? la vente par le Vendeur au Client.&nbsp;</p>
              <p><strong>3. Champ d???application</strong></p>
              <p>Les pr??sentes Conditions G??n??rales de Vente sont r??serv??es aux seuls consommateurs, au sens qu'en donnent la loi et la jurisprudence, agissant exclusivement pour leur propre compte et domicili??s en France M??tropolitaine&nbsp;</p>
              <p>Conform??ment aux articles L. 111-1 et L. 111-3 du Code de la consommation, les caract??ristiques essentielles et les prix des Biens et Services vendus par voie ??lectronique sont disponibles sur le Site du vendeur.&nbsp;</p>
              <p>Le professionnel communique ??galement au consommateur les informations relatives ?? son identit??, ?? ses coordonn??es postales, t??l??phoniques et ??lectroniques et ?? ses activit??s, ainsi que, s'il y a lieu, celles relatives aux garanties l??gales, aux fonctionnalit??s du contenu num??rique et, le cas ??ch??ant, ?? son interop??rabilit??, ?? l'existence et aux modalit??s de mise en ??uvre des garanties et aux autres conditions contractuelles, conform??ment aux articles R. 111-1 et R. 111-2 du Code de la consommation.&nbsp;</p>
              <p>Par ailleurs, le Client re??oit les informations pr??vues aux&nbsp; articles L. 121-8 et L. 121-19 du Code de la consommation, pr??alablement et post??rieurement ?? la conclusion de la vente et notamment au moyen des pr??sentes Conditions G??n??rales de Vente.&nbsp;</p>
              <p>Les pr??sentes Conditions G??n??rales de Vente sont applicables ?? toutes les ventes de Biens et Services par le Vendeur intervenues par le biais du Site.&nbsp;</p>
              <p>Le Client d??clare avoir pris connaissance des pr??sentes Conditions G??n??rales de Vente avant la Validation de la Commande au sens de l'Article 5. La Validation de la Commande vaut donc acceptation sans restriction ni r??serve des pr??sentes Conditions G??n??rales de Vente. Les pr??sentes Conditions G??n??rales de Vente sont applicables pour les Commandes r??alis??es en vue d'une Livraison en France m??tropolitaine, y compris la Corse] (le " Territoire ").</p>
              <p>Les pr??sentes Conditions G??n??rales de Vente sont applicables y compris en ce qui concerne le moyen de paiement des commandes.&nbsp;</p>
              <p><strong>4. Entr??e en vigueur et Dur??e</strong></p>
              <p>Le pr??sent Contrat entre en vigueur ?? la date de Validation de la Commande telle que d??finie ?? l'Article 5.</p>
              <p>Le Contrat est conclu pour la dur??e n??cessaire ?? la fourniture des Biens et Services, jusqu'?? l'extinction des garanties et obligations dues par le Vendeur.&nbsp;</p>
              <p><strong>5. Commande des Biens et Services et ??tapes de Conclusion de la Vente en Ligne&nbsp;</strong></p>
              <p>Afin de r??aliser la Commande, le Client devra obligatoirement suivre les ??tapes suivantes :&nbsp;</p>
              <p>1. Se rendre sur l'adresse du Site ;&nbsp;</p>
              <p>2. Suivre les instructions du Site et en particulier, les instructions n??cessaires ?? l'ouverture d'un compte client ;&nbsp;</p>
              <p>3. Remplir le formulaire de commande. En cas d'inactivit?? prolong??e lors de la connexion, il est possible que la s??lection des Biens et Services choisis par le Client avant cette inactivit?? ne soit plus garantie. Le Client est alors invit?? ?? reprendre sa s??lection de Biens et Services depuis le d??but ;&nbsp;</p>
              <p>4. V??rifier les ??l??ments de la Commande et le cas ??ch??ant, identifier et corriger les erreurs ;&nbsp;</p>
              <p>5. Valider la Commande, le Prix Total ainsi que le Prix Tout Compris (la " Validation de la Commande ") ;&nbsp;</p>
              <p>6. Suivre les instructions du serveur de paiement en ligne pour payer le Prix Tout Compris.&nbsp;</p>
              <p>Le Client re??oit ensuite par voie ??lectronique et sans d??lai une confirmation d'acceptation de paiement de la Commande.&nbsp;</p>
              <p>Le Client re??oit ??galement par voie ??lectronique et sans d??lai un accus?? r??ception valant confirmation de la Commande (la " Confirmation de la Commande ").&nbsp;</p>
              <p>La Livraison aura lieu ?? l'adresse de livraison indiqu??e par le Client lors de la Commande. Lors de la r??alisation des diff??rentes ??tapes de la Commande susmentionn??es, le Client s'engage ?? respecter les pr??sentes conditions contractuelles par application de l'article 1316-1 du Code civil.&nbsp;</p>
              <p>Le Vendeur s'engage ?? honorer la Commande uniquement dans la limite des stocks disponibles des Biens. ?? d??faut de disponibilit?? des Biens, le Vendeur s'engage ?? en informer le Client.&nbsp;</p>
              <p>Conform??ment ?? l'article L. 122-1 du Code de la consommation, le Vendeur se r??serve le droit de refuser la Commande si elle est anormale, pass??e de mauvaise foi ou pour tout autre motif l??gitime, et notamment, lorsqu'il existe un litige avec le Client concernant le paiement d'une commande ant??rieure.&nbsp;</p>
              <p><strong>6. Prix des Biens et Services et Conditions de Validit??</strong>&nbsp;</p>
              <p>Le Prix des Biens et Services vendus sur le Site est indiqu?? respectivement par article et r??f??rence ou par prestation et par r??f??rence.</p>
              <p>Au moment de la Validation de la Commande, le prix ?? payer s'entend du Prix Tout Compris.</p>
              <p>Les frais de t??l??communication inh??rents ?? l'acc??s au Site restent ?? la charge exclusive du Client.</p>
              <p>La dur??e de validit?? des offres et Prix est d??termin??e par l'actualisation du Site, et sous r??serve des stocks disponibles.</p>
              <p>&nbsp;</p>
              <p><strong>7. Conditions et moyens de paiement</strong></p>
              <p>Le paiement du Prix Tout Compris par le Client s'effectue par l'interm??diaire de l'un des moyens de paiement suivants :</p>
              <p>- Soit par carte bancaire (Visa, Mastercard, ???)</p>
              <p>- Soit par compte PAYPAL&nbsp;: PayPal est un service de paiement ??lectronique d??mat??rialis?? qui permet de payer en ligne, d'envoyer et de recevoir de l'argent sans partager les informations bancaires.&nbsp;<a href="https://www.paypal.com/fr/webapps/mpp/paypal-popup" target="_blank" rel="noopener noreferrer" aria-describedby="a11y-new-window-external-message">Qu???est-ce que PayPal</a>?&nbsp;</p>
              <p>La transaction est imm??diatement d??bit??e sur la carte bancaire du Client apr??s v??rification des donn??es de celle-ci, ?? r??ception de l'autorisation de d??bit de la part de la soci??t?? ??mettrice de la carte bancaire utilis??e par le Client.&nbsp;</p>
              <p>Conform??ment ?? l'article L. 132-2 du Code mon??taire et financier, l'engagement de payer donn?? au moyen d'une carte de paiement est irr??vocable. En communiquant les informations relatives ?? sa carte bancaire, le Client autorise le Vendeur ?? d??biter sa carte bancaire du montant correspondant au Prix Tout Compris. Ce prix prendra en compte la Taxe sur la Valeur Ajout??e (et/ou de toute autre taxe notamment environnementale pouvant ??tre cr????e par la r??glementation) ainsi que, le cas ??ch??ant, les ??ventuelles r??ductions consenties au travers d???op??rations promotionnelles.</p>
              <p>?? cette fin, le Client confirme qu'il est le titulaire de la carte bancaire ?? d??biter et que le nom figurant sur la carte bancaire est effectivement le sien. Le Client communique les seize chiffres et la date d'expiration de sa carte bleue ainsi que le cas ??ch??ant, les num??ros du cryptogramme visuel.</p>
              <p>Dans le cas o?? le d??bit du Prix Tout Compris serait impossible, la Vente en Ligne serait imm??diatement r??solue de plein droit et la Commande serait annul??e.</p>
              <p>Le Vendeur met en ??uvre tous les moyens disponibles en sa possession pour assurer la confidentialit?? et la s??curit?? des donn??es transmises sur le Site<span> vibroflex.fr</span></p>
              <p><strong>7. Livraison de la commande</strong></p>
              <p><em>7.1 Mode de Livraison</em></p>
              <p>Le Client choisit l'un des Modes de Livraison propos??s sur le Site ?? l'occasion de la r??alisation de la Commande.&nbsp;</p>
              <p><em>7.2 Adresse de Livraison</em></p>
              <p>Le Client choisit une adresse de Livraison n??cessairement situ??e sur le Territoire, sous peine de refus de la Commande. Le Client est seul responsable d'un d??faut de Livraison d?? ?? un manque d'indication lors de la Commande.&nbsp;</p>
              <p><em>7.3 Montant des Frais de Livraison</em></p>
              <p>Le montant des Frais de Livraison d??pend du montant de la Commande et du mode de livraison choisi par le Client. Les Prix s???entendent hors frais de livraison (port, emballage et confection du colis selon montants en vigueur et communiqu??s au client). En tout ??tat de cause, le montant des Frais de Livraison est indiqu?? au Client avant la Validation de la Commande.&nbsp;</p>
              <p><em>7.4 D??lais de Livraison</em></p>
              <p>Les D??lais de Livraison sont disponibles sur le Site et peuvent varier en fonction de la disponibilit?? des Biens ayant fait l'objet de la Commande.</p>
              <p>Les D??lais de Livraison s'entendent en jours ouvr??s et correspondent aux d??lais moyens de pr??paration et d'acheminement de la Commande sur le Territoire.</p>
              <p>Les D??lais de Livraison courent ?? compter de la date de Confirmation de la Commande par le Vendeur.&nbsp;</p>
              <p><em>7.5. Retard de Livraison [?? valider par ELITE TRADE AG]</em></p>
              <p>En cas de retard de Livraison, la Commande n'est pas annul??e.</p>
              <p>Le Vendeur informe le Client par courrier que la Livraison interviendra avec du retard. Le Client pourra alors d??cider d'annuler la Commande et enverra par tout moyen (mail, courrier) au Vendeur un avis d'annulation de la Commande.</p>
              <p>Dans le cas o?? la Commande n'a pas encore ??t?? exp??di??e lors de la r??ception par le Vendeur de l'avis d'annulation du Client, la Livraison est bloqu??e et le Client est rembours?? des sommes ??ventuellement d??bit??es dans un d??lai de quatorze jours suivant la r??ception de l'avis d'annulation. Dans le cas o?? la Commande a d??j?? ??t?? exp??di??e lors de la r??ception par le Vendeur de l'avis d'annulation du Client, le Client peut encore annuler la Commande en refusant le colis. Le Vendeur proc??dera alors au remboursement des sommes d??bit??es et des frais de retour d??bours??s par le Client dans un d??lai de quatorze jours suivant la r??ception du retour du colis refus?? complet et dans son ??tat d'origine.&nbsp;</p>
              <p><em>7.6 V??rification de la Commande ?? son arriv??e</em></p>
              <p>Le Client est tenu de v??rifier l'??tat de l'emballage ainsi que les Articles lors de la Livraison.</p>
              <p>Il appartient au Client d'??mettre les r??serves et les r??clamations qu'il estime n??cessaires, voire de refuser le colis, lorsque le colis est manifestement endommag?? ?? la Livraison. Lesdites r??serves et r??clamations doivent ??tre adress??es au transporteur par lettre recommand??e avec demande d'avis de r??ception dans les trois jours ouvrables, non compris les jours f??ri??s, qui suivent la date de la Livraison des Biens.&nbsp;</p>
              <p>Le Client doit par ailleurs faire parvenir une copie de cette lettre au Vendeur. Le d??faut de r??clamation dans le d??lai susmentionn?? ??teint toute action contre le transporteur conform??ment ?? l'article L. 133-3 du Code de commerce. Le Client doit s'assurer que les Biens qui lui ont ??t?? livr??s correspondent ?? la Commande. En cas de non-conformit?? des Biens en nature ou en qualit?? aux sp??cifications mentionn??es dans le bon de Livraison, le Client doit informer ELITE TRADE AG. par courrier ??lectronique et renvoyer les Biens ?? l'adresse indiqu??e.&nbsp;</p>
              <p><strong>8. D??lai de r??tractation</strong></p>
              <p dir="ltr"><span>Conform??ment aux articlesL221-18 et suivants du Code de la Consommation, vous disposez d'un d??lai de r??tractation de&nbsp;</span><span>14 jours</span><span>&nbsp;?? compter du jour de r??ception de &nbsp;votre commande, sans avoir ?? justifier de motifs ni ?? payer de p??nalit??s, ?? l???exception des frais de retour</span><span><br class="kix-line-break"><br class="kix-line-break"></span></p>
              <p dir="ltr"><span>Le d??compte du d??lai de 14 jours commence le lendemain de la livraison de votre commande. Si ce d??lai expire un samedi, un dimanche ou un jour f??ri??, il est prolong?? jusqu'au premier jour ouvrable suivant.</span></p>
              <p><br class="kix-line-break">Dans le cas d???une commande livr??e en plusieurs fois, le d??lai cours ?? compter de la r??ception du dernier bien faisant partie d???une m??me commande.<br class="kix-line-break"><br class="kix-line-break">Afin d???exercer votre droit de r??tractation, vous pouvez renvoyer par voie postale le formulaire de r??tractation disponible<span>&nbsp;</span><a href="https://www.francedirectshop.fr/conditions-vente#formulaire" aria-describedby="a11y-external-message">ici</a>,* ou tout autre ??crit exprimant votre volont?? de r??tractation, ?? l???adresse suivante :<br class="kix-line-break">ELITE TRADE AG 15, 40/54<br>AVENUE SAINTE MARGUERITE<br>06200 NICE</p>
              <p dir="ltr"><span>Vous pouvez aussi exercer votre droit de r??tractation&nbsp;</span><span>par t??l??phone :02&nbsp;78&nbsp;88 00 81</span><span>&nbsp;ou par e-mail:&nbsp;<a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></span><a href="mailto:info@francedirectshop.fr" aria-describedby="a11y-external-message"><span><br class="kix-line-break"><br class="kix-line-break"></span></a></p>
              <p dir="ltr"><span>Vous devrez alors retourner le(s) produit(s) ?? ELITE TRADE AG au plus tard dans les 14 jours suivantl???envoi de votre r??tractation</span><span>.</span></p>
              <p dir="ltr"><span>Le Client doit renvoyer le(s) article(s) neufs emball??s, accompagn??(s) de tous les accessoires ??ventuels, cadeaux, notices d'emploi et documentations ?? l'adresse suivante:?? ELITE TRADE AG c/o -</span></p>
              <p dir="ltr"><span>ELITE TRADE AG vous rembourse la totalit?? de votre commande (produits + frais de livraison initiaux), ?? l???exception des co??ts directs de renvoi.</span></p>
              <p dir="ltr"><span>Les ??ventuels frais suppl??mentaires d??coulant du choix d???un mode de livraison plus co??teux que le mode de livraison initial ne pourront vous ??tre rembours??s.</span><span><br class="kix-line-break"></span><span><br class="kix-line-break"></span><span>Sauf accord contraire, le remboursement est toujours effectu?? selon le mode de paiement initial utilis?? au moment de l???achat.&nbsp; ELITE TRADE AG s???engage ?? effectuer le remboursement des produits dans les meilleurs d??lais et, en tout cas, dans les 14 jours ?? compter de la date ?? laquelle ELITE TRADE AG aura r??c??ptionn?? les biens ou de la date ?? laquelle le consommateur aura fourni une preuve de l??exp??dition des biens.</span><span><br class="kix-line-break"></span><span><br class="kix-line-break"></span><span>La d??pr??ciation des biens r??sultant de manipulations autres que celles n??cessaires pour ??tablir la nature, les caract??ristiques et le bon fonctionnement de ces biens pourrait contraindre ELITE TRADE AG ?? diminuer le montant du remboursement en cons??quence.</span></p>
              <div><span>&nbsp;</span></div>
              <p><em><span><a name="formulaire"></a>FORMULAIRE DE RETRACTATION</span></em></p>
              <p><em>A l'attention de ELITE TRADE AG</em></p>
              <p><em>&nbsp;</em></p>
              <p><em></em><em>Num??ro de t??l??phone de ELITE TRADE AG : <span>02&nbsp;78&nbsp;88 00 81</span></em></p>
              <p><em>Adresse de courrier ??lectronique de ELITE TRADE AG:<span>&nbsp;<a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></span></em></p>
              <p><em>Adresse postale de ELITE TRADE AG: 40/54<br>AVENUE SAINTE MARGUERITE<br>06200 NICE</em></p>
              <p><em>&nbsp;</em></p>
              <p><em>Je vous notifie par la pr??sente ma r??tractation du contrat portant sur la vente du PRODUIT ci-dessous :</em></p>
              <p><em>&nbsp;</em></p>
              <p><em>R??f??rence du PRODUIT : [______________________]</em></p>
              <p><em>N?? de la facture : [___________________]</em></p>
              <p><em>N?? du bon de commande : [________________]</em></p>
              <p><em>Command?? le [____________] / re??u le [________________]</em></p>
              <p><em>Moyen de paiement utilis?? : [____________________]</em></p>
              <p><em>Nom du CLIENT&nbsp;: [____________________]</em></p>
              <p><em>Adresse du CLIENT : [_______________________]</em></p>
              <p><em>Adresse de livraison : [_________________________]</em></p>
              <p><em>Courriel du CLIENT : [_______________________]</em></p>
              <p><em>Signature du CLIENT (sauf cas de transmission par courriel)</em></p>
              <p><em>Date : [___ / ___ / ___ ]</em></p>
              <p><em>&nbsp;</em></p>
              <p><strong>9. Garantie</strong></p>
              <p>Le Vendeur est soumis aux conditions de garanties l??gales pr??vues aux&nbsp; articles L. 211-4, L. 211-5 et L. 211-12 du Code de la consommation&nbsp; et aux&nbsp; articles 1641 et 1648 du Code civil, ci-apr??s reproduits&nbsp;:&nbsp;</p>
              <p>Art. L. 211-4 du Code de la consommation : " Le vendeur est tenu de livrer un bien conforme au contrat et r??pond des d??fauts de conformit?? existant lors de la d??livrance. Il r??pond ??galement des d??fauts de conformit?? r??sultant de l'emballage, des instructions de montage ou de l'installation lorsque celle-ci a ??t?? mise ?? sa charge par le contrat ou a ??t?? r??alis??e sous sa responsabilit??".&nbsp;</p>
              <p>Art. L. 211-5 du Code de la consommation : "Pour ??tre conforme au contrat, le bien doit :&nbsp;</p>
              <p>1?? Etre propre ?? l'usage habituellement attendu d'un bien semblable et, le cas ??ch??ant :- correspondre ?? la description donn??e par le vendeur et poss??der les qualit??s que celui-ci a pr??sent??es ?? l'acheteur sous forme d'??chantillon ou de mod??le ;- pr??senter les qualit??s qu'un acheteur peut l??gitimement attendre eu ??gard aux d??clarations publiques faites par le vendeur, par le producteur ou par son repr??sentant, notamment dans la publicit?? ou l'??tiquetage ;&nbsp;</p>
              <p>2?? Ou pr??senter les caract??ristiques d??finies d'un commun accord par les parties ou ??tre propre ?? tout usage sp??cial recherch?? par l'acheteur, port?? ?? la connaissance du vendeur et que ce dernier a accept??".&nbsp;</p>
              <p>Art. L. 211-12 du Code de la consommation : "L'action r??sultant du d??faut de conformit?? se prescrit par deux ans ?? compter de la d??livrance du bien".&nbsp;</p>
              <p>Art. 1641 du Code civil : " Le vendeur est tenu de la garantie ?? raison des d??fauts cach??s de la chose vendue qui la rendent impropre ?? l'usage auquel on la destine, ou qui diminuent tellement cet usage que l'acheteur ne l'aurait pas acquise, ou n'en aurait donn?? qu'un moindre prix, s'il les avait connus".&nbsp;</p>
              <p>Art. 1648 du Code civil : " L'action r??sultant des vices r??dhibitoires doit ??tre intent??e par l'acqu??reur dans un d??lai de deux ans ?? compter de la d??couverte du vice. Dans le cas pr??vu par l'article 1642-1, l'action doit ??tre introduite, ?? peine de forclusion, dans l'ann??e qui suit la date ?? laquelle le vendeur peut ??tre d??charg?? des vices ou des d??fauts de conformit?? apparents".&nbsp;</p>
              <p><strong>10. Droits de propri??t?? intellectuelle</strong>&nbsp;</p>
              <p>&nbsp;Les marques du Vendeur ELITE TRADE AG, ainsi que l'ensemble des marques figuratives ou non et plus g??n??ralement toutes les autres marques, illustrations, images et logotypes figurant sur les Biens, leurs accessoires et leurs emballages, qu'ils soient d??pos??s ou non, sont et demeureront la propri??t?? exclusive du Vendeur. Toute reproduction totale ou partielle, modification ou utilisation de ces marques, illustrations, images et logotypes, pour quelque motif et sur quelque support que ce soit, sans accord expr??s et pr??alable du Vendeur, est strictement interdite. Il en est de m??me de toute combinaison ou conjonction avec toute autre marque, symbole, logotype et plus g??n??ralement tout signe distinctif destin?? ?? former un logo composite. Il en est de m??me pour tout droit d'auteur, dessin, mod??le et brevet qui sont la propri??t?? du Vendeur.&nbsp;</p>
              <p><strong>11. Confidentialit?? des Donn??es</strong>&nbsp;</p>
              <p>&nbsp;Les informations demand??es au Client sont n??cessaires au traitement de la Commande. Dans l'hypoth??se o?? le Client consent ?? communiquer des donn??es individuelles ?? caract??re personnel, il dispose d'un droit individuel d'acc??s, de retrait et de rectification de ces donn??es dans les conditions pr??vues par la&nbsp; loi du 6 janvier 1978 modifi??e et au RGPD du 27/04/2016 relative ?? l'informatique, aux fichiers et aux libert??s. Le Client doit adresser toute demande ??crite ?? l'adresse suivante&nbsp;: ELITE TRADE AG</p>
              <p>40/54<br>AVENUE SAINTE MARGUERITE<br>06200 NICE</p>
              <p>?? l'occasion de la cr??ation de son compte client sur le Site, le Client aura la possibilit?? de choisir s'il souhaite recevoir des offres du Vendeur et de ses partenaires.&nbsp;<span>&nbsp;</span><a href="http://www.francedirectshop.fr/protection-data/" aria-describedby="a11y-external-message">+INFO</a></p>
              <p><strong>12. Force Majeure&nbsp;</strong></p>
              <p>L'ex??cution par le Vendeur de ses obligations aux termes du pr??sent Contrat sera suspendue en cas de survenance d'un cas fortuit ou de force majeure qui en g??nerait ou en retarderait l'ex??cution.&nbsp;</p>
              <p>Le Vendeur avisera le Client de la survenance d'un tel cas fortuit ou de force majeure dans les 5 jours ?? compter de la date de survenance de l'??v??nement.&nbsp;</p>
              <p>Lorsque la suspension de l'ex??cution des obligations du Vendeur se poursuit pendant une p??riode sup??rieure ?? 15 jours, le Client a la possibilit?? de r??silier la Commande en cours et le Vendeur proc??dera alors au remboursement de la Commande dans les conditions ci-dessus.&nbsp;</p>
              <p><strong>13. Nullit?? d'une Clause du Contrat</strong></p>
              <p>Si l'une quelconque des dispositions du pr??sent Contrat ??tait annul??e, cette nullit?? n'entra??nerait pas la nullit?? des autres dispositions du Contrat qui demeureront en vigueur entre les Parties.&nbsp;</p>
              <p><strong>14. Modification du Contrat</strong></p>
              <p>Tout amendement, r??siliation ou abandon de l'une quelconque des clauses du pr??sent Contrat ne sera valable qu'apr??s accord ??crit et sign?? entre les Parties.&nbsp;</p>
              <p><strong>15. Non-renonciation</strong></p>
              <p>Le fait pour l'une des Parties de ne pas se pr??valoir d'un engagement par l'autre Partie ?? l'une quelconque des obligations vis??es par les pr??sentes, ne saurait ??tre interpr??t?? pour l'avenir comme une renonciation ?? l'obligation en cause.&nbsp;</p>
              <p>16. R??clamations et r??glement amiable des litiges</p>
              <p>En vertu de l'article L. 152-1 du Code de la consommation " Tout consommateur a le droit de recourir gratuitement ?? un m??diateur de la consommation en vue de la r??solution amiable du litige qui l'oppose ?? un professionnel. "&nbsp;</p>
              <p>Les litiges entrant dans le champ d'application de l'article L. 152-1 du Code de la consommation sont les litiges d??finis ?? l'article L. 151-1 du Code de la consommation ?? savoir les litiges de nature contractuelle, portant sur l'ex??cution d'un contrat de vente ou de fournitures de services, opposant un consommateur ?? un professionnel. Le texte couvre les litiges nationaux et les litiges transfrontaliers.&nbsp;</p>
              <p>Pour toute difficult??, nous vous invitons ?? nous contacter pr??alablement ou ?? contacter notre service apr??s-vente :&nbsp;</p>
              <p>ELITE TRADE AG</p>
              <p>40/54<br>AVENUE SAINTE MARGUERITE<br>06200 NICE</p>
              <p><a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></p>
              <p>Service apr??s-vente :</p>
              <p>ELITE TRADE AG</p>
              <p><a href="mailto:info01.elitebienetre@gmail.com" aria-describedby="a11y-external-message">info01.elitebienetre@gmail.com</a></p>
              <p>Une plateforme de r??glement des litiges en ligne est ?? votre disposition :&nbsp;</p>
              <p><a href="http://ec.europa.eu/consumers/odr/" target="_blank" rel="noopener noreferrer" aria-describedby="a11y-new-window-external-message">http://ec.europa.eu/consumers/odr/</a><span>.</span>&nbsp;</p>
              <p>Seules les r??clamations relatives ?? la Vente en Ligne des Articles seront prises en compte.&nbsp;</p>
              <p>Dans l'ann??e qui suivra votre demande aupr??s de nos services, en application de l'article R.156-1 du Code de la consommation, vous pourrez faire examiner votre demande par un m??diateur dont trouverez ci-dessous les coordonn??es, sachant qu'un litige ne pourra ??tre examin??, sauf exception, que par un seul m??diateur :&nbsp;</p>
              <p><em>M??diateur du commercer coop??ratif et associ??</em></p>
              <p><em>http://www.mcca-mediation.fr</em>&nbsp;</p>
              <p>Litiges transfrontaliers :&nbsp;</p>
              <p>Centre europ??en des consommateurs France :&nbsp;</p>
              <p>europe-consommateurs.eu</p>
              <p>&nbsp;Vous pouvez, ?? vos frais, vous faire assister par un conseil.&nbsp;</p>
              <p><strong>16. Loi applicable</strong></p>
              <p>Le pr??sent Contrat sera r??gi par la loi fran??aise et le tribunal comp??tent sera celui tel que d??fini par les lois fran??aises.</p>

            </div>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>

    </div>
  </div>
  <?php ActiveForm::end(); ?>
</div>
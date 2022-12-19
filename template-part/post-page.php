<div class="ml-auto mr-auto col-md-12">
    <div class="section-description text-center">
        <h1 class="title movingPageHeader-h1"><?php the_field('page_title'); ?></h1>
        <p class="movingPageParagraph"><?php the_field('page_description'); ?></p>
        <button type="button" class="btn-round header-button mt-4 btn btn-outline-info btn-lg">
            <p class="mb-auto header-button-paragraph ml-4 mr-4"><?php the_field('button_value'); ?></p>
        </button>
    </div>
</div>
<div class="container-fluid">
    <div class="space-50"></div>
    <div class="row">
        <div class="ml-auto mr-auto col-md-8">
            <h2 class="text-center title" style="color: rgb(6, 61, 63);"><?php the_field('page_h2'); ?> <br><br></h2>
            <p class="companies-info-paragraph text-center"><?php the_field('paragraph1'); ?><br><br>
            <p class="companies-info-paragraph text-center"><?php the_field('paragraph2'); ?></p>
            </p>
        </div>
    </div>
    <div class="space-50"></div>
    <div class="info-card-row-2 row">
        <div class="col-md-2"></div>
        <?php if (have_rows('card_info')):?>
            <?php while (have_rows('card_info')): the_row();
              $card_head = get_sub_field('card_head');
              $card_paragraph = get_sub_field('card_paragraph');
              $index = get_row_index();
            ?>
                <div class="col-md-3">
                    <div class="card-pricing companies-info-card h-100 card">
                        <div class="companies-info-card-body card-body">
                            <div class="icon icon-custom">
                                <?php
                                    if ($index == 0) { ?>
                                        <i class="now-ui-icons shopping_cart-simple"></i>
                                    <?php } elseif ($index == 1) { ?>
                                        <i class="now-ui-icons ui-2_like"></i>
                                    <?php } else { ?>
                                        <i class="now-ui-icons users_single-02"></i>
                                    <?php }
                                ?>
                            </div>
                                <h5 class="companies-info-card-title card-title"><?php echo $card_head; ?></h5>
                                <p class="card-description companies-info-card-paragraph"><?php echo $card_paragraph; ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        <div class="col-md-2"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="space-50"></div>
    <div class="row">
        <div class="ml-auto mr-auto col-md-8">
            <h2 class="text-center title" style="color: rgb(6, 61, 63);"><?php the_field('service_cost_title'); ?></h2>
        </div>
    </div>
    <div class="companies-pricing-row row">
        <?php if (have_rows('costs')):?>
            <?php while(have_rows('costs')): the_row();
                $cost = get_sub_field('service_registration');
                $service_description = get_sub_field('service_description');
            ?>
                <div class="text-center col-sm-4">
                    <p class="companies-pricing-header"><?php echo $cost ?></p><span class="companies-pricing-paragraph"><?php echo $service_description ?></span>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<div class="container">
    <div class="space-50"></div>
    <div class="row">
        <div class="ml-auto mr-auto col-md-12">
            <h2 class="text-center title" style="color: rgb(6, 61, 63);"><?php the_field('register') ?></h2>
        </div>
    </div>
    <div class="space-50"></div>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <form class="">
                <div class="mb-4 form-group">
                    <input name="contactPerson" placeholder="Yhteyshenkilön nimi*" type="text" class="register-input form-control" value="">
                </div>
                <div class="mb-4 form-group">
                    <input name="companyName" placeholder="Yrityksen nimi*" type="text" class="register-input form-control" value="">
                </div>
                <div class="mb-4 form-group">
                    <input name="businessId" placeholder="Y-tunnus*" type="text" class="register-input form-control" value="">
                </div>
                <div class="mb-4 form-group">
                    <input name="email" placeholder="Sähköposti*" type="email" class="register-input form-control" value="">
                </div>
                <div class="mb-4 form-group">
                    <input name="phoneNumber" placeholder="Puhelinnumero*" type="text" class="register-input form-control" value="">
                </div>
                <div class="has-danger mb-4 form-group">
                    <input name="passwordOne" placeholder="Salasana*" type="password" class="has-danger register-input form-control" value="">
                </div>
                <div class="has-danger mb-4 form-group">
                    <input name="passwordTwo" placeholder="Salasana uudelleen*" type="password" class="has-danger register-input form-control" value="">
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input name="traficom" type="checkbox" class="form-check-input" value="false">
                        <span class="form-check-sign"></span>Vakuutan, että yritykselläni on Traficomin myöntämä tieliikennelupa*
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input name="insurance" type="checkbox" class="form-check-input" value="false">
                        <span class="form-check-sign"></span>Vakuutan, että yritykselläni on vastuuvakuutus ja lakisääteinen tiekuljetusvakuutus*
                    </label>
                </div>
                <div class="row" style="margin-left: 2.2rem; margin-top: 1rem;">Rekisteröityessä hyväksyt palvelumme &nbsp;  <a href="/yritys-kayttoehdot" target="_blank" rel="noreferrer" tag="[object Object]">sopimusehdot.</a>
                </div>
                <div class="space-50"></div>
                <div class="register-button-row row">
                    <button type="button" disabled="" class="btn-round register-button btn btn-secondary disabled">
                        Rekisteröidy
                    </button>
                </div>
                <div class="space-50"></div>
                <div class="space-50"></div>
            </form>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>
<div class="container-fluid">
    <div class="space-50"></div>
    <div class="row">
        <div class="ml-auto mr-auto col-md-12">
            <h2 class="text-center title" style="color: rgb(6, 61, 63);"><?php the_field('faq_title'); ?></h2>
        </div>
    </div>
    <div class="space-50"></div>
    <div aria-multiselectable="true" class="card-collapse" id="accordion" role="tablist">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-3">
                <button type="button" data-toggle="collapse" aria-expanded="true" class="faq-collapse-btn btn btn-secondary btn-lg btn-block">
                    <span class="faq-collapse-header">Mitä tapahtuu rekisteröitymisen jälkeen?</span>
                    <span class="faq-collapse-icon faq-arrow"><i aria-expanded="true" class="now-ui-icons arrows-1_minimal-down icon-rotate"></i></span>
                </button>
                <div class="collapse show">
                    <div class="faq-collapse-card card">
                        <div class="faq-collapse-card-body card-body">Voit kirjautua sisään palveluun heti rekisteröitymisen jälkeen. Saat erillisen vahvistuksen rekisteröitymisestä sähköpostiisi.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"><button type="button" aria-expanded="true" class="faq-collapse-btn btn btn-secondary btn-lg btn-block"><span class="faq-collapse-header">Miten hyväksyn muuttokeikkoja</span><span class="faq-collapse-icon faq-arrow"><i aria-expanded="true" class="now-ui-icons arrows-1_minimal-down icon-rotate"></i></span></button><div class="collapse show"><div class="faq-collapse-card card"><div class="faq-collapse-card-body card-body">Voit hyväksyä muuttokeikkoja kirjautumalla sisään palveluun omalla sähköpostiosoitteellasi ja salasanalla. Avoimet muuttokeikat löytyvät heti etusivulta.</div></div></div></div><div class="col-sm-3"></div></div><div class="row"><div class="col-sm-3"></div><div class="col-sm-3"><button type="button" class="faq-collapse-btn btn btn-secondary btn-lg btn-block"><span class="faq-collapse-header">Miten saan tiedon avoimista muuttokeikoista?</span><span class="faq-collapse-icon faq-arrow"><i aria-expanded="true" class="now-ui-icons arrows-1_minimal-down icon-rotate"></i></span></button><div class="collapse show"><div class="faq-collapse-card card"><div class="faq-collapse-card-body card-body">Kirjautuessasi sisään palveluun näet avoimet muuttokeikat heti etusivulta.</div></div></div></div><div class="col-sm-3"><button type="button" class="faq-collapse-btn btn btn-secondary btn-lg btn-block"><span class="faq-collapse-header">Miten 10% komissio laskutetaan?</span><span class="faq-collapse-icon faq-arrow"><i aria-expanded="true" class="now-ui-icons arrows-1_minimal-down icon-rotate"></i></span></button><div class="collapse show"><div class="faq-collapse-card card"><div class="faq-collapse-card-body card-body">Laskutamme toteutuneista muuttokeikoista 10% komission aina kerran kuukaudessa kuun 15.päivänä. Laskut lähetetään joko sähköpostitse tai verkkolaskuna.</div></div></div></div><div class="col-sm-3"></div></div></div><div class="space-50"></div></div><div class="container-fluid"><div class="row"><div class="map-col d-none d-sm-block col-sm-5"><div class="contactForm-map"><div class="gmap_canvas"><iframe width="100%" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q=Helsinki&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div></div><div class="contactForm-column col-sm-7"><div class="contact-form-bg"></div><div class="contactForm-container mr-auto ml-auto row"><h2 class="text-center title contactForm-header" style="color: rgb(255, 255, 255);">Muuttofirma - ota yhteyttä</h2></div><div class="contactForm-div"><form class=""><div class="mb-4 form-group"><input name="contactPerson" placeholder="Yhteyshenkilön nimi" type="text" class="contact-input form-control" value=""></div><div class="mb-4 form-group"><input name="companyName" placeholder="Yrityksen nimi" type="text" class="contact-input form-control" value=""></div><div class="mb-4 form-group"><input name="email" placeholder="Sähköposti" type="email" class="contact-input form-control" value=""></div><div class="mb-4 form-group"><input name="phoneNumber" placeholder="Puhelinnumero" type="text" class="contact-input form-control" value=""></div><div class="mb-4 form-group"><textarea name="message" placeholder="Viesti" class="contact-input custom-textArea form-control"></textarea></div><div class="space-50"></div><div class="register-button-row mr-auto ml-auto row"><button type="button" disabled="" class="btn-round register-button btn btn-primary disabled">Lähetä</button></div><div class="space-50"></div></form></div></div></div></div>
            </div></div>
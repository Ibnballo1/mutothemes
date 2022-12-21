<?php
  $title = get_field('page_title');
  $subtitle = get_field('subtitle_page');
  $tagline = get_field('tagline');
  $link = get_field('link');
  $link_value = get_field('link_value');
  $info_card_paragraph = get_field('info_card_paragraph');
?>
    <div itemscope itemtype="https://schema.org/Service"  class="section choice-buttons-bg">
        <div class="container">
          <div class="row">
            <div class="ml-auto mr-auto col-md-8">
              <h3 class="text-center title"><?php echo $title; ?><br><br><small class="description"><?php echo $tagline; ?></small></h3>
            </div>
          </div>
          <div class="justify-content-center mt--4 row">
            <a class="btn-round choice-button mt-4 btn btn-outline-secondary btn-lg" href="<?php echo $link ?>"><p class="mb-auto choice-button-paragraph"><?php echo $link_value ?></p></a>
          </div>
          <div class="space-50"></div>
        </div>
      </div>
      <div class="container-fluid">
            <div class="space-50"></div>
            <div class="row">
                <div class="ml-auto mr-auto col-md-8">
                    <h3 class="text-center title"><?php echo $subtitle; ?></h3>
                </div>
            </div>
            <div class="space-50"></div>
            <div class="info-card-row row">
                <?php if (have_rows('boxes')):?>
                    <?php while (have_rows('boxes')): the_row();
                      $numbers = get_sub_field('number');
                      $card_title = get_sub_field('title');
                      $card_description = get_sub_field('description');
                    ?>
                <div class="col-md-3">
                    <h3 class="mb-0 text-center"><?php echo $numbers; ?></h3>
                    <div class="card-pricing info-card card">
                        <div class="info-card-body card-body">
                            <div class="icon icon-custom" style="display: inline-block;">
                                <?php if (get_row_index() == 3): ?>
                                    <i class="fa-solid fa-calendar" style="z-index: 2;"></i>
                                <?php elseif (get_row_index() == 4): ?>
                                    <i class="fa-solid fa-check" style="z-index: 2;"></i>
                                <?php else: ?>
                                    <i class="fa fa-shopping-bag" aria-hidden="true" style="z-index: 2;"></i>
                                <?php endif; ?>
                                <?php if (get_row_index() != 4):?>
                                <div>
                                    <hr class="horizontalLine">
                                </div>
                                <?php endif; ?>
                                <div class="verticalLine3"></div>
                            </div>
                            <h5 class="info-card-title mt-5 card-title"><?php echo $card_title; ?></h5>
                            <p class="card-description info-card-paragraph"><?php echo $card_description; ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
                <?php endif;?>
            </div>
            <div class="space-110"></div>
      </div>
      <div class="container-fluid" style="background-color: rgb(6, 61, 63);">
            <div class="space-50"></div>
            <div class="info-cards-title-header row">
                <div class="col-md-12">
                    <h3 class="text-center title" style="color: rgb(255, 255, 255);"><?php the_field('card_title'); ?> <br><br></h3>
                </div>
            </div>
            <div class="info-cards-row row">
                <div class="col-sm-6 col-md-6">
                    <p class="info-card-paragraph3"><?php echo $info_card_paragraph; ?></p>
                </div>
                <?php if (have_rows('card_images')):?>
                    <?php while (have_rows('card_images')): the_row();
                      $each_img = get_sub_field('images');
                      $pictures = $each_img['sizes']['large'];
                      $index = get_row_index();
                    ?>
                <?php if ($index == 1):?>
                <div class="card-column{$index} col-md-2">
                    <div class="card-container first-card">
                <?php elseif ($index == 3):?>
                    <div class="card-column{$index} col-md-2">
                    <div class="card-container third-card">
                <?php else:?>
                    <div class="col-md-2">
                    <div class="card-container second-card">
                <?php endif; ?>
                    <div class="card-component">
                        <div class="front flip-card-div mt-3">
                            <img alt="..." src=<?php echo $pictures;?>>
                        </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
      </div>
      <div class="section section-basic-components container-fluid" style="padding-top: 5rem; z-index: 9;">
            <div class="row">
                <div class="ml-auto mr-auto col-md-8">
                    <h3 class="text-center title" style="color: rgb(6, 61, 63);"><?php the_field('promise_title');?></h3>
                </div>
            </div>
            <div class="space-50"></div>
            <div class="info-card-row-2 row">
                <?php if(have_rows('promise_card_info'));?>
                    <?php while (have_rows('promise_card_info')): the_row();
                      $promise_title = get_sub_field('each_promise_title');
                      $promise_description = get_sub_field('each_promise_description');
                    ?>
                <div class="col-md-4">
                    <div class="card-pricing info-card-2 h-100 card">
                        <div class="info-card-body-2 card-body">
                            <div class="icon icon-custom">
                                <?php if (get_row_index() == 2): ?>
                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                <?php elseif (get_row_index() == 3): ?>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                <?php else: ?>
                                    <i class="fa fa-shopping-bag" aria-hidden="true" style="z-index: 2;"></i>
                                <?php endif; ?>
                            </div>
                            <h5 class="info-card-title-2 card-title"><?php echo $promise_title; ?></h5>
                            <p class="card-description info-card-paragraph-2"><?php echo $promise_description; ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
      </div>
      <div>
            <div class="space-110"></div>
            <div class="container-fluid">
                <div class="option-cards row">
                    <?php if(have_rows('all_services')):?>
                        <?php while (have_rows('all_services')): the_row();
                          $service_img = get_sub_field('service_image');
                          $service_pic = $service_img['sizes']['large'];
                          $service_title = get_sub_field('service_title');
                          $service_description = get_sub_field('service_description');
                          $get_index = get_row_index();
                        ?>
                    <div class="col-md-6">
                        <div class="option-card option-card{$get_index} card">
                            <img alt="..." src=<?php echo $service_pic; ?> class="option-card-img card-img-top">
                            <div class="option-card-body d-flex flex-column card-body">
                                <h4 class="card-title"><?php echo $service_title; ?></h4>
                                <p class="card-text"><?php echo $service_description; ?></p>
                                <a
                                    class="btn-round option-button mt-auto btn btn-outline-secondary btn-lg"
                                    href="/muuttolaskuri">
                                    <p class="mb-auto option-button-paragraph">Laske hinta</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
            </div>
      </div>
      <div class="container-fluid" style="background-color: rgb(5, 59, 61); padding-top: 5rem; z-index: 9;">
            <div class="row">
                <div class="ml-auto mr-auto col-md-8">
                    <h3 class="text-center title mb-0" style="color: rgb(255, 255, 255);">Asiakkaamme suosittelevat meitä</h3>
                </div>
            </div>
            <div class="justify-content-center row">
                <div class="col-md-12 col-lg-8">
                    <div class="carousel slide">
                        <ol class="carousel-indicators">
                            <li class="active"></li>
                            <li class=""></li>
                            <li class=""></li>
                            <li class=""></li>
                            <li class=""></li>
                            <li class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="mt-5 carousel-item active">
                                <div class="text-center">
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                </div>
                                <p class="d-md-block mt-5 text-center" style="color: rgb(255, 255, 255);">26.8.2022</p>
                                <p class="mt-5 text-center rating-paragraph" style="color: rgb(255, 255, 255);">"Hyvin
                                    onnistunut muutto: toteutui täysin aikataulussa, ripeästi ja varmoin ottein tavarat
                                    vaihtoivat osoitetta sekä muuttomiehet olivat todella ystävällisiä ja avuliaita. Täyden
                                    kympin suoritus. Suosittelen!"</p><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABQgAAACaCAIAAABqlDLWAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOpSURBVHhe7ddBDQAhEMDA5RJUEfzbug8uOvOphq597gAAAEDV9woAAABJxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGEzP5a/AbHa35D9AAAAAElFTkSuQmCC"
                                    alt="FirstRating" class="d-block">
                                <div class="carousel-caption d-md-block mt--6">
                                    <h5>- Muuttaja Turku - Tampere</h5>
                                </div>
                            </div>
                            <div class="mt-5 carousel-item">
                                <div class="text-center">
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                </div>
                                <p class="d-md-block mt-5 text-center" style="color: rgb(255, 255, 255);">29.8.2022</p>
                                <p class="mt-5 text-center rating-paragraph" style="color: rgb(255, 255, 255);">"Nopeaa ja
                                    ystävällistä toimintaa, muutto sujui erinomaisesti. Tavarat saatiin uuteen asuntoon
                                    aikataulun mukaisesti ja huonekalut siirtyivät uuteen osoitteeseen ilman vaurioita.
                                    Suosittelen lämpimästi!"</p><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABQgAAACaCAIAAABqlDLWAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOpSURBVHhe7ddBDQAhEMDA5RJUEfzbug8uOvOphq597gAAAEDV9woAAABJxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGEzP5a/AbHa35D9AAAAAElFTkSuQmCC"
                                    alt="SecondRating" class="d-block">
                                <div class="carousel-caption d-md-block mt--6">
                                    <h5>- Muuttaja Espoo - Jyväskylä</h5>
                                </div>
                            </div>
                            <div class="mt-5 carousel-item">
                                <div class="text-center">
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                </div>
                                <p class="d-md-block mt-5 text-center" style="color: rgb(255, 255, 255);">5.9.2022</p>
                                <p class="mt-5 text-center rating-paragraph" style="color: rgb(255, 255, 255);">“Muutto meni
                                    näppärästi. Ensimmäinen muutto muuttofirman avulla ja tiedän, mistä tilaan muuton myöskin
                                    ensi kerralla. Hinta-laatusuhde erinomainen!”</p><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABQgAAACaCAIAAABqlDLWAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOpSURBVHhe7ddBDQAhEMDA5RJUEfzbug8uOvOphq597gAAAEDV9woAAABJxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGEzP5a/AbHa35D9AAAAAElFTkSuQmCC"
                                    alt="ThirdRating" class="d-block">
                                <div class="carousel-caption d-md-block mt--6">
                                    <h5>- Muuttaja Oulu - Kemi</h5>
                                </div>
                            </div>
                            <div class="mt-5 carousel-item">
                                <div class="text-center">
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                </div>
                                <p class="d-md-block mt-5 text-center" style="color: rgb(255, 255, 255);">25.8.2022</p>
                                <p class="mt-5 text-center rating-paragraph" style="color: rgb(255, 255, 255);">"Kaikki sujui
                                    erittäin hyvin, muuttomiehet olivat asiallisia ja reippaita ja osasivat hommansa! Työ sujui
                                    odotettua paremmin kun oli ammattilaiset asialla. Olemme erittäin tyytyväisiä!"</p><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABQgAAACaCAIAAABqlDLWAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOpSURBVHhe7ddBDQAhEMDA5RJUEfzbug8uOvOphq597gAAAEDV9woAAABJxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGEzP5a/AbHa35D9AAAAAElFTkSuQmCC"
                                    alt="FourthRating" class="d-block">
                                <div class="carousel-caption d-md-block mt--6">
                                    <h5>- Muuttaja Helsinki - Masala</h5>
                                </div>
                            </div>
                            <div class="mt-5 carousel-item">
                                <div class="text-center">
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                </div>
                                <p class="d-md-block mt-5 text-center" style="color: rgb(255, 255, 255);">2.9.2022</p>
                                <p class="mt-5 text-center rating-paragraph" style="color: rgb(255, 255, 255);">"Muuttomiehet
                                    olivat paikalla minuutilleen sovittuna ajankohtana. Olivat sympaattisia ja ahkeria ja heidän
                                    kanssaan muutto sujui helposti ja mukavassa tunnelmassa. Myös tarjous, jonka sain
                                    satasenmuutto.fi-portaalin kautta vastasi prikulleen pyyntööni. Ehdottomasti parasta
                                    asiakaspalvelua kymmenestä saamastani tarjouksesta. Suosittelen lämpimästi!"</p><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABQgAAACaCAIAAABqlDLWAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOpSURBVHhe7ddBDQAhEMDA5RJUEfzbug8uOvOphq597gAAAEDV9woAAABJxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGEzP5a/AbHa35D9AAAAAElFTkSuQmCC"
                                    alt="FifthRating" class="d-block">
                                <div class="carousel-caption d-md-block mt--6">
                                    <h5>- Muuttaja Tuusula - Porvoo</h5>
                                </div>
                            </div>
                            <div class="mt-5 carousel-item">
                                <div class="text-center">
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                    <i class="fa fa-thumbs-up mt-5 text-center rating-icons" aria-hidden="true" style="color: white"></i>
                                </div>
                                <p class="d-md-block mt-5 text-center" style="color: rgb(255, 255, 255);">29.8.2022</p>
                                <p class="mt-5 text-center rating-paragraph" style="color: rgb(255, 255, 255);">"Kolme
                                    muuttomiestä toimivat ripeästi, mutta samalla tosi huolellisesti. Kaikki muutossa meni
                                    sutjakasti ja sopimuksen mukaan. Mitään ei hajonnut tai naarmuuntunut, autot oli hyvin
                                    huolella ja järkevästi pakattu. Omien kantajien ja muuttomiesten avulla ison perheen tavarat
                                    siirtyivät alle neljään tuntiin. Olimme kaiken kaikkiaan erittäin tyytyväisiä! Iso plussa
                                    myös siitä, että tuntihinta on aina sama, sunnuntaimuuttaja kiittää.”</p><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABQgAAACaCAIAAABqlDLWAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAOpSURBVHhe7ddBDQAhEMDA5RJUEfzbug8uOvOphq597gAAAEDV9woAAABJxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGnGGAAAgDRjDAAAQJoxBgAAIM0YAwAAkGaMAQAASDPGAAAApBljAAAA0owxAAAAacYYAACANGMMAABAmjEGAAAgzRgDAACQZowBAABIM8YAAACkGWMAAADSjDEAAABpxhgAAIA0YwwAAECaMQYAACDNGAMAAJBmjAEAAEgzxgAAAKQZYwAAANKMMQAAAGEzP5a/AbHa35D9AAAAAElFTkSuQmCC"
                                    alt="SixthRating" class="d-block">
                                <div class="carousel-caption d-md-block mt--6">
                                    <h5>- Muuttaja Helsinki - Vantaa</h5>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" data-slide="prev" href=" " role="button">
                            <i class="fa-solid fa-less-than"></i>
                        </a>
                        <a class="carousel-control-next" data-slide="next" href=" " role="button">
                            <i class="fa-solid fa-greater-than"></i>
                        </a>
                    </div>
                </div>
            </div>
      </div>
    </div>

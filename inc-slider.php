<?php
$useragent = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) { ?>

    <div class="bg-slider d-block d-md-none" style="margin-top:70px;">
        <div class="d-flex align-content-center align-items-center justify-content-end" style="height:350px; background-image: url(<?php echo get_template_directory_uri(); ?>/img/v3/slider-mobile3.svg); background-size:cover; background-repeat: no-repeat;">
            <h1 class="slider-header me-3 ms-4 pb-5 mb-5">Nie podążamy schematem, <br /><span class="text-primary fw-bolder fst-italic">piszemy historię</span></h1>
        </div>
    </div>

<?php } else { ?>


    <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade d-none d-md-block" style="margin-top:35px;">
        <div class="carousel-inner">
            <div class="carousel-item bg-slider active position-relative overflow-hidden" data-bs-interval="10000">
                <img src="<?php echo get_template_directory_uri(); ?>/img/v3/1.svg" class="" alt="Kacelaria frankowa Szczecin">
                <div class="d-none d-md-block position-absolute" style="width:35%; top:110px; right:18%;">
                    <div>
                        <h1 class="slider-header py-4">Z nami jesteś na wyższej pozycji</h1>
                        <p class="slider-sentence">Pracujemy ciężko, aby rozwiązywać spory wcześnie i polubownie, jeżeli to tylko możliwe, często załatwiając sprawy konfliktowe jeszcze przed wniesieniem pozwu.</p>
                    </div>
                </div>
            </div>

            <div class="carousel-item bg-slider position-relative overflow-hidden" data-bs-interval="10000">
                <img src="<?php echo get_template_directory_uri(); ?>/img/v3/2.svg" class="" alt="Kacelaria frankowa Szczecin">
                <div class="d-none d-md-block position-absolute" style="width:35%; top:110px; right:18%;">
                    <div>
                        <h1 class="slider-header py-4">Nie zatrudniaj nas, jeśli to proste</h1>
                        <p class="slider-sentence">Jeśli masz trudny, skomplikowany lub nietypowy spór biznesowy albo prywatny, jesteśmy gotowi podjąć każde wyzwanie.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item bg-slider position-relative overflow-hidden" data-bs-interval="10000">
                <img src="<?php echo get_template_directory_uri(); ?>/img/v3/3.svg" class="" alt="Sprawy frankowe Szczecin">
                <div class="d-none d-md-block position-absolute" style="width:35%; top:110px; right:18%;">
                    <div>
                        <h1 class="slider-header py-4">Nie podążamy schematem, piszemy historię</h1>
                        <p class="slider-sentence">Analizujemy wszystkie aspekty Twojej działalności i/lub problemu prawnego z kreatywną perspektywą, wykorzystując nie tylko suche fakty lub prawo, aby znaleźć unikalne podejście do rozwiązania Twoich problemów prawnych. Zawsze toczymy właściwą walkę, we właściwy sposób.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item bg-slider position-relative overflow-hidden" data-bs-interval="10000">
                <img src="<?php echo get_template_directory_uri(); ?>/img/v3/4.svg" class="" alt="Kancelaria JTT Szczecin">
                <div class="d-none d-md-block position-absolute" style="width:35%; top:110px; right:18%;">
                    <div>
                        <h1 class="slider-header py-4">Zaczynamy od Twojego końcowego rezultatu</h1>
                        <p class="slider-sentence">Większość kancelarii prawnych nie rozumie końcowego rezultatu, który chcesz osiągnąć, skupiając się jedynie na rozpoczęciu działań. Naszym pierwszym krokiem jest współpraca z Tobą w celu wyjaśnienia Twoich celów oraz sytuacji prawnej i/lub biznesowej, w jakiej się znajdujesz.</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Poprzedni</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Następny</span>
        </button>
    </div>

<?php } ?>
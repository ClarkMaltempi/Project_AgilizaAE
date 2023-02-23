$(document).ready(function () {

    
    //seta imagem de introdução (banner restaurante)
    $('.bannerIntro').each(function () {
        var bg = $(this).data('banner');
        $(this).css('background-image', 'url(' + bg + ')');
    });
    
    //setar cor de status (verde = aberto / vermelho = fechado)
    var color = $('.restauranteStatus').data('clstatus');
    $('.restauranteStatus').css('background-color', color);

    //cria o spinner
    $("input[type='number']").inputSpinner();

    //seta imagem do produto
    $('.imgProd, .imgIntro').each(function () {
        var img = $(this).data('img');
        $(this).css('background-image', 'url(' + img + ')');
    });

    //cria as categorias
    $('.categorias').owlCarousel({
        margin: 3,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 4,
                loop: true
            },
            424.98 : {
                items: 6,
                loop: true
            },
            767.98: {
                items: 10,
                loop: true
            }
        }
    });
    
    //valida formulário 
    // $('form').on('submit', function(e) {
    //     var idForm = this.id;
    //     var parametro = '#' + idForm + ' input, #' + idForm + ' textarea';
    //     var textbtn =  $('#'+ idForm +' button').html();

    //     $('#'+ idForm +' button').attr('disabled', true);
    //     $('#'+ idForm +' button').html('<i class="fa fa-spinner fa-pulse"></i> Aguarde...');

    //     $(parametro).each(function() {
    //         var campo = $(this).val();  
    //         if(campo == "") {
    //             $('#'+ idForm +' button').attr('disabled', false);
    //             $('#'+ idForm +' button').html(textbtn);
    //             var nomeCampo = $(this).data('name');
    //             $('.campo').html(nomeCampo).css('text-transform', 'capitalize');
    //             $('#modal_validation').modal('toggle');
    //             e.preventDefault();
    //             return false;
    //         }
    //     });    
    // });

   
});


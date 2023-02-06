$(document).ready(function($){
    $('.mask_date').mask('00/00/0000');
    $('.mask_time').mask('00:00:00');
    $('.mask_date_time').mask('00/00/0000 00:00:00');
    $('.mask_cep').mask('00000-000');
    $('.mask_phone').mask('(00)00000-0000');
    $('.mask_phone_with_ddd').mask('(00)0000-0000');
    $('.mask_cellphone_with_ddd').mask('(00)00000-0000');
    $('.mask_hone_us').mask('(000)000-0000');
    $('.mask_number').mask('00000');
    $('.mask_mixed').mask('AAA 000-S0S');
    $('.mask_cpf').mask('000.000.000-00', { reverse: true });
    $('.mask_rg').mask('00.000.000-0', { reverse: true });
    $('.mask_money').mask('000.000,00', { reverse: true });
    $('.mask_cnpj').mask('00.000.000/0000-00', { reverse: true });
    $('.money-mask-tariff').mask('00.000,00', {reverse: true});
    $('.money-mask').mask('0.000.000.000.000,00', {reverse: true});
    $('.mask_limit').mask('XXXXXXXXXXXXXXX' + '...', {translation: {'X': {pattern: /[0-9A-Za-z/\W|_/]/, optional: true}}});
});

var options = {
    onKeyPress: function (cpf, ev, el, op) {
        var masks = ['000.000.000-000', '00.000.000/0000-00'];
        $('#document').mask((cpf.length > 14) ? masks[1] : masks[0], op);
    }
}
$('#document').length > 11 ? $('#document').mask('00.000.000/0000-00', options) : $('#document').mask('000.000.000-00#', options);
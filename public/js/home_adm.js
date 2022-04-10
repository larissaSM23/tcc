$('#tipo').change(function(){

    if($('#tipo').val() == 'p'){
        $('#div_cpf_responsavel').hide();
        $('#div_matricula').show();
    }

    if($('#tipo').val() == 'r'){
        $('#div_cpf_responsavel').hide();
        $('#div_matricula').show();
    }

    if($('#tipo').val() == 'adm'){
        $('#div_cpf_responsavel').hide();
        $('#div_matricula').show();
    }

    if($('#tipo').val() == 'a'){
        $('#div_cpf_responsavel').show();
        $('#div_matricula').show();
    }

});
var cantidad_check_mision = $('#cantidad_check_mision').val();
for (var i = 1; i <= cantidad_check_mision; i++) {
    $('#mision_check_' + i).css('visibility', 'visible');
}

function cantidadCheckMision() {
    for (var i = 1; i <= 3; i++) {
        $('#mision_check_' + i).css('visibility', 'hidden');
    }
    var cantidad_check_mision = $('#cantidad_check_mision').val();
    for (var i = 1; i <= cantidad_check_mision; i++) {
        $('#mision_check_' + i).css('visibility', 'visible');
    }
}
var cantidad_check_vision = $('#cantidad_check_vision').val();
for (var i = 1; i <= cantidad_check_vision; i++) {
    $('#vision_check_' + i).css('visibility', 'visible');
}

function cantidadCheckVision() {
    for (var i = 1; i <= 3; i++) {
        $('#vision_check_' + i).css('visibility', 'hidden');
    }
    var cantidad_check_vision = $('#cantidad_check_vision').val();
    for (var i = 1; i <= cantidad_check_vision; i++) {
        $('#vision_check_' + i).css('visibility', 'visible');
    }
}
var cantidad_check_objetivo = $('#cantidad_check_objetivo').val();
for (var i = 1; i <= cantidad_check_objetivo; i++) {
    $('#objetivo_check_' + i).css('visibility', 'visible');
}

function cantidadCheckObjetivo() {
    for (var i = 1; i <= 3; i++) {
        $('#objetivo_check_' + i).css('visibility', 'hidden');
    }
    var cantidad_check_objetivo = $('#cantidad_check_objetivo').val();
    for (var i = 1; i <= cantidad_check_objetivo; i++) {
        $('#objetivo_check_' + i).css('visibility', 'visible');
    }
}
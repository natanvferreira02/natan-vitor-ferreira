$(document).ready(function() {
    const tabelaIpend = $('#tabelaIpend');

    tabelaIpend.DataTable().clear().destroy();

    tabelaIpend.DataTable({
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json"
        }
    });


});
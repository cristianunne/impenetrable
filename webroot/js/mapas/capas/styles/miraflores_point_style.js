var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});

function style_miraflores_0_0() {
    return {
        interactive: true,
    }
}

function tooltip_miraflores_point(feature) {

    let layer = feature;
    let popupContent_2 = '<strong>' + layer.properties.Nombre.toString() + '</strong>';
    return popupContent_2;
}


function showPopupMirafloresPOI(feature)
{
    getDataFromMirafloresPOI(feature);
}

function getDataFromMirafloresPOI(feature)
{
    //console.log(feature);
    let id = feature.target.feature.properties.fid;
    let id_loc = feature.target.feature.properties.localidad;

    //Hago la consulta jquery, pero espero el resultado para seguir
    let url = 'getDataPOIById';
    $.ajax({

        type: "POST",
        async: true,
        url: url,
        data: {'id' : id, 'id_loc' : id_loc},
        beforeSend: function (xhr) { // Add this line
            xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
            //Debo mostrar un loading

        },

    }) .done(function( data ) {
        console.log(data);
        //create popup with information
        createdPopup(feature, data);

    })  .fail(function() {
        alert( "error" );
    });
}

function createdPopup(feature, data)
{
    let layer = feature.target;
    //console.log(layer);

    let title = "<h5 style='text-align: center; color: #0c4128;'>" + layer.feature.properties.Nombre.toString() +  "</h5>"
    let resumen = "<p style='text-align: justify;'>" + data[0].resumen.toString() +  "</p>"
    let img = "<div style='width: 100%; height: 200px; display: initial;'><img style='filter: saturate(180%); max-height: 275px; display: block; margin: 0 auto;' class='img-thumbnail' src='" +  data[0].path.toString() +"' alt='Monumento a la Bandera'></img></div>";

    let popupContent = title + resumen + img;
    layer.bindPopup(popupContent, {maxHeight: 400, offset: L.point(5, 67), className: 'popup-impenetrable-resumen'}).openPopup();


}




function onEachFeatureMirafloresPoint(feature, layer)
{
    layer.on({
        click: null,
        mouseover: showPopupMirafloresPOI
    });
    let popupContent_ = tooltip_miraflores_point(feature);

    //layer.bindPopup('<h1>'+feature.properties.desc_texto+ '</p>');

    //layer.bindPopup(popupContent_, {maxHeight: 400, offset: L.point(5, 67)});

    layer.bindTooltip("<div style=''>" + popupContent_ + "</></div>",
        {
            direction: 'right',
            permanent: false,
            sticky: true,
            offset: [10, 0],
            opacity: 0.75,
            className: 'leaflet-tooltip'
        }).openTooltip();

}

var treeIcon = L.icon({
    //iconUrl: '../webroot/img/icons/tree.png',
    iconUrl: '../webroot/img/icons/SN_LP_Flora.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var greenIcon = L.icon({
    //iconUrl: '../webroot/img/icons/hoja.png',
    iconUrl: '../webroot/img/icons/SN_CA_Lagunas.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var areaNaturalIcon = L.icon({
    iconUrl: '../webroot/img/icons/hoja.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var escuelaIcon = L.icon({
    //iconUrl: '../webroot/img/icons/colegio.png',
    iconUrl: '../webroot/img/icons/SC_ARQ_Escuelas.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var greenSpaceIcon = L.icon({
    //iconUrl: '../webroot/img/icons/parque.png',
    iconUrl: '../webroot/img/icons/SC_ARQ_Plazas.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var monumentosIcon = L.icon({
    //iconUrl: '../webroot/img/icons/monumento.png',
    iconUrl: '../webroot/img/icons/SC_ARQ_Monumentos.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var gobiernoIcon = L.icon({
    //iconUrl: '../webroot/img/icons/gobierno.png',
    iconUrl: '../webroot/img/icons/SC_ARQ_Adminitracion.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var deporteIcon = L.icon({
    //iconUrl: '../webroot/img/icons/deporte.png',
    iconUrl: '../webroot/img/icons/RTC_CCT_Centros_Deportivos.png',
    iconSize:     [35, 42], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var argentinaFlagIcon = L.icon({
    iconUrl: '../webroot/img/icons/argentina_flag.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var comercioIcon = L.icon({
    //iconUrl: '../webroot/img/icons/tienda.png',
    iconUrl: '../webroot/img/icons/MC_AyA_Cesteria.png',
    iconSize:     [42, 42], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var comercioApicultorIcon = L.icon({
    //iconUrl: '../webroot/img/icons/tienda_abeja.png',
    iconUrl: '../webroot/img/icons/RTC_EA_Agricultura.png',
    iconSize:     [35, 42], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var malvinasIcon = L.icon({
    iconUrl: '../webroot/img/icons/malvinas.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var parajeIndIcon = L.icon({
    //iconUrl: '../webroot/img/icons/maloca.png',
    iconUrl: '../webroot/img/icons/SC_Parajes.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});


var layer_miraflores_point = new L.geoJson(miraflores_point, {
    attribution: '',
    interactive: false,
    minZoom: 10,
    dataVar: 'miraflores_point',
    layerName: 'layer_miraflores_point',
    onEachFeature: onEachFeatureMirafloresPoint,
    pointToLayer: function (feature, latlng) {
        var context = {
            feature: feature,
            variables: {}
        };
        //return L.circleMarker(latlng, style_localidades_0_0(feature));
        //console.log(feature.properties.categoria);
        switch (feature.properties.categoria) {
            case 1:
                return L.marker(latlng, {icon: treeIcon});
            case 2:
                return L.marker(latlng, {icon: greenIcon});
            case 3:
                return L.marker(latlng, {icon: escuelaIcon});
            case 4:
                return L.marker(latlng, {icon: greenSpaceIcon});
            case 5:
                return L.marker(latlng, {icon: monumentosIcon});
            case 6:
                return L.marker(latlng, {icon: gobiernoIcon});
            case 7:
                return L.marker(latlng, {icon: deporteIcon});
            case 8:
                return L.marker(latlng, {icon: comercioIcon});
            case 9:
                return L.marker(latlng, {icon: argentinaFlagIcon});
            case 10:
                return L.marker(latlng, {icon: comercioApicultorIcon});
            case 11:
                return L.marker(latlng, {icon: malvinasIcon});
            case 12:
                return L.marker(latlng, {icon: parajeIndIcon});
        }
    },
});


// LISTADO DE ICONOS //

// Acontecimientos Programados //
var ap_eventos = L.icon({
    iconUrl: '../webroot/img/icons/AP_Eventos.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var ap_fiestas = L.icon({
    iconUrl: '../webroot/img/icons/AP_Fiestas.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});


// Manifestaciones Culturales //
var mc_aya_alfareria = L.icon({
    iconUrl: '../webroot/img/icons/MC_AyA_Alfareria.png',
    iconSize:     [42, 42], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var mc_aya_cesteria = L.icon({
    iconUrl: '../webroot/img/icons/MC_AyA_Cesteria.png',
    iconSize:     [42, 42], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var mc_aya_escultura_carpinteria = L.icon({
    iconUrl: '../webroot/img/icons/MC_AyA_Escultura_Carpinteria.png',
    iconSize:     [42, 42], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var mc_aya_alfareria = L.icon({
    iconUrl: '../webroot/img/icons/MC_AyA_Alfareria.png',
    iconSize:     [42, 42], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var mc_g_dulces_tipicos = L.icon({
    iconUrl: '../webroot/img/icons/MC_G_Dulces_Tipicos.png',
    iconSize:     [42, 42], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

// Realizaciones Técnicas y Científicas //
var rtc_cct_centros_deposrtivos = L.icon({
    iconUrl: '../webroot/img/icons/RTC_CCT_Centros_Deportivos.png',
    iconSize:     [35, 42], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var rtc_ea_agricultura = L.icon({
    iconUrl: '../webroot/img/icons/RTC_EA_Agricultura.png',
    iconSize:     [35, 42], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var rtc_ea_ganaderia = L.icon({
    iconUrl: '../webroot/img/icons/RTC_EA_Ganaderia.png',
    iconSize:     [35, 42], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var rtc_ei_fabricas = L.icon({
    iconUrl: '../webroot/img/icons/RTC_EI_Fabricas.png',
    iconSize:     [35, 42], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

// Sitios Culturales //
var sc_arq_administracion = L.icon({
    iconUrl: '../webroot/img/icons/SC_ARQ_Adminitracion.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var sc_arq_campings = L.icon({
    iconUrl: '../webroot/img/icons/SC_ARQ_Campings.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var sc_arq_escuelas = L.icon({
    iconUrl: '../webroot/img/icons/SC_ARQ_Escuelas.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var sc_arq_iglesias = L.icon({
    iconUrl: '../webroot/img/icons/SC_ARQ_Iglesias.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var sc_arq_miradores = L.icon({
    iconUrl: '../webroot/img/icons/SC_ARQ_Miradores.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var sc_arq_monumentos = L.icon({
    iconUrl: '../webroot/img/icons/SC_ARQ_Monumentos.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var sc_arq_paseos = L.icon({
    iconUrl: '../webroot/img/icons/SC_ARQ_Paseos.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var sc_arq_plazas = L.icon({
    iconUrl: '../webroot/img/icons/SC_ARQ_Plazas.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var sc_lh_complejo_historico = L.icon({
    iconUrl: '../webroot/img/icons/SC_LH_Complejo_Historico.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var sc_museos = L.icon({
    iconUrl: '../webroot/img/icons/SC_Museos.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var sc_parajes = L.icon({
    iconUrl: '../webroot/img/icons/SC_Parajes.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

// Sitios Naturales //
var sn_ap_parques_nacionales = L.icon({
    iconUrl: '../webroot/img/icons/SN_AP_Parques_Nacionales.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var sn_ap_parques_provinciales = L.icon({
    iconUrl: '../webroot/img/icons/SN_AP_Parques_Provinciales.png',
    iconSize:     [42, 42], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var comercioApicultorIcon = L.icon({
    iconUrl: '../webroot/img/icons/RTC_EA_Agricultura.png',
    iconSize:     [35, 42], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var sn_c_playas = L.icon({
    iconUrl: '../webroot/img/icons/SN_C_Playas.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var sn_ca_lagunas = L.icon({
    iconUrl: '../webroot/img/icons/SN_CA_Lagunas.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var sn_lp_flora = L.icon({
    iconUrl: '../webroot/img/icons/SN_LP_Flora.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

// Servicios //
var s_alojamientos = L.icon({
    iconUrl: '../webroot/img/icons/S_Alojamientos.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var s_centros_salud = L.icon({
    iconUrl: '../webroot/img/icons/S_Centros_Salud.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var s_gasolineras = L.icon({
    iconUrl: '../webroot/img/icons/S_Gasolineras.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});

var s_restaurantes = L.icon({
    iconUrl: '../webroot/img/icons/S_Restaurantes.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor gobierno
    className: 'animated-icon'
});
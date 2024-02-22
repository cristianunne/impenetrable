
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

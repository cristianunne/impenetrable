var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});

function style_comandanciafrias_0_0() {
    return {
        interactive: true,
    }
}

function tooltip_comandanciafrias_point(feature) {

    let layer = feature;
    let popupContent_2 = '<strong>' + layer.properties.Nombre.toString() + '</strong>';
    return popupContent_2;
}


function showPopupComandanciafriasPOI(feature)
{
    getDataFromComandanciafriasPOI(feature);
}

function getDataFromComandanciafriasPOI(feature)
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

    let title = "<h5 style='text-align: center; color: #0c4128;'>" + layer.feature.properties.nombre.toString() +  "</h5>"
    let resumen = "<p style='text-align: justify;'>" + data[0].resumen.toString() +  "</p>"
    let img = "<div style='width: 100%; height: 200px; display: initial;'><img style='filter: saturate(180%); max-height: 275px; display: block; margin: 0 auto;' class='img-thumbnail' src='" +  data[0].path.toString() +"' alt='Monumento a la Bandera'></img></div>";

    let popupContent = title + resumen + img;
    layer.bindPopup(popupContent, {maxHeight: 400, offset: L.point(5, 67), className: 'popup-impenetrable-resumen'}).openPopup();


}




function onEachFeaturegetDataFromComandanciafriasPOIPoint(feature, layer)
{
    layer.on({
        click: null,
        mouseover: showPopupComandanciafriasPOI()
    });
    let popupContent_ = tooltip_comandanciafrias_point(feature);

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

var artesaniasIcon = L.icon({
    //iconUrl: '../webroot/img/icons/ceramica.png',
    iconUrl: '../webroot/img/icons/MC_AyA_Alfareria.png',
    iconSize:     [42, 42], // size of the icon
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
var miradorIcon = L.icon({
    //iconUrl: '../webroot/img/icons/observacion.png',
    iconUrl: '../webroot/img/icons/SC_ARQ_Miradores.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var greenSpaceIcon = L.icon({
    iconUrl: '../webroot/img/icons/SN_AP_Parques_Provinciales.png',
    iconSize:     [45, 45], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});


var misionIcon = L.icon({
    //iconUrl: '../webroot/img/icons/iglesia.png',
    iconUrl: '../webroot/img/icons/SC_ARQ_Monumentos.png',
    iconSize:     [35, 35], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});

var casaParqueIcon = L.icon({
    iconUrl: '../webroot/img/icons/SC_ARQ_Adminitracion.png',
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


var layer_comandancia_frias_point = new L.geoJson(comandancia_frias_point, {
    attribution: '',
    interactive: false,
    minZoom: 10,
    dataVar: 'layer_comandancia_frias_point',
    layerName: 'layer_comandancia_frias_point',
    //onEachFeature: onEachFeatureVillariobermejitoPoint,
    pointToLayer: function (feature, latlng) {
        var context = {
            feature: feature,
            variables: {}
        };
        //return L.circleMarker(latlng, style_nuevapompeya_0_0(feature));
        //console.log(feature.properties.categoria);
        switch (feature.properties.categoria) {
            case 1:
                return L.marker(latlng, {icon: greenIcon});
            case 2:
                return L.marker(latlng, {icon: artesaniasIcon});
            case 3:
                return L.marker(latlng, {icon: misionIcon});
            case 4:
                return L.marker(latlng, {icon: miradorIcon});
            case 5:
                return L.marker(latlng, {icon: parajeIndIcon});
            case 6:
                return L.marker(latlng, {icon: greenSpaceIcon});
            case 7:
                return L.marker(latlng, {icon: casaParqueIcon});
        }
    },
});


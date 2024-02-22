



function pop_localidades_point(feature) {

    let layer = feature.target;
    //console.log(layer);

    let popupContent = '<table>\
                    <tr>\
                        <td colspan="2"><strong><br />' + (layer.feature.properties['name'] !== null ? autolinker.link(layer.feature.properties['name']) : '')
        + '</strong></td>\
                    </tr>\
                </table>';
    layer.bindPopup(popupContent, {maxHeight: 400, offset: L.point(5, 67), className: 'popup-impenetrable'}).openPopup();
}



function zoomToFeature(e) {
    //console.log(e.target.feature.geometry.coordinates);
    let latlong = e.target.feature.geometry.coordinates;

    map.flyTo([latlong[1], latlong[0]], 12);

    let data = getDataFromLocalidadId(e.target);
    data.then((data)=>{

        showLocalidadDescription(data);

        //showPanelInfo();

    })



}

function closePopupLocalidades(e)
{
    e.target.closePopup();
}


function onEachFeatureLocPoint(feature, layer)
{
    layer.on({
        mouseover: pop_localidades_point,
        mouseout: closePopupLocalidades,
        click: zoomToFeature
    });
}



function showLocalidadDescription(data)
{
    let tab_loc = $("#tab_localidad_description");

    //console.log(data);

    tab_loc.empty();

    tab_loc.append(data[0].descripcion);

}


function showPanelInfo()
{

    $("#tab-1").removeClass("active");
    $("#tab-2").addClass("active");
}


var icon_custom = L.icon({
    //iconUrl: '../webroot/img/icons/location.png',
    iconUrl: '../webroot/img/icons/Custom_Locations.png',
    iconSize:     [50, 50], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 4],  // the same for the shadow
    popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
    className: 'animated-icon'
});



var layer_localidades_point = new L.geoJson(localidades_point, {
    attribution: '',
    interactive: false,
    dataVar: 'localidades_point',
    layerName: 'layer_localidades_point',
    onEachFeature: onEachFeatureLocPoint,
    pointToLayer: function (feature, latlng) {
        var context = {
            feature: feature,
            variables: {}
        };
        //return L.circleMarker(latlng, style_localidades_0_0(feature));
        return L.marker(latlng, {icon: icon_custom});
    },
});

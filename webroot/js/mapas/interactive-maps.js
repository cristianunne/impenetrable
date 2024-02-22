





var bounds_group = new L.featureGroup([]);
function setBounds() {
}


/*L.tileLayer('https://services.arcgisonline.com/arcgis/rest/services/NatGeo_World_Map/MapServer/tile/{z}/{y}/{x}',
    {attribution: '&copy; <a href="#">NatGeo</a> contributors'}).addTo(map);*/

/*L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
    maxZoom: 17,
    attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
}).addTo(map);*/






//ES la reserva
map.addLayer(layer_area_de_estudio_1);
//LOcalidades point son las ciudades relevadas
//Tengo que traer la info tmb para construir
//Utilizo localidades?point json




function viewMoreBtnLocalidad(bnt)
{

    let btn_control = $(bnt);
    let id_loc = btn_control.attr('attr');

    //get Localidades Layer by id
    //console.log(layer_localidades_point.getLayers());

    layer_localidades_point.getLayers().forEach(function(layer, index){

        if(layer.feature.properties.fid.toString() === id_loc.toString())
        {
            flyToPointByLayer(layer);

            getDataFromLocalidad(layer);

            showPointOfInteresInPanel(id_loc);
        }

    })

}

function isMobile(window)
{
  $(window).on("resize", function(){
        if($(window).width() < 740){
            $('#sidebar').addClass('collapsed');
        }
        else{
            $('#sidebar').removeClass('collapsed');
            $('#tab-1').addClass('active');
        }
    })
};

function changeColorBoxLocalidad(id)
{

}

function showPointOfInteresInPanel(id_loc)
{

    $("#tab_POI").empty();
    //CArga el panel izquierdo con los puntos de interes
    if(id_loc === '1'){
        layer_miraflores_point.getLayers().forEach(function(layer, index){

            createLabelLeft(layer.feature.properties.Nombre.toString(), id_loc, layer.feature.properties.fid);
        })


    } else if(id_loc === '2'){

        layer_nuevapompeya_point.getLayers().forEach(function(layer, index){

            createLabelLeft(layer.feature.properties.Nombre.toString(), id_loc, layer.feature.properties.fid);
        })
    }
}

function createLabelLeft(title, idloc, id_layer)
{
        let div_container = '<div class="div-label-left-container">' +
                                '<div>' +
                                    '<div class="div-img">' +
                                        ' <img src="../webroot/img/icons/MC_AyA_Cesteria.png" alt="img" class="img-label">' +
                                    '</div>' +
                                    ' <span class="span-name">' + title + '</span>' +
                                    '<div class="div-btn">' +
                                        '<button type="button" class="btn btn-success px-3" attr="' + idloc + '" attr2="' + id_layer +'" onclick="showLayerPOI(this)"><i class="fas fa-eye" aria-hidden="true"></i>' +
                                        '</button>' +
                                    '</div>' +
                                ' </div>' +
                                '</div>';

        $("#tab_POI").append(div_container);


}

function showLayerPOI(bnt)
{
    let btn_control = $(bnt);
    let id_loc = btn_control.attr('attr');
    let id_layer = btn_control.attr('attr2');


    if(id_loc === '1'){
        layer_miraflores_point.getLayers().forEach(function(layer, index){

            if(layer.feature.properties.fid.toString() === id_layer.toString())
            {
                flyToPointByLayerPOI(layer);
                return true;
            }



        })


    } else if(id_loc === '2'){

        layer_nuevapompeya_point.getLayers().forEach(function(layer, index){

            if(layer.feature.properties.fid.toString() === id_layer.toString())
            {
                flyToPointByLayerPOI(layer);
                return true;

            }

        })
    }  else if(id_loc === '5'){

        layer_villa_rio_bermejito_point.getLayers().forEach(function(layer, index){

            if(layer.feature.properties.fid.toString() === id_layer.toString())
            {
                flyToPointByLayerPOI(layer);
                return true;

            }

        })
    }  else if(id_loc === '6'){

        layer_fortin_lavalle_point.getLayers().forEach(function(layer, index){

            if(layer.feature.properties.fid.toString() === id_layer.toString())
            {
                flyToPointByLayerPOI(layer);
                return true;

            }

        })
    }


}

/*
     <div className="div-label-left-container">
        <div>
            <div className="div-img">
                <img src="../img/icons/argentina_flag.png" alt="img" className="img-label">
            </div>
            <span className="span-name">dhfishdfpihasdigdabfhafbhdfnnnnnnnnnnnnnnnndshdfh shhs</span>

            <div className="div-btn">
                <button type="button" className="btn btn-success px-3"><i className="fas fa-eye" aria-hidden="true"></i>
                </button>
            </div>

        </div>
    </div>


    */


function flyToPointByLayer(layer){


    let latlong = layer.feature.geometry.coordinates;

    map.flyTo([latlong[1], latlong[0]], 12);

}

function flyToPointByLayerPOI(layer){


    let latlong = layer.feature.geometry.coordinates;

    map.flyTo([latlong[1], latlong[0]], 19);

}


function drawLocalidadesToSidePane()
{

}



map.addLayer(layer_localidades_point);



map.on('zoomend', function (e) {
    if(map.getZoom() >= 12){
        map.addLayer(layer_miraflores_point);
        //ELimino los puntos de la localidad
        map.removeLayer(layer_localidades_point);

        map.addLayer(layer_nuevapompeya_point);

        map.addLayer(layer_villa_rio_bermejito_point);

        map.addLayer(layer_fortin_lavalle_point);
        //ELimino los puntos de la localidad

    } else {
        map.removeLayer(layer_miraflores_point);
        map.removeLayer(layer_nuevapompeya_point);
        map.removeLayer(layer_villa_rio_bermejito_point);
        map.removeLayer(layer_fortin_lavalle_point);
        map.addLayer(layer_localidades_point);
    }
});



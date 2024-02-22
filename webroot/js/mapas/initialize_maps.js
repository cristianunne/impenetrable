

var hash = new L.Hash(map);
map.attributionControl.setPrefix('<a href="https://iighi.conicet.gov.ar/" target="_blank">IIGHI</a> &middot; ' +
    '<a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot;');
var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});

//var nuevaPompeyaPoinLayer;
//var mirafloresPointLayer;



//AGrego la capa de la reserva
map.addLayer(layer_area_de_estudio_1);

//INicializo con las localidades
getDataLocalidades().then((data) => {
    //si trajo los datos de las localidades lo agrego al mapa
    map.addLayer(layer_localidades_point);
    //console.log(layer_localidades_point);
})


const layersInitialize = async () =>{

    //voy a agregar en forma de prueba
    const nuevaPompeyaPOIClass = new LayersPOIClass(nueva_pompeya_point, map);
    let nuevaPompeyaPoinLayer = await nuevaPompeyaPOIClass.createLayer(2, 'nuevapompeya_point', 'layer_nuevapompeya_point');
    //console.log(nuevaPompeyaPoinLayer);

    const mirafloresPOIClass = new LayersPOIClass(miraflores_point, map);
    let mirafloresPointLayer = await mirafloresPOIClass.createLayer(1, 'miraflores_point', 'layer_miraflores_point');


    const comandanciaPOIClass = new LayersPOIClass(comandancia_frias_point, map);
    let comandanciaPointLayer = await comandanciaPOIClass.createLayer(3, 'comandancia_frias_point', 'layer_comandancia_frias_point');

    const elsauzalitoPOIClass = new LayersPOIClass(el_sauzalito_point, map);
    let elsauzalitoPointLayer = await elsauzalitoPOIClass.createLayer(4, 'el_sauzalito_point', 'layer_el_sauzalito_point');

    const villariobermejitoPOIClass = new LayersPOIClass(villa_rio_bermejito_point, map);
    let villariobermejitoPointLayer = await villariobermejitoPOIClass.createLayer(5, 'villa_rio_bermejito_point', 'layer_villa_rio_bermejito_point');

    const fortinlavallePOIClass = new LayersPOIClass(fortin_lavalle_point, map);
    let fortinlavallePointLayer = await fortinlavallePOIClass.createLayer(6, 'fortin_lavalle_point', 'layer_fortin_lavalle_point');

    //console.log(fortinlavallePointLayer);

    //map.addLayer(mirafloresPointLayer);

    mapOn(nuevaPompeyaPoinLayer, mirafloresPointLayer, comandanciaPointLayer, elsauzalitoPointLayer, villariobermejitoPointLayer, fortinlavallePointLayer);

};




const mapOn = (nuevaPompeyaPoinLayer, mirafloresPointLayer, comandanciaPointLayer, elsauzalitoPointLayer, villariobermejitoPointLayer, fortinlavallePointLayer) => {

    map.on('zoomend', function(event) {
        var bounds = event.target.getBounds();

        try {
            if (bounds.overlaps(nuevaPompeyaPoinLayer.getBounds())) {
                console.log('Pompeyaaaaaadasdjiashdashdhiasd');
                if(map.getZoom() >= 10){
                    //COnsulto si la capa no esta agregada y la agrego
                    if(!map.hasLayer(nuevaPompeyaPoinLayer))
                    {
                        map.addLayer(nuevaPompeyaPoinLayer);

                        //agrego la info al panle
                        let data = getDataFromLocalidadById(2);
                        data.then((data)=>{

                            showLocalidadDescription(data);

                        })



                    }

                } else {
                    map.removeLayer(nuevaPompeyaPoinLayer);
                    let tab_loc = $("#tab_localidad_description");
                    tab_loc.empty();
                }


            }
        } catch (e) {

        }

        try {
            if (bounds.overlaps(mirafloresPointLayer.getBounds())) {

                console.log('miraflores');

                if(map.getZoom() >= 10){
                    //COnsulto si la capa no esta agregada y la agrego
                    if(!map.hasLayer(mirafloresPointLayer))
                    {
                        map.addLayer(mirafloresPointLayer);
                        //agrego la info al panle
                        let data = getDataFromLocalidadById(1);
                        data.then((data)=>{

                            showLocalidadDescription(data);

                        })

                    }

                } else {
                    map.removeLayer(mirafloresPointLayer);
                    let tab_loc = $("#tab_localidad_description");
                    tab_loc.empty();
                }

            }

        } catch (e) {

        }


        try {
            if (bounds.overlaps(comandanciaPointLayer.getBounds())) {

                console.log('comandancia');

                if(map.getZoom() >= 10){
                    //COnsulto si la capa no esta agregada y la agrego
                    if(!map.hasLayer(comandanciaPointLayer))
                    {
                        map.addLayer(comandanciaPointLayer);
                        //agrego la info al panle
                        let data = getDataFromLocalidadById(3);
                        data.then((data)=>{

                            showLocalidadDescription(data);

                        })

                    }

                } else {
                    map.removeLayer(comandanciaPointLayer);
                    let tab_loc = $("#tab_localidad_description");
                    tab_loc.empty();
                }

            }

        } catch (e) {

        }

        try {
            if (bounds.overlaps(elsauzalitoPointLayer.getBounds())) {

                console.log('El Sauzalito');

                if(map.getZoom() >= 10){
                    //COnsulto si la capa no esta agregada y la agrego
                    if(!map.hasLayer(elsauzalitoPointLayer))
                    {
                        map.addLayer(elsauzalitoPointLayer);
                        //agrego la info al panle
                        let data = getDataFromLocalidadById(4);
                        data.then((data)=>{

                            showLocalidadDescription(data);

                        })

                    }

                } else {
                    map.removeLayer(elsauzalitoPointLayer);
                    let tab_loc = $("#tab_localidad_description");
                    tab_loc.empty();
                }

            }

        } catch (e) {

        }


        try {
            if (bounds.overlaps(villariobermejitoPointLayer.getBounds())) {

                console.log('Villa Rio Bermejito');

                if(map.getZoom() >= 10){
                    //COnsulto si la capa no esta agregada y la agrego
                    if(!map.hasLayer(villariobermejitoPointLayer))
                    {
                        map.addLayer(villariobermejitoPointLayer);
                        //agrego la info al panle
                        let data = getDataFromLocalidadById(5);
                        data.then((data)=>{

                            showLocalidadDescription(data);

                        })

                    }

                } else {
                    map.removeLayer(villariobermejitoPointLayer);
                    let tab_loc = $("#tab_localidad_description");
                    tab_loc.empty();
                }

            }

        } catch (e) {

        }


        try {
            if (bounds.overlaps(fortinlavallePointLayer.getBounds())) {

                console.log('Fortin Lavalle');

                if(map.getZoom() >= 10){
                    //COnsulto si la capa no esta agregada y la agrego
                    if(!map.hasLayer(fortinlavallePointLayer))
                    {
                        map.addLayer(fortinlavallePointLayer);
                        //agrego la info al panle
                        let data = getDataFromLocalidadById(6);
                        data.then((data)=>{

                            showLocalidadDescription(data);

                        })

                    }

                } else {
                    map.removeLayer(fortinlavallePointLayer);
                    let tab_loc = $("#tab_localidad_description");
                    tab_loc.empty();
                }

            }

        } catch (e) {

        }




    });

}


function viewMoreBtnLocalidad(bnt)
{

    //console.log(nueva_pompeya_point);

    let btn_control = $(bnt);
    let id_loc = btn_control.attr('attr');
    console.log(id_loc);

    //get Localidades Layer by id
    //console.log(layer_localidades_point.getLayers());

    layer_localidades_point.getLayers().forEach(function(layer, index){

        if(layer.feature.properties.fid.toString() === id_loc.toString())
        {
            flyToPointByLayer(layer);

            let data = getDataFromLocalidadById(layer.feature.properties.fid.toString());
            data.then((data)=>{

                showLocalidadDescription(data);

            })

            //traigo los puntos de la localidad
            let dat_point = getDataPOI(layer.feature.properties.fid.toString());


            let tab_items = document.getElementById('tab_POI');
            tab_items.innerHTML = "";


            dat_point.then((data)=> {
                let divs;
                data.forEach(obj => {
                    //console.log(obj.name);
                    divs = createLabelLeft(obj.name, obj.localidad, obj.id_punto, obj.subtipo.icon);
                    tab_items.innerHTML = tab_items.innerHTML + divs;


                });

            });

               //llamo al metodo que construye los itesm



            //alert("que muestre texto por ahora");

            //getDataFromLocalidad(layer);

            //showPointOfInteresInPanel(id_loc);
        }

    })

}


function createLabelLeft(title, idloc, id_layer, logo)
{

    let element =
       '<div class="d-flex" style="height: 70px; background-color: #dcdcdc; margin-bottom: 15px; padding: 5px;">' +
        '<div style="align-self: center; text-align: center; width: 15%;"> ' +
            '<img src="../img/logos/' + logo + '" alt="" width="50" height="50"/>' +
        '</div>' +
            '<div style="align-self: center; width: 70%; text-align: center;"> ' +   title + ' </div>' +
            '<div style="align-self: center; width: 15%; text-align: center;"> ' +
                '<button type="button" class="btn btn-success px-3" attr="' + idloc + '" attr2="' + id_layer +'" onclick="showLayerPOI(this)"><i class="fas fa-eye" aria-hidden="true"></i>' +
                '</button>' +
            '</div>' +
        '</div>';

    return element;

    /*let div_container = '<div class="div-label-left-container">' +
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
        '</div>';*/



}


function showLayerPOI(bnt)
{
    let btn_control = $(bnt);
    let id_loc = btn_control.attr('attr');
    let id_layer = btn_control.attr('attr2');

    if(id_loc === '1'){

        let layer_miraflores_point = new L.geoJson(miraflores_point);
        layer_miraflores_point.getLayers().forEach(function(layer, index){

            if(layer.feature.properties.punto.toString() === id_layer.toString())
            {
                flyToPointByLayerPOI(layer);
                return true;
            }



        })


    } else if(id_loc === '2'){
        let layer_nuevapompeya_point = new L.geoJson(nueva_pompeya_point);
       // console.log(layer_nuevapompeya_point.getLayers());
        layer_nuevapompeya_point.getLayers().forEach(function(layer, index){

            if(layer.feature.properties.punto.toString() === id_layer.toString())
            {
                flyToPointByLayerPOI(layer);
                return true;

            }

        })
    } else if(id_loc === '3'){
        let layer_comandancia_frias_point = new L.geoJson(comandancia_frias_point);
        // console.log(layer_nuevapompeya_point.getLayers());
        layer_comandancia_frias_point.getLayers().forEach(function(layer, index){

            if(layer.feature.properties.punto.toString() === id_layer.toString())
            {
                flyToPointByLayerPOI(layer);
                return true;

            }

        })
    }   else if(id_loc === '4'){
        let layer_el_sauzalito_point = new L.geoJson(el_sauzalito_point);
        layer_el_sauzalito_point.getLayers().forEach(function(layer, index){

            if(layer.feature.properties.punto.toString() === id_layer.toString())
            {
                flyToPointByLayerPOI(layer);
                return true;

            }

        })
    }
    else if(id_loc === '5'){
        let layer_villa_rio_bermejito_point = new L.geoJson(villa_rio_bermejito_point);
        layer_villa_rio_bermejito_point.getLayers().forEach(function(layer, index){

            if(layer.feature.properties.punto.toString() === id_layer.toString())
            {
                flyToPointByLayerPOI(layer);
                return true;

            }

        })
    }  else if(id_loc === '6'){
        let layer_fortin_lavalle_point = new L.geoJson(fortin_lavalle_point);

        console.log(layer_fortin_lavalle_point);
        layer_fortin_lavalle_point.getLayers().forEach(function(layer, index){

            if(layer.feature.properties.punto.toString() === id_layer.toString())
            {
                flyToPointByLayerPOI(layer);
                return true;

            }

        })
    }


}

function flyToPointByLayerPOI(layer){

    console.log(layer);

    let latlong = layer.feature.geometry.coordinates;

    map.flyTo([latlong[1], latlong[0]], 16);

}

function flyToPointByLayer(layer){


    let latlong = layer.feature.geometry.coordinates;

    map.flyTo([latlong[1], latlong[0]], 12);

}



$(function () {

    let window_ = window;

    if($(window_).width() < 740)
    {
        $('#tab-1').addClass('active');
        $('#sidebar').removeClass('collapsed');
    }


    $(window_).on("resize", function(){
        if($(window_).width() > 740){
            $('#sidebar').addClass('collapsed');
        }
        else{
            $('#sidebar').removeClass('collapsed');
            $('#tab-1').addClass('active');
        }
    });
});




$(function (){
    console.log();
});



layersInitialize();











/*
map.on('moveend', function(event) {
    var bounds = event.target.getBounds();


    if (bounds.overlaps(nuevaPompeyaPoinLayer.getBounds())) {
        if(map.getZoom() >= 11){
            //COnsulto si la capa no esta agregada y la agrego

            if(!map.hasLayer(nuevaPompeyaPoinLayer))
            {
                map.addLayer(nuevaPompeyaPoinLayer);
            }

        } else {
            map.removeLayer(nuevaPompeyaPoinLayer)
        }

    }

});*/


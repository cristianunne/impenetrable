
class LayersPOIClass {


    constructor(geojson_layer_point, map)
    {

        this.geojson_layer_point = geojson_layer_point;
        this.map = map;


    }


    async createLayer(id_loc, name, name_layer)
    {

        //let layer_ = null;

        //taigo los datos de la base de datos
        const data = await getDataFromPOI(id_loc);
        this.properties = data;


        this.layer_ = await this.drawFeatures( this.properties, name, name_layer);

        return this.layer_;

    }


    async drawFeatures(data, name, name_layer)
    {
        //console.log(data);

        let layer_ = new L.geoJson(this.geojson_layer_point, {
            attribution: '',
            interactive: false,
            minZoom: 10,
            dataVar: name,
            layerName: name_layer,
            onEachFeature: function (feature, layer) {

                layer.addEventListener('mouseover', (e)=>{

                    let autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});

                    let layer = e.target;

                      data.forEach(function (currentValue, index){
                            if(currentValue.id_punto === layer.feature.properties.punto)
                            {
                                console.log(currentValue);

                                let title = "<h5 style='text-align: center; color: #0c4128;'>" + currentValue.name.toString() +  "</h5>"
                                let resumen = "<p style='text-align: justify;'>" + currentValue.resumen.toString() +  "</p>"
                                let img = "<div style='width: 100%; height: 200px; display: initial;'>" +
                                    "<img style='filter: saturate(180%); max-height: 275px; display: block; margin: 0 auto;' class='img-thumbnail' " +
                                    "src='" +  (currentValue.folder.toString() + currentValue.photo.toString()) +"' alt='Monumento a la Bandera'></img></div>";

                                let popupContent = title + resumen + img;
                                layer.bindPopup(popupContent, {maxHeight: 500, offset: L.point(5, 67), className: 'popup-impenetrable-resumen'}).openPopup();


                            }
                      });

                });


                layer.addEventListener('mouseout', (e)=>{
                    e.target.closePopup();
                })


            },
            pointToLayer: function(feature, latlng){

                let id_feature = feature.properties.punto;
                let marker = null;
                //recorro las propiedades y obtengo la que coincide
                data.forEach(function (currentValue, index) {

                    if(currentValue.id_punto === id_feature)
                    {
                        //console.log("categoria: " + currentValue.categorias_idcategorias);
                        //console.log(id_feature);

                        let icon_ = L.icon({
                            //iconUrl: '../webroot/img/icons/hoja.png',
                            iconUrl: currentValue.subtipo.folder + currentValue.subtipo.icon,
                            iconSize:     [35, 35], // size of the icon
                            shadowSize:   [50, 64], // size of the shadow
                            iconAnchor:   [22, 22], // point of the icon which will correspond to marker's location
                            shadowAnchor: [4, 4],  // the same for the shadow
                            popupAnchor:  [-3, -76], // point from which the popup should open relative to the iconAnchor
                            className: 'animated-icon'
                        });
                        marker = L.marker(latlng, {icon: icon_});

                    }

                });
                //console.log(marker);
                return marker;

            }
        });


        return layer_;

    }



}

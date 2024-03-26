
<?= $this->Html->css('leaflet/leaflet.css') ?>
<?= $this->Html->css('mapas/mapas.css') ?>


<?= $this->Html->css('plugins/easy-button.css') ?>

<?= $this->Html->script('leaflet/qgis2web_expressions.js') ?>
<?= $this->Html->script('leaflet/leaflet.js') ?>

<?= $this->Html->script('dist/easy-button.js') ?>

<?= $this->Html->script('leaflet/leaflet.rotatedMarker.js') ?>
<?= $this->Html->script('leaflet/leaflet.pattern.js') ?>
<?= $this->Html->script('leaflet/leaflet-hash.js') ?>
<?= $this->Html->script('leaflet/Autolinker.min.js') ?>
<?= $this->Html->script('leaflet/rbush.min.js') ?>
<?= $this->Html->script('leaflet/labelgun.min.js') ?>
<?= $this->Html->script('leaflet/labels.js') ?>

<?= $this->Html->css('leaflet/leaflet-sidebar.min.css') ?>
<?= $this->Html->script('leaflet/leaflet-sidebar.min.js') ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.css" />
<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.79.0/dist/L.Control.Locate.min.js" charset="utf-8"></script>



<style>

    body{
        margin: 0px !important;
    }

    #map {
        width: 100%;
        height: calc(100vh - 75px);
    }
</style>


<div id="map">



</div>

<script>

    var map = L.map('map', {
        zoomControl:true,
        maxZoom:28,
        minZoom:1,
        center: [-26.062, -61.408],
        zoom: 8
    });


    var home = {
        lat: -26.062,
        lng: -61.408,
        zoom: 7
    };

    L.easyButton('fa-home',function(btn,map){

        map.flyTo([home.lat, home.lng], home.zoom);
    },'Zoom To Home').addTo(map);

    var lc = L.control
        .locate({
            position: "topright",
            strings: {
                title: "Mi Posición"
            }
        })
        .addTo(map);

//sidebar
        var sidebar = L.control.sidebar({
            autopan: false,       // whether to maintain the centered map point when opening the sidebar
            closeButton: false,    // whether t add a close button to the panes
            container: 'sidebar', // the DOM container or #ID of a predefined sidebar container that should be used
            position: 'left',     // left or right
            closeButton: true

        }).addTo(map);

    //agregar panel
        /* add a new panel */
        var panelContent = {
            id: 'tab-1',                     // UID, used to access the panel
            tab: '<i class="fa fa-2x"><img src="../img/icon-interest-point.png" alt="alternatetext" width="40px" height="40px"></i>',  // content can be passed as HTML string,
            pane: '<div class="card">' +
                '<div class="bd-placeholder-img card-img-top"><img class="img-header-card" src="../img/header_loc/miraflores.png" alt="header" width="100%" height="100%" style="filter: saturate(140%);"></div>' +
                '<div class="card-body"><h5 class="card-title" style="color: #198754;">Miraflores</h5>' +
                '\<p class="card-text">Se localiza a unos 308,5 Km. de la ciudad de Resistencia por Ruta Provincial Nº 9.</p>' +
                '<button class="btn btn-success float-right" attr="1" onclick="viewMoreBtnLocalidad(this)"><i class="fas fa-map-marked-alt"></i> Ver más....</button>' +
                '</div></div>' +
                '<div class="card" style="margin-top: 20px;">' +
                '<div class="bd-placeholder-img card-img-top"><img class="img-header-card" src="../img/header_loc/nueva_pompeya.png" alt="header" width="100%" height="100%" style="filter: saturate(140%);"></div>' +
                '<div class="card-body"><h5 class="card-title" style="color: #198754;">Misión Nueva Pompeya</h5>' +
                '\<p class="card-text">Se localiza en el departamento General Güemes a unos 480 kilómetros de la ciudad de Resistencia.</p>' +
                '<button class="btn btn-success float-right" attr="2" onclick="viewMoreBtnLocalidad(this)"><i class="fas fa-map-marked-alt"></i> Ver más....</button>' +
                '</div></div>' +
                '<div class="card" style="margin-top: 20px;">' +
                '<div class="bd-placeholder-img card-img-top"><img class="img-header-card" src="../img/header_loc/comandancia.png" alt="header" width="100%" height="100%" style="filter: saturate(140%);"></div>' +
                '<div class="card-body"><h5 class="card-title" style="color: #198754;">Comandancia Frias</h5>' +
                '\<p class="card-text">Comandancia Frías es una localidad argentina situada en el extremo norte de la Provincia del Chaco, en el departamento General Güemes..</p>' +
                '<button class="btn btn-success float-right" attr="3" onclick="viewMoreBtnLocalidad(this)"><i class="fas fa-map-marked-alt"></i> Ver más....</button>' +
                '</div></div>' +
                '<div class="card" style="margin-top: 20px;">' +
                '<div class="bd-placeholder-img card-img-top"><img class="img-header-card" src="../img/header_loc/fuerte_esperanza.png" alt="header" width="100%" height="100%"></div><div class="card-body"><h5 class="card-title" style="color: #198754;">Fuerte Esperanza</h5><p class="card-text">Se localiza a unos 308,5 Km. de la ciudad de Resistencia por Ruta Provincial Nº 9.</p><!-- Funcion de focus map --><button class="btn btn-success float-right" attr="3" onclick="viewMoreBtnLocalidad(this)"><i class="fas fa-map-marked-alt"></i> Ver más....</button></div></div>' +
                '<div class="card" style="margin-top: 20px;"><div class="bd-placeholder-img card-img-top"><img class="img-header-card" src="../img/header_loc/elsauzalito.png" alt="header" width="100%" height="100%" style="filter: saturate(180%);"> </div>' +
                '<div class="card-body"> <h5 class="card-title" style="color: #198754;">El Sauzalito</h5><p class="card-text">Se localiza a unos 308,5 Km. de la ciudad de Resistencia por Ruta Provincial Nº 9.</p><!-- Funcion de focus map --><button class="btn btn-success float-right" attr="4" onclick="viewMoreBtnLocalidad(this)"><i class="fas fa-map-marked-alt"></i> Ver más....</button></div></div>' +
                '<div class="card" style="margin-top: 20px;"><div class="bd-placeholder-img card-img-top"><img class="img-header-card" src="../img/header_loc/vrbermejito.png" alt="header" width="100%" height="100%" style="filter: saturate(180%);"></div><div class="card-body"><h5 class="card-title" style="color: #198754;">Villa Rio Bermejito</h5><p class="card-text">Se localiza a unos 308,5 Km. de la ciudad de Resistencia por Ruta Provincial Nº 9.</p><!-- Funcion de focus map --> <button class="btn btn-success float-right" attr="5" onclick="viewMoreBtnLocalidad(this)"><i class="fas fa-map-marked-alt"></i> Ver más....</button></div> </div>' +
                '<div class="card" style="margin-top: 20px;"><div class="bd-placeholder-img card-img-top">' +
                '<img class="img-header-card" src="../img/header_loc/fortin_lavalle.png" alt="header" width="100%" height="100%"></div>' +
                '<div class="card-body"><h5 class="card-title" style="color: #198754;">Fortin Lavalle</h5>' +
                '<p class="card-text">Fortín Lavalle es una localidad argentina situada en el departamento General Güemes de la Provincia del Chaco. Depende administrativamente del municipio de Villa Río Bermejito, de cuyo centro urbano dista unos 10 km. Cuenta con una importante población aborigen.</p><!-- Funcion de focus map -->' +
                '<button class="btn btn-success float-right" attr="6" onclick="viewMoreBtnLocalidad(this)"><i class="fas fa-map-marked-alt"></i> Ver más....</button></div>' +
                '</div>',        // DOM elements can be passed, too
            title: 'Lugares',              // an optional pane header
            position: 'top',                  // optional vertical alignment, defaults to 'top'
            closeButton: false,
        };
        sidebar.addPanel(panelContent);

        var panelContent2 = {
            id: 'tab-2',                     // UID, used to access the panel
            tab: '<i class="fa fa-2x"><img src="../img/icon-2.png" alt="alternatetext" width="40px" height="40px"></i>',  // content can be passed as HTML string,
            pane: '<div id="tab_localidad_description"></div>', // DOM elements can be passed, too
            title: 'Descripción',              // an optional pane header
            position: 'top',                  // optional vertical alignment, defaults to 'top'
            closeButton: false
        };
        sidebar.addPanel(panelContent2);

        var panelContent3 = {
            id: 'tab_POI',                     // UID, used to access the panel
            tab: '<i class="fa fa-2x"><img src="../img/icon-list-places.png" alt="alternatetext" width="40px" height="40px"></i>',  // content can be passed as HTML string,
            pane: '<div></div>',
            title: 'Puntos de interés',              // an optional pane header
            position: 'top',                  // optional vertical alignment, defaults to 'top'
            closeButton: false
        };
        sidebar.addPanel(panelContent3);

        sidebar.addPanel({
            id: 'ghlink',
            tab: '<i class="fas fa-close"></i>',
            button: function (event) {
                let elemento = document.getElementById('sidebar');
                elemento.classList.add('collapsed');
                elemento.classList.add('top-90');

            },
        });

        /*

        '<div class="card" style="margin-top: 20px;">' +
                '<div class="bd-placeholder-img card-img-top"><img class="img-header-card" src="../img/header_loc/IMG_20220602_111053680_HDR.jpg" alt="header" width="100%" height="100%" style="filter: saturate(180%);"></div>' +
                '<div class="card-body"><h5 class="card-title" style="color: #198754;">Misión Nueva Pompeya</h5>' +
                '<p class="card-text">La localidad de Misión Nueva Pompeya se localiza en el departamento General Güemes a unos 185 kilómetros de la ciudad de Castelli y a unos 480 kilómetros de la ciudad de Resistencia.</p> ' +
                '<button class="btn btn-success float-right" attr="2" onclick="viewMoreBtnLocalidad(this)"><i class="fas fa-map-marked-alt"></i> Ver más....</button></div></div>' +

         */


        /* add an external link
        sidebar.addPanel({
            id: 'ghlink',
            tab: '<i class="fa fa-github"></i>',
            button: 'https://github.com/noerw/leaflet-sidebar-v2',
        });*/

        /* add a button with click listener
        sidebar.addPanel({
            id: 'click',
            tab: '<i class="fa fa-info"></i>',
            button: function (event) { console.log(event); }
        });

        sidebar.addPanel({
                id:   'mail',
                tab:  '<i class="fa fa-envelope"></i>',
                title: 'Messages',
                button: function() { alert('opened via JS callback') },
                disabled: false,
            });*/

        /*sidebar.on('content', function (ev) {
            switch (ev.id) {
                case 'autopan':
                sidebar.options.autopan = true;
                break;
                default:
                sidebar.options.autopan = false;
            }
        });*/

</script>

<?= $this->Html->script('impenetrable.js') ?>
<?= $this->Html->script('mapas/baselayers.js') ?>
<?= $this->Html->script('mapas/querys_capas.js') ?>
<?= $this->Html->script('mapas/styles/icons_styles.js') ?>
<?= $this->Html->script('mapas/clases/LayersPOIClass.js') ?>




<?= $this->Html->script('mapas/capas/inicio/PN_limite_Project_1.js') ?>
<?= $this->Html->script('mapas/capas/interactive/localidades_point.js') ?>

<?= $this->Html->script('mapas/capas/interactive/nueva_pompeya.js') ?>
<?= $this->Html->script('mapas/capas/interactive/miraflores.js') ?>
<?= $this->Html->script('mapas/capas/interactive/comandancia_frias.js') ?>
<?= $this->Html->script('mapas/capas/interactive/el_sauzalito.js') ?>
<?= $this->Html->script('mapas/capas/interactive/villa_rio_bermejito.js') ?>
<?= $this->Html->script('mapas/capas/interactive/fortin_lavalle.js') ?>

<?= $this->Html->script('mapas/capas/styles/reserva_impenetrable.js') ?>
<?= $this->Html->script('mapas/capas/styles/localidades_point_style.js') ?>
<?= $this->Html->script('mapas/capas/styles/villa_rio_bermejito_point_style.js') ?>
<?= $this->Html->script('mapas/capas/styles/fortin_lavalle_point_style.js') ?>
<?= $this->Html->script('mapas/capas/styles/comandancia_frias_point_style.js') ?>
<?= $this->Html->script('mapas/capas/styles/el_sauzalito_point_style.js') ?>

<?= $this->Html->script('mapas/initialize_maps.js') ?>





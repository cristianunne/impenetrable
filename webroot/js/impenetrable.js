


async function getPOI(objeto) {


    let list_loc = document.getElementById("name_localidad");
    let value = list_loc.value;
    let text = list_loc.options[list_loc.selectedIndex].text;


    console.log(text);
    let data = await getDataInteres(text);

    console.log(data);
    addPOItoInputSelect(data);



}


function addPOItoInputSelect(data)
{
    let list_POI_select = document.getElementById("poi_select");
    list_POI_select.innerText = null;

    let data_ = JSON.stringify(data);
    let data_json = JSON.parse(data_);

    //console.log(data_json);

    let claves = Object.keys(data_json);

    for(let i=0; i < claves.length; i++){
        let clave = claves[i];

        list_POI_select.appendChild(new Option(data_json[clave], clave));
    }
    ordenar(list_POI_select);
}

function ordenar(select) {
    let s=select;
    Array.from(s.options).sort(
        (a,b) => a.text.toLowerCase() > b.text.toLowerCase() ? 1: -1
    ).forEach(
        el => s.add(el)
    );
}


async function getDataPOI(localidad)
{

    if (localidad == null){ return false; }

    //Hago la consulta jquery, pero espero el resultado para seguir
    let result;
    const url = "getDataPOI";

    try {
        result = await $.ajax({
            url: url,
            type: 'POST',
            data: {'id' : localidad},
        })
        return result;
    } catch (error) {
        console.error(error)
    }

}

//creo aqui el pane de puntos de interes

async function getDataInteres(localidad)
{

    if (localidad == null){ return false; }

    //Hago la consulta jquery, pero espero el resultado para seguir
    let result;
    const url = "getPuntosOfInteres";

    try {
        result = await $.ajax({
            url: url,
            type: 'POST',
            data: {'localidad' : localidad},
        })
        return result;
    } catch (error) {
        console.error(error)
    }

}

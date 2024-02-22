async function getDataLocalidades()
{

    let localidades = [];

    $.each(localidades_point.features, function(i, item) {
        localidades.push({"fid" : item.properties.fid});
    });

    let result
    const ajaxurl = "getDataByLocalidadIdAll";


    try {
        result = await $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {'localidades' : localidades},
        })
        return result
    } catch (error) {
        console.error(error)
    }
}

async function getDataFromLocalidadId(layer)
{
    let id = layer.feature.properties.fid;

    //Hago la consulta jquery, pero espero el resultado para seguir
    let result;
    const url = "getDataLocalidadById";

    try {
        result = await $.ajax({
            url: url,
            type: 'POST',
            data: {'id' : id},
        })
        return result
    } catch (error) {
        console.error(error)
    }

}

async function getDataFromLocalidadById(id = null)
{

    if (id == null){ return false; }

    //Hago la consulta jquery, pero espero el resultado para seguir
    let result;
    const url = "getDataLocalidadById";

    try {
        result = await $.ajax({
            url: url,
            type: 'POST',
            data: {'id' : id},
        })
        return result
    } catch (error) {
        console.error(error)
    }

}


async function getDataFromPOI(id_POI)
{
    //Hago la consulta jquery, pero espero el resultado para seguir
    let result;
    const url = "getDataPOI";
    try {
        result = await $.ajax({
            url: url,
            type: 'POST',
            data: {'id' : id_POI},
        })
        return result
    } catch (error) {
        console.error(error)
    }
}

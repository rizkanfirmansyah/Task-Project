    // EVENT TAB NAVIGATION !ANCHOR

$('#activeTabList').on('click', function () {
    data.parm = {
        status:'Y'
    }
    crud.get(data);
})

$('#inactiveTabList').on('click', function () {
    data.parm = {
        status:'N'
    }
    crud.get(data);
})

$('#trashTabList').on('click', function () {
    data.parm = {
        status:'trash'
    }
    crud.get(data);
})

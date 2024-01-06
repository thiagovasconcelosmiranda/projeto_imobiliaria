var baseURL =  document.querySelector('.group-title').getAttribute('data-url');

 function viewWork(id) {
    if (id) {
        $('#refresh-adm').load(`${baseUrl}/ksi/adm/work-view?id=${id}`);
    }
}
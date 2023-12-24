setTimeout(function(){
    
},500);


document.querySelectorAll('.immobile-row').forEach(item => {

    item.querySelector('.group-inf .immobile-col .select-option-i ').addEventListener('click', () => {
        let modal = item.querySelector('.modal-option-immobile');
        if (modal.style.display == "block") {
            modal.style.display = "none";
        } else {
            modal.style.display = "block";
        }
    });

    item.querySelectorAll('.modal-option-immobile .group-select').forEach(select => {

        select.addEventListener('click', () => {

            item.querySelectorAll('.group-lists .i').forEach(list => {
                 list.style.display="none";   
            });

            item.querySelectorAll('.group-lists i').forEach(out=> {
                out.addEventListener('click', ()=>{
                    item.querySelectorAll('.group-lists .i').forEach(list => {
                        list.style.display="none";   
                   });
                })
            })



           

            let p = select.querySelector('p').innerHTML;

            switch (p) {

                case 'Atividades':
                    item.querySelector('.activity-row').style.display = 'flex';
                    break;
                case 'Documentos':
                    item.querySelector('.document-row').style.display = "flex";
                    break;
                case 'Detalhes':
                    item.querySelector('.immobile-inf-row').style.display = "block";
                    break;
            }
        });
    });
});



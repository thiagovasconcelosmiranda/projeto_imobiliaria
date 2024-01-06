let baseURL = document.querySelector('.container').getAttribute('data-url');

let photoUrl = document.querySelector('.row-image');
if (document.querySelectorAll('.row-image')) {

    setInterval(() => {
        urlPhoto();
        document.querySelector('.row-image-load').style.display = "none";
    }, 30000);
}

let min = 0;
let max = 0;

firstLastId();

async function firstLastId() {
    var req = await fetch(`${baseURL}/ajax/first-last`, {
        method: 'get'
    });

    var json = await req.json();

    min = parseInt(json.firstId);
    max = parseInt(json.lastId);

    if (json.error != "") {
        alert(json.error);
    }
}

async function urlPhoto() {
    photoUrl.innerHTML = "";

    for (let i = 1; i < 4; i++) {
        let id_random = Math.floor(Math.random() * (max - min) + min);
        
        if (id_random) {
            console.log(id_random);
            let req = await fetch(`${baseURL}/photo?id=${id_random}`, {
                method: 'GET'
            });

            let json = await req.json();
            console.log(json);
            
            if (json.error === '') {
                photoUrl.insertAdjacentHTML("beforeEnd",
                `
                   <a href="${base}/detalhe-imovel?id=${json[0].id}">
                     <div class="image-i">
                        <img src="${base}/assets/media/photos_immobile/${json[0].id}/${json[0].foto1}">
                        <div class="legend-locality">
                           <div class="locality-text">
                             <div class="icon">
                               <i class="fa-solid fa-house"></i>
                             </div>
                             <p>Residencial ${json[0].bairro}</p>
                            </div>
                        </div>
                       </div>
                    </a>
                `);
            }
        }

    }
}




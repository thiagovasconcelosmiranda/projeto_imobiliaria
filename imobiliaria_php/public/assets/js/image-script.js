let photourl = document.querySelector('.row-image');

if (document.querySelectorAll('.row-image')) {

    setInterval(() => {
        urlPhoto();
    }, 50000);
}

async function urlPhoto() {
    photourl.innerHTML = "";
    let max = 9;
    for (let i = 1; i < 4; i++) {
        let id = Math.floor(Math.random() * (max - 1 + 1)) + 1;

        let req = await fetch(`${base}/photo?id=${id}`, {
            method: 'GET'
        });

        let json = await req.json();

        //console.log(json[0]);

        photourl.insertAdjacentHTML("beforeEnd",
            `
        <a href="${base}/detalhe-imovel?id=${json[0].id}">
        <div class="image-i">
            <img src="${base}/assets/images/${json[0].id}/${json[0].foto1}">
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

        if (json.error != '') {
            alert();
        }
    }
}


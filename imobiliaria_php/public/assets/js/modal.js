if (document.querySelectorAll('.i-tipo')) {
    document.querySelectorAll('.i-tipo button').forEach(item => {
        item.addEventListener('click', () => {

            if (document.querySelector('.modal-container')) {
                document.querySelector('.modal-container').style.display = "flex";
            }

        });
    });

    if (document.querySelector('.close-model')) {
        document.querySelector('.close-model').addEventListener('click', () => {
            document.querySelector('.modal-container').style.display = "none";
        })
    }
}
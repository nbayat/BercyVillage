<?php
?>

<div id="text"></div>

<script type="text/javascript">
    const textDisplay = document.getElementById('text');
    const phrases = ['Bienvenue au projet 98 !', 'Explorez, cherchez, notez les restaurants de Cour Saint-Émilion !',
        'Puis notez moi une 20 SVP :-)'];
    let i = 0, j = 0;
    let currentPhrase = [];
    let isDeleting = false;
    let isEnd = false;

    function typeLoop() {
        isEnd = false;
        textDisplay.innerHTML = currentPhrase.join('');

        if (i < phrases.length) {
            if (!isDeleting && j <= phrases[i].length) {
                currentPhrase.push(phrases[i][j])
                j++;
                textDisplay.innerHTML = currentPhrase.join('');
            }
            if(isDeleting && j <= phrases[i].length) {
                currentPhrase.pop(phrases[i][j]);
                j--;
                textDisplay.innerHTML = currentPhrase.join('');
            }
            if (j === phrases[i].length) {
                isEnd = true;
                isDeleting = true;
            }
            if (isDeleting && j === 0) {
                currentPhrase = [];
                isDeleting = false;
                i++;
                if (i === phrases.length) {
                    i = 0;
                }
            }
        }
        const spedUp = 60;
        const normalSpeed = 100;
        const time = isEnd ? 2000 : isDeleting ? spedUp : normalSpeed;
        setTimeout(typeLoop, time);
    }
    typeLoop();
</script>

<style>
    #text {
        font-size: 40px;
        text-align: center;
        margin-top: 9%;
        font-family: "Montserrat", serif;
        font-weight: 700;
    }
</style>

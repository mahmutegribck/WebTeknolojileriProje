const url = 'https://best-game-price-search.p.rapidapi.com/igaming/specials?page=1&limit=10&currency=USD';

const options = {
    method: 'GET',
    headers: {
        'X-RapidAPI-Host': 'best-game-price-search.p.rapidapi.com',
        'X-RapidAPI-Key': 'ed35b93186msh4f8792df9b2cf43p171de2jsn10bb45f27f66'
    }
};

fetch(url, options)
    .then(res => res.json())
    .then(data => {
        const list = data.results;
        list.map((item) => {
            const name = item.title;
            const poster = item.img;
            const producer = item.source;
            const game = `<li><img src =${poster}> <h3>Oyun Adı : ${name}</h3> <h4>Yapımcı : ${producer}</h4></li>`
            document.querySelector('.games').innerHTML += game;


        })

    })
    .catch(err => console.error('error:' + err));
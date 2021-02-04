const charactersList = document.getElementById('charactersList');
const searchBar = document.getElementById('searchBar');
let alldata = [];

searchBar.addEventListener('keyup', (e) => {
  const searchString = e.target.value.toLowerCase();
  const filtrarcaracteres = alldata.filter((fruit) => {
    return (
    fruit.name.toLowerCase().includes(searchString) || 
    fruit.calorias.toLowerCase().includes(searchString)
    );
  });
  displayCharacters(filtrarcaracteres);
});

const loadCharacters = async () => {
    try {
        var myRequest = new Request('fruits.json');          
        const res = await fetch(myRequest);
        alldata = await res.json();
        displayCharacters(alldata);
    } catch (err) {
        console.error(err);
    }
};

const displayCharacters = (fruits) => {
    const htmlString = fruits
        .map((fruit) => {
            return `
            <li class="character">
                <h2>${fruit.name}</h2> 
                <h4>${fruit.calorias}</h4>
                <p>Ración:${fruit.Ración}</p>                            
                <img src="${fruit.image}"></img>
            </li>
        `;
        })
        .join('');
    charactersList.innerHTML = htmlString;
};

loadCharacters();

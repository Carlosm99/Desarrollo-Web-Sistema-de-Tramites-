const charactersList = document.getElementById('charactersList');
let alldata = [];

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
                <img src="${fruit.image}"></img>
            </li>
        `;
        })
        .join('');
    charactersList.innerHTML = htmlString;
};

loadCharacters();


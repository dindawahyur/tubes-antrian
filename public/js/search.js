const charactersList = document.getElementById('charactersList');
const searchBar = document.getElementById('searchBar');
let hpCharacters = [

    {
        "name": "Poliklinik Dokter Umum",
        "harga": "idr 12,000/kg",
        "image": "img/p3.png",
        "id": "6"
    },
    {
        "name": "Poliklinik Radiologi",
        "harga": "idr 12,000/kg",
        "image": "img/p4.png",
        "id": "5"
    },
    {
        "name": "Poliklinik Gigi",
        "harga": "idr 12,000/kg",
        "image": "img/p1.png",
        "id": "1"
    },
    {
        "name": "Poliklinik Anak",
        "harga": "idr 12,000/kg",
        "image": "img/p6.png",
        "id": "2"
    },
    {
        "name": "Poliklinik Penyakit Dalam",
        "harga": "idr 12,000/kg",
        "image": "img/p2.png",
        "id": "7"
    },
    {
        "name": "Poliklinik Kulit dan Kelamin",
        "harga": "idr 12,000/kg",
        "image": "img/p5.png",
        "id": "8"
    },
    {
        "name": "Poliklinik THT",
        "harga": "idr 12,000/kg",
        "image": "img/p7.png",
        "id": 3
    }
];

searchBar.addEventListener('keyup', (e) => {
    const searchString = e.target.value.toLowerCase();

    const filteredCharacters = hpCharacters.filter((character) => {
        return (
            character.name.toLowerCase().includes(searchString) ||
            character.harga.toLowerCase().includes(searchString)
        );
    });
    displayCharacters(filteredCharacters);
});

const loadCharacters = () => {
    hpCharacters.forEach(displayCharacters(hpCharacters));
}


const displayCharacters = (characters) => {
    const htmlString = characters
        .map((character) => {
            return `
            <div class="card col-md-12">

                    <img src="${character.image}" alt="">
                    <h4 class="title">${character.name}</h4>
                    
                        <button class="btn btn-primary"><a href="/pendaftaran">Daftar Berobat</a></button>
                        <button class="btn btn-primary mt-2"><a href="/pages/detailPoli/${character.id}">Lihat Detail</a></button>
                    
            </div>
        `;
        })
        .join('');
    charactersList.innerHTML = htmlString;
};

loadCharacters();
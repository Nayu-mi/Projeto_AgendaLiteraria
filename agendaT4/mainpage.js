const booksList = document.getElementById('booksList');
const searchBar = document.getElementById('searchBar');
let books = [];

searchBar.addEventListener('keyup', (e)=> {
    const searchString = e.target.value.toLowerCase();

    const filteredBooks = books.filter((book) => {
        return (
            book.nome.toLowerCase().includes(searchString) ||
            book.autor.toLowerCase().includes(searchString)
        );
    });
    displayBooks(filteredBooks);
});

const loadBook = async () => {
    try {
        const res = await fetch('../ListaLivros/Livros.json');
        books = await res.json();
        displayBooks(books);
    }
    catch(err){
        console.error(err);
    }
};

const displayBooks = (books) => {
    const htmlString = books
        .map((books) => {
            return `
            <li class="Livros">
                <img src="${books.capa}" alt="${books.nome}"></img>
                <h4>${books.nome}</h4>
                <p>${books.autor}</p>
                <a href="${books.LinkPage}" target="_blank">Saiba Mais</a>
            </li>
            `;
        })
        .join('');
    booksList.innerHTML = htmlString;
};

loadBook();

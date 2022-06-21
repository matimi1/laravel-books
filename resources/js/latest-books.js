
const loadData = async () => {

    const response = await fetch('/api/books/latest');

    const data = await response.json();

    const container = document.getElementById('latest-books');

    data.forEach(book => {

        const element = makeBookElement(book);

        container.appendChild(element);

    })

}

const makeBookElement = (book_data) => {

    const element = document.createElement('div');

    element.classList.add('movie');

    element.innerHTML = `
        <h3 class="movie__title">${book_data.title}</h3>
        <div class="movie__image">
            <img src="${book_data.image}" alt="book cover">
        </div>
    `;

    return element;
}

loadData();

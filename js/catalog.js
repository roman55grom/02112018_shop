class Product {
    constructor(name, price, pic = null, id) {
        this.name = name;
        this.pic = pic;
        this.price = price;
        this.id = id;
    }
    renderProduct(productBlock) {
        let newProductBlock = document.createElement('a');
        newProductBlock.classList.add('product-item');
        newProductBlock.classList.add('product-item_margin');
        newProductBlock.href = `/handlers/getProducts.php?product=${this.id}`;
        newProductBlock.innerHTML = `
            <div class="product-item__pic" style="background-image: url('${this.pic}')"></div>
            <h2 class="product-item__title product-item__title_margin">${this.name}</h2>
            <div class="product-item__price">${this.price} руб.</div>
        `;
        productBlock.appendChild(newProductBlock);
    }
}

class Catalog {
    constructor(productBlock) {
        this.el = document.querySelector(productBlock);
        this.products = [];
        this.paginationBlock = document.querySelector('.pages-product');
    }
    productsArray(products) {
        this.products = products;
    }
    renderCatalog() {
        this.products.forEach((value) => {
            value.renderProduct(this.el);
        });
    }
    pagination(data) {
        let pages = data['pagination']['countPages'];

        // let i = 0;
        // while ( i < pages ) {
        //     console.log(i);
        //     i++;
        // }
        

        for ( let i = 0; i < pages; i++ ) {
            let newPagElement = document.createElement('div');
            newPagElement.innerText = i + 1;
            newPagElement.classList.add('pages-product__item');
            newPagElement.classList.add('pages-product__item_margin');

            if ( data['pagination']['currentPage'] ==  i + 1 ) {
                newPagElement.classList.add('pages-product__item_active');
            }
            // добавляем обработчик на клик
            newPagElement.addEventListener('click', function() {
                catalog.load(0, i + 1);
            }); 
            // selected()
            //console.log(i)
            this.paginationBlock.appendChild(newPagElement);
        }
    }
    clear() {
        this.el.innerHTML = '';
        this.paginationBlock.innerHTML = '';
    }
    load(cat = 0, page = 1) {
        let xhr = new XMLHttpRequest();
        xhr.open('GET', `/api/getProducts.php?category=${cat}&page=${page}`);
        xhr.send();
        let preloader = document.querySelector('.preloader');
        catalog.clear();
        //preloader.classList.add('preloader_active');
        
        xhr.addEventListener('load', function() {
            let data = JSON.parse(xhr.responseText);

            console.log(data);

            let dataArray = [];
            data['items'].forEach(function(value) {
                dataArray.push(new Product(value.name, value.price, value.img_src));
            });
            catalog.productsArray(dataArray);
            catalog.renderCatalog();

            catalog.pagination(data);

            //preloader.classList.remove('preloader_active');
        });
    }
}

let catalog = new Catalog('.product');
catalog.load(0);

let catSelect = document.getElementById('catSelect');

catSelect.addEventListener('change', function() {
    catalog.load(catSelect.value);
});
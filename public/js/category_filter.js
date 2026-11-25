class CategoryFilter {
    constructor() {
        this.filterContainer = document.querySelector('#product-container');
        if (!this.filterContainer) {
            return;
        }

        this.filterItems = this.filterContainer.querySelectorAll('.product');
        this.categorySelector = document.querySelector('#category-selector');
        this.countElement = document.querySelector('#products-count');
        this.emptyMessage = this.createEmptyMessage();

        this.initEvents();
        this.filterProducts();
    }

    createEmptyMessage() {
        const message = document.createElement('p');
        message.textContent = 'V tejto kategórii neboli nájdené žiadne produkty.';
        message.className = 'hidden text-center text-gray-500 font-bold my-6';
        this.filterContainer.after(message);
        return message;
    }

    initEvents() {
        if (this.categorySelector) {
            this.categorySelector.addEventListener('change', () => {
                this.filterProducts();
            });
        }
    }

    filterProducts() {
        const selectedCategory = this.categorySelector ? this.categorySelector.value : 'all';
        let count = 0;

        this.filterItems.forEach((item) => {
            const itemCategory = item.dataset.categoryId;
            const isMatch = selectedCategory === 'all' || itemCategory === selectedCategory;

            if (isMatch) {
                item.classList.remove('hidden');
                count++;
            } else {
                item.classList.add('hidden');
            }
        });

        this.updateStatus(count);
    }

    updateStatus(visibleCount) {
        this.countElement.textContent = `Počet produktov: ${visibleCount}`;
        
        if (visibleCount === 0) {
            this.emptyMessage.classList.remove('hidden');
        } else {
            this.emptyMessage.classList.add('hidden');
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new CategoryFilter();
});
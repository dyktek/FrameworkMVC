import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { Category } from './category';
import { CategoriesService } from './categories.service';


@Component({
    selector: 'my-app',
    templateUrl: 'app/categories/categories.component.html',
    providers: [CategoriesService]
})

export class CategoriesComponent {

    categories: Array<Category>;
    totalRecords: Number;

    constructor(
        private router: Router,
        private categoriesService : CategoriesService) {

        this.getCategories();

    }

    getCategories() {
        this.categoriesService.getCategories(1)
            .subscribe(
                categories => {
                    this.categories = categories.data;
                    this.totalRecords = categories.totalRecords
                },
                error => console.log('onError: %s', error)
            );
    }

    editCategory(category?: Category) {
        if(category) {
            this.router.navigate(['/backoffice/category/' + category.catId]);
        } else {
            this.router.navigate(['/backoffice/category/0']);
        }
    }
}

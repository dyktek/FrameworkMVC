import { Component } from '@angular/core';
import { Router, RouteSegment } from '@angular/router';
import { InputText, Dropdown, Button } from 'primeng/primeng';
import { Category } from './category';
import { CategoriesService } from './categories.service';



@Component({
    selector: 'my-app',
    templateUrl: 'app/categories/category-edit.component.html',
    providers: [CategoriesService],
    directives: [InputText, Dropdown, Button]
})

export class CategoryEditComponent {

    category: Category;
    statusList: Array;

    constructor(
        private router: Router,
        private categoriesService: CategoriesService) {

        this.category = {
            catId : 0,
            catName : '',
            catSlug : '',
            catStatus : 0
        };

        this.statusList = [
            {label:'Ukryty', value:0},
            {label:'Widoczny', value:1}
        ];
    }

    saveCategory() {
        this.categoriesService.saveCategory(this.category)
            .subscribe(
                res => { this.router.navigate(['/backoffice/categories']) },
                error => console.log('onError: %s', error)
            );
    }

    routerOnActivate(curr: RouteSegment): void {

        let id = parseInt(curr.getParam('id'));

        this.categoriesService.getCategory(id)
            .subscribe(
                category => this.category = category,
                error => console.log('onError: %s', error)
            );

    }
}

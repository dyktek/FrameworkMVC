import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';
import { Category } from './category';
import { CategoriesService } from './categories.service';



@Component({
    selector: 'my-app',
    templateUrl: 'app/categories/category-edit.component.html',
    providers: [CategoriesService]
})

export class CategoryEditComponent implements OnInit{

    category: Category;
    statusList: Array<any>;
    sub;

    constructor(private router: Router,
                private route: ActivatedRoute,
                private categoriesService: CategoriesService) {

        this.category = {
            catId: 0,
            catName: '',
            catSlug: '',
            catStatus: 0
        };

        this.statusList = [
            {label: 'Ukryty', value: 0},
            {label: 'Widoczny', value: 1}
        ];
    }

    ngOnInit() {
        this.sub = this.route.params.subscribe(params => {
            let id = +params['id'];

            if(id) {
                this.categoriesService.getCategory(id)
                    .subscribe(
                        category => {
                            this.category = category;
                        },
                        error => console.log('onError: %s', error)
                    );
            }
        });
    }

    saveCategory() {
        this.categoriesService.saveCategory(this.category)
            .subscribe(
                res => {
                    this.router.navigate(['/backoffice/categories'])
                },
                error => console.log('onError: %s', error)
            );
    }
}

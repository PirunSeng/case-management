import AllProduct from './components/AllProduct.vue';
import CreateProduct from './components/CreateProduct.vue';
import EditProduct from './components/EditProduct.vue';
import ShowProduct from './components/ShowProduct.vue';
 
export const routes = [
    {
        name: 'product_list',
        path: '/products',
        component: AllProduct
    },
    {
        name: 'product_create',
        path: '/products/create',
        component: CreateProduct
    },
    {
        name: 'product_edit',
        path: '/products/edit/:id',
        component: EditProduct
    },
    {
        name: 'product_show',
        path: '/products/:id',
        component: ShowProduct
    }
];
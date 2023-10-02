
import Vue from 'vue';
import Router from 'vue-router';

import login from './components/pages/admin/auth/login';

import home from './components/pages/admin/home';
import pending_kyc from './components/pages/admin/pending_kyc';
import kyc_details from './components/pages/admin/kyc_details';
import pending_deposits from './components/pages/admin/pending_deposits';
import pending_withdraw from './components/pages/admin/pending_withdraw';
import pending_referral from './components/pages/admin/pending_referral';
import pending_registration from './components/pages/admin/pending_register';
import salary from './components/pages/admin/salary';
import users from './components/pages/admin/users';
import deposits from './components/pages/admin/deposits';
import referrals from './components/pages/admin/referral_return';

import level_charts from './components/pages/admin/setting/level_chart';
import add_level from './components/pages/admin/setting/add_level';
import edit_level from './components/pages/admin/setting/edit_level';

import roi from './components/pages/admin/setting/roi';
import edit_roi from './components/pages/admin/setting/edit_roi';

import salary_setting from './components/pages/admin/setting/salary';


import edit_salary from './components/pages/admin/setting/edit_salary';


Vue.use(Router);

    const routes = [
        {
            path: '/admin/login',
            component : login,
            name: 'admin_login',
            
        },
        {
            path: '/admin/home',
            component : home,
            name: 'admin_home',
            meta: {
                requiresAuth : true
            },
        },
        {
            path: '/admin/pending_kyc',
            component : pending_kyc,
            name: 'pending_kyc',
            meta: {
                requiresAuth : true
            },
        },
        {
            path: '/admin/kyc_details/:id',
            component : kyc_details,
            name: 'kyc_details',
            meta: {
                requiresAuth : true
            },
        },
        {
            path: '/admin/pending_deposits',
            component : pending_deposits,
            name: 'pending_deposits',
            meta: {
                requiresAuth : true
            },
        },
        {
            path: '/admin/pending_withdraw',
            component : pending_withdraw,
            name: 'pending_withdraw',
            meta: {
                requiresAuth : true
            },
        },
        {
            path: '/admin/pending_referral',
            component : pending_referral,
            name: 'pending_referral',
            meta: {
                requiresAuth : true
            },
        },
        {
            path: '/admin/pending_registration',
            component : pending_registration,
            name: 'pending_registration',
            meta: {
                requiresAuth : true
            },
        },
        {
            path: '/admin/users',
            component : users,
            name: 'users',
            meta: {
                requiresAuth : true
            },
        },
        {
            path: '/admin/salary',
            component : salary,
            name: 'salary',
            meta: {
                requiresAuth : true
            },
        },
        {
            path: '/admin/deposits',
            component : deposits,
            name: 'deposits',
            meta: {
                requiresAuth : true
            },
        },
        {
            path: '/admin/referrals',
            component : referrals,
            name: 'referrals',
            meta: {
                requiresAuth : true
            },
        },
        {
            path: '/admin/level_chart',
            component : level_charts,
            name: 'level_charts',
            meta: {
                requiresAuth : true
            },
        },
        {
            path: '/admin/add_level',
            component : add_level,
            name: 'add_level',
            meta: {
                requiresAuth : true
            },
        },
        {
            path: '/admin/edit_level/:id',
            component : edit_level,
            name: 'edit_level',
            meta: {
                requiresAuth : true
            },
        },
        {
            path: '/admin/roi',
            component : roi,
            name: 'roi',
            meta: {
                requiresAuth : true
            },
        },
        {
            path: '/admin/edit_roi/:id',
            component : edit_roi,
            name: 'edit_roi',
            meta: {
                requiresAuth : true
            },
        },
        {
            path: '/admin/salary_setting',
            component : salary_setting,
            name: 'salary_setting',
            meta: {
                requiresAuth : true
            },
        },
        {
            path: '/admin/edit_salary/:id',
            component : edit_salary,
            name: 'edit_salary',
            meta: {
                requiresAuth : true
            },
        },
       
    ];

    const router = new Router({
        mode: 'history',
        routes
    });
    
    router.beforeEach((to, from, next) => {
        if (to.matched.some(record => record.meta.requiresAuth)) {
            if (!localStorage.getItem('token')) {
                next({
                    name: 'admin_login'
                });
            } else {
                next();
            }
        } else {
            next();
        }
    });
    
export default router;

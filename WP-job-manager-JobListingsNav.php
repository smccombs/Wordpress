<?Php

// 7-15-17 smccombs
// Wp Job Manager
// After adding the users job listings as a page to my account of woocomerce I needed to add a nav to it.

function job_dashboard_menu() {

    $menu = '
		<nav class="woocommerce-MyAccount-navigation new-MyAccount-navigation">
			<ul>
							<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--manage-jobs is-active">
						<a href="https://jobs4mcnairy.com/myaccount/manage-jobs/">Jobs & Applications</a>
					</li>
							<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
						<a href="https://jobs4mcnairy.com/myaccount/orders/">Advertising</a>
					</li>
							<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
						<a href="https://jobs4mcnairy.com/myaccount/edit-account/">Your Account</a>
					</li>
							<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
						<a href="https://jobs4mcnairy.com/myaccount/customer-logout/">Logout</a>
					</li>
					</ul>
		</nav>';
 
    return $menu;
}

add_shortcode('job_dashboard_menu', 'job_dashboard_menu');

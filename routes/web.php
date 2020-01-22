<?php



//Route::get('/', function () {return view('welcome');});

//auth & user
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password-change', 'HomeController@changePassword')->name('password.change');
Route::post('/password-update', 'HomeController@updatePassword')->name('password.update');
Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');

//**********************
//ADMIN=======
//***********************
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
// Password Reset Routes...
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update');
Route::get('admin/profile','AdminController@AdminProfile')->name('admin.profile');
Route::get('edit/admin/profile/{id}','AdminController@EditAdminProfile');
Route::post('update/profile/{id}','AdminController@UpdateAdminProfile');

Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');

//*****************************************************
//backend section routes ===========================
//***************************************************

//categories
Route::get('admin/categories','Admin\Category\CategoryController@category')->name('categories');
Route::post('admin/store/category','Admin\Category\CategoryController@storeCategory')->name('store.category');
Route::get('category/delete/{id}','Admin\Category\CategoryController@deleteCategory');
Route::get('category/edit/{id}','Admin\Category\CategoryController@editCategory');
Route::post('update/category/{id}','Admin\Category\CategoryController@updateCategory');

//subcategories
Route::get('admin/sub/categories','Admin\Subcategory\SubcategoryController@subCategory')->name('sub.categories');
Route::post('admin/store/sub/categories','Admin\Subcategory\SubcategoryController@storeSubcategory')->name('store.subcategories');
Route::get('subcategory/delete/{id}','Admin\Subcategory\SubcategoryController@deleteSubcategory');
Route::get('subcategory/edit/{id}','Admin\Subcategory\SubcategoryController@editSubcategory');
Route::post('update/sub/category/{id}','Admin\Subcategory\SubcategoryController@updateSubcategory');

//brands
Route::get('admin/brands','Admin\Brand\BrandController@brand')->name('brands');
Route::post('admin/store/brand','Admin\Brand\BrandController@storeBrand')->name('store.brand');
Route::get('brand/delete/{id}','Admin\Brand\BrandController@deleteBrand');
Route::get('brand/edit/{id}','Admin\Brand\BrandController@editBrand');
Route::post('update/brand/{id}','Admin\Brand\BrandController@updateBrand');

//newsletter
Route::get('admin/show/user/newsletter','Admin\CouponController@showNewsletter')->name('show.newsletter');
Route::get('delete/subscribers/{id}','Admin\CouponController@deleteNewsletter');

//products
Route::get('admin/create/product','Admin\ProductController@addProduct')->name('add.product');
Route::post('admin/store/product','Admin\ProductController@storeProducts')->name('store.product');
Route::get('admin/show/all/product','Admin\ProductController@getProducts')->name('all.product');
Route::get('view/single/product/{id}','Admin\ProductController@viewSingleProduct');
Route::get('product/inactive/{id}','Admin\ProductController@InactiveNow');
Route::get('product/active/{id}','Admin\ProductController@ActiveNow');
Route::get('product/delete/{id}','Admin\ProductController@DeleteProduct');
Route::get('edit/product/{id}','Admin\ProductController@EditProduct');
Route::post('update/product/withoutphoto/{id}','Admin\ProductController@UpdateProductWithoutPhoto');
Route::post('update/product/photo/{id}','Admin\ProductController@UpdateProductPhoto');


/// get subcategory for each category by ajax
Route::get('get/subcategory/{category_id}','Admin\ProductController@getSubcategory');

//back to Product List page
Route::get('go/back','Admin\ProductController@backToProductList');


////orders section
// pending orders
Route::get('admin/pending/orders/list/','Admin\OrderController@NewOrder')->name('new.order');
// paid orders
Route::get('admin/payment/accepted/orders/list/','Admin\OrderController@PaidOrder')->name('payment.accepted');
// processing orders
Route::get('admin/order/delivery/progress/list/','Admin\OrderController@DeliverProgressOrder')->name('order.run.progress');
// delivered orders
Route::get('admin/order/delivered/list/','Admin\OrderController@DeliveredOrder')->name('admin.delivered.order');
// pending orders
Route::get('admin/order/cancel/list/','Admin\OrderController@CanceledOrder')->name('admin.cancel.progress');

//view orders details with status
Route::get('admin/view/order/{id}','Admin\OrderController@ViewOrder');

//accept - delete - progress - delivered order
Route::get('admin/payment/accept/{id}','Admin\OrderController@AcceptOrder');
Route::get('admin/payment/cancel/{id}','Admin\OrderController@CancelOrder');
Route::get('product/delivery/progress/{id}','Admin\OrderController@OrderInProgress');
Route::get('admin/delivery/done/{id}','Admin\OrderController@OrderDelivered');



///site settings
/// *******

//logo
Route::get('branding/logos','Admin\SiteSettingsController@ViewLogos')->name('view.logos');
Route::post('upload/logo','Admin\SiteSettingsController@ChangeLogo')->name('change.logo');
Route::get('logo/activate/{id}','Admin\SiteSettingsController@LogoActivation');
Route::get('logo/deactivate/{id}','Admin\SiteSettingsController@LogoDeactivation');
Route::get('logo/delete/{id}','Admin\SiteSettingsController@LogoDeletion');

//sliders
Route::get('view/sliders','Admin\SiteSettingsController@ViewSliders')->name('view.sliders');
Route::post('add/new/slider','Admin\SiteSettingsController@AddSlider')->name('add.slider');
Route::get('slider/view/{id}','Admin\SiteSettingsController@showSingleSlider');
Route::get('slider/edit/{id}','Admin\SiteSettingsController@EditSlider');
Route::post('update/slider/{id}','Admin\SiteSettingsController@UpdateSlider');
Route::get('slider/delete/{id}','Admin\SiteSettingsController@DeleteSlider');
Route::get('slider/activate/{id}','Admin\SiteSettingsController@ActivateSlider');
Route::get('slider/deactivate/{id}','Admin\SiteSettingsController@DeactivateSlider');


//our focus
Route::get('admin/our/focus','Admin\SiteSettingsController@OurFocus')->name('our.focus.panel');
Route::post('store/our/focus','Admin\SiteSettingsController@OurFocusStore')->name('store.focus');
Route::get('focus/view/{id}','Admin\SiteSettingsController@ViewFocus');
Route::get('focus/edit/{id}','Admin\SiteSettingsController@EditFocus');
Route::post('update/focus/{id}','Admin\SiteSettingsController@UpdateFocus');
Route::get('focus/active/{id}','Admin\SiteSettingsController@ActivateFocus');
Route::get('focus/deactive/{id}','Admin\SiteSettingsController@DeactivateFocus');
Route::get('focus/delete/{id}','Admin\SiteSettingsController@DeleteFocus');


//featured review
Route::get('view/featured/reviews','Admin\SiteSettingsController@ViewFeatures')->name('views.featured.reivews');
Route::post('add/new/review','Admin\SiteSettingsController@AddFeaturedReview')->name('add.featured.product');
Route::get('feature/review/view/{id}','Admin\SiteSettingsController@showSingleReview');
Route::get('feature/review/edit/{id}','Admin\SiteSettingsController@EditReview');
Route::post('update/feature/review/{id}','Admin\SiteSettingsController@UpdateReview');
Route::get('feature/review/delete/{id}','Admin\SiteSettingsController@DeleteReview');
Route::get('feature/review/activate/{id}','Admin\SiteSettingsController@ActivateReview');
Route::get('feature/review/deactivate/{id}','Admin\SiteSettingsController@DeactivateReview');


//our recommendation
Route::get('our/recommendation','Admin\SiteSettingsController@ViewRecommendations')->name('our.recommendation');
Route::post('add/new/recommendation','Admin\SiteSettingsController@AddRecommendation')->name('add.recommendation.product');
Route::get('view/recommendation/{id}','Admin\SiteSettingsController@showRecommendation');
Route::get('recommendation/edit/{id}','Admin\SiteSettingsController@EditRecommendation');
Route::post('update/recommendation/{id}','Admin\SiteSettingsController@UpdateRecommendation');
Route::get('recommendation/delete/{id}','Admin\SiteSettingsController@DeleteRecommendation');
Route::get('recommendation/activate/{id}','Admin\SiteSettingsController@ActivateRecommendation');
Route::get('recommendation/deactivate/{id}','Admin\SiteSettingsController@DeactivateRecommendation');



//**********************************************************
//Frontend section routes =================================
//*****************************************************

//pages
Route::get('/','PageController@IndexPage');
Route::get('support/','PageController@SupportPage')->name('support');
Route::get('contact/us','PageController@ContactPage')->name('contact');
Route::get('about/us','PageController@AboutPage')->name('about');
Route::get('user/profile','PageController@UserProfilePage')->name('user.account');
Route::get('configure/custom/desktop','PageController@BuildDesktop')->name('build.desktop');
Route::get('desktop','PageController@Desktop')->name('desktop');


Route::get('gears/accessories','PageController@GearPage')->name('gears');
Route::get('gaming/desktop','PageController@GamingDesktop')->name('gaming.desktop');
Route::get('workstation','PageController@Workstation')->name('workstation.desktop');
Route::get('gaming/laptop','PageController@GamingLaptop')->name('gaming.laptop');
Route::get('normal/laptop','PageController@NormalLaptop')->name('normal.laptop');


//wishlist
//add
Route::get('add/wishlist/{id}','WishlistController@AddWishlist');
//view
Route::get('view/wishlist','WishlistController@ViewWishlist')->name('view.wishlist');
//remove
Route::get('remove/wishlist/{id}','WishlistController@removeWishlist');


//cart
Route::get('add/to/cart/{id}','CartController@AddtoCart');

Route::get('added/into/cart/{id}','CartController@AddIntoCart');


//check cart content
Route::get('cart/content/','CartController@checkCartContent');
//view cart
Route::get('view/cart/','ProductController@ViewCart');

//update cart
Route::post('update/cart','CartController@updateCart')->name('update.cart');

//remove a cart
Route::get('remove/cart/{rowId}','ProductController@removeProduct');

//checkout
Route::get('checkout','CheckoutController@Checkout')->name('checkout.product');

//product
Route::get('product/details/{product_slug}','ProductController@ProductView');
Route::post('product/buy/{id}','ProductController@productAddedCart');
//custom build product cart
Route::post('custom/product/cart/{id}','ProductController@CustomBuildCart');
//newsletters
Route::post('users/subscribe','FrontController@StoreNewsletter')->name('store.newsletter');


//show filtered branded product



//custom desktop configure
Route::post('upload/design','ProductController@uploadDesign');

/// payment page
Route::get('order/process','CheckoutController@PaymentPage')->name('order.process');

///customer order payment
Route::post('payment/process','PaymentController@PaymentProcess')->name('payment.process');

//bkash payment
Route::post('paying/bkash','PaymentController@bKashPayment')->name('paying.bkash');


//user profile edit
Route::get('customer/profile/edit','PageController@userProfileEdit')->name('edit.user.profile');
Route::post('customer/profile/update','HomeController@userProfileUpdate')->name('customer.profile.update');

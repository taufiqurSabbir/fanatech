<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\OurPortfolioController;
use App\Http\Controllers\SubscribeMailController;
use App\Http\Controllers\MultipleBusinessBrandController;
use App\Http\Controllers\WhyChooseFexdverController;

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//ProfileController Router
Route::get('profile' , [ProfileController::class, 'profileindex'])->name('profile.index');
Route::post('profile/name/update' , [ProfileController::class, 'profilenameupdate'])->name('profile.nameupdate');
Route::post('password.edit' , [ProfileController::class, 'passwordedit'])->name('password.edit');
Route::post('profile/image' , [ProfileController::class, 'profileimage'])->name('profile.image');

// FrontendController Route
Route::get('/' , [FrontendController::class , 'welcomeViewPage']);
Route::get('about-page' , [FrontendController::class , 'aboutViewPage'])->name('about.view-page');
Route::get('contact-page' , [FrontendController::class , 'contactViewPage'])->name('contact.view-page');
Route::get('services-page' , [FrontendController::class , 'servicesViewPage'])->name('services.view-page');
Route::get('portfolio-page' , [FrontendController::class , 'portfolioViewPage'])->name('portfolio.view-page');
Route::get('team-details-page/{id}' , [FrontendController::class , 'teamDetailsViewPage'])->name('team-details-page');
Route::get('portfolio-details-page/{id}' , [FrontendController::class , 'portfolioDetailsViewPage'])->name('portfolio-details-page');

// BannerController Route
Route::resource('banner' , BannerController::class)->only(['index', 'store', 'edit', 'update', 'destroy']);
Route::get('banner-view-all' , [BannerController::class, 'bannerViewAll'])->name('banner.bannerViewAll');

// AboutUsController Route
Route::resource('about' , AboutUsController::class)->only(['index', 'store', 'update', 'destroy']);
Route::get('about-edit/{id}' , [AboutUsController::class, 'aboutEdit'])->name('about.aboutEdit');
Route::post('about-edit/{id}' , [AboutUsController::class, 'aboutUpdate'])->name('aboutUs.update');
Route::get('about-delete/{id}' , [AboutUsController::class, 'aboutDelete'])->name('about.aboutDelete');

Route::get('about-view-all' , [AboutUsController::class, 'aboutViewAll'])->name('about.aboutViewAll');

// AboutPageController Route
Route::resource('aboutPage' , AboutPageController::class)->only(['index', 'store', 'edit', 'update', 'destroy']);
Route::get('aboutPage-view-all' , [AboutPageController::class, 'aboutPageViewAll'])->name('aboutPage.aboutPageViewAll');


// ServiceController Route
Route::resource('service' , ServiceController::class)->only(['index', 'store', 'edit', 'update', 'destroy']);
Route::get('service-view-all' , [ServiceController::class, 'serviceViewAll'])->name('service.serviceViewAll');

// ServiceController Route
Route::resource('whychoosefexdver' , WhyChooseFexdverController::class)->only(['index', 'store']);
Route::get('whychoosefexdvers-view-all' , [WhyChooseFexdverController::class, 'whyview'])->name('whychoosefexdver.view');
Route::get('whychoosefexdvers-edit/{id}' , [WhyChooseFexdverController::class, 'whyEdit'])->name('why.whyEdit');
Route::post('whychoosefexdvers-edit/{id}' , [WhyChooseFexdverController::class, 'whyUpdate'])->name('whyUpdate.update');
Route::get('whychoosefexdvers-delete/{id}' , [WhyChooseFexdverController::class, 'whyDelete'])->name('why.whyDelete');


// PortfolioController Route
Route::resource('portfolio' , PortfolioController::class)->only(['index', 'store', 'edit', 'update', 'destroy']);
Route::get('portfolio-view-all' , [PortfolioController::class, 'portfolioViewAll'])->name('portfolio.portfolioViewAll');


// PortfolioController Route
Route::resource('ourPortfolio' , OurPortfolioController::class)->only(['index', 'store', 'edit', 'update', 'destroy']);
Route::get('ourPortfolio-view-all' , [OurPortfolioController::class, 'ourPortfolioViewAll'])->name('ourPortfolio.ourPortfolioViewAll');

// MultipleBusinessBrandController Route
Route::resource('multipleBusinessBrand' , MultipleBusinessBrandController::class)->only(['index', 'store', 'edit', 'update', 'destroy']);

// TeamMemberController Route
Route::resource('teamMember' , TeamMemberController::class)->only(['index', 'store', 'edit', 'update', 'destroy']);
Route::get('teamMember-view-all' , [teamMemberController::class, 'teamMemberViewAll'])->name('teamMember.teamMemberViewAll');

// TestimonialController Route
Route::resource('testimonial' , TestimonialController::class)->only(['index', 'store', 'edit', 'update', 'destroy']);
Route::get('/testimonial-view-all' , [TestimonialController::class, 'testimonialViewAll'])->name('testimonial.testimonialViewAll');

// // ContactController Route
Route::resource('contact' , ContactController::class)->only(['index', 'store', 'edit', 'update', 'destroy']);

// // ContactController Route
Route::resource('contactInfo' , ContactInfoController::class)->only(['index', 'store', 'edit', 'update', 'destroy']);

// SubscribeMailController Route
Route::resource('subscribeMail', SubscribeMailController::class)->only(['index', 'store','destroy']);
Route::get('subscribeMail/mail/{mail_id}', [SubscribeMailController::class, 'subscribemailmail'])->name('subscribeMail.mail');
Route::post('mail/sent', [SubscribeMailController::class, 'mailsent'])->name('mail.sent');








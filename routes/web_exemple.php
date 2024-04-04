<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cguController;
use App\Http\Controllers\faqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\policyController;
use App\Http\Controllers\FormulasController;
use App\Http\Controllers\mentionsController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\SimulatorController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ModuleController;
use App\Http\Controllers\FormuleFrontController;
use App\Http\Controllers\OfferContactController;
use App\Http\Controllers\Admin\FormuleController;
use App\Http\Controllers\PageController as FrontPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/back789658', [App\Http\Controllers\AuthController::class, 'login'])
  ->middleware('guest')
  ->name('login');
Route::post('/back789658', [App\Http\Controllers\AuthController::class, 'doLogin']);
Route::delete('/back789658', [App\Http\Controllers\AuthController::class, 'logout'])
  ->middleware('auth')
  ->name('logout');

$idRegex = '[0-9]+';
$slugRegex = '[0-9a-z\-]+';


Route::post('/resultat', [App\Http\Controllers\SimulatorController::class, 'calculate'])->name('simulator_calculate');
Route::post('/simulateur', [App\Http\Controllers\SimulatorController::class, 'mail'])->name('simulator_mail');

//Join us
Route::get('/rejoindre', [App\Http\Controllers\JoinController::class, 'index'])->name('join_index');
Route::get('/rejoindre/{slug}', [App\Http\Controllers\JoinController::class, 'show'])->name('join_show')->where([
    'offer' => $idRegex,
    'slug' => $slugRegex
]);
Route::match(['get', 'post'], '/rejoindre/{offerId}', [App\Http\Controllers\OfferContactController::class, 'store'])->name('offer_store')->where('offerId', $idRegex);

//Formule
Route::get('/formule', [FormuleFrontController::class, 'index'])->name('formulas_index');
//Actus
Route::get('/articles/{slug}', [App\Http\Controllers\NewsController::class, 'show'])->name('news_show')->where([
    'article' => $idRegex,
    'slug' => $slugRegex
]);

//Change lang
Route::prefix('lang')->group(function ($router) {
  Route::get('/change', [App\Http\Controllers\LanguageController::class, 'changeLang'])->name('changeLang');
});

//Contact
//Route::get('/contact', [App\Http\Controllers\ContactController::class, 'show'])->name('contact_show');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact_store');

//Admin



//Admin
Route::prefix('back789658')->name('back789658.')->middleware('auth')->group(function () use ($idRegex) {
 

  //Home
  Route::get('home', function() {
    return view('back789658.layouts.home');
  })->name('layouts.home');
  
  // // Article picture upload
  // Route::post('article/uploadFromLocal', [App\Http\Controllers\Admin\ArticleController::class, 'uploadFromLocal'])->name('article.uploadFromLocal');
  // Route::post('article/uploadFromUrl', [App\Http\Controllers\Admin\ArticleController::class, 'uploadFromUrl'])->name('article.uploadFromUrl');
  
  // // Offer picture upload
  // Route::post('offer/uploadFromLocal', [App\Http\Controllers\Admin\OfferController::class, 'uploadFromLocal'])->name('offer.uploadFromLocal');
  // Route::post('offer/uploadFromUrl', [App\Http\Controllers\Admin\OfferController::class, 'uploadFromUrl'])->name('offer.uploadFromUrl');

  //Page 
  Route::any('page', [App\Http\Controllers\Admin\PageController::class,'index'])->name('page.index');
  Route::any('page/form', [App\Http\Controllers\Admin\PageController::class, 'form'])->name('page.form');
  Route::delete('page/{page}', [App\Http\Controllers\Admin\PageController::class,'destroy'])->name('page.destroy');
  Route::post('page/traduire/{id}', [App\Http\Controllers\Admin\PageController::class, 'traduction'])->name('page.traduction');
  Route::get('page/traduire/{id}/lang', [App\Http\Controllers\Admin\PageController::class, 'tradForm'])->name('page.traduire');
  //Formule 
  Route::any('formule', [App\Http\Controllers\Admin\FormuleController::class,'index'])->name('formule.index');
  Route::any('formule/form', [App\Http\Controllers\Admin\FormuleController::class, 'form'])->name('formule.form');
  Route::delete('formule/{formule}', [App\Http\Controllers\Admin\FormuleController::class,'destroy'])->name('formule.destroy');
  Route::post('formule/traduire/{id}', [App\Http\Controllers\Admin\FormuleController::class, 'traduction'])->name('formule.traduction');
  Route::get('formule/traduire/{id}/lang', [App\Http\Controllers\Admin\FormuleController::class, 'tradForm'])->name('formule.traduire');

  //Module 
  Route::any('module', [App\Http\Controllers\Admin\ModuleController::class,'index'])->name('module.index');
  Route::any('module/form', [App\Http\Controllers\Admin\ModuleController::class, 'form'])->name('module.form');
  Route::delete('module/{module}', [App\Http\Controllers\Admin\ModuleController::class,'destroy'])->name('module.destroy');
  Route::post('module/traduire/{id}', [App\Http\Controllers\Admin\ModuleController::class, 'traduction'])->name('module.traduction');
  Route::get('module/traduire/{id}/lang', [App\Http\Controllers\Admin\ModuleController::class, 'tradForm'])->name('module.traduire');

  //Articles
  Route::any('article', [App\Http\Controllers\Admin\ArticleController::class,'index'])->name('article.index');
  Route::any('article/form', [App\Http\Controllers\Admin\ArticleController::class, 'form'])->name('article.form');
  Route::delete('article/{article}', [App\Http\Controllers\Admin\ArticleController::class,'destroy'])->name('article.destroy');
  Route::post('article/traduire/{id}', [App\Http\Controllers\Admin\ArticleController::class, 'traduction'])->name('article.traduction');
  Route::get('article/traduire/{id}/lang', [App\Http\Controllers\Admin\ArticleController::class, 'tradForm'])->name('article.traduire');

  Route::any('offer', [App\Http\Controllers\Admin\OfferController::class,'index'])->name('offer.index');
  Route::any('offer/form', [App\Http\Controllers\Admin\OfferController::class, 'form'])->name('offer.form');
  Route::delete('offer/{offre}', [App\Http\Controllers\Admin\OfferController::class,'destroy'])->name('offer.destroy');
  Route::post('offer/traduire/{id}', [App\Http\Controllers\Admin\OfferController::class, 'traduction'])->name('offer.traduction');
  Route::get('offer/traduire/{id}/lang', [App\Http\Controllers\Admin\OfferController::class, 'tradForm'])->name('offer.traduire');

  //Template
  Route::any('template', [App\Http\Controllers\Admin\TemplateController::class,'index'])->name('template.index');
  Route::any('template/form', [App\Http\Controllers\Admin\TemplateController::class,'form'])->name('template.form');
  Route::delete('template/{template}', [App\Http\Controllers\Admin\TemplateController::class,'destroy'])->name('template.destroy');

  //Content
  Route::any('content', [App\Http\Controllers\Admin\ContentController::class,'index'])->name('content.index');
  Route::any('content/form', [App\Http\Controllers\Admin\ContentController::class, 'form'])->name('content.form');
  Route::delete('content/{content}', [App\Http\Controllers\Admin\ContentController::class,'destroy'])->name('content.destroy');
  Route::post('content/traduire/{id}', [App\Http\Controllers\Admin\ContentController::class, 'traduction'])->name('content.traduction');
  Route::get('content/traduire/{id}/lang', [App\Http\Controllers\Admin\ContentController::class, 'tradForm'])->name('content.traduire');

  //Lang
  Route::any('lang', [App\Http\Controllers\Admin\LangController::class,'index'])->name('lang.index');
  Route::any('lang/form', [App\Http\Controllers\Admin\LangController::class,'form'])->name('lang.form');
  Route::delete('lang/{lang}', [App\Http\Controllers\Admin\LangController::class,'destroy'])->name('lang.destroy');

  //Categorie
  Route::any('category', [App\Http\Controllers\Admin\CategoryController::class,'index'])->name('category.index');
  Route::any('category/form', [App\Http\Controllers\Admin\CategoryController::class,'form'])->name('category.form');
  Route::delete('category/{category}', [App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('category.destroy');
  Route::post('category/traduire/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'traduction'])->name('category.traduction');
  Route::get('category/traduire/{id}/lang', [App\Http\Controllers\Admin\CategoryController::class, 'tradForm'])->name('category.traduire');

  //Skill
  Route::any('skill', [App\Http\Controllers\Admin\SkillController::class,'index'])->name('skill.index');
  Route::any('skill/form', [App\Http\Controllers\Admin\SkillController::class,'form'])->name('skill.form');
  Route::delete('skill/{skill}', [App\Http\Controllers\Admin\SkillController::class,'destroy'])->name('skill.destroy');
  Route::post('skill/traduire/{id}', [App\Http\Controllers\Admin\SkillController::class, 'traduction'])->name('skill.traduction');
  Route::get('skill/traduire/{id}/lang', [App\Http\Controllers\Admin\SkillController::class, 'tradForm'])->name('skill.traduire');

  //Profils
  Route::any('profile', [App\Http\Controllers\Admin\ProfileController::class,'index'])->name('profile.index');
  Route::any('profile/form', [App\Http\Controllers\Admin\ProfileController::class,'form'])->name('profile.form');
  Route::delete('profile/{profile}', [App\Http\Controllers\Admin\ProfileController::class,'destroy'])->name('profile.destroy');
  Route::post('profile/traduire/{id}', [App\Http\Controllers\Admin\ProfileController::class, 'traduction'])->name('profile.traduction');
  Route::get('profile/traduire/{id}/lang', [App\Http\Controllers\Admin\ProfileController::class, 'tradForm'])->name('profile.traduire');

  //Collaborateurs
  Route::any('collaborator', [App\Http\Controllers\Admin\CollaboratorController::class,'index'])->name('collaborator.index');
  Route::any('collaborator/form', [App\Http\Controllers\Admin\CollaboratorController::class, 'form'])->name('collaborator.form');
  Route::delete('collaborator/{collaborator}', [App\Http\Controllers\Admin\CollaboratorController::class,'destroy'])->name('collaborator.destroy');
  Route::post('collaborator/traduire/{id}', [App\Http\Controllers\Admin\CollaboratorController::class, 'traduction'])->name('collaborator.traduction');
  Route::get('collaborator/traduire/{id}/lang', [App\Http\Controllers\Admin\CollaboratorController::class, 'tradForm'])->name('collaborator.traduire');

  //Menu
  Route::any('menu', [App\Http\Controllers\Admin\MenuController::class,'index'])->name('menu.index');
  Route::any('menu/form', [App\Http\Controllers\Admin\MenuController::class, 'form'])->name('menu.form');
  Route::delete('menu/{menu}', [App\Http\Controllers\Admin\MenuController::class,'destroy'])->name('menu.destroy');
  Route::post('menu/traduire/{id}', [App\Http\Controllers\Admin\MenuController::class, 'traduction'])->name('menu.traduction');
  Route::get('menu/traduire/{id}/lang', [App\Http\Controllers\Admin\MenuController::class, 'tradForm'])->name('menu.traduire');

  //Partenaires
  Route::any('partner', [App\Http\Controllers\Admin\PartnerController::class,'index'])->name('partner.index');
  Route::any('partner/form', [App\Http\Controllers\Admin\PartnerController::class, 'form'])->name('partner.form');
  Route::delete('partner/{partner}', [App\Http\Controllers\Admin\PartnerController::class,'destroy'])->name('partner.destroy');
  Route::post('partner/traduire/{id}', [App\Http\Controllers\Admin\PartnerController::class, 'traduction'])->name('partner.traduction');
  Route::get('partner/traduire/{id}/lang', [App\Http\Controllers\Admin\PartnerController::class, 'tradForm'])->name('partner.traduire');

  //Contacts
  Route::any('contact', [App\Http\Controllers\Admin\ContactController::class,'index'])->name('contact.index');
  Route::any('contact/view', [App\Http\Controllers\Admin\ContactController::class, 'view'])->name('contact.view');

  //Applications
  Route::any('application', [App\Http\Controllers\Admin\ApplicationController::class,'index'])->name('application.index');
  Route::any('application/view', [App\Http\Controllers\Admin\ApplicationController::class, 'view'])->name('application.view');
});

//Page
Route::get('/actualite', [App\Http\Controllers\NewsController::class, 'index'])->name('news_index');

Route::get('/', [FrontPageController::class, 'show'])->name('page.show');
Route::get('/{slug}', [FrontPageController::class, 'show'])->name('page.show');